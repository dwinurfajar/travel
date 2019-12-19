<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageLogin extends Controller
{
    public function login(){
        return view('login');
    }
}
