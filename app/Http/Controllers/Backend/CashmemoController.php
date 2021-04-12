<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cashmemo;
class CashmemoController extends Controller
{
    public function showcashmemo(){
$cashmemo=Cashmemo::paginate(10);
        return view("backend.layouts.cashmemo.showcashmemo",compact('cashmemo'));
    }
    public function cashmemoform(){

        return view("backend.layouts.cashmemo.cashmemoform");
    }

    public function cashmemocreate(Request $request){
     
        Cashmemo::create([
            'date'=>$request->date,
            'customer_name'=>$request->customer_name,
            'customer_id'=>$request->customer_id,
                'product_name'=>$request->product_name,
               'product_id'=>$request->product_id,
                'quantity'=>$request->quantity,
                'unit_price'=>$request->unit_price,
               'discount'=>$request->discount,
               'cash'=>$request->cash,
               'due'=>$request->due

        ]); 
    
        return redirect()->back();
    }
    public function cashmemoview($id){
        $cashmemo=Cashmemo::find($id);
return view('backend.layouts.cashmemo.view',compact('cashmemo'));
    }
   

}
