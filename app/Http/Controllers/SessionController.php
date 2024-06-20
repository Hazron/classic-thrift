<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function indexlogin(){
        return view('session.login');
    }

    public function indexregis(){
        return view('session.regis');
    }
}
