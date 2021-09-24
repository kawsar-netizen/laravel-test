<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\frontend\UserController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegistretionController;
use App\Http\Controllers\SslCommerzPaymentController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('about',[HomeController::class,'index']);

Route::get('contact',[ContactController::class,'contact']);

// User Route Here....
Route::get('users',[UserController::class,'index']);

Route::get('create',[UserController::class,'create']);

Route::get('users/{id}',[UserController::class,'show']);

Route::get('users/edit/{id}',[UserController::class,'edit']);

Route::get('users/delete/{id}',[UserController::class,'delete']);


//Testing Route Here.....
Route::get('about_user',[UserController::class,'about_create']);

Route::post('user_store',[UserController::class,'store']);

Route::put('user_update',[UserController::class,'update']);

Route::patch('user_update_name',[UserController::class,'update_name']);

Route::delete('user_delete',[UserController::class,'delete_user']);

//Prefix Route Here.....
Route::prefix('admin')->group(function(){
    
    Route::get('prefix',[UserController::class,'prefix_index']);
});

//Customer Route here... 

Route::prefix('customer')->group(function(){
    Route::get('create_customer',[CustomerController::class,'create']);
    Route::get('customers',[CustomerController::class,'index']);
});


//Post Route here....
 Route::prefix('post')->group(function(){
    Route::get('create_user',[PostController::class,'create']);
    Route::get('create_post',[PostController::class,'store']);
    Route::get('get_posts',[PostController::class,'index']);
    Route::get('add_post',[PostController::class,'addpost']);
 });
 
 //Relation Route here... 
 Route::get('one-to-one',[UserController::class,'index']);

 Route::get('one-to-one-invers',[AddressController::class,'index']);

 Route::get('one-to-many',[UserController::class,'index_many']);

 Route::get('one-to-many-invers',[PostController::class,'index_many']);

 Route::get('many-to-many',[PostController::class,'manytomany']);


 //Frontend Tamples coding//

Route::prefix('frontend')->group(function(){
    Route::get('user',[UserController::class,'index']);
});


//Testing Route for Middleware Here.... 
Route::middleware('test')->group(function(){

    Route::get('one',[TestController::class,'one_index']);

    Route::get('two',[TestController::class,'two_index']);
    
    Route::get('three',[TestController::class,'three_index']);
});

//Testing Route for HTTP Request Here.... 

Route::get('add_user',[RequestController::class,'create']);

Route::post('store_user',[RequestController::class,'store']);

//Testing Route for Session Here.... 

Route::get('set_session',[SessionController::class,'session_set']);
Route::get('get_session',[SessionController::class,'session_get']);
Route::get('delete_session',[SessionController::class,'delete_session']);

//Testing Route for Log Here.... 

Route::get('log',function(){
$message = 'Welcome to dhaka';
Log::debug($message);
});

//Testing Route for Authentication Here.... 

Route::get('login',[LoginController::class,'index']);

Route::post('login',[LoginController::class,'login']);

Route::get('register',[RegistretionController::class,'index']);

Route::post('register',[RegistretionController::class,'store']);

//Testing Route for File Upload Here.... 

Route::view('file_upload','image.upload');

Route::post('file_store',[FileController::class,'store']);

Route::get('files',[FileController::class,'files']);

Route::get('delete_file',[FileController::class,'delete']);


// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

