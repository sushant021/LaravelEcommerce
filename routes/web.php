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


//regular cart functions 

Route::post('/add/{id}','CartController@add');

Route::post('/remove/{rowId}','CartController@remove');

Route::post('/cart/update/{rowId}','CartController@update');

Route::get('/cart','CartController@index');

Route::get('/clear-cart','CartController@clearAll');



//admin functions

Route::group(['middleware'=>['auth']],function(){


	Route::get('dashboard', 'DashboardController@index');

	Route::resource('products','ProductController');

	Route::resource('categories','CategoryController');

	Route::get('orders','BackendOrderController@showOrders');

	
});

//frontend functions

//home
Route::get('/','FrontendController@index');

//menu
Route::get('menu','FrontendController@menuPage');

//view and order product
Route::get('order-now/{slug}','FrontendController@showProduct');

//menu pages
Route::post('kkfc-menu','FrontendController@getSessionData');

Route::get('dish-menu','FrontendController@dishMenu')->name('dishMenu');



//delivery details and pickup details form
Route::get('delivery-details','FrontendController@deliveryDetails');

Route::get('pickup-details','FrontendController@pickupDetails')->name('pickupDetails');



//for franchising form and sending email
Route::get('franchising','FrontendController@franchisingPage');

Route::post('franchise-request','FranchiseController@receiveFranchise');

Route::get('franchise-request-sent','FranchiseController@franchiseRequestSent')->name('franchiseRequestSent');



//book a table form and sending email
Route::get('book-a-table','FrontendController@bookTable');

Route::post('book-table-request','BookTableController@receiveOrder');

Route::get('booking-request-sent','BookTableController@bookingRequestSent')->name('bookingRequestSent');


//contact us page and send mail message page
Route::get('contact-us','FrontendController@contactUs');

Route::post('contact-us-message','ContactController@receiveMessage');

Route::get('message-sent','ContactController@messageSent')->name('messageSent');


//other general frontend routes 
Route::get('careers','FrontendController@careers');

Route::get('special-offers','FrontendController@specialOffers');

Route::get('order-type','FrontendController@orderType');

Route::get('privacy-policy','FrontendController@privacyPolicy');


//checkout 
Route::get('checkout','FrontendController@checkOut')->name('checkOut');


//place order when selected cash on delivery option.

Route::Post('place-order','OrderController@placeOrder');

Route::get('create-order','OrderController@createOrder')->name('createOrder');

Route::get('order-placed','OrderController@orderPlaced')->name('orderPlaced');


//payment option for esewa
Route::get('pay-with-esewa','PaymentController@payWithEsewa');


// payment transaction routes

//if esewa payment is successful,  then go for verification
Route::get('esewa-payment-success','PaymentController@paymentVerification');

//if esewa payment fails, show transaction failed page
Route::get('esewa-payment-failed','PaymentController@transactionFailed');

//if any other response other than success or failure or due to some exceptions, show transaction failed page
Route::get('transaction-failed','PaymentController@transactionFailed')->name('transactionFailed');

// if verification fails, show verification failed page
Route::get('esewa-verification-failed','PaymentController@verificationFailed')->name('verificationFailed');



//Route::get('cash-on-delivery','PaymentController@cashOnDelivery');


/*
Route::get('/products','ProductController@viewAllProducts');

*/

