<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MyModel;

class Modal extends BaseController
{

    protected $test;
    public function __construct(){

        $this->test=new MyModel();
    }
    
    public function index()
    {
       $this->test->Mymodalss();
    }
}
