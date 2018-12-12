<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\bookingReceivedMail;

class BookTableController extends Controller
{
    //

    public function receiveOrder(Request $request){

    	 $this->validate($request , [
                'name'=>'required',
                'no_of_people'=>'required',
                'booking_date_time'=>'required',
                'contact' =>'required',
                'location'=>'required',
                'message' => 'required'
            ]);

    	$name =$request->input('name');
    	$no_of_people = $request->input('no_of_people');
        $booking_date_time = $request->input('booking_date_time');
    	$location = $request->input('location');
    	$contact = $request->input('contact');
    	$message = $request->input('message');

    	$bookingData = [
    		"name"=>$name,
    		"no_of_people"=>$no_of_people,
            "booking_date_time"=>$booking_date_time,
    		"location"=>$location,
    		"contact"=>$contact,
    		"message"=>$message

    	];

    	 $mail_to = 'nsushant021@gmail.com';
        \Mail::to($mail_to)->send(new bookingReceivedMail($bookingData));

        return redirect()->route('bookingRequestSent');

    }
    public function bookingRequestSent(){
        return view('frontEnd.bookingRequestSent');
    }
}
