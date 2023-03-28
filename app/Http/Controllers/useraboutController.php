<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class useraboutController extends Controller
{
    public function index(){
        return view('user.userabout');
    }
}
