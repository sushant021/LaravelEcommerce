<?php

namespace App\Http\Controllers;

use Cart;

use App\Category;

use App\Product;

use App\Order;

use Carbon\Carbon;

use Illuminate\Http\Request;


class FrontendController extends Controller
{
    public function index(){

    	$categories = Category::all();
    	$products = Product::all();
    	return view('frontEnd.index')->with('categories',$categories)->with('products',$products);
    }

    public function showProduct($slug){

    	$product = Product::where('slug', $slug)->firstOrFail();
        return view('frontEnd.products.viewProduct')->with('product',$product);
        
    }
    public function menuPage(){
    	$categories = Category::all();
    	$products = Product::all();
    	return view('frontEnd.menu')->with('categories',$categories)->with('products',$products);
    }

    public function franchisingPage(){
        return view('frontEnd.franchising');
    }

    public function deliveryDetails(){

        return view('frontEnd.deliveryDetails');

    }

    public function pickupDetails(Request $request){

        return view('frontEnd.pickupDetails');

    }   

    public function getSessionData(Request $request){


        $orderType = $request->input('orderType');

        if ($orderType == 'Delivery'){


            $this->validate($request , [
                'name'=>'required',
                'deliveryLocation'=>'required',
                'dateTime' =>'required',
                'contact'=>'required|min:10|numeric'

            ]);
            session(['deliveryLocation'=>$request->input('deliveryLocation')]);

        }

        elseif ($orderType == 'Pickup') {
            
            $this->validate($request , [
                'name'=>'required',
                'pickupLocation'=>'required',
                'dateTime'=>'required',
                'contact'=>'required|min:10|numeric'

            ]);

            session(['pickupLocation' => $request->input('pickupLocation')]);

        }

              
        session([
            'orderType'=>$orderType,
            'name'=>$request->input('name'),
            'notes'=>$request->input('notes'),
            'contact'=>$request->input('contact'),
            'email'=>$request->input('email'),
            'dateTime' =>$request->input('dateTime')

        ]);

            
         
        
        return redirect()->route('dishMenu');
        
        
    }
    public function dishMenu(){

        $categories = Category::all();
        $products = Product::all();
        return view('frontEnd.kkfcMenu')->with('categories',$categories)->with('products',$products);
    }

    public function checkOut(){
        
        $cart_content = Cart::content();
        return view ('frontEnd.checkOut')->with('cart_content',$cart_content);
    }

    public function careers(){
        return view ('frontEnd.careers');
    }


    public function bookTable(){
        return view ('frontEnd.bookTable');
    }

    public function specialOffers(){

        $category = Category::where('slug','special-offers')->firstOrFail();
       
        return view ('frontEnd.specialOffers')->with('products',$category->products);
    }

     public function contactUs(){
        return view ('frontEnd.contactUs');
    }

    public function orderType(){
        return view ('frontEnd.orderType');
    }

    public function privacyPolicy(){
        return view ('frontEnd.privacyPolicy');
    }

    
    public function transactionSuccess(){

        Cart::destroy();
        session()->flush();
        return view ('frontEnd.paymentGateway.success');
    }

}