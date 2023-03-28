<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\event;
use App\Models\reservation;
use Carbon\Carbon;


class landingpageController extends Controller
{
    public function index(){  

        $currentDate = Carbon::now();
        $formattedDate = $currentDate->format('Y-m-d');

        $reservation = reservation::select("*")->where("Event_date",">=",$formattedDate)->get();
        $Events = event::all();
       
        return view('user.landingpage',compact('Events','reservation'));
    }

}
