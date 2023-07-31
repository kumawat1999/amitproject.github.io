<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TestModal;

class TestNew extends BaseController
{
protected $TestNew;
public function __construct(){

    $this->TestNew=new TestModal();
}


    public function index()
    {
        $this->TestNew->ModalFunction();
    }
}
