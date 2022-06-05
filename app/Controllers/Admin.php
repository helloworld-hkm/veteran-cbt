<?php

namespace App\Controllers;

class Admin extends BaseController
{
    
    public function index(){
        $data['title']=" admin";
        return view ('admin/index',$data);

    }

    public function guru()
    {
        $data['title']=" admin guru";
        return view ('admin/guru',$data);
    }

    public function siswa()
    {
        $data['title']=" admin siswa";
        return view ('admin/siswa',$data);
    }

    public function mapel()
    {
        $data['title']=" admin mapel";
        return view ('admin/mapel',$data);
    }

    public function kelas()
    {
        $data['title']=" admin kelas";
        return view ('admin/kelas',$data);
    }

    public function jurusan()
    {
        $data['title']=" admin jurusan";
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
