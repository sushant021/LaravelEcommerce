@extends('layouts.admin.app')

@section('content')

<div class="container">
	
	<a class="btn btn-primary" href="/categories"> Go back</a>
	<h3>Category: {{ $category->name}}</h3>
	<small>Slug:{{$category->slug}}</small>

	
</div>

@endsection