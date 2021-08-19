<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class FileController extends Controller
{
    public function store(Request $request){
        $path = $request->file('image')->store('images','public');
        echo $path;
    }
    
    public function files(){
        $url = Storage::url('images/EyCbmR3ovvEy5RdDKVT4cC4NtNH1cpboxowhnPwg.jpg');
        echo "<img src = '$url'>";
    }

    public function delete(){
        $path = Storage::delete('public/images/EyCbmR3ovvEy5RdDKVT4cC4NtNH1cpboxowhnPwg.jpg');
        echo 'Delete file successfully!';
    }
}
