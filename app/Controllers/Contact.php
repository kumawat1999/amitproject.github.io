<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ContactModel;

class Contact extends BaseController
{
    public function index()
    {    
         return view('contact');    
    }
    
    public function create()
    {  
        
    helper(['form', 'url']);
         
        $val = $this->validate([
            'name' => 'required',
            'email' => 'required',
            'message'  => 'required',
        ]);
 
        $model = new ContactModel();
 
        if (!$val)
        {
 
            echo view('contact', [
                   'validation' => $this->validator
            ]);
            
        }
        else
        { 
       
            $model->save([
                'name' => $this->request->getVar('name'),
                'email'  => $this->request->getVar('email'),
                'message'  => $this->request->getVar('message'),
            ]);
 
            echo view('success');
        }
    }
}
