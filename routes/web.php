<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AddressController;


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