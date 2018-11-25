@extends('layouts.frontEnd.base')


@if(session('orderType') == '')

	@section('start-order-module')

  		@include('inc.start-order-module')

	@endsection


	@section('content')

		<div class="section-container">
			

			@if(count($products)>0)

				@foreach ($products as $product)

					<div class="container">
					
						<div class="row">
							
							<div class="col-sm-12 col-lg-4 col-md-4 col-xl-4">
								
								<img src="/storage/product_images/{{$product->product_image}}" class="img-fluid">

							</div>

							<div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 ">
								<span style="font-size: 26px;" class="d-block mb-3">{{$product->name}}</span>

								@if($product->description != '')
									<span style="font-size: 26px;" class="d-block mb-3">{{$product->description}}</span>
								@endif
								<span style="font-size: 26px;color:#d7242a;"  class="d-block mb-3">Rs {{$product->price}}.00</span>
								
								@if($product->calories != '')
									<span style="font-size: 16px;color: rgb(0,0,0,0.8);" class="d-block mb-3">Cal: {{$product->calories}} KJ</span>
								@endif



								@if(session('orderType') == '')

		                                <a href="/order-type" class="kkfc-btn">ORDER NOW</a>

		                        @else

		                                <a href="order-now/{{$product->slug}}" class="kkfc-btn">ORDER NOW</a>

		                        @endif


		                        {{--
								

								{!! Form::open(['action' => ['CartController@add',$product->id],'method'=>'POST']) !!}
			    	
							    	<div class="form-group d-inline-block">
							    		
							    		{{Form::text('quantity','1',['class'=>'form-control order-quantity'])}}

							    	</div>

							       
							    		
							    	{{Form::submit('ADD TO ORDER',['class'=>'add-to-order-btn'])}}
							    		

								{!! Form::close() !!} --}}

								
							
							</div>

						</div>

					</div>

					<div class="p-4"></div>

					
				@endforeach

			@else

				<p>There are no any special offers right now ! </p>

			@endif 


		</div>
	  


	@endsection

@else

	 	
	@section('content')

	   
		@if(count($products)>0)

			@foreach ($products as $product)

				<div class="container">
				
					<div class="row">
						
						<div class="col-sm-12 col-lg-4 col-md-4 col-xl-4">
							
							<img src="/storage/product_images/{{$product->product_image}}" class="img-fluid">

						</div>

						<div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 mt-5">
							<span style="font-size: 26px;" class="d-block mb-3">{{$product->name}}</span>

							@if($product->description != '')
								<span style="font-size: 26px;" class="d-block mb-3">{{$product->description}}</span>
							@endif
							<span style="font-size: 26px;color:#d7242a;"  class="d-block mb-3">Rs {{$product->price}}.00</span>
							
							@if($product->calories != '')
								<span style="font-size: 16px;color: rgb(0,0,0,0.8);" class="d-block mb-3">Cal: {{$product->calories}} KJ</span>
							@endif



							@if(session('orderType') == '')

	                                <a href="/order-type" class="kkfc-btn">ORDER NOW</a>

	                        @else

	                                <a href="order-now/{{$product->slug}}" class="kkfc-btn">ORDER NOW</a>

	                        @endif


	                        {{--
							

							{!! Form::open(['action' => ['CartController@add',$product->id],'method'=>'POST']) !!}
		    	
						    	<div class="form-group d-inline-block">
						    		
						    		{{Form::text('quantity','1',['class'=>'form-control order-quantity'])}}

						    	</div>

						       
						    		
						    	{{Form::submit('ADD TO ORDER',['class'=>'add-to-order-btn'])}}
						    		

							{!! Form::close() !!} --}}

							<span style="font-size: 16px; font-style: italic;"  class="d-block mb-3">Category: <span style="color:  #d7242a;">{{$product->category->name}}</span></span>
						
						</div>

					</div>

				</div>

				
			@endforeach

		@else

			<p>There are no any special offers right now ! </p>

		@endif 



	@endsection


@endif


