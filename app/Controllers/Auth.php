<?php

namespace App\Controllers;

class Auth extends BaseController
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
    public function login_admin(){
        $data['title']="Login Admin";
        return view ('auth/login_admin',$data);

    }
    
}
