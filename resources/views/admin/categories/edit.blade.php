@extends('layouts.admin.app')

@section('content')

<div class="container">
	
	<h3>Update Category</h3>

	{!! Form::open(['action' => ['CategoryController@update',$category->slug],'method'=>'POST']) !!}
    	
    	<div class="form-group">
    		{{Form::label('name','Name')}}
    		{{Form::text('name',$category->name,['class'=>'form-control','placeholder'=>'Category Name'])}}
    	</div>

    	<div class="form-group">
    		{{Form::label('slug','Slug')}}
    		{{Form::text('slug',$category->slug,['class'=>'form-control','placeholder'=>'Category Slug'])}}
    	</div>
    		
    	{{Form::hidden('_method','PUT')}}

        {{Form::submit('Update',['class'=>'btn btn-primary'])}}
    	

	{!! Form::close() !!}
			


	
</div>

@endsection