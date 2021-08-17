<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;



class CustomerController extends Controller
{
    public function create(){
        $data = array(
            'name' => 'Sinat',
            'email' => 'sinat@gmail.com',
            'address' => 'Mymensingh',
            'balance' => 231,
            'created_at'=>now(),
            'updated_at'=>now()
        );
        DB::table("customers")->insert($data);

        return 'Customer Created Successfully!';
    }

    public function index(){
    //   $customer =  DB::table("customers")->first();
    //   $customer =  DB::table("customers")->where('name','kawsar khan')->get();
    //   $customer =  DB::table("customers")->find(3);
    // $customer =  DB::table("customers")->pluck('name');
    //   $customer =  DB::table("customers")->get();

    // $customer = DB::table('customers')
    //             ->select('id','email as customer_email')
    //             ->where('name','Sinat')
    //             ->get();

    // dd($customer);
    // $customer = DB::table('customers')
    //         ->select('customers.name','customers.email','customers.balance','invoices.amount')
    //         ->rightjoin('invoices','customers.id','=','invoices.customer_id')
    //         ->get();
    //     dd($customer);

        $customer = DB::table('customers')
            ->orderBy('id','desc')
            ->get();
        dd($customer);


     }

}
