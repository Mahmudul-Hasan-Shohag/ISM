<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function purchase(){
        $purchase_details=Purchase::all();
        return view("backend.layouts.purchaseitems.purchase",compact('purchase_details'));
        
        
    }

    public function add(){
       
        return view("backend.layouts.purchaseitems.add");
        return redirect()->back();
    }

    
    public function create(Request $request){
Purchase::create([
'id'=>$request->id,
'product_name'=>$request->product_name,
'purchase_category'=>$request->purchase_category,
'purchase_price'=>$request->purchase_price,
'quantity'=>$request->quantity,
'purchase_date'=>$request->purchase_date
]);
return redirect()->back();
    }

}
