<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $guarded=[];
    
    public function employeeAttendance(){

        return $this->belongsTo(Employee::class,'id');
    } 
    
}
