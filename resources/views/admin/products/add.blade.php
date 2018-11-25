@extends('layouts.admin.app')

@section('content')

<div class="container">
	
	<h3 class="my-1">Add Product</h3>

	{!! Form::open(['action' => 'ProductController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    	
    	<div class="form-group">
    		{{Form::label('name','Name')}}
    		{{Form::text('name','',['class'=>'form-control','placeholder'=>'Product Name'])}}
    	</div>

        {{--
        <div class="form-group">
            {{Form::label('slug','Slug')}}
            {{Form::text('slug','',['class'=>'form-control','placeholder'=>'Product Slug'])}}
        </div>--}}

        <div class="form-group">
    		{{Form::label('price','Price')}}
    		{{Form::text('price','',['class'=>'form-control','placeholder'=>'Product Price'])}}
    	</div>

        <div class="form-group">
            {{Form::label('calories','Calories')}}
            {{Form::text('calories','',['class'=>'form-control','placeholder'=>'Product Calories'])}}
        </div>

        <div class="form-group">
            {{Form::label('tax','Tax')}}
            {{Form::text('tax','',['class'=>'form-control','placeholder'=>'Product tax'])}}
        </div>

        <div class="form-group">
            {{Form::label('description','Description')}}
            {{Form::textarea('description','',['class'=>'form-control','placeholder'=>'Product Description'])}}
        </div>


        <div class="form-group">
            
            {{Form::label('category_id','Category')}}
            {{--Form::text('category_id','',['class'=>'form-control','placeholder'=>'Category Id'])--}}
            
            <select name="category_id" class="form-control">
                @foreach($categories as $category) 
                <option value="{{ $category->id}}">{{ $category->name}}</option>
                @endforeach
            </select>

        </div>
    		
        <div class="form-group">
           {{Form::file('product_image')}}
        </div>
    	{{Form::submit('Save',['class'=>'btn btn-primary'])}}
    		

	{!! Form::close() !!}
			


	
</div>

@endsection