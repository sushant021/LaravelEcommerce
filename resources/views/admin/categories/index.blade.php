@extends('layouts.admin.app')

@section('content')

<div class="container-fluid">
	
	<a href="/categories/create" class="btn btn-primary my-2">Add Category</a>

	<h3>Categories</h3>

	@if(count($categories)>0)

		<!--stuffs to do if categories exist-->
		@foreach($categories as $category)

			<div class="card p-3">
				<h4><a href="/categories/{{$category->slug}}">{{$category->name}}</a></h4>
				<a href="/categories/{{$category->slug}}/edit">Edit</a>

				{!!Form::open(['action'=>['CategoryController@destroy',$category->id],'method'=>'POST'])!!}

					{{Form::hidden('_method','DELETE')}}
					{{Form::submit('Delete'),['class'=>'btn btn-danger']}}

				{!!Form::close()!!}

				<small>{{--$category->slug--}}</small>
			</div>

		@endforeach
		{{-- for pagination $categories->links()--}}
	@else

		<p>No Categories</p>

	@endif


</div>

@endsection