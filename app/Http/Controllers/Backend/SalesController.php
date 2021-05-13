<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class SalesController extends Controller
{
   public function sales(){
      
         $order=OrderDetail::with('orderdetailsOrder')->paginate(10);
    
      
return view('backend.layouts.sales.salesshow',compact('order'));
   } 
  
}
