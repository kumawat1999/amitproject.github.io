<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NewModal;
class MyModal extends BaseController
{
protected $test;
  
    public function __construct(){

        $this->test=new NewModal();
    }
   
    public function index()
    {
          $responce=  $this->test->Modal();
            return view('Program1',['name'=> $responce]);
            
    }
}
