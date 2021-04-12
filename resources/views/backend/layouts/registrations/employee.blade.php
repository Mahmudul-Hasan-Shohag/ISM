@extends('backend.master')
@section('employee')

<style>

div.a {
  text-align: left;
  color: Orange
}
</style>
<div class="a">
<h1>Employees Registration Form</h1>

<form action="{{route('employeeregistration.create')}}" method="post" enctype="multipart/form-data">
@csrf
  <div class="form-group col-md-6">
    <label for="emp_id">ID</label>
    <input type="text" name="emp_id"class="form-control" id="emp_id" placeholder="">
  </div>
  <div class="form-group col-md-6">
    <label for="emp_name">Name</label>
    <input type="text" name="emp_name"class="form-control" id="emp_name" placeholder="">
  </div>
  <div class="form-group col-md-6">
    <label for="emp_address">Address</label>
    <input type="text" name="emp_address"class="form-control" id="emp_address" placeholder="">
  </div>
  <div class="form-group col-md-6">
    <label for="emp_mobile">Mobile</label>
    <input type="text" name="emp_mobile"class="form-control" id="emp_mobile" placeholder="">
  </div>
  <div class="form-group col-md-6">
    <label for="emp_email">Email</label>
    <input type="email" name="emp_email"class="form-control" id="emp_email" placeholder="">
  </div>
  <div class="form-group col-md-6">
    <label for="emp_image"></label>
    <input type="file" name="emp_image"class="form-control-file" id="emp_image">
  </div>
  <div class="form-group col-md-6">
  <button type="submit" class="btn btn-primary" href="{{route('employeeinfo')}}">Complete registration</button>
  </div>
</form>

@endsection