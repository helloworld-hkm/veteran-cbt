<?php

namespace App\Controllers;

class Admin extends BaseController
{
    protected $db,$builder;
    public function __construct(){

        $this->db      = \Config\Database::connect();
        $this->builder = $this->db->table('users');
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
        return view ('admin/siswa',$data);
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
