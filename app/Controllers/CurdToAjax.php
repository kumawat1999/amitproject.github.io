<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CurdToAjaxModal;

class CurdToAjax extends BaseController
{
    public function index()
    {
        return view('validation/CurdToAjax');
    }
    protected $data='';
    public function __construct(){
        helper(['form']);

        $this->data=new CurdToAjaxModal();

    }

    public function CurdToAction(){

        $ruls=[
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'confPass'=>'required',
            'city'=>'required',
            'vilege'=>'required',
            'address'=>'required',
            'gender'=>'required',
        ];

        if(! $this->validate($ruls)){
            echo json_encode(['errors'=>validation_errors()]);
            exit;
        }

        $array=[
            'name'=> $this->request->getPost('name'),
            'email'=> $this->request->getPost('email'),
            'password'=> $this->request->getPost('password'),
            'confPass'=> $this->request->getPost('confPass'),
            'city'=> $this->request->getPost('city'),
            'vilege'=> $this->request->getPost('vilege'),
            'address'=> $this->request->getPost('address'),
            'gender'=> $this->request->getPost('gender'),
        ];
        
        $result= $this->data->add($array);
        if($result == true){
            echo json_encode(['status'=>true, 'msg'=>'data successfully added....!']);
        }
        else{
            echo json_encode(['status'=>false, 'msg'=>'data not added....!']);
            
        }

    }

    public function Mydata(){
        // return view('validation/CurdToAjaxtable');
        $result=$this->data->getUserData();
        return view('validation/CurdToAjaxtable',['data'=>$result]);
    }

    public function DeleteQuery(){
        if($this->request->getPost('id')){
            $ids=$this->request->getPost('id');
            $result=$this->data->deleteData($ids);
            if($result){
                echo json_encode(['status'=>true, 'msg'=>'successfully deleted data']);

            }
            else{
                echo json_encode(['status'=>false, 'msg'=>'server error not deleted data']);
            }
        }
        else{
            echo json_encode(['status'=>false, 'msg'=>'id is missing']);
        }
    }

    public function UpdateFunction(){
        
        // return redirect()->to(base_url().'viewFile');
        return view('validation/UpdateToAjax');
        
    }



}
