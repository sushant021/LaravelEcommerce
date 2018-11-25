<!DOCTYPE html>
<html>
<head>
	<title>New Customer Order Received </title>
</head>
<body>

		<h1>You've received an order from your site. </h1>
		
			@if (session('orderType')=='Delivery')

			<h3>Delivery Details</h3>

			@else

			<h3>Pickup Details</h3>

			@endif

			<p>Order Type:  {{session('orderType')}}</p>

			<p>Name:  {{session('name')}}</p>

			@if(session('orderType') == 'Pickup')

				<p> Pickup Branch : {{session('pickupLocation')}} </p>

				<p> Pickup Time : {{session('dateTime')}}</p>

			@elseif (session('orderType') == 'Delivery')

				<p> Delivery Location : {{session('deliveryLocation')}} </p>
				
				<p> Delivery Date and Time : {{session('dateTime')}}</p>

			@endif
			
			<p> Phone Number : {{session('contact')}}</p>

			@if (session('notes') != '')
				<p>Notes: {{session('notes')}}</p>
			@endif

			@if (session('email') != '')
				<p>Email :{{session('email')}}</p>

			@endif

			<p>Payment Method : {{session('payment-method')}}</p>
		

		<section class="container">
				
				<h3> Order Details </h3>

				<table style="width: 100%; text-align: center;">
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

		
		
		
</body>
</html>