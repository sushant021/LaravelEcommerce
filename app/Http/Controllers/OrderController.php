<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Order;

use Cart;

use Carbon\Carbon;

use App\Mail\OrderReceivedEmail;

class OrderController extends Controller
{
    public function createOrder(){

        $current_time = Carbon::now()->toDateTimeString();
        $cartName = session('name').$current_time;



        Cart::store($cartName);

             
        /*saving order to database */

        $order = new Order();
        $order->username = $cartName;
        $order->type = session('orderType');
        $order->payment_method= 'Unspecified';
        $order->status='Payment Pending';
        $order->cart_code = $cartName; 
     
        $order->save();

        $order_id = $order->id;

        session(['orderId' => $order_id]);

        return redirect()->route('checkOut');
    	

    }

    //place order function should store the order in the backend and send an email to the merchant. 

    public function placeOrder(Request $request){

        $order_id = session('orderId');
        $order = Order::find($order_id);

        if( $request->input('payment-method')=='cash-on-delivery'){
            $order->payment_method = 'Cash On Delivery';
            session(['payment-method'=> 'Cash On Delivery']);
            $order->save();
        }
        
        $mail_to = 'nsushant021@gmail.com';
        \Mail::to($mail_to)->send(new OrderReceivedEmail);


    	Cart::destroy();
    	session()->flush();
    	return  redirect()->route('orderPlaced');
    	

    }


    public function orderPlaced(){
        return view ('frontEnd.orderPlaced');
    }

    
}
