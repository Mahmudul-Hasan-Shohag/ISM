<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Month;
use Illuminate\Http\Request;

class MonthController extends Controller
{
    public function monthform(){
        return view('backend.layouts.employee.salary.month.monthform'); 
    }
    public function monthview(){
        $month=Month::all();
       return view('backend.layouts.employee.salary.month.monthview',compact('month')); 
    }
    public function createmonth(Request $request){
        $request->validate([
'month'=>'required|unique:months'

        ]);
       Month::create([
         'month'=>$request->month


       ]); 
       return redirect()->route('month.view');
       
       return back()->withErrors([
        'email' => 'Invalid username or password',
    ]);
    }
}
