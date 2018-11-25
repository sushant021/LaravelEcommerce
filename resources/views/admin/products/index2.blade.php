@extends('layouts.admin.app')


@section('content')

<div class="container-fluid">
	
	<a href="/products/create" class="btn btn-primary my-3">Add Product</a>

	<h3>Products</h3>

	@if(count($products)>0)

		<!--stuffs to do if categories exist-->
		@foreach($products as $product)


				<div class="row">

					<div class="col-sm-4 text-center">
						<img src="/storage/product_images/{{$product->product_image}}" class="img-fluid" width="250px">
					</div>

					<div class="col-sm-8">

						<h4><a href="/products/{{$product->slug}}">{{$product->name}}</a></h4>

						<a href="/products/{{$product->slug}}/edit">Edit</a>

						{!!Form::open(['action'=>['ProductController@destroy',$product->id],'method'=>'POST','class'=>"py-2"])!!}

						{{Form::hidden('_method','DELETE')}}
						{{Form::submit('Delete'),['class'=>'btn btn-danger']}}

						{!!Form::close()!!}

						<p>Rs.{{$product->price}}</p>

						<p>Category:{{$product->category->name}}</p>

						<small>{{--$product->slug--}}</small>

					</div>
				</div>
				<hr>
				
				

				{{--<h4><a href="/products/{{$product->id}}">{{$product->name}}</a></h4>--}}
				
			

		@endforeach
		{{-- for pagination $products->links()--}}
	@else

		<p>No Products To Show</p>

	@endif


</div>


@endsection
