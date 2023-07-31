<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CurdThreeAjax;

class CurdThreeAjaxCont extends BaseController
{

    public function index()
    {
        return view('validation/CurdThreeAjaxxx');
    }
    // protected $helper= ['form'];
     // helper yah bhi kam kam krata hai 
    protected $TestModel='';
    public function __construct()
    {
        helper(['form']);

        $this->TestModel = new CurdThreeAjax();
    }

    public function myFormaction()
    {
        $ruls = [
            'name' => 'required',
            'email' => 'required',
            'file' => 'required',
        ];
        if (!$this->validate($ruls)) {
            echo json_encode(['errors' => validation_errors()]);
            exit();
        }

        $array = [
            'name' => $this->request->getPost('name'), 
            'email' => $this->request->getPost('email'),
            'file' => $this->request->getPost('file')
        ];

        $result = $this->TestModel->add_query($array);
        if ($result == true) {
            $array_rsuly=['status'=>true, 'msg'=>'Your data successfully added...!'];
        } 
        else {
            $array_rsuly=['status'=>false, 'msg'=>'Your data successfully added...!'];
        }
        echo json_encode($array_rsuly);

    }

    public function printdata(){
        $restul=$this->TestModel->mydata();
        return view('validation/CurdThreTable',['data'=>$restul]);
    
    }

    public function DeleteData(){
        if($this->request->getPost('id')){
            $ids=$this->request->getPost('id');
            $result=$this->TestModel->DeleteD($ids);
            if($result){
                echo json_encode(['status'=>true, 'msg'=>'successfully deleted data']);
            }
            else{

                echo json_encode(['status'=>false,'msg'=>'not deleted data']);
            }
            

        }
        else{
            echo json_encode(['status'=>false, 'msg'=>'id not cennected']);
        }
    }
    public function EditFormThree(){
        if($this->request->getPost('id')){
            $ids=$this->request->getPost('id');
            $result=$this->TestModel->EditQuery($ids);
            if($result){
                echo json_encode(['status'=>true, 'msg'=>'successfully update data']);
            }
            else{

                echo json_encode(['status'=>false,'msg'=>'not update data']);
            }
            
        }
        else{
            echo json_encode(['status'=>false, 'msg'=>'id not cennected']);
        }
    }
    
}
