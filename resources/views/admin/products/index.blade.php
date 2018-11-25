@extends('layouts.admin.app')


@section('content')

<div class="container-fluid">
	
	<a href="/products/create" class="btn btn-primary my-3">Add Product</a>

  @if(count($products)>0)

    <div class="tabpanel">

      <div class="row">
        
        <div class="col-sm-2">
          
          <!-- Nav tabs -->
          <ul class="nav nav-tabs flex-column" role="tablist">

          @foreach($categories as $count => $category)

            <li role="presentation" @if($count == 0) class="active" @endif>
                <a href="#tab-{{ $category->slug }}" aria-controls="#tab-{{ $category->id }}" role="tab" data-toggle="tab">{{ $category->name }}</a>
            </li><br>

          @endforeach 
    
          </ul>

        </div>

        <div class="col-sm-10">
          
          <!-- Tab panes -->
          <div class="tab-content">

              @foreach($categories as $count => $category)

                  <div role="tabpanel" @if($count == 0) class="tab-pane active" @else class="tab-pane" @endif id="tab-{{ $category->slug }}">

                    <h2>{{ $category->name }}</h2>

                    <div class="row">

                      
                        @foreach ($category->products as $product)

                          <div class="col-sm-3 text-center">
                          
                           <img src="/storage/product_images/{{$product->product_image}}" class="img-fluid">
                           
                           <a href="/products/{{$product->slug}}">{{$product->name}}</a> 
                           <p>Rs.{{$product->price}}</p>

                           <p>{{$product->description}}</p>
                                   
                           @if($product->calories != '')
                              <p>{{$product->calories}} KJ</p>
                           @endif
                            
                           

                           <a href="/products/{{$product->slug}}/edit">Edit</a>

                           {!!Form::open(['action'=>['ProductController@destroy',$product->id],'method'=>'POST','class'=>"py-2"])!!}

                             {{Form::hidden('_method','DELETE')}}
                             {{Form::submit('Delete'),['class'=>'btn btn-danger']}}

                           {!!Form::close()!!}
                          
                          </div>
                              

                        @endforeach

                      

                    </div>

                     
                  </div>

              @endforeach 
        
          </div>  

        </div>

      </div>

      
     </div>

  @else

   <h5>No products to show</h5>

  @endif

	

</div>


@endsection
