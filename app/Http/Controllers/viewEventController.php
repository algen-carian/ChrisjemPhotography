<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session; 

class viewEventController extends Controller
{
    public function index(){
        if (Session::get('id')!= null) {
            return view('admin.viewEvent');
        }else{
            return redirect('/');
           }
    }
}
