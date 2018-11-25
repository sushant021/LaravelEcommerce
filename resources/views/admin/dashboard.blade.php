@extends('layouts.admin.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <div class="row">
                       <div class="col-sm-4">
                           <nav>
                             <ul class="list-group">
                                <li class="list-group-item"><a  href="{{ url('categories') }}">Categories</a></li>
                                <li class="list-group-item"><a href="{{ url('products') }}">Products</a></li>

                                <li class="list-group-item"><a href="orders">Orders</a></li>
                             </ul>
                            </nav>
                       </div>
                   </div>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection

 
