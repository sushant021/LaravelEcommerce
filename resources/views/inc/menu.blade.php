@if(count($products)>0)

  <section class="section-container tabpanel">

    <h3 style="color: red;" class="text-center" id="menu-title">DELICIOUS DISHES</h3>
    <hr style="margin-bottom: 0;background-color: red;width: 9%;">
    <hr style="margin-top: 3px;background-color: red;width: 10%;">
    
    <div class="row" style="margin: 0;">
      
      <div class="col-md-2 col-lg-2 col-sm-12">
        
        <!-- Nav tabs -->
          <ul class="nav nav-tabs flex-column" role="tablist">

             @foreach($categories as $count => $category)

             <li role="presentation" @if($count == 0) class="hide"  @endif>
                <a href="#tab-{{ $category->slug }}" aria-controls="#tab-{{ $category->id }}" role="tab" data-toggle="tab">{{ $category->name }}</a>
             </li>

             @endforeach 
    
          </ul>


      </div>

      <div class="col-10">
        
         <!-- Tab panes -->
          <div class="tab-content">

              @foreach($categories as $count => $category)

                  <div role="tabpanel" @if($count == 1) class="tab-pane active" @else class="tab-pane" @endif id="tab-{{ $category->slug }}">

                   {{--<h2 class="text-center">{{ $category->name }}</h2>--}} 

                   @if($category->slug == 'value-combos' || $category->slug == 'snacks')
                      <section class="my-3 text-center">
                        <a href="order-now/regular-meal-add-on" class="kkfc-btn text-center"> Add on Regular Fries + Drink For Regular Meal(Rs. 135)</a>
                        <a href="order-now/large-meal-add-on" class="kkfc-btn">Add on Large Fries + Drink For Large Meal (Rs.190 )</a>
                      </section>
                   @endif

                    <div class="row">

                      
                        @foreach ($category->products as $product)

                          <div class="col-sm-3 text-center mb-2">

                            <div class="card">
                              
                              <img class="card-img-top" src="/storage/product_images/{{$product->product_image}}" alt="Card image cap">

                              <div class="card-body">
                                <a class="card-title">{{$product->name}}</a>
                                
                                @if($product->description != '')
                                <p class="card-text">{{$product->description}}</p>
                                @endif

                                @if($product->calories != '')
                                  <p class="card-text">Cal: {{$product->calories}} KJ</p>
                                @endif

                                <p class="card-text">Rs.{{$product->price}}</p>

                                @if(session('orderType') == '')

                                    <a href="/order-type" class="btn order-now-btn">ORDER NOW</a>

                                @else

                                    <a href="order-now/{{$product->slug}}" class="btn order-now-btn">ORDER NOW</a>

                                @endif

                                

                              </div>

                            </div>
                     
                          </div>
                          <br>
                              

                        @endforeach

                      

                    </div>

                     
                  </div>

              @endforeach 
        
          </div> 

      </div>

    </div>

  </section>

@else

<h5>No Products to show </h5>

@endif