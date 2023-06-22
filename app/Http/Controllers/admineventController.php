<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reservation;
use App\Models\event;

use Illuminate\Support\Facades\Session;

class admineventController extends Controller
{
    public function index(){

        $Events = event::select('*')->paginate(10);
        if (Session::get('id')!= null) {
            return view('admin.adminevent',compact('Events'))->with('i', (request()->input('page', 1) - 1) * 10);
        }else{
            return redirect('/');
    }
        
    }
}
