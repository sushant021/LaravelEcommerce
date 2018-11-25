@extends('layouts.frontEnd.base')

@section('content')

<div class="container contact-form mb-4">
	
	<h3>Provide Delivery Details</h3>

	{!! Form::open(['action' => 'FrontendController@getSessionData','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    	
    	<div class="form-group">
    		
    		{{Form::text('name','',['class'=>'form-control','placeholder'=>'Name'])}}
    	</div>

    	<div class="form-group">
            {{Form::textarea('deliveryLocation','',['class'=>'form-control','placeholder'=>'Please provide complete delivery location ','rows'=>'5'])}}
        </div>

        <div class="form-group">
            
            {{Form::text('dateTime','',['class'=>'form-control','placeholder'=>'Date and time of delivery (format: dd/mm/yyyy 00:00 PM)'])}}

        </div>

        <div class="form-group">
            
            {{Form::textarea('notes','',['class'=>'form-control','placeholder'=>'Any special notes for delivery?','rows'=>'5'])}}
        </div>

        <div class="form-group">
            
            {{Form::text('contact','',['class'=>'form-control','placeholder'=>'Contact Number'])}}
        </div>

        <div class="form-group">
            
            {{Form::text('email','',['class'=>'form-control','placeholder'=>'Email (Optional)'])}}
        </div>

        {{Form::hidden('orderType', 'Delivery')}}   
     
    	{{Form::submit('Save',['class'=>'btn kkfc-btn'])}}
    		

	{!! Form::close() !!}
			


	
</div>



@endsection