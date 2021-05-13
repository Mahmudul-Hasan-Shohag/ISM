<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function orderdetailsOrder(){
        return $this->belongsTo(Order::class,'order_id','id');
    }
   
}
