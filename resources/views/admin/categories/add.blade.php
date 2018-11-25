@extends('layouts.admin.app')

@section('content')

<div class="container">
	
	<h3>Add Category</h3>

	{!! Form::open(['action' => 'CategoryController@store','method'=>'POST']) !!}
    	
    	<div class="form-group">
    		{{Form::label('name','Name')}}
    		{{Form::text('name','',['class'=>'form-control','placeholder'=>'Category Name'])}}
    	</div>

        {{--
    	<div class="form-group">
    		{{Form::label('slug','Slug')}}
    		{{Form::text('slug','',['class'=>'form-control','placeholder'=>'Category Slug'])}}
    	</div> --}}
    		
    	{{Form::submit('Save',['class'=>'btn btn-primary'])}}
    		

	{!! Form::close() !!}
			


	
</div>

@endsection