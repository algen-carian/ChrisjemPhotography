<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\r_event;
use App\Models\event;
use App\Models\reservation;
use DB;
use Illuminate\Support\Facades\Session;

class admindashboardController extends Controller
{
    public function index(){

       if (Session::get('id') != null) {


        $Revenue = DB::table('r_events')
        ->join('events', 'r_events.event_id', '=', 'events.id')
        ->select('events.*', 'r_events.*')
        ->sum('events.event_price');

        $Events = event::select('*')->where('event_content','Event')->count();
        $Reservation = reservation::select('*')
        ->where('event_status','!=','Finish')
        ->where('event_status','!=','Canceled')
        ->count();
        $Services = event::select('*')->where('event_content','Services')->count();
        $data = [ $Revenue, $Events, $Reservation, $Services];
      
        // return view('admin.admindashboard',compact('data'));
        return "yes";
       }else{
        return "No";
        // return redirect('/');
       }

    }
}
