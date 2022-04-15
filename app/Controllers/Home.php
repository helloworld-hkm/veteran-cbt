<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = "Login Siswa";
        return view('auth/login_siswa',$data);
    }
    public function login_guru(){
        $data['title']="Login Guru";
        return view ('auth/login_guru',$data);

    }
    public function guru(){
        $data['title']=" Guru";
        return view ('guru/index',$data);

    }
}
