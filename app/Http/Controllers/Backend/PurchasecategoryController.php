<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Purchasecategory;

use Illuminate\Http\Request;

class PurchasecategoryController extends Controller
{
    public function categoryform(){

       return view('backend.layouts.purchaseitems.catagory.categoryform');
    }
    public function category(){
$category=Purchasecategory::all();
        return view('backend.layouts.purchaseitems.catagory.category',compact('category'));
     }
    public function postpurchasecategory(Request $request){
       
        $filename='';
        if($request->hasFile('purchasecategory_image'))
        {
            //some code here to store into directory
                $file = $request->file('purchasecategory_image');

                if ($file->isValid()) {
                    $filename =date('Ymdhms').'.'.$file->getClientOriginalExtension();
//                    dd($filename);
                    $file->storeAs('purchasecategory', $filename);
                }
}
Purchasecategory::create([
    'purchasecategory_name'=>$request->purchasecategory_name,
    'purchasecategory_description'=>$request->purchasecategory_description,
    'purchasecategory_image'=>$filename

]);
return redirect()->route('purchase.category');
    }
}
