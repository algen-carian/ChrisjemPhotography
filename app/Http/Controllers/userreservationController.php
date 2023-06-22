<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reservation;
use App\Models\r_event;
use App\Models\event;
use DB;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Illuminate\Support\Facades\Session;

class userreservationController extends Controller
{
    public function index(){
        return view('user.userreservation');
    }

    public function reserve(Request $request,reservation $reservation,r_event $event){
        

            $evs = explode('/', $request->Event);

            $reservation = new reservation();
            $reservation->fname = $request->fname;

            if($request->mname != null || $request->mname != ''){
                $reservation->mname = $request->mname;
            }
            if($request->alternate != null || $request->alternate != ''){
                $reservation->alternate = $request->alternate;
            }else{
                $reservation->alternate = 0;
            }   
            $reservation->lname = $request->lname;
            $reservation->email = $request->email;
            $reservation->Address = $request->Address;
            $reservation->contact = $request->contact;
            $reservation->alternate = $request->alternate;
            $reservation->event_status = "Pending";

            $reservation->Event_date = $evs[2]."-".$evs[0]."-".$evs[1];

            $res = $reservation->save();

            $lastId = $reservation->id;
            
            // event_title
            // event_desc
            // service_title
            // service_desc
            
            if($request['Services'] != null &&  count($request['Services']) != 0){
                foreach ($request->input('Services') as $key) {
                    $id = event::find($key);
    
                    $event = new r_event();
    
                    $event->reservation_id = $lastId;
                    $event->event_id = $id->id;
                    $event->Type = "Event";
                    $event->Service  = $id->event_title;                
                    $event->save();
    
                }
            }
            if( $request['event_desc'] != null ) {
                
                $event = new r_event();
    
                $event->reservation_id = $lastId;
                $event->event_id = 26;
                $event->Type = "Event";
                $event->Service  = $request['event_desc'];                
                $event->save();

            }
            if($request['Other_Services'] != null &&  count($request['Other_Services']) != 0){
                if($request->input('Other_Services') !== null){
                    foreach ($request->input('Other_Services') as $key) {
                        $id = event::find($key);
        
                        $event = new r_event();
        
                        $event->reservation_id  = $lastId;
                        $event->event_id = $id->id;
                        $event->Type = "Service";
                        $event->Service  = $id->event_title;                
                        $event->save();
        
                    }
                }
            }
            if( $request['service_desc'] != null ) {
                $event = new r_event();
        
                $event->reservation_id  = $lastId;
                $event->event_id = 26;
                $event->Type = "Service";   
                $event->Service  = $request['service_desc'];                
                $event->save();
            }

            $mail_data = [
                'recipient' => 'ggmelmark@gmail.com',
                'fromEmail' => 'ggmelmark@gmail.com',
                'fromName' => 'testing',
                'Subject' => 'test',
                'Body' => 'testing body'
            ];

            if($res){
                    // \Mail::send('user.landingpage',$mail_data,function($message) use ($mail_data){
                    //      $message->to($mail_data['recipient'])
                    //              ->from($mail_data['fromEmail'],$mail_data['fromName'])
                    //              ->subject($mail_data['Subject']);
                    // });
                    $email = $request->email;
                    FacadesMail::send(
                        'user.emailtemplate',
                        // 'user.emailTemplate',
                        [
                            'name' => "Chrisjem Photography",
                            'email' => "chrisjemphotography123@gmail.com",
                            'comment' => "Comment"
                        ],
                        function ($message) use ($email) {
                            $message->from($address = 'chrisjemphotography123@gmail.com', $name = "Photography Picxellence");
                            $message->to($email, 'recipient')
                                ->subject('Your reservation has been Pending');
                        }
                    );

                    return back()->with('Success','Reserve successfully !, Please check your email for confirmation.');
               
            }else{
    
                return back()->with('Failed','Something went wrong !, Please try again.');
            }



          
           
    }
    public function updateStatus(Request $request, $id){
        $event = reservation::find($id);
    
        // dd($event->email);
        if ($event->event_status == "Approved") {
            $event->event_status = 'finish';
        }else{
            $event->event_status = 'Approved';

            // $email = $event->email;
            // FacadesMail::send(
            //     'user.emailtemplate',
            //     [
            //         'name' => "Chrisjem Photography",
            //         'email' => "chrisjemphotography@gmail.com",
            //         'comment' => "Comment"
            //     ],
            //     function ($message) use ($email) {
            //         $message->from($address = 'chrisjemphotography@gmail.com', $name = "Photography Picxellence");
            //         $message->to($email, 'recipient')
            //             ->subject('Your reservation has been approved');
            //     }
            // );
            
            $email = $event->email;
            
            FacadesMail::send(
                'user.emailtemplate',
                // 'user.emailTemplate',
                [
                    'name' => "Chrisjem Photography",
                    'email' => "chrisjemphotography123@gmail.com",
                    'comment' => "Comment"
                ],
                function ($message) use ($email) {
                    $message->from($address = 'chrisjemphotography123@gmail.com', $name = "Photography Picxellence");
                    $message->to($email, 'recipient')
                        ->subject('Your reservation has been approved');
                }
            );
        }

        $event->save();

        return back();
    }

    public function updateCancel($id){
        $event = reservation::find($id);
        $event->event_status = 'Canceled';
        $event->save();

        return back();
    }

    public function viewEvent($id){

        $Events = reservation::select('*')->where('id',$id)->get();
        $services = r_event::select('*')->where('reservation_id',$id)->get();

        if (Session::get('id')!= null) {
             return view('admin.viewEvent',compact('Events','services'));
        }else{
                return redirect('/');
            }
    }

    public function addEvent(Request $request)
    {
        $event = new event();
        
        $event->event_title = $request->event_title;
        $event->event_content = $request->event_content;
        $event->event_price = $request->event_price;

        $event->save();

        return redirect('adminevent');
        

    }
}
