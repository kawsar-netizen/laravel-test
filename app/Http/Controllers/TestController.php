<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
   public function one_index(){
       return "This is one";
   }
   public function two_index(){
       return "This is two";
   }
   public function three_index(){
       return "This is three";
   }
}
