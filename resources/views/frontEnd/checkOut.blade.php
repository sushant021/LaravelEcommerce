@extends('layouts.frontEnd.base')


@if(session('orderType') != '')
	
	@section('content')

		<section class="container contact-form" style="margin-top: -75px;">
			
			{{--<h1>Order Id : {{session('orderId')}}</h1> --}}

			@if (session('orderType')=='Delivery')

			<h3>Delivery Details</h3>

			@else

			<h3>Pickup Details</h3>

			@endif

			<p>Order Type:  {{session('orderType')}}</p>

			<p>Name:  {{session('name')}}</p>

			@if(session('orderType') == 'Pickup')

				<p> Pickup Location : {{session('pickupLocation')}} </p>

				<p> Pickup time : {{session('dateTime')}}</p>

			@elseif (session('orderType') == 'Delivery')

				<p> Delivery Location : {{session('deliveryLocation')}} </p>
				
				<p> Delivery date and time : {{session('dateTime')}}</p>

			@endif
			
			<p> Phone Number : {{session('contact')}}</p>

			@if (session('notes') != '')
				<p>Notes: {{session('notes')}}</p>
			@endif

			@if (session('email') != '')
				<p>Email :{{session('email')}}</p>

			@endif
			
	 	</section>			

	
		<section class="container contact-form ">
				
				<h3> Order Details </h3>

				<table style="width: 100%;">
				   	<thead>
				       	<tr>
				           	<th>Product</th>
				           	<th>Quantity</th>
				           	<th>Unit Price</th>
				           	<th>Subtotal</th>
				       	</tr>
				   	</thead>

				   	<tbody>

				   		@foreach($cart_content as $content)

				       		<tr class="my-2">
				           		<td><p><strong>{{$content->name}}</strong></p></td>
				           		<td>{{$content->qty}}</td>
				           		<td>{{$content->price}}</td>
				           		<td>{{$content->subtotal}}</td>

				           		
				       		</tr>

					   	@endforeach

				   	</tbody>
			   	
				   	<tfoot>
				   		<tr>
				   			<td colspan="2">&nbsp;</td>
				   			<td>Subtotal</td>
				   			<td>{{Cart::subtotal()}}</td>
				   		</tr>
				   		<tr>
				   			<td colspan="2">&nbsp;</td>
				   			<td>Tax</td>
				   			<td>{{Cart::tax()}}</td>
				   		</tr>
				   		<tr>
				   			<td colspan="2">&nbsp;</td>
				   			<td>Total</td>
				   			<td>{{Cart::total()}}</td>
				   		</tr>
				   	</tfoot>

				</table>

		</section>

		


		<section class="container contact-form mb-5">

		
			
			<h3>Payment Options</h3>

			<div class="row">
				
				<div class="col-sm-12 col-lg-6 col-xl-6 col-md-6">
					

					<section class="payment-gateway-section">

						<img src="/storage/site-images/esewa_logo.png" class="img-fluid" width="150px">

						<form action="https://ir-user.esewa.com.np/epay/main" method="POST" class="payment-form">
							{{csrf_field()}}
						    <input value="{{Cart::total(2,'.','')}}" name="tAmt" type="hidden">
						    <input value="{{Cart::subtotal(2,'.','')}}" name="amt" type="hidden">
						    <input value="{{Cart::tax()}}" name="txAmt" type="hidden">
						    <input value="0" name="psc" type="hidden">
						    <input value="0" name="pdc" type="hidden">
						    <input value="esewa_kkfc" name="scd" type="hidden">
						    <input value="{{session('orderId')}}" name="pid" type="hidden">
						    <input value="http://localhost:8000/esewa-payment-success" type="hidden" name="su">
						    <input value="http://localhost:8000/esewa-payment-failed" type="hidden" name="fu">
						    <input value="Pay With eSewa" type="submit" class="kkfc-btn payment-btn">
				    	</form>
				    	
					</section>


				</div>

				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
					
					<section class="payment-gateway-section">

						<h3 class="payment-option-header">Cash On Delivery</h3>
				
						<form action="place-order" method="POST" class="payment-form">

							@csrf

			
							<input type="submit" name="submit" value="Place Order" class="kkfc-btn payment-btn">
							<input type="hidden" name="payment-method" value="cash-on-delivery">
						</form>

					</section>


				</div>

			</div>

			

		</section>

		
		{{--
		<section class="container contact-form mb-5">
			
			<h3>Payment Options </h3>
			<section class="payment-gateway-section">

				<img src="/storage/site-images/esewa_logo.png" class="img-fluid" width="150px">
				<a href="pay-with-esewa" class="kkfc-btn payment-btn">Pay With eSewa</a>

			</section>

			<section class="payment-gateway-section">

				<h3>Cash on delivery</h3>
				<a href="cash-on-delivery" class="kkfc-btn payment-btn">Place Order</a>
			</section>

		</section>

		--}}

	@endsection

@else

	@section('start-order-module')

  		@include('inc.start-order-module')

	@endsection

	@section('content')

		<div class="text-center section-container container">
			
			<p>You haven't added anything to your cart</p>
			<a href="dish-menu" class="kkfc-btn">Go To Menu</a>

		</div>

	@endsection

@endif




