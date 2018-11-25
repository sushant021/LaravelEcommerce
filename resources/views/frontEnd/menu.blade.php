@extends('layouts.frontEnd.base')


@if (session('orderType') == '')

	@section('start-order-module')
		
		@include('inc.start-order-module')

	@endsection

	@section('content')
	
		@include('inc.menu')

	@endsection

@else

	<section style="margin-top: -100px">
		
		@section('content')
	
			@include('inc.menu')

		@endsection

	</section>

@endif



