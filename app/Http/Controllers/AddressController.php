<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;
use App\Models\User;

class AddressController extends Controller
{
    //Relation function here...
    public function index(){
        $address = Address::findOrFail(2);
        dd($address->user->name);
    }
}
