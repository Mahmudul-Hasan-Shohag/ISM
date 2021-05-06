<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Salary;
use App\Models\Month;
use App\Models\Employee;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function viewsalary(){
        $month=Month::all();
       
        $salarymonth=Salary::with('salaryMonth')->get();
      
return view('backend.layouts.employee.salary.viewsalary',compact('month','salarymonth'));

    }
    public function salaryform(){

       $month=Month::all();
        return view('backend.layouts.employee.salary.salaryform',compact('month'));
        
            }
            public function salarycreate(Request $request){
               Salary::create([
'emp_name'=>$request->emp_name,
'emp_id'=>$request->emp_id,
'salary'=>$request->salary,
'month'=>$request->month,
'amount'=>$request->amount,
'date'=>$request->date
               ]);
                
    return redirect()->back();                
}
public function salarymonth($id){
    $month=Month::all();
    $salarymonth=Salary::where('month',$id)->get();
   
    return view('backend.layouts.employee.salary.salarymonth',compact('month','salarymonth'));
}
public function employeesearch(Request $request){
    $month=Month::all();
$salarymonth=Salary::where('emp_id','like','%'.$request->search.'%')->get();
return view('backend.layouts.employee.salary.viewsalary',compact('salarymonth','month'));
}
}


