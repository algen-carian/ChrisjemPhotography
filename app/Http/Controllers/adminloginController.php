<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class adminloginController extends Controller
{
    public function index(){
        return view('adminlogin');
    }

    public function store(Request $request){
        $this->validate($request, [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);    
        
        Auth::attempt($request->only('email','password'));
        
        if(auth()->user()->is_Admin==1){
            return redirect()->intended('sidemenu')->with('message', 'Successfuly Logged In');
        }else{
            return back()->with('status', 'Invalid login details');
        }
        
        return back()->with('status', 'Invalid login details');

    }
    public function destroy(){
        Auth::logout();
        return redirect('/admin.dashboard');
    }

}

