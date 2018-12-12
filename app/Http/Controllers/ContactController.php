<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\contactMail;

class ContactController extends Controller
{
    //
    public function receiveMessage(Request $request){

    	$this->validate($request , [
                'name'=>'required',
                'email'=>'required',
                'subject' =>'required',
                'message' => 'required'
            ]);

    	$name =$request->input('name');
    	$email = $request->input('email');
    	$subject = $request->input('subject');
    	$message = $request->input('message');

    	$contactData = [
    		"name"=>$name,
    		"email"=>$email,
    		"subject"=>$subject,
    		"message"=>$message

    	];

    	 $mail_to = 'nsushant021@gmail.com';
        \Mail::to($mail_to)->send(new contactMail($contactData));

        return redirect()->route('messageSent');
    }
    public function messageSent(){
        return view('frontEnd.messageSent');
    }
}
