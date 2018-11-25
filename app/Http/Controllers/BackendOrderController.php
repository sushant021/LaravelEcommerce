<?php

namespace App\Http\Controllers;

use App\Order;

use Illuminate\Http\Request;

class BackendOrderController extends Controller
{
    public function showOrders(){
        $orders = Order::All();

        return view('admin.orders.index')->with('orders',$orders);
       
    }
}
