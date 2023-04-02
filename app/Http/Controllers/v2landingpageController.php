<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\event;
use App\Models\reservation;
use Carbon\Carbon;

class v2landingpageController extends Controller
{
    public function index(){  

        $currentDate = Carbon::now();
        $formattedDate = $currentDate->format('Y-m-d');

        $reservation = reservation::select("*")->where("Event_date",">=",$formattedDate)->get();
        // echo $reservation;
        $Events = event::all();
    //   echo $Events;
        return view('user.v2landingpage',compact('Events','reservation'));
    }

}
