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

class sidemenuController extends Controller
{
    public function store(){

        if (Session::get('id')!= null) {

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
                $Services; 
            
            
      
            return view('admin.sidemenu',compact('data'));
        }else{
            return redirect('/');
        }
    }

  public function login(Request $request){
 
    $this->validate($request, [
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);    
//     $user=User::select("*")->where("")
// echo $request;   


$user = User::where('email','=',$request->email)->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                // return dito ung redirect 
                Session::put('id',$user->id);
              
                return redirect("adminAuth")->with('message', 'Successfuly Logged In'); 
            }else{
                // return error dito    
                return back()->with('status', 'Invalid login password');
            }
        }
        else{
              // yung email yung mali
              return back()->with('status', 'Invalid Email');
        }


    // if (Auth::attempt($request->only('email','password'))){
    //     if(auth()->user()->is_Admin!=1){
    //         return redirect()->intended('admindashboard')->with('message', 'Successfuly Logged In');     
    //     }else{
    //         return back()->with('status', 'Invalid login details');
    //     }
    // }
    // return back()->with('status', 'Invalid login details');

  }

  public function adminlogout()
  {
   Session::forget('id');
    return redirect('/');
  }
}
