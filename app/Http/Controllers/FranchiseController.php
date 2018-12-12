<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\franchisingReceivedMail;

class FranchiseController extends Controller
{
    //
    public function receiveFranchise(Request $request){


    	 $this->validate($request , [
                'name'=>'required',
                'email'=>'required',
                'budget'=>'required',
                'contact' =>'required',
                'location'=>'required',
                'message' => 'required'
            ]);

    	$name =$request->input('name');
    	$email = $request->input('email');
    	$budget = $request->input('budget');
    	$location = $request->input('location');
    	$contact = $request->input('contact');
    	$message = $request->input('message');

    	$franchiseeData = [
    		"name"=>$name,
    		"email"=>$email,
    		"budget"=>$budget,
    		"location"=>$location,
    		"contact"=>$contact,
    		"message"=>$message

    	];

    	 $mail_to = 'nsushant021@gmail.com';
        \Mail::to($mail_to)->send(new franchisingReceivedMail($franchiseeData));

        return redirect()->route('franchiseRequestSent');
    }

    public function franchiseRequestSent(){
        return view('frontEnd.franchiseRequestSent');
    }
}
