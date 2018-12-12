<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IPNController extends Controller
{
    //
    public function receivePOP(Request $request){

    	$ref_id = $request->input('refId');
    	$transaction_date = $request->input('transactionDate');
    	$total_amt = $request->input('totalAmount');
    	$service_code = $request->input('serviceCode');
    	$service_name = $request->input('serviceName');
    	$product_id = $request->input('productId');
    	$product_delivery_charge = $request->input('productDeliveryCharge');
    	$product_service_charge = $request->input('productServiceCharge');
    	$taxAmount = $request->input('taxAmount');

    	if(!empty($request)){
    	  # update order table with payment status finalized 
          # probably other things to do 
    	}
    	else{
    		#dont know what to do here 
    	}

    }
}
