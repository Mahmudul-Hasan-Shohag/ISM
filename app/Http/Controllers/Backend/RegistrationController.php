<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
   
    public function customerregistration(){
        return view('backend.layouts.registrations.customer');
    }
    public function createcustomer(Request $request){

Customer::create([
    'id'=>$request->id,
    'cus_name'=>$request->cus_name,
    'cus_address'=>$request->cus_address,
    'cus_mobile'=>$request->cus_mobile,
    'cus_email'=>$request->cus_email,

]);
return redirect()->back();
    }
    public function customer(){
$customer_details=Customer::all();
        return view('backend.layouts.customer',compact('customer_details'));
    }

    public function employeeregistration(){
        return view('backend.layouts.registrations.employee');
    }
}
