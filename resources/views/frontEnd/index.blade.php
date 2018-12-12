
@extends('layouts.frontEnd.base')

@if(session('orderType') == '')

	@section('start-order-module')

  		@include('inc.start-order-module')

	@endsection

	@section('content')

  		@include('inc.slider')

  		@include('inc.about')

  		@include('inc.menu')

	@endsection


@endif
<div style="margin-top: -90px;">
@section('content')

  		@include('inc.slider')

  		@include('inc.about')

  		@include('inc.menu')

@endsection

</div>

