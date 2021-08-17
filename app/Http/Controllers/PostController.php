<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
class PostController extends Controller
{
    public function create(){
        $data = array(
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => 12345678
        );
        User::create($data);
    }
    public function store(){
        $data = array(
            'title'=>'first post',
            'description'=>'this is a description',
            'user_id'=>1,
            'status'=>0
        );
        Post::create($data);
    }
    public function index(){
        $posts = Post::where('status', 0)
                ->orderBy('id','desc')
                ->get();
        dd($posts);
    }

    public function addpost(){
        $user = new Post();
        $user->title = 'Welcome to page';
        $user->description = 'this is a good description';
        $user->status = 1;
        $user->user_id = 1;
        $user->save();
        $data = array(
            'message'=> 'true',
            'success'=> 'Added Successfully!'
        );
        return response()->json(['user'=>$user,$data],200);
    }
    public function index_many(){
        $posts = Post::findOrFail(3);
        dd($posts->user->name);
    }

    public function manytomany(){
        $post = Post::findOrFail(1);
        dd($post->tags);
    }
}
