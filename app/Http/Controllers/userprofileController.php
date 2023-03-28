<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userprofileController extends Controller
{
    public function index(){
        return view('user.userprofile');
    }
}
