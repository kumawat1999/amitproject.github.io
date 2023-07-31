<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Curdthree;

class CurdthreeCont extends BaseController
{
    public function index()
    {
        return view('validation/CurdThree');
    }
    protected $data='';
    public function __construct(){
        helper(['form']);
        $this->data=new Curdthree();
    }
    public function curdthreeaction(){
        $ruls=[
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'confpass'=>'required',
            'city'=>'required',
            'mobile'=>'required',
            'address'=>'required',
        ];
        if(! $this->validate($ruls)){
            return view('validation/CurdThree');
        }

        $array=[
            'name'=>$this->request->getPost('name'),
            'email'=>$this->request->getPost('email'),
            'password'=>$this->request->getPost('password'),
            'confpass'=>$this->request->getPost('confpass'),
            'city'=>$this->request->getPost('city'),
            'mobile'=>$this->request->getPost('mobile'),
            'address'=>$this->request->getPost('address')

        ];

        $result = $this->data->add($array);
        if($result==true){
            echo json_encode(['status'=>true, 'msg'=>'data add successfully']);
        }else{
            echo json_encode(['status'=>false, 'msg'=>'data not add ']);

        }
    }

    public function CurdThreeshowdata(){
        $result= $this->data->showdata();
        return view('validation/CurdThreeTable1',['data'=>$result]);
    }
}
