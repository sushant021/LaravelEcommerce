@extends('layouts.frontEnd.base')

@if(session('orderType') == '')

    @section('start-order-module')

      @include('inc.start-order-module')

    @endsection

    @section('content')

        <div class="container contact-form pt-5 mb-5">
            
            <h3>Book A Table In KKFC </h3>

            {!! Form::open(['action' => 'FrontendController@franchisingPage','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                
                <div class="form-group">
                    
                    {{Form::text('name','',['class'=>'form-control','placeholder'=>'Name'])}}
                    
                </div>

                
                <div class="form-group">
                    
                    {{Form::text('no_of_people','',['class'=>'form-control','placeholder'=>'Number of guests'])}}

                </div>

                <div class="form-group">
                    

                    {{Form::select('location', ["People's Plaza, New Road"=>"People's Plaza, New Road","Civil Mall, Sundhara"=>"Civil Mall, Sundhara", "Maitidevi Chowk"=>"Maitidevi Chowk" ], "People's Plaza, New Road",['class'=>'form-control']) }}

                </div>

                <div class="form-group">
                    
                    {{Form::text('contact','',['class'=>'form-control','placeholder'=>'Contact Number'])}}

                </div>

                 <div class="form-group">
                    
                    {{Form::textarea('message','',['class'=>'form-control','placeholder'=>'Any messages?'])}}

                </div>

              
                {{Form::submit('Send Email',['class'=>'btn kkfc-btn'])}}
                    

            {!! Form::close() !!}
                    


            
        </div>


 
    @endsection

@else 

    @section('content')

        <div class="container contact-form mb-5">
            
            <h3>Book A Table In KKFC </h3>

            {!! Form::open(['action' => 'FrontendController@franchisingPage','method'=>'POST','enctype'=>'multipart/form-data']) !!}
                
                <div class="form-group">
                    
                    {{Form::text('name','',['class'=>'form-control','placeholder'=>'Name'])}}
                    
                </div>

                
                <div class="form-group">
                    
                    {{Form::text('no_of_people','',['class'=>'form-control','placeholder'=>'Number of guests'])}}

                </div>

                <div class="form-group">
                    

                    {{Form::select('location', ["People's Plaza, New Road"=>"People's Plaza, New Road","Civil Mall, Sundhara"=>"Civil Mall, Sundhara", "Maitidevi Chowk"=>"Maitidevi Chowk" ], "People's Plaza, New Road",['class'=>'form-control']) }}

                </div>

                <div class="form-group">
                    
                    {{Form::text('contact','',['class'=>'form-control','placeholder'=>'Contact Number'])}}

                </div>

                 <div class="form-group">
                    
                    {{Form::textarea('message','',['class'=>'form-control','placeholder'=>'Any messages?'])}}

                </div>

              
                {{Form::submit('Send Email',['class'=>'btn kkfc-btn'])}}
                    

            {!! Form::close() !!}
                    


            
        </div>


 
    @endsection


@endif






