<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\r_event;
use App\Models\reservation;
use DB;

use Illuminate\Support\Facades\Session; 

class admininventoryController extends Controller
{
    
    public function index(){
        $Events = DB::table('r_events')
                ->join('reservations', 'r_events.reservation_id', '=', 'reservations.id')
                ->select('reservations.*', 'r_events.*')
                ->where('reservations.event_status','!=','Finish')
                ->where('reservations.event_status','!=','Canceled')
                ->where('r_events.Type',"Event")
                ->paginate(10);

        // $Events = r_event::join("reservations","r_events.reservation_id","=","reservations.id")
        //                     ->get(["r_events.*","reservations.*"])->paginate(5);
        if (Session::get('id')!= null) {
             return view('admin.Reservation',compact('Events'))->with('i', (request()->input('page', 1) - 1) * 10);
        }else{
             return redirect('/');
       }

    }

    public function sortreservation(request $request)
    {
      
      
                $Events = DB::table('r_events')
                ->join('reservations', 'r_events.reservation_id', '=', 'reservations.id')
                ->select('reservations.*', 'r_events.*')
                ->where('reservations.event_status','!=','Finish')
                ->where('reservations.event_status','!=','Canceled')
                ->where('r_events.Type',"Event")
                ->orderBy($request->sort,'asc')
                ->paginate(10);

        // $Events = r_event::join("reservations","r_events.reservation_id","=","reservations.id")
        //                     ->get(["r_events.*","reservations.*"])->paginate(5);
        if (Session::get('id')!= null) {
            return view('admin.Reservation',compact('Events'))->with('i', (request()->input('page', 1) - 1) * 10);
        }else{
            return redirect('/');
        }
    }
}
