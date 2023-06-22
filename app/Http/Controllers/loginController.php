<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function store(Request $request){
        $this->validate($request, [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);    
        if (Auth::attempt($request->only('email','password'))){
            if(auth()->user()->is_Admin!=1){
                return "1";
                // return redirect()->intended('admindashboard')->with('message', 'Successfully Logged In');     
            }else{
                return "2";
                // return back()->with('status', 'Invalid login details');
            }
        }
        return back()->with('status', 'Invalid login details');

    }
    public function destroy(){
        Auth::logout();
        return redirect('/sidemenu');
}

}