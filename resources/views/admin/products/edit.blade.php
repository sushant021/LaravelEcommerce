@extends('layouts.admin.app')

@section('content')

<div class="container">
	
	<h3>Update Product</h3>

	{!! Form::open(['action' => ['ProductController@update',$product->slug],'method'=>'POST','enctype'=>'multipart/form-data']) !!}
    	
    	<div class="form-group">
            {{Form::label('name','Name')}}
            {{Form::text('name',$product->name,['class'=>'form-control'])}}
        </div>


        <div class="form-group">
            {{Form::label('slug','Slug')}}
            {{Form::text('slug',$product->slug,['class'=>'form-control'])}}
        </div>

         <div class="form-group">
            {{Form::label('price','Price')}}
            {{Form::text('price',$product->price,['class'=>'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('calories','Calories')}}
            {{Form::text('calories',$product->calories,['class'=>'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('tax','Tax')}}
            {{Form::text('tax',$product->tax,['class'=>'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('description','Description')}}
            {{Form::textarea('description',$product->description,['class'=>'form-control'])}}
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
    		
    	{{Form::hidden('_method','PUT')}}

        {{Form::submit('Update',['class'=>'btn btn-primary'])}}
    	

	{!! Form::close() !!}
			


	
</div>

@endsection