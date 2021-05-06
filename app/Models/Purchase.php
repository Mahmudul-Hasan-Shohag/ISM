<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function purchaseCategory(){
        return $this->belongsTo(Purchasecategory::class,'purchase_category','id');
    }
}
