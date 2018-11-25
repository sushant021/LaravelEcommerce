<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Cart;

class PaymentController extends Controller
{
    //
    public function payWithEsewa(){



    	$total_amt =  Cart::total(2,'.','');
    	$amt = Cart::subtotal(2,'.','');
    	$tax = Cart::tax();
    	$order_id = session('orderId');


    	$url = "https://ir-user.esewa.com.np/epay/main";
		$data =[
    		'amt'=> $amt,
    		'pdc'=> 0,
		    'psc'=> 0,
		    'txAmt'=> $tax,
		    'tAmt'=> $total_amt,
		    'pid'=>$order_id,
		    'scd'=> 'kkfc_esewa',
		    'su'=>'http://localhost:8000/esewa-payment-success?q=su',
		    'fu'=>'http://localhost:8000/esewa-payment-failed?q=fu'
		];

	    $curl = curl_init($url);
	    curl_setopt($curl, CURLOPT_POST, true);
	    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	    curl_exec($curl);
	    //$response = curl_exec($curl);
	    //curl_close($curl);
	    //return $response;

    }
    public function paymentVerification(Request $request){

    	//payment verification process goes here 

    }
}
