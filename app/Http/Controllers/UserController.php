<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{


    // public function index(){
    //     $users = User::all();
    //     return $users;
    // }


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
        $user = User::findOrfail($id);
        $user->delete();
        return 'Deleted Successfully!';
    }

    public function edit($id){
        $user = User::findOrfail($id);
        $user->name = 'Nafian';
        $user->email = 'nafian@gmail.com';
        $user->save();
        return 'Edited Successfully!';
    }
//Testign function here....

    public function about_create(){
        return view ('test.test_post');
    }
    public function store(){
        return 'post successfully!';
    }

    public function update(){
        return 'update successfully!';
    }

    public function update_name(){
        return 'Name has been Updated';
    }
    public function delete_user(){
        return 'Name has been deleted';
    }

    public function prefix_index(){
        return 'This is Group prefix';
    }


    //Relation function here...
    public function index(){
        $user = User::findOrFail(1);
        dd($user->address);
    }


    public function index_many(){
        $user = User::findOrFail(1);
        dd($user->posts);
    }
}


