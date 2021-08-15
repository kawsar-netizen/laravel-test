<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $this->data['name'] = "Md. Kawsar Khan"; 
        $this->data['roll'] = 120;
        $this->data['subjects'] =[
            'bangla','english','islam','meth'
        ];

        return view("home/index",$this->data);
    }
}
