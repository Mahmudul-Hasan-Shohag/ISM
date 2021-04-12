<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category; 
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showproduct(){
$products=Product::with('productCategory')->paginate(10);
        return view('backend.layouts.productdetails.products.productshow',compact('products'));
        
    }


    public function productform(){
        $categories=Category::all();
        return view('backend.layouts.productdetails.products.productform',compact('categories'));
    }


    public function createproduct(Request $request){
        $filename='';
        if($request->hasFile('product_image'))
        {
            //some code here to store into directory
                $file = $request->file('product_image');

                if ($file->isValid()) {
                    $filename =date('Ymdhms').'.'.$file->getClientOriginalExtension();
//                    dd($filename);
                    $file->storeAs('product', $filename);
                }
}
     Product::create([
        'product_id'=>$request->product_id,
        'product_name'=>$request->product_name,
        'product_category'=>$request->product_category,
        'age'=>$request->age,
        'weight'=>$request->weight,
        'quantity'=>$request->quantity,
        'price'=>$request->price,
        'product_image'=>$filename


     ]); 
     return redirect()->back(); 
    }

    
}
