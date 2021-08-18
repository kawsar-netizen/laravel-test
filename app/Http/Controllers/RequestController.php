<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class RequestController extends Controller
{
    public function create(){
        return view('user.register');
    }
    public function store(UserRequest $request){
        // $validated = $request->validate([
        //     'name' => 'required|string',
        //     'email' => 'required|email',
        //     'password' => 'required',
        // ]);
        return $request->all();
    }
}
