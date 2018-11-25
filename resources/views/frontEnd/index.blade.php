@extends('layouts.frontEnd.base')

@if(session('orderType') == '')

	@section('start-order-module')

  		@include('inc.start-order-module')

	@endsection


@endif

@section('content')

  @include('inc.slider')

  @include('inc.about')

  @include('inc.menu')

@endsection

