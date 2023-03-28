<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reservation;
use App\Models\event;

class admineventController extends Controller
{
    public function index(){

        $Events = event::select('*')->paginate(10);

        return view('admin.adminevent',compact('Events'))->with('i', (request()->input('page', 1) - 1) * 10);
        
    }
}
