<?php

namespace App\Controllers;

class Siswa extends BaseController
{
    
    public function index(){
        $data['title']=" Siswa";
        return view ('siswa/index',$data);

    }
    public function toSiswa()
    {
        return redirect()->to('/siswa');
    }

    public function jadwal(){

        $data['title']="jadwal Ulangan";
        return view ('siswa/jadwal',$data);
    }
}
