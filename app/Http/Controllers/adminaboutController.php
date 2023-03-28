<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminaboutController extends Controller
{
    public function index(){
        return view('admin.adminabout');
    }
}
