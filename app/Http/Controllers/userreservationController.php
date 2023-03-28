<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reservation;
use App\Models\r_event;
use App\Models\event;
use DB;
use Illuminate\Support\Facades\Mail as FacadesMail;

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
            


            foreach ($request->input('Services') as $key) {
                
                $id = event::find($key);

                $event = new r_event();

                $event->reservation_id = $lastId;
                $event->event_id = $id->id;
                $event->Type = "Event";
                $event->Service  = $id->event_title;                
                $event->save();

            }

            foreach ($request->input('Other_Services') as $key) {
                $id = event::find($key);

                $event = new r_event();

                $event->reservation_id  = $lastId;
                $event->event_id = $id->id;
                $event->Type = "Service";
                $event->Service  = $id->event_title;                
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
                        'user.emailTemplate',
                        [
                            'name' => "Algen",
                            'email' => "201911008@gordoncollege.edu.ph",
                            'comment' => "Comment"
                        ],
                        function ($message) use ($email) {
                            $message->from($address = '201911008@gordoncollege.edu.ph', $name = "Photography Picxellence");
                            $message->to($email, 'recipient')
                                ->subject('Your Website Contact Form');
                        }
                    );

                    return back()->with('Success','Reserve successfuly !, Please check your email for confirmation.');
               
            }else{
    
                return back()->with('Failed','Something went wrong !, Please try again.');
            }



          
           
    }
    public function updateStatus($id){
        $event = reservation::find($id);
        if ($event->event_status == "Approved") {
            $event->event_status = 'Finish';
        }else{
            $event->event_status = 'Approved';

            $email = $event->email;
            FacadesMail::send(
                'user.emailTemplate',
                [
                    'name' => "Algen",
                    'email' => "201911008@gordoncollege.edu.ph",
                    'comment' => "Comment"
                ],
                function ($message) use ($email) {
                    $message->from($address = '201911008@gordoncollege.edu.ph', $name = "Photography Picxellence");
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

        return view('admin.viewEvent',compact('Events','services'));

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
