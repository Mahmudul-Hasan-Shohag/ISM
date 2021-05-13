@extends('backend.master')
@section('employee')



<h4 style="text-align: center;color:white;background-color:brown;"><b> Edit Employees</b></h4>

@if(session()->has('message'))
<div class="alert alert-success">
{{session()->get('message')}}
</div>
@endif    
<form action="{{route('employee.update',$employee->id)}}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')
  <div class="form-group col-md-6">
    <label for="emp_name">Name</label>
    <input type="text" name="emp_name"class="form-control" id="emp_name" placeholder="" value="{{$employee->emp_name}}">
  </div>
  <div class="form-group col-md-6">
    <label for="emp_address">Address</label>
    <input type="text" name="emp_address"class="form-control" id="emp_address" placeholder=""value="{{$employee->emp_address}}">
  </div>
  <div class="form-group col-md-6">
    <label for="emp_mobile">Mobile</label>
    <input type="text" name="emp_mobile"class="form-control" id="emp_mobile" placeholder=""value="{{$employee->emp_mobile}}">
  </div>
  <div class="form-group col-md-6">
    <label for="emp_email">Email</label>
    <input type="email" name="emp_email"class="form-control" id="emp_email" placeholder=""value="{{$employee->emp_email}}">
  </div>
  <div class="form-group col-md-6">
    <label for="salary">Salary</label>
    <input type="number" name="salary"class="form-control" id="salary" placeholder=""value="{{$employee->salary}}">
  </div>
  <div class="form-group col-md-6">
  <button type="submit" class="btn btn-primary">Update</button>
  </div>
</form>

@endsection