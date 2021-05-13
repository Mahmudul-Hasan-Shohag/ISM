@extends('backend.master')
@section('dashboard')

<h4 style="text-align: center;color:white;background-color:green;"><b>Customers Registration </b></h4> 
@if(session()->has('message'))
<div class="alert alert-success">
{{session()->get('message')}}
</div>
@endif 

<form action="{{route('customerregistration.create')}}" method="post">
@csrf
  
  <div class="form-group col-md-6">
    <label for="cus_name">Name</label>
    <input type="text" name="cus_name"class="form-control" id="cus_name" placeholder="">
  </div>
  <div class="form-group col-md-6">
    <label for="cus_address">Address</label>
    <input type="text" name="cus_address"class="form-control" id="cus_address" placeholder="">
  </div>
  <div class="form-group col-md-6">
    <label for="cus_mobile">Mobile</label>
    <input type="text" name="cus_mobile"class="form-control" id="cus_mobile" placeholder="">
  </div>
  <div class="form-group col-md-6">
    <label for="cus_email">Email</label>
    <input type="email" name="cus_email"class="form-control" id="cus_email" placeholder="">
  </div>
  
  <div class="form-group col-md-6">
  <button type="submit" class="btn btn-primary" href="{{route('customer')}}">Complete registration</button>
  </div>
</form>
@endsection