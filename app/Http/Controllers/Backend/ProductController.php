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
$categories=Category::all();
        return view('backend.layouts.productdetails.products.productshow',compact('products','categories'));
        
    }
    public function productsearch(Request $request){
        $products=Product::where('product_name','like','%'.$request->search.'%') ->paginate(10);
        $categories=Category::all();
       
        return view('backend.layouts.productdetails.products.productshow',compact('products','categories'));
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
        'quantity'=>$request->quantity,
        'price'=>$request->price,
        'product_image'=>$filename


     ]); 
     return redirect()->back(); 
    }
public function productcategories($id){
    $categories=Category::all();   
$products=Product::where('product_category',$id)->get();
return view('backend.layouts.productdetails.products.productcategories',compact('products','categories'));
}
    
}
