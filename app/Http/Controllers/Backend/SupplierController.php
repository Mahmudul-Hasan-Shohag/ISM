<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function suppliershow(){
        $suppliers=Supplier::all();
        return view('backend.layouts.suppliers.suppliershow',compact('suppliers'));
    }
    public function supplierform(){
        return view('backend.layouts.suppliers.supplierform');
    }
    public function suppliercreate(Request $request){
Supplier::create([
'supplier_name'=>$request->supplier_name,
'supplier_address'=>$request->supplier_address,
'supplier_mobile'=>$request->supplier_mobile,
'supplier_email'=>$request->supplier_email,
'paying_amount'=>$request->paying_amount,
'due'=>$request->due,

]);
return redirect()->back()->with('message','Information added');
    }
    public function supplierdelete($id){
        $supplier=Supplier::find($id);
        $supplier->delete();
        return redirect()->back()->with('message','one row deleted');
    }
    public function supplieredit($id){
        $supplier=Supplier::find($id);
        return view('backend.layouts.suppliers.supplieredit',compact('supplier'));
    }
    public function supplierupdate(Request $request,$id){
        Supplier::find($id)->update([
            'supplier_name'=>$request->supplier_name,
            'supplier_address'=>$request->supplier_address,
            'supplier_mobile'=>$request->supplier_mobile,
            'supplier_email'=>$request->supplier_email,
            'paying_amount'=>$request->paying_amount,
            'due'=>$request->due,

        ]);
        return redirect()->route('supplier.show')->with('message','Information updated');
    }
    public function suppliersearch(Request $request){
$suppliers=Supplier::where('supplier_name','like','%'.$request->search.'%')
                     ->orwhere('id','like','%'.$request->search.'%')->get();
return view('backend.layouts.suppliers.suppliershow',compact('suppliers'));
    }
}
