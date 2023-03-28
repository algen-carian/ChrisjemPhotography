<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminforgotpasswordController extends Controller
{
    public function index(){
        return view('admin.adminforgotpassword');
    }
    public function store(Request $request){
            $this->validate($request, [
                'firstname' => ['required', 'max:255'],
                'middlename' => ['required', 'max:255'],
                'lastname' => ['required', 'max:255'],
                'contact' => ['required', 'max:255'],
                'email' => ['required', 'max:255'],
                'address' => ['required', 'max:255'],
                'password' => ['required'],
                
            ]);
            admin::create([
                "firstname"=> $request->firstname,
                "middlename"=> $request->middlename,
                "lastname"=> $request->lastname,
                "contact"=> $request->contact,
                "email"=> $request->email,
                "address"=> $request->email,
                'password' => Hash::make($request->password),
            ]);
            return redirect('/');
            Auth::attempt($request->only('email', 'password'));
    }
}
