<?php

namespace App\Controllers;

class Admin extends BaseController
{
    
    public function index(){
        $data['title']=" admin";
        return view ('admin/index',$data);

    }
}
