<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;

use Cart;

class CartController extends Controller
{
    //
    public function index(){

        /*
    	$regular_cart_content = Cart::instance('regular-cart')->content();

        $special_offers_cart_content=Cart::instance('special-offers')->content();

        

        if (($special_offers_cart_content) != ''){
            
            return view('frontEnd.cart.index')->with('special_offers_cart_content',$special_offers_cart_content)->with('regular_cart_content',$regular_cart_content);
        }

        
    	return view('frontEnd.cart.index')->with('regular_cart_content',$regular_cart_content);*/

        $cart_content = Cart::content();

        //return $cart_content;

        return view('frontEnd.cart.index')->with('cart_content',$cart_content);
    }

    public function add($id,Request $request){

    	
    	$this->validate($request,[
    		'quantity'=>'required',
    	]);

    	$quantity =$request->input('quantity'); ;
    	$product = Product::find($id);

        /*
        if ($product->category->slug == 'special-offers'){
            Cart::instance('special-offers')->add($product->id, $product->name, $quantity, $product->price);
            return redirect('/cart')->with('success','Product added to cart');
        
        }


    	Cart::instance('regular-cart')->add($product->id, $product->name, $quantity, $product->price);*/

        if($product->category->slug == 'special-offers'){
            Cart::add($product->id, $product->name, $quantity, $product->price,['cat'=>'special']);
        }
        else{
            Cart::add($product->id, $product->name, $quantity, $product->price,['cat'=>'regular']);    
        }

        
    	return redirect('/cart')->with('success','Product added to cart');
    	

    }

    public function clearAll(){
        /*Cart::instance('regular-cart')->destroy();
        Cart::instance('special-offers')->destroy();*/
        Cart::destroy();
        session()->flush();

        return redirect()->action('FrontendController@menuPage');
    }

    public function remove($rowId,Request $request){
        Cart::remove($rowId);
        return redirect('/cart');
    }

    public function update($rowId,Request $request){

         $this->validate($request,[
            'quantity'=>'required',
        ]);

         Cart::update($rowId, $request->input('quantity'));
         return redirect('/cart');

    }

  
}
