<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CurdOne extends BaseController
{
    public function index()
    {
        return view('validation/CurdOne');
    }



    public function __construct(){

        helper(['form']);
    }

    public function validations(){

        $validationRuls=[
            'name'=>'required',
            'password'=>'required',
            'passconf'=>'required|matches[password]',
            'email'=>'required|valid_email',
            'city'=>'required',
            'mobile'=>'required|min_length[10]|max_length[10]',
            'vilege'=>'required',
            'address'=>'required',
            'pin'=>'required|max_length[6]'
        ];
            if(! $this->validate($validationRuls)){
                return view('validation/CurdOne');
            }
            echo "<pre>";
            print_r($_POST);
    }
}
