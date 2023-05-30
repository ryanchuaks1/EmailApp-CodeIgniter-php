<?php

namespace App\Controllers;

class NumberController extends BaseController {
    public function index() {
        $ran['number'] = rand(222,456);
        return view('lucky_number', $ran);
    }
    
}