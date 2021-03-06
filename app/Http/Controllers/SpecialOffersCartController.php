<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;

use Cart;


class SpecialOffersCartController extends Controller
{
   
    public function add($id,Request $request){

    	
    	$this->validate($request,[
    		'quantity'=>'required',
    	]);

    	$quantity =$request->input('quantity'); ;
    	$product = Product::find($id);

      	Cart::instance('special-offers')->add($product->id, $product->name, $quantity, $product->price);
        
    	return redirect('/cart')->with('success','Product added to cart');
    	

    }

   

    public function remove($rowId,Request $request){
        Cart::instance('special-offers')->remove($rowId);
        return redirect('/cart');
    }

    public function update($rowId,Request $request){

         $this->validate($request,[
            'quantity'=>'required',
        ]);

         Cart::instance('special-offers')->update($rowId, $request->input('quantity'));
         return redirect('/cart');

    }

   
}
