<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/



Auth::routes();








Route::get('order-now/{slug}','FrontendController@showProduct');
//regular cart functions 


Route::post('/add/{id}','CartController@add');

Route::post('/remove/{rowId}','CartController@remove');

Route::post('/cart/update/{rowId}','CartController@update');

Route::get('/cart','CartController@index');

Route::get('/clear-cart','CartController@clearAll');

//special offers cart functions 

/*
Route::post('/special-offers/add/{id}','SpecialOffersCartController@add');

Route::post('/special-offers/remove/{rowId}','SpecialOffersCartController@remove');

Route::post('/special-offers/cart/update/{rowId}','SpecialOffersCartController@update');
*/

//admin functions

Route::group(['middleware'=>['auth']],function(){


	Route::get('dashboard', 'DashboardController@index');

	Route::resource('products','ProductController');

	Route::resource('categories','CategoryController');

	Route::get('orders','BackendOrderController@showOrders');

	
});

//frontend functions 

Route::get('menu','FrontendController@menuPage');

Route::get('/','FrontendController@index');


Route::get('franchising','FrontendController@franchisingPage');

Route::get('delivery-details','FrontendController@deliveryDetails');

Route::get('pickup-details','FrontendController@pickupDetails')->name('pickupDetails');



Route::post('kkfc-menu','FrontendController@getSessionData');

Route::get('dish-menu','FrontendController@dishMenu')->name('dishMenu');






Route::get('checkout','FrontendController@checkOut')->name('checkOut');

Route::get('careers','FrontendController@careers');

Route::get('book-a-table','FrontendController@bookTable');

Route::get('special-offers','FrontendController@specialOffers');

Route::get('contact-us','FrontendController@contactUs');

Route::get('order-type','FrontendController@orderType');

Route::get('privacy-policy','FrontendController@privacyPolicy');

//place order when selected cash on delivery option.

Route::Post('place-order','OrderController@placeOrder');

Route::get('create-order','OrderController@createOrder')->name('createOrder');

Route::get('order-placed','OrderController@orderPlaced')->name('orderPlaced');


// payment transactions

Route::get('transaction-failed','FrontendController@transactionFailed');

Route::post('esewa-payment-success','PaymentController@paymentVerification');

Route::get('esewa-payment-failed','FrontendController@transactionFailed');

Route::get('pay-with-esewa','PaymentController@payWithEsewa');

//Route::get('cash-on-delivery','PaymentController@cashOnDelivery');


/*
Route::get('/products','ProductController@viewAllProducts');

*/

