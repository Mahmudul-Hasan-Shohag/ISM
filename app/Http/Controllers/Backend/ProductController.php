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
     return redirect()->back()->with('message','You have  added your product successfully'); 
    }
   public function productdelete($id){
       $product=Product::find($id);
       $product->delete();
       return redirect()->back()->with('message','product deleted succeefully');
   }
   public function productedit($id){
    $product=Product::find($id);
    $categories=Category::all();
   return view('backend.layouts.productdetails.products.productedit',compact('categories','product'));
}
public function productupdate(Request $request,$id){
    Product::find($id)->update([
        'product_id'=>$request->product_id,
        'product_name'=>$request->product_name,
        'product_category'=>$request->product_category,
        'quantity'=>$request->quantity,
        'price'=>$request->price, 
    ]);
    
   return redirect()->route('product.show')->with('message','product updated successfully');
}


public function productcategories($id){
    $categories=Category::all();   
$products=Product::where('product_category',$id)->paginate(10);
return view('backend.layouts.productdetails.products.productcategories',compact('products','categories'));
}

    
}
