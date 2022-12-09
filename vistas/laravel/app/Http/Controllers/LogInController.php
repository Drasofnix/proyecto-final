<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LogInController extends Controller
{
    public function login(){
        return view('login');
    }
}
