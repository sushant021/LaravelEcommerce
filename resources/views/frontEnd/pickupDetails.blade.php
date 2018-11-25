@extends('layouts.frontEnd.base')

@section('content')

<div class="container contact-form mb-4">
	
	<h3>Provide Pickup Details</h3>

	{!! Form::open(['action' => 'FrontendController@getSessionData','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    	
    	<div class="form-group">
    		
    		{{Form::text('name','',['class'=>'form-control','placeholder'=>'Name'])}}

    	</div>

    	<div class="form-group">
            {{Form::label('pickupLocation','Pickup From')}}

            {{Form::select('pickupLocation', ["People's Plaza, New Road"=>"People's Plaza, New Road","Civil Mall, Sundhara"=>"Civil Mall, Sundhara", "KKFC Maitidevi"=>"KKFC Maitidevi" ], "People's Plaza, New Road",['class'=>'form-control']) }}
        </div>

        <div class="form-group">
            
            {{Form::text('dateTime','',['class'=>'form-control','placeholder'=>'Time of pickup '])}}

        </div>

        <div class="form-group">
            
            {{Form::textarea('notes','',['class'=>'form-control','placeholder'=>'Any special notes for your order?','rows'=>'5'])}}
        </div>

        <div class="form-group">
            
            {{Form::text('contact','',['class'=>'form-control','placeholder'=>'Contact Number'])}}
        </div>

        
        <div class="form-group">
            
            {{Form::text('email','',['class'=>'form-control','placeholder'=>'Email (Optional)'])}}
        </div>

        {{Form::hidden('orderType', 'Pickup')}}
        
     
    	{{Form::submit('Save',['class'=>'btn kkfc-btn'])}}
    		

	{!! Form::close() !!}
			


	
</div>



@endsection