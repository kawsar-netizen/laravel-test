<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{


    public function index(){
        $users = User::all();
        return $users;
    }


    public function create(){
 
        $data = [
            'name' => 'Nafian',
            'email' => 'nafian@gmail.com',
            'password' => "12345678"

        ];

        User::create($data);

        return 'Created Successfully!';
    }

    public function show($id){
        $user = User::find($id);
        return $user;
    }

    public function delete($id){
        $user = User::findorfail($id);
        $user->delete();
        return 'Deleted Successfully!';
    }

    public function edit($id){
        $user = User::findorfail($id);
        $user->name = 'Nafian';
        $user->email = 'nafian@gmail.com';
        $user->save();
        return 'Edited Successfully!';
    }
}
