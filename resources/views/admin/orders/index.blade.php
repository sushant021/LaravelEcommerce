@extends('layouts.admin.app')


@section('content')

<div class="container-fluid m-5">

	<table style="width: 100%">
		<tr>
			<th>Order Id</th>
			<th>Order Username</th>
			<th>Order Type</th>
			<th>Payment Method</th>
			<th>Status</th>
		</tr>


    	@foreach($orders as $order)

    		<tr>
    			<td>{{$order->id}}</td>
    			<td>{{$order->username}}</td>
    			<td>{{$order->type}}</td>
    			<td>{{$order->payment_method}}</td>
    			<td>{{$order->status}}</td>
    		</tr>

    	@endforeach

	</table>
  

</div>


@endsection
