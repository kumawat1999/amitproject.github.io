<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CurdAjaxCont extends BaseController
{
    public function index()
    {
        return view('validation/CurdAjax');

    }
    public function __construct(){

        helper(['form']);
    }

    public function validations(){
        
        $validationRuls=[
            'name'=>'required',
            'email'=>'required|valid_email',
            'password'=>'required',
            'passconf'=>'required',
            'mobile'=>'required',
            'city'=>'required',
            'address'=>'required'
        ];
            if(! $this->validate($validationRuls)){
                 echo json_encode(['errors'=>validation_errors()]);
                 exit;
            }
            echo json_encode(['status'=>true]);
            
    }
}
