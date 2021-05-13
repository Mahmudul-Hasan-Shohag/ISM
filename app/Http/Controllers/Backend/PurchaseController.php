<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Purchase;
use App\Models\Purchasecategory;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function purchase(){
        $categories=Purchasecategory::all();
        $purchase_details=Purchase::with('purchaseCategory')->get();
        return view("backend.layouts.purchaseitems.purchase",compact('purchase_details','categories'));
        
        
    }

    public function add(){
        $categories=Purchasecategory::all();
        return view("backend.layouts.purchaseitems.add",compact('categories'));
        return redirect()->back();
    }
    public function purchasecategory($id){
        $purchase_details=Purchase::where('purchase_category',$id)->get();
        
        $categories=Purchasecategory::all();
        return view("backend.layouts.purchaseitems.purchasecategory",compact('purchase_details','categories'));
    }

    
    public function create(Request $request){
Purchase::create([
'id'=>$request->id,
'purchase_id'=>$request->purchase_id,
'product_name'=>$request->product_name,
'purchase_category'=>$request->purchase_category,
'unit_price'=>$request->unit_price,
'quantity'=>$request->quantity,
'purchase_date'=>$request->purchase_date
]);
return redirect()->route('purchase')->with('message','product added successfully');
    }

   public function purchasedelete($id){
     $purchase=Purchase::find($id);
     $purchase->delete();
return redirect()->route('purchase')->with('message','product deleted successfully');

    }
    public function purchaseedit($id){
        $purchase=Purchase::find($id);
        $categories=Purchasecategory::all();
   return view('backend.layouts.purchaseitems.purchaseedit',compact('purchase','categories'));
   
       }
       public function purchaseupdate(Request $request,$id){
           Purchase::find($id)->update([
            'purchase_id'=>$request->purchase_id,
            'product_name'=>$request->product_name,
            'purchase_category'=>$request->purchase_category,
            'unit_price'=>$request->unit_price,
            'quantity'=>$request->quantity,
            'purchase_date'=>$request->purchase_date

           ]);
           return redirect()->route('purchase')->with('message','Product updated Successfully!');
       }

}
