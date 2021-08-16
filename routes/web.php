<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;





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