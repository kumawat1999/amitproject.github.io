<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Crud extends BaseController
{
    public function index()
    {
    return view('test/my_form');
    }


    public function __construct(){
        helper(['form']);
    }
    public function formsubmit(){

        $ruls=[
            'name'=> 'required|alpha_numeric',
            'email'=> 'required|valid_email',
                
        ];

        if(! $this->validate($ruls)){
            return view('test/my_form');
           
        }
        echo "<pre>";
        print_r($_POST);
    }
   



}
