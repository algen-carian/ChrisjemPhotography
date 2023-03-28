<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class userdashboardController extends Controller
{
    public function index(){
        return view('user.userdashboard');
    }
}
