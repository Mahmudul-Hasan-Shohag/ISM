<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Employee;
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
//customer
    public function customer(){
$customer_details=Customer::all();

        return view('backend.layouts.customer',compact('customer_details'));
    }

    public function customersearch(Request $request){

        $customer_details=Customer::where('cus_mobile','like','%'.$request->search.'%')->get();
    return view('backend.layouts.customer',compact('customer_details'));
    }
public function customerdelete($id){
$customer=Customer::find($id);
$customer->delete();
return redirect()->back()->with('message','Customer Deleted successfully');
}

//Employee
    public function employeeregistration(){
        return view('backend.layouts.registrations.employee');
    }
    public function employeeinfo(){
$employee_info=Employee::all();
        return view('backend.layouts.employee.employeeinfo',compact('employee_info'));
    }

    public function createemployee(Request $request){

        $filename='';
        if($request->hasFile('emp_image'))
        {
            //some code here to store into directory
                $file = $request->file('emp_image');

                if ($file->isValid()) {
                    $filename =date('Ymdhms').'.'.$file->getClientOriginalExtension();
//                    dd($filename);
                    $file->storeAs('employee', $filename);
                }
}
Employee::create([
    'id'=>$request->id,
    'emp_name'=>$request->emp_name,
    'emp_address'=>$request->emp_address,
    'emp_mobile'=>$request->emp_mobile,
    'emp_email'=>$request->emp_email,
    'emp_image'=>$filename

]);
return redirect()->back()->with('message','Registration Completed.');
}
public function employeedelete($id){
$employee=Employee::find($id);
$employee->delete();
return redirect()->back()->with('message','Employee deleted successfully');
}
public function employeesearch(Request $request){

    $employee_info=Employee::where('emp_mobile','like','%'.$request->search.'%')->get();
return view('backend.layouts.employee.employeeinfo',compact('employee_info'));
} 
   
}
