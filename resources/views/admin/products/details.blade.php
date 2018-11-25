@extends('layouts.admin.app')

@section('content')

<div class="container">
	
	<a class="btn btn-primary" href="/products"> Go back</a>
	<img src="/storage/product_images/{{$product->product_image}}" width="250px">
	<h3>Product: {{ $product->name}}</h3>
	<small>Price: {{$product->price}}</small>
	<small>Slug:{{$product->slug}}</small>
	

    <a href="/products/{{$product->slug}}/edit">Edit</a>
	
</div>

@endsection