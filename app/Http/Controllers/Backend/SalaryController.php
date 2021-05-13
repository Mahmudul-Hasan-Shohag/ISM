<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Salary;

use App\Models\Employee;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function viewsalary(){
       
        $salary=Salary::all();
      
return view('backend.layouts.employee.salary.viewsalary',compact('salary'));

    }
    public function salaryform(){

        return view('backend.layouts.employee.salary.salaryform');
        
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

public function employeesearch(Request $request){
    
$salary=Salary::where('emp_id','like','%'.$request->search.'%')
                     ->orwhere('month','like','%'.$request->search.'%')->get();
return view('backend.layouts.employee.salary.viewsalary',compact('salary'));
}
}


