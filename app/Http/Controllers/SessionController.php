<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function session_set(Request $request){

        $request->session()->put('name', 'kawsar khan');
        $request->session()->put('email', 'kawsar@gmail.com');

        Session::put('phone',12345734909);
    }
    public function session_get(Request $request){
    
        $value = $request->session()->get('name','Default Name');
        echo $value; 
        echo '<br/>';
        $value = $request->session()->get('email');
        echo $value;
        echo '<br/>';
        echo Session::get('phone');
    }
    public function delete_session(Request $request){
    
        Session::flush();
    }
}
