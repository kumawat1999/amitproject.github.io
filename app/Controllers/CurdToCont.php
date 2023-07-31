<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CurdToModel;

class CurdToCont extends BaseController
{
    public function index()
    {
        return view('validation/CurdTo');
    }
    protected $data='';
    public function __construct(){

        helper(['form']);
        $this->data=new CurdToModel;
    }

    public function CurdformAction(){

        $ruls =[
            'name'=> 'required',
            'email'=> 'required|valid_email',
            'password'=> 'required',
            'confpass'=> 'required|matches[password]',
            'gender'=> 'required',
            'city'=> 'required',
            'address'=> 'required',
            'number'=> 'required'
        ];

        if(! $this->validate($ruls)){
            return view('validation/CurdTo');
        }
        // print_r($_POST);

        $array=
        ['name'=>$this->request->getPost('name'),
        'email'=>$this->request->getPost('email'),
        'password'=>$this->request->getPost('password'),
        'confpass'=>$this->request->getPost('confpass'),
        'gender'=>$this->request->getPost('gender'),
        'city'=>$this->request->getPost('city'),
        'address'=>$this->request->getPost('address'),
        'number'=>$this->request->getPost('number')
    ];

    $result = $this->data->add($array);
        if($result == true){

            echo json_encode(['status'=>true, 'msg'=>'Your data successfully added..!']);

        }
        else{
            echo json_encode(['status'=>false, 'msg'=>'Your data not added..!']);

        }
        echo json_encode(['status'=>true]);
        
    }
}
