@extends('layouts.frontEnd.base')

@if (session('orderType') == '')


	@section('start-order-module')

	  @include('inc.start-order-module')

	@endsection

	

	@section('content')

		<div class="container section-container">
			
			<p>You have not started order or your session is expired. </p>

			<a href="/" class="kkfc-btn">Return To Home</a>

		</div>
		
	@endsection


@endif


{{-- main cart content  --}}
@section('content')

		<div class=" container mb-5 contact-form">

			<h3>Regular Orders </h3>

			@if(count($cart_content)>0)

				
					
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

					   			@if($content->options->cat == 'special')
					   				{{Cart::setTax($content->rowId,'0')}}

					   			@endif


					       		<tr class="my-2">
					           		<td><p><strong>{{$content->name}}</strong></p></td>
					           		<td>
					           			

					           			{!! Form::open(['action' => ['CartController@update',$content->rowId],'method'=>'POST','class'=>'cart-update-form']) !!}
		    	
						    				
		    								{{Form::text('quantity',$content->qty,['class'=>'form-control update-cart'])}} 

						    				{{Form::submit('Update',['class'=>'cart-btn mt-1'])}}
						    		

										{!! Form::close() !!} 
					           			       			

					           			{!! Form::open(['action' => ['CartController@remove',$content->rowId],'method'=>'POST','class'=>'cart-remove-form']) !!}
		    	
						    				    		
						    				{{Form::submit('Remove',['class'=>'cart-btn mt-1'])}}
						    		

										{!! Form::close() !!}

										


					           		</td>
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
					   			<td>Cart Total</td>
					   			<td>{{Cart::total()}}</td>
					   		</tr>
					   	</tfoot>

					</table>

			@else

				<p> There's no content in the cart. </p>

				

			@endif



			
			
			
		</div>

		

		<div class=" container p-3">

			<a class="kkfc-btn" href="/clear-cart">Clear Cart</a>
			
			<a class="kkfc-btn" href="/create-order">Checkout</a>

			<a class="kkfc-btn" href="/menu">Return To Menu</a>
		</div>




@endsection

{{--

@section('content')

		<div class=" container mb-5 contact-form">

			<h3>Regular Orders </h3>

			@if(count($regular_cart_content)>0)

				
					
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

					   		@foreach($regular_cart_content as $content)


					       		<tr class="my-2">
					           		<td><p><strong>{{$content->name}}</strong></p></td>
					           		<td>
					           			

					           			{!! Form::open(['action' => ['RegularCartController@update',$content->rowId],'method'=>'POST','class'=>'cart-update-form']) !!}
		    	
						    				
		    								{{Form::text('quantity',$content->qty,['class'=>'form-control update-cart'])}} 

						    				{{Form::submit('Update',['class'=>'cart-btn mt-1'])}}
						    		

										{!! Form::close() !!} 
					           			       			

					           			{!! Form::open(['action' => ['RegularCartController@remove',$content->rowId],'method'=>'POST','class'=>'cart-remove-form']) !!}
		    	
						    				    		
						    				{{Form::submit('Remove',['class'=>'cart-btn mt-1'])}}
						    		

										{!! Form::close() !!}

										


					           		</td>
					           		<td>{{$content->price}}</td>
					           		<td>{{$content->subtotal}}</td>

					           		
					       		</tr>

						   	@endforeach

					   	</tbody>
				   	
					   	<tfoot>
					   		<tr>
					   			<td colspan="2">&nbsp;</td>
					   			<td>Subtotal</td>
					   			<td>{{Cart::instance('regular-cart')->subtotal()}}</td>
					   		</tr>
					   		<tr>
					   			<td colspan="2">&nbsp;</td>
					   			<td>Tax</td>
					   			<td>{{Cart::instance('regular-cart')->tax()}}</td>
					   		</tr>
					   		<tr>
					   			<td colspan="2">&nbsp;</td>
					   			<td>Cart Total</td>
					   			<td>{{Cart::instance('regular-cart')->total()}}</td>
					   		</tr>
					   	</tfoot>

					</table>

					

					<a class="kkfc-btn" href="/clear-cart">Clear Cart</a>

					

				


			@else

				<p> There's no content in the cart. </p>

				

			@endif



			
			
			
		</div>

		<div class="container mb-5 contact-form">

			<h3>Special Orders</h3>

			@if(count($special_offers_cart_content)>0)

				
					
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

					   		@foreach($special_offers_cart_content as $content)

					   			{{Cart::instance('special-offers')->setTax($content->rowId,'0')}}

					       		<tr class="my-2">
					           		<td><p><strong>{{$content->name}}</strong></p></td>
					           		<td>
					           			

					           			{!! Form::open(['action' => ['SpecialOffersCartController@update',$content->rowId],'method'=>'POST','class'=>'cart-update-form']) !!}
		    	
						    				
		    								{{Form::text('quantity',$content->qty,['class'=>'form-control update-cart'])}} 

						    				{{Form::submit('Update',['class'=>'cart-btn mt-1'])}}
						    		

										{!! Form::close() !!} 
					           			       			

					           			{!! Form::open(['action' => ['SpecialOffersCartController@remove',$content->rowId],'method'=>'POST','class'=>'cart-remove-form']) !!}
		    	
						    				    		
						    				{{Form::submit('Remove',['class'=>'cart-btn mt-1'])}}
						    		

										{!! Form::close() !!}

										


					           		</td>
					           		<td>{{$content->price}}</td>
					           		<td>{{$content->subtotal}}</td>

					           		
					       		</tr>

						   	@endforeach

					   	</tbody>
				   	
					   	<tfoot>
					   		<tr>
					   			<td colspan="2">&nbsp;</td>
					   			<td>Subtotal</td>
					   			<td>{{Cart::instance('special-offers')->subtotal()}}</td>
					   		</tr>
					   		<tr>
					   			<td colspan="2">&nbsp;</td>
					   			<td>Tax</td>
					   			<td>{{Cart::instance('special-offers')->tax()}}</td>
					   		</tr>
					   		<tr>
					   			<td colspan="2">&nbsp;</td>
					   			<td>Cart Total</td>
					   			<td>{{Cart::instance('special-offers')->total()}}</td>

					   		</tr>
					   		<tr>
					   			<td colspan="4">&nbsp;</td>
					   		</tr>
					   		<tr>
					   			<td colspan="2">&nbsp;</td>
					   			<td><b>Total</b></td>
					   			<td><b>{{Cart::instance('special-offers')->total('2','.','')+Cart::instance('regular-cart')->total('2','.','')}}</b></td>
					   			
					   		</tr>

					   	</tfoot>

					</table>

					

					<a class="kkfc-btn" href="/clear-cart">Clear Cart</a>

					


			@else

				<p> There's no content in the cart. </p>

				
			@endif

			
		</div>

		<div class=" container p-3">
			<a class="kkfc-btn" href="/create-order">Checkout</a>

			<a class="kkfc-btn" href="/menu">Return To Menu</a>
		</div>




@endsection



--}}






