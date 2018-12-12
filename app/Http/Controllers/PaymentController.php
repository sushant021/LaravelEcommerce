<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Cart;

use App\Order;
use App\Mail\OrderReceivedEmail;

class PaymentController extends Controller
{
    // payment verification process made to detect fraudulent transactions
  
    public function paymentVerification(Request $request){

    	$order_id  = $request->input('oid');
    	$total_amt = $request->input('amt');
    	$ref_id = $request->input('refId');
    	$amt = Cart::total();


    	$url = "https://ir-user.esewa.com.np/epay/transrec";
    	
		$data =[
    		'amt'=> $amt,
		    'rid'=> $ref_id,
		    'pid'=> $order_id,
		    'scd'=> 'esewa_kkfc'
		];

	    $curl = curl_init($url);
	    curl_setopt($curl, CURLOPT_POST, true);
	    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	    $response = curl_exec($curl);
	    
	    /*
	    echo 'Var dumping direct xml response:';
	    var_dump($response);
	    echo '<br>';
		*/
	    
	    $xml = simplexml_load_string($response);
		$json = json_encode($xml);
		$array = json_decode($json,TRUE);	
		/*
	    echo 'var dumping after converting xml to json and decoding json to array data';
	    var_dump($array);
	    
	    echo '<br>';*/

	    $resp_code =  $array['response_code'];
	    /*
	    echo 'response code retrieved from array :';
	    echo $resp_code;  

	    echo '<br>';*/
	    
	    /*$trimmed_data = trim($resp_code);
	    echo 'trimmed data:';
	    echo $trimmed_data;

	    echo '<br>';*/



	    //get order from database to update payment method 
	    
	    $order = Order::find($order_id);
	    
	    
	    if(trim($resp_code) == 'Success'){

	    	//set payment method = esewa in session and order
	    	$order->payment_method = 'eSewa';
	    	$order->status = 'Waiting For POP';
	    	session(['payment-method'=> 'eSewa']);

	    	//store order 
	    	$order->save();

	    	//send mail 
	    	$mail_to = 'nsushant021@gmail.com';
        	\Mail::to($mail_to)->send(new OrderReceivedEmail);

   	    	//clear cart and destroy session
        	Cart::destroy();
    		session()->flush();

	    	//show successfully placed transaction page
	    	return redirect()->route('orderPlaced');
	    }
	    elseif (trim($resp_code) == 'failure'){
	    	//clear cart and destroy session to prevent duplicate transaction request in esewa
	    	Cart::destroy();
    		session()->flush();
	    	//show verification failed page. 
	    	return redirect()->route('verificationFailed');
	    }
	    else{
	    	return redirect()->route('transactionFailed');
	    }

    }

    public function verificationFailed(){

    	return view('frontEnd.paymentGateway.verificationFailed');
    }

    
    public function transactionFailed(){
        return view ('frontEnd.paymentGateway.failed');
    }
}
