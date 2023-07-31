<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TestModel;

class MyTest extends BaseController
{
    protected $helpers = ['form'];


	public $test_model='';
    public function __construct(){

        // $this->test_model=new TestModel();
    }
    public function index()
    {

        $modals=new TestModel();
        
        $data=$modals->findAll();

        print_r($data);
        
        // return view('test/mytest');
       
    }


    public function form1()
    {

          print_r($_POST);
        if (! $this->request->is('post')) {

            return view('test/mytest');
        }

        // $rules = [
        //     'username' => 'required',
        //     'password' => 'required|min_length[10]',
        //     'passconf' => 'required|matches[password]',
        //     'email'    => 'required|valid_email',
        // ];

        // if (! $this->validate($rules)) {

        //     echo json_encode(['errors'=>validation_errors()]);
        //     die;
            
        //     return view('test/mytest');
        // }

        //  $data = $this->request->getPost(array_keys($rules));
        //  print_r($data);
    }


}
