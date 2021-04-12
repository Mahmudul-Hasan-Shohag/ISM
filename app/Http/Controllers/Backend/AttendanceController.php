<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Employee;
class AttendanceController extends Controller
{
    public function showattendance(){
      
        $attendance=Employee::with('employeeAttendance')->get();
    
        return view("backend.layouts.employee.attendanceview",compact('attendance'));
    }
    public function submitattendance(){
        $attendance=Employee::all();
        return view("backend.layouts.employee.attendancesubmit",compact('attendance'));
    }
    public function createattendance(Request $request){
        Attendance::create([
 
'attendance'=>$request->attendance,
'attendance_date'=>$request->attendance_date


        ]);
        return redirect()->route('attendance.show');     

    }
    

}
