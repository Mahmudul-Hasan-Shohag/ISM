<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $products=Product::all();
       
        return view('backend.layouts.dashboard',compact('products'));
    }

    public function search(Request $request){
       
        $products=Product::where('product_name','like','%'.$request->search.'%') ->get();
        
        return view('backend.layouts.dashboard',compact('products'));

    }
}
