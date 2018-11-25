@extends('layouts.frontEnd.base')




@section('content')

<section class="container mb-5 order-type" style="font-family: oswald; font-size: 20px; margin-top: -50px;">

    <h3 class="text-center" style="color: red;">SELECT AN ORDER TYPE </h3>
    <hr style="margin-bottom: 0;background-color: red;width: 9%;">
    <hr style="margin-top: 3px;background-color: red;width: 10%;">

    <a href="/delivery-details" id="order-type-delivery">
     	
     	<img src="/storage/site-images/delivery_icon.png">

     	<p class="separator">.....................................................</p>
     	<p style="font-weight: 900;font-size: 1.3em;letter-spacing: 2px; margin-bottom: 2rem;">DELIVERY</p>
        <p style="font-family: arial;font-size: 16px;">Have your order delivered directly to you</p>

 	</a>

    <a href="/pickup-details" id="order-type-pickup"> 
    	
    	<img src="/storage/site-images/pickup_icon.png"  >

     	<p class="separator">.....................................................</p>
     	<p style="font-weight: 900;font-size: 1.3em;letter-spacing: 2px;margin-bottom: 2rem;">PICKUP</p>
        <p style="font-family: arial;font-size: 16px;">Pick up your order at a KKFC outlet</p>

     </a>

    
</section>
   

@endsection

