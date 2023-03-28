<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usereventController extends Controller
{
    public function index(){
        return view('user.userevent');
    }
}
