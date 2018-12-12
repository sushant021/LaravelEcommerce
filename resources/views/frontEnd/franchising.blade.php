@extends('layouts.frontEnd.base')

@if (session('orderType') == '')

    @section('start-order-module')

      @include('inc.start-order-module')

    @endsection

    @section('content')

        <div class="container contact-form pt-5 mb-5">
    
            <h3>Own Yourself A KKFC</h3>

            <p>Please fill in the details below and drop us a message if you want to open a KKFC outlet yourself. </p>

            {!! Form::open(['action' => 'FranchiseController@receiveFranchise','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                
                <div class="form-group">
                    
                    {{Form::text('name','',['class'=>'form-control','placeholder'=>'Name'])}}
                </div>

                
                <div class="form-group">
                    
                    {{Form::text('email','',['class'=>'form-control','placeholder'=>'Email'])}}
                </div>

                <div class="form-group">
                    
                    {{Form::text('budget','',['class'=>'form-control','placeholder'=>'Your Budget'])}}
                </div>

                <div class="form-group">
                    
                    {{Form::text('location','',['class'=>'form-control','placeholder'=>'Proposed Location'])}}
                </div>

                <div class="form-group">
                    
                    {{Form::text('contact','',['class'=>'form-control','placeholder'=>'Contact Number'])}}
                </div>

                 <div class="form-group">
                    
                    {{Form::textarea('message','',['class'=>'form-control','placeholder'=>'Any messages?'])}}
                </div>

              
                {{Form::submit('Send Message',['class'=>'btn kkfc-btn'])}}
                    

            {!! Form::close() !!}
                    
   
        </div>


 
    @endsection


@endif




@section('content')

<div class="container contact-form mb-5">
	
	<h3>Own Yourself A KKFC</h3>

    <p>Please fill in the details below and drop us a message if you want to open a KKFC outlet yourself. </p>

	{!! Form::open(['action' => 'FrontendController@franchisingPage','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    	
    	<div class="form-group">
    		
    		{{Form::text('name','',['class'=>'form-control','placeholder'=>'Name'])}}
    	</div>

        
        <div class="form-group">
            
            {{Form::text('email','',['class'=>'form-control','placeholder'=>'Email'])}}
        </div>

        <div class="form-group">
    		
    		{{Form::text('budget','',['class'=>'form-control','placeholder'=>'Your Budget'])}}
    	</div>

        <div class="form-group">
            
            {{Form::text('location','',['class'=>'form-control','placeholder'=>'Proposed Location'])}}
        </div>

        <div class="form-group">
            
            {{Form::text('contact','',['class'=>'form-control','placeholder'=>'Contact Number'])}}
        </div>

         <div class="form-group">
            
            {{Form::textarea('message','',['class'=>'form-control','placeholder'=>'Any messages?'])}}
        </div>

      
    	{{Form::submit('Send Message',['class'=>'btn kkfc-btn'])}}
    		

	{!! Form::close() !!}
			


	
</div>


 
@endsection

