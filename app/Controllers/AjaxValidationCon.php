<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AjaxValidation;

class AjaxValidationCon extends BaseController
{
    public function index()
    {
        return view('validation/AjaxValidationView');
    }

    protected $data='';
    public function __construct()
    {
        helper(['form']);
        $this->data=new AjaxValidation();
    }

    public function validatioerrr()
    {

        $ruls = [

            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'address' => 'required',
            'mobile' => 'required',
        ];

        if (! $this->validate($ruls)) {
            echo json_encode(['errors' => validation_errors()]);
            exit;
        }

        $array=[
            'name'=>$this->request->getPost('name'),
            'email'=>$this->request->getPost('email'),
            'password'=>$this->request->getPost('password'),
            'address'=>$this->request->getPost('address'),
            'mobile'=>$this->request->getPost('mobile'),

        ];

        $result=$this->data->add($array);

        if($result==true){
            echo json_encode(['status'=>true, 'msg'=>'data add successfully ']);
        }
        else{
            echo json_encode(['status'=>false, 'msg'=>'data not add']);
        }
        
    }
}
