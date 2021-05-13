@extends('backend.master')
@section('dashboard')
<h4 style="text-align: center;color:white;background-color:cyan;"><b>Suppliers Information Form </b></h4>
@if(session()->has('message'))
<div class="alert alert-success">
{{session()->get('message')}}
</div>
@endif   
<form action="{{route('supplier.create')}}" method="post">
@csrf
  <div class="form-group col-md-6">
    <label>Name</label>
    <input type="text" class="form-control" name="supplier_name">
  </div>
  <div class="form-group col-md-6">
    <label>Address</label>
    <input type="text" class="form-control" name="supplier_address">
  </div>
  <div class="form-group col-md-6">
    <label>Mobile</label>
    <input type="text" class="form-control" name="supplier_mobile">
  </div>
  <div class="form-group col-md-6">
    <label>Email</label>
    <input type="text" class="form-control" name="supplier_email">
  </div>
  <div class="form-group col-md-6">
    <label>Paying Amount</label>
    <input type="text" class="form-control" name="paying_amount">
  </div>
  <div class="form-group col-md-6">
    <label>Due</label>
    <input type="text" class="form-control" name="due">
  </div>
  <div class="form-group col-md-6">
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  
</form>
@endsection