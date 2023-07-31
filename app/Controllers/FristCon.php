<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FristModel;

class FristCon extends BaseController
{
protected $test;
    public function __construct(){
        $this->test=new FristModel();
    }

    public function index()
    {
        $new=  $this->test->FristFun();
        return view('FristFile',['name'=>$new]);
        
    }
}
