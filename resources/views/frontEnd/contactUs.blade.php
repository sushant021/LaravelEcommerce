@extends('layouts.frontEnd.base')


@if (session('orderType') == '')


	@section('start-order-module')
		
		@include('inc.start-order-module')

	@endsection


	@section('content')
			

		<div class="container">
			
			<div class="row section-container">
				<div class="col-sm-12 col-lg-12 col-md-12 col-xl-12">
					
					<iframe src="https://www.google.com/maps/d/embed?mid=1Lp5b90xkELSdX8Hq7Z5S_zuwGlQ04877" width="100%" height="480"></iframe>

				</div>
			</div>
			<div class="row mb-5">

				<div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
					
					<section class="contact-form">

						<h3 class="section-header">SEND MESSAGE</h3>
						
						{!! Form::open(['action' => 'FrontendController@franchisingPage','method'=>'POST','enctype'=>'multipart/form-data']) !!}
	    	
				    	<div class="form-group">
				    		{{Form::text('name','',['class'=>'form-control','placeholder'=>'Name'])}}
				    	</div>

				        
				        <div class="form-group">
				            {{Form::text('email','',['class'=>'form-control','placeholder'=>'Email'])}}
				        </div>

				        		        
				        <div class="form-group">
				            
				            {{Form::text('subject','',['class'=>'form-control','placeholder'=>'Subject'])}}

				        </div>


				         <div class="form-group">
				            
				            {{Form::textarea('message','',['class'=>'form-control','placeholder'=>'Your Message'])}}
				        </div>

	      
	    				{{Form::submit('Send Email',['class'=>'btn kkfc-btn'])}}
	    		

						{!! Form::close() !!}

					</section>

				</div>

				<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 p-4" style="background-color: #880a0a;color: #fff; border-radius: 5px;">
					
					<section class="contact-details">
						
						<h3 class="section-header">GET IN TOUCH</h3>

						<div class="box-data">
							
							<span class="box-icon"><i class="fa fa-phone"></i></span>
							<div class="box-info">
								<span>Phone</span>
								<p>+977 - 01 – 4157604</p>
							</div>

						</div>

						<div class="box-data">
							
							<span class="box-icon"><i class="fa fa-mobile-alt"></i></span>
							<div class="box-info">
								<span>Mobile</span>
								<p>+977 – 9801113727</p>
							</div>

						</div>

						<div class="box-data">
							
							<span class="box-icon"><i class="fa fa-envelope"></i></span>
							<div class="box-info">
								<span>Email</span>
								<p>info@kkfcnepal.com</p>
							</div>

						</div>

						<div class="box-data">
							
							<span class="box-icon"><i class="fa fa-map-marker"></i></span>
							<div class="box-info">
								<span>Address</span>
								<p>New Road, Kathmandu</p>
							</div>

						</div>

					</section>

				</div>
			</div>

		</div>
		
		

	@endsection

@endif

@section('content')
			

		<div class="container">
			
			<div class="row">
				<div class="col-sm-12 col-lg-12 col-md-12 col-xl-12">
					
					<iframe src="https://www.google.com/maps/d/embed?mid=1Lp5b90xkELSdX8Hq7Z5S_zuwGlQ04877" width="100%" height="480"></iframe>

				</div>
			</div>
			<div class="row mb-5">

				<div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
					
					<section class="contact-form">

						<h3 class="section-header">SEND MESSAGE</h3>
						
						{!! Form::open(['action' => 'FrontendController@franchisingPage','method'=>'POST','enctype'=>'multipart/form-data']) !!}
	    	
				    	<div class="form-group">
				    		{{Form::text('name','',['class'=>'form-control','placeholder'=>'Name'])}}
				    	</div>

				        
				        <div class="form-group">
				            {{Form::text('email','',['class'=>'form-control','placeholder'=>'Email'])}}
				        </div>

				        		        
				        <div class="form-group">
				            
				            {{Form::text('subject','',['class'=>'form-control','placeholder'=>'Subject'])}}

				        </div>


				         <div class="form-group">
				            
				            {{Form::textarea('message','',['class'=>'form-control','placeholder'=>'Your Message'])}}
				        </div>

	      
	    				{{Form::submit('Send Email',['class'=>'btn kkfc-btn'])}}
	    		

						{!! Form::close() !!}

					</section>

				</div>

				<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 p-4" style="background-color: #880a0a;color: #fff; border-radius: 5px;">
					
					<section class="contact-details">
						
						<h3 class="section-header">GET IN TOUCH</h3>

						<div class="box-data">
							
							<span class="box-icon"><i class="fa fa-phone"></i></span>
							<div class="box-info">
								<span>Phone</span>
								<p>+977 - 01 – 4157604</p>
							</div>

						</div>

						<div class="box-data">
							
							<span class="box-icon"><i class="fa fa-mobile-alt"></i></span>
							<div class="box-info">
								<span>Mobile</span>
								<p>+977 – 9801113727</p>
							</div>

						</div>

						<div class="box-data">
							
							<span class="box-icon"><i class="fa fa-envelope"></i></span>
							<div class="box-info">
								<span>Email</span>
								<p>info@kkfcnepal.com</p>
							</div>

						</div>

						<div class="box-data">
							
							<span class="box-icon"><i class="fa fa-map-marker"></i></span>
							<div class="box-info">
								<span>Address</span>
								<p>New Road, Kathmandu</p>
							</div>

						</div>

					</section>

				</div>
			</div>

		</div>
		
		

@endsection

