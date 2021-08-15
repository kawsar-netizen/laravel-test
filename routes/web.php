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


Route::get('users',[UserController::class,'index']);

Route::get('create',[UserController::class,'create']);

Route::get('users/{id}',[UserController::class,'show']);

Route::get('users/edit/{id}',[UserController::class,'edit']);

Route::get('users/delete/{id}',[UserController::class,'delete']);