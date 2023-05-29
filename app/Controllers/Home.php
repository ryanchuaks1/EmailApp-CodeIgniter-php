<?php

namespace App\Controllers;
use App\Models\EmailModel;

class Home extends BaseController
{
    public function index()
    {
        return view('email_form');
    }
    public function inbox()
    {
        $model = model(EmailModel::class);
        $data['email'] = $model->findAll();
        $data['editId'] = 0;
        return view('email_inbox', $data);
    }
    
    
}