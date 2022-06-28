<?php

namespace App\Controllers;
use App\Models\SiswaModel;
class Siswa extends BaseController
{
    protected $db, $builder, $SiswaModel,$query;
    // protected $username='user()->username';
    public function __construct()
    {
        $this->db           = \Config\Database::connect();
        $this->builder      = $this->db->table('siswasmk');
        $this->SiswaModel = new SiswaModel();
      
    }
    
    public function index(){
        
        $data['title']=" Siswa";
        // $data ['user']=$username;
        $this->builder->select('*');
        $this->builder->where('nisn', user()->username);
        $this->query = $this->builder->get();

        $data['siswa'] = $this->query->getRowArray();
        return view ('siswa/index',$data);

    }
    public function toSiswa()
    {
        return redirect()->to('/siswa');
    }
    public function jadwal(){
        $this->builder->select('*');
        $this->builder->where('nisn', user()->username);
        $this->query = $this->builder->get();

        $data['title']="jadwal Ulangan";
        $data['siswa'] = $this->query->getRowArray();
        return view ('siswa/jadwal',$data);
    }

   
}
