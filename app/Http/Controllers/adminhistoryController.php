<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class adminhistoryController extends Controller
{
    public function index(){
        $Events = DB::table('r_events')
        ->join('reservations', 'r_events.reservation_id', '=', 'reservations.id')
        ->select('reservations.*', 'r_events.*')
        ->where('reservations.event_status',"!=","Pending")
        ->where('reservations.event_status',"!=","Approved")
        ->where('r_events.Type',"Event")
        ->paginate(10);


        return view('admin.adminhistory',compact('Events'))->with('i', (request()->input('page', 1) - 1) * 10);

    }
}
