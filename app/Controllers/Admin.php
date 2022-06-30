<?php

namespace App\Controllers;
use App\Models\SiswaModel;
class Admin extends BaseController
{
    protected $db,$builder;
    public function __construct(){

        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('users');
        $this->SiswaModel = new SiswaModel();
    }
    public function cek(){
        $data['title']=" cek";
        return view ('welcome_message',$data);

    }
    
    public function index(){
        $userlogin=user()->username;
        $data['title']=" admin";
        // $users = new \Myth\Auth\Models\UserModel();
        // $data['users']= $users->findAll();

        $this->builder->select('users.id as userid ,username,email,name');
        $this->builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
        $this->builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
        $this->builder->where('users.id',$userlogin);
        $query = $this->builder->get();
        $data['user']= $query->getRow();
        return view ('admin/index',$data);

    }

    public function guru()
    {
        $data['title']=" kelola guru";
        return view ('admin/guru',$data);
    }

    public function siswa()
    {
        $data['title']=" kelola siswa";
        $this->db           = \Config\Database::connect();
        $this->builder      = $this->db->table('siswasmk');
        $this->SiswaModel = new SiswaModel();
        $builder = $this->db->table('siswasmk');
        $builder->orderBy('id', 'ASC');

        $query = $builder->get()->getResultArray();
        $data['siswa'] = $query;
        return view ('admin/siswa/index',$data);
    }
    public function createSiswa()
    {
        // session();
        $data = [
            'title' => 'Daftar Formulir',
            'validation' => \Config\Services::validation()

        ];

        return view('admin/siswa/create', $data);
    }
    public function simpanSiswa()
    {
        if (!$this->validate([

            'nisn' => ['rules' => 'required|is_unique[siswasmk.nisn]', 'errors' => ['is_unique' => 'NISN Sudah Ada!!', 'required' => 'NISN wajib diisi!!']],
            'nama' => ['rules' => 'required', 'errors' => ['required' => 'Nama wajib diisi!!',]],
            'foto' => [
                'rules' => 'max_size[foto,1024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Ukuran Gambar Terlalu Besar',
                    'is_image' => 'yang anda pilih bukan gambar',
                    'mime_in' => 'yang anda pilih bukan gambar'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/siswa/create')->withInput('validation', $validation);
        }
        //ambil gambar
        $fileFoto = $this->request->getFile('foto');
        //apakah tidak ada gambar yang diupload
        if ($fileFoto->getError() == 4) {
            $namaFoto = 'default.jpg';
        } else {

            //pindah kan fle ke img
            $fileFoto->move('img');
            //ambil nama filefoto
            $namaFoto = $fileFoto->getName();
        }



        $this->SiswaModel->save([


            'nisn' => $this->request->getVar('nisn'),
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'kd_kelas' => $this->request->getVar('kd_kelas'),
            'tgl_lahir' => $this->request->getVar('tgl_lahir'),

            'foto' => $namaFoto
        ]);
        //flashdata pesan disimpan
        session()->setFlashdata('pesan', 'Data berhasil ditambah!!');

        return redirect()->to('/admin/siswa');
    }

    public function updateSiswa($id = 0)
    {
        if ($id == 0 || empty($id)) {
            return redirect()->to('admin/siswa/list');
        }
        $data['title'] = 'update Data Siswa';
        $data['validation'] = \Config\Services::connect();
        $data['id'] = $id;

        $builder = $this->db->table('siswasmk');
        $builder->select('*');
        $builder->where('id', $id);
        $query = $builder->get();

        $data['ss'] = $query->getRowArray();
        return view('admin/siswa/update', $data);
    }

    public function updatedataSiswa($id = 0)
    {
        if ($id == 0 || empty($id)) {
            return redirect()->to('/admin/updateSiswa');
        }

        $fileFoto = $this->request->getFile('foto');
        //apakah tidak ada gambar yang diupload
        if ($fileFoto->getError() == 4) {
            $namaFoto = 'default.jpg';
        } else {
            //pindah kan fle ke img
            $fileFoto->move('img');
            //ambil nama filefoto
            $namaFoto = $fileFoto->getName();
        }
        if ($fileFoto->getError() == 4) {
            $this->SiswaModel->update($id, [
                'nisn' => $this->request->getVar('nisn'),
                'nama' => $this->request->getVar('nama'),
                'alamat' => $this->request->getVar('alamat'),
                'kd_kelas' => $this->request->getVar('kd_kelas'),
                'tgl_lahir' => $this->request->getVar('tgl_lahir'),

            ]);
        } else {
            $this->SiswaModel->update($id, [
                'nisn' => $this->request->getVar('nisn'),
                'nama' => $this->request->getVar('nama'),
                'alamat' => $this->request->getVar('alamat'),
                'kd_kelas' => $this->request->getVar('kd_kelas'),
                'tgl_lahir' => $this->request->getVar('tgl_lahir'),
                'foto' => $namaFoto,
            ]);
        }
        session()->setFlashdata('pesan', 'Data berhasil diubah!!');
        return redirect()->to('/admin/siswa');
    }

    public function detailSiswa($id = 0)
    {
        $data['title'] = 'Detail Siswa';
        $builder = $this->db->table('siswasmk');
    
        $builder->select('*');
        $builder->where('id', $id);
        $query =$builder->get();
        $data['siswa'] = $query->getRow();
        if (empty($data['siswa'])) {
            return redirect()->to('/admin/siswa');
        }
        return view('admin/siswa/detail', $data);
    }

    public function deleteSiswa($id)
    {
        //cari gambar berdasarkan id
        $siswa = $this->SiswaModel->find($id);

        //jika file gambar default
        if ($siswa['foto'] != 'default.jpg') {
            //hapus gambar di img
            unlink('img/' . $siswa['foto']);
        }


        $this->SiswaModel->delete($id);
        session()->setFlashdata('pesan', 'Data Behasil Dihapus');
        return redirect()->to('/admin/siswa');
    }

    public function editSiswa($id)
    {
        $data = [
            'title' => 'Form Edit Data',
            'validation' => \Config\Services::validation(),
            'siswa' => $this->SiswaModel->getSiswa($id)
        ];

        return view('admin/siswa/edit', $data);
    }

    

    public function mapel()
    {
        $data['title']=" kelola mapel";
        return view ('admin/mapel',$data);
    }

    public function kelas()
    {
        $data['title']=" kelola kelas";
        return view ('admin/kelas',$data);
    }

    public function jurusan()
    {
        $data['title']=" kelola jurusan";
        return view ('admin/jurusan',$data);
    }

    public function guru_kelas()
    {
        $data['title']=" admin guru_kelas";
        return view ('admin/guru_kelas',$data);
    }

    public function mata_pelajaran()
    {
        $data['title']=" admin mata_pelajaran";
        return view ('admin/mata_pelajaran',$data);
    }
}
