<?php

namespace App\Controllers;

class Siswa extends BaseController
{
    
    public function index(){
        $data['title']=" Guru";
        return view ('siswa/index',$data);

    }
    public function toSiswa()
    {
        return redirect()->to('/siswa');
    }
}
