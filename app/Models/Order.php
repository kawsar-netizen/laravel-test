<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','email','phone',
        'amount','address','status',
        'transaction_id','currency',
    ];

    public function user(){
        return $this->belongTo(User::class);
    }
}
