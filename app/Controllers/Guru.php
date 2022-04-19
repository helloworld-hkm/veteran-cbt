<?php

namespace App\Controllers;

class Guru extends BaseController
{
    
    public function index(){
        $data['title']=" Guru";
        return view ('guru/home',$data);

    }
}
