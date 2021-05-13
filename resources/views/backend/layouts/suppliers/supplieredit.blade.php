@extends('backend.master')
@section('dashboard')
<h4 style="text-align: center;color:white;background-color:cyan;"><b>Edit Suppliers Information </b></h4>
@if(session()->has('message'))
<div class="alert alert-success">
{{session()->get('message')}}
</div>
@endif   
<form action="{{route('supplier.update',$supplier->id)}}" method="post">
@csrf
@method('PUT')
  <div class="form-group col-md-6">
    <label>Name</label>
    <input type="text" class="form-control" name="supplier_name" value="{{$supplier->supplier_name}}">
  </div>
  <div class="form-group col-md-6">
    <label>Address</label>
    <input type="text" class="form-control" name="supplier_address" value="{{$supplier->supplier_address}}">
  </div>
  <div class="form-group col-md-6">
    <label>Mobile</label>
    <input type="text" class="form-control" name="supplier_mobile"  value="{{$supplier->supplier_mobile}}">
  </div>
  <div class="form-group col-md-6">
    <label>Email</label>
    <input type="text" class="form-control" name="supplier_email"  value="{{$supplier->supplier_email}}">
  </div>
  <div class="form-group col-md-6">
    <label>Paying Amount</label>
    <input type="text" class="form-control" name="paying_amount" value="{{$supplier->paying_amount}}">
  </div>
  <div class="form-group col-md-6">
    <label>Due</label>
    <input type="text" class="form-control" name="due" value="{{$supplier->due}}">
  </div>
  <div class="form-group col-md-6">
  <button type="submit" class="btn btn-primary">update</button>
  </div>
  
</form>
@endsection