<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Validation;

class ValidationCon extends BaseController
{
    public function index()
    {
        return view('validation/ValidationV');
    }
    protected $data;
    public function __construct(){
        helper(['form']);
        $this->data=new Validation();
    }
    public function MyValidations(){

        $ruls=[
            'name'=>'required',
            'email'=>'required'

        ];
        if(! $this->validate($ruls)){
            return view('validation/ValidationV');
        }
        $array=[

            'name'=>$this->request->getPost('name'),
            'email'=>$this->request->getPost('email'),
        ];
        $result=$this->data->edd($array);
        if($result){
            // echo json_encode(['status'=>true,'msg'=>'successfully add']);
            return redirect()->route('Vtable');
        }
        else{
            echo json_encode(['status'=>false,'msg'=>'not add']);

        }
        echo json_encode(['status'=>true]);
    }

    public function insertdata(){

        $edd=$this->data->insertdd();
        return view('validationtable',['data'=>$edd]);
    }
}
