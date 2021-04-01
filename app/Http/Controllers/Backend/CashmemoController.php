<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Cashmemo;
use Illuminate\Http\Request;

class CashmemoController extends Controller
{
    public function cashmemo(){
        $cash_memo=Cashmemo::all();
        return view('backend.layouts.cashmemo.memo',compact('cash_memo'));

    }
    public function create(){
        return view('backend.layouts.cashmemo.create');
    }
    public function sends(Request $request){
Cashmemo::create([
'customer_name'=>$request->customer_name,
'address'=>$request->address,
'mobile'=>$request->mobile,
'product_id'=>$request->product_id,
'product_name'=>$request->product_name,
'product_quantity'=>$request->product_quantity,
'unit_price'=>$request->unit_price,
'total_price'=>$request->total_price,
'discount'=>$request->discount,
'cash'=>$request->cash,
'due'=>$request->due
]);
        
    }
}
