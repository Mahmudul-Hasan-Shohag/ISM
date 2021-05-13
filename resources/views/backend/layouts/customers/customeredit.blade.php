@extends('backend.master')
@section('dashboard')

<h4 style="text-align: center;color:white;background-color:green;"><b>Edit Customers </b></h4> 
@if(session()->has('message'))
<div class="alert alert-success">
{{session()->get('message')}}
</div>
@endif 

<form action="{{route('customer.update',$customer->id)}}" method="post">
@csrf
@method('PUT')
  
  <div class="form-group col-md-6">
    <label for="cus_name">Name</label>
    <input type="text" name="cus_name"class="form-control" id="cus_name" value="{{$customer->cus_name}}">
  </div>
  <div class="form-group col-md-6">
    <label for="cus_address">Address</label>
    <input type="text" name="cus_address"class="form-control" id="cus_address"value="{{$customer->cus_address}}">
  </div>
  <div class="form-group col-md-6">
    <label for="cus_mobile">Mobile</label>
    <input type="text" name="cus_mobile"class="form-control" id="cus_mobile" value="{{$customer->cus_mobile}}">
  </div>
  <div class="form-group col-md-6">
    <label for="cus_email">Email</label>
    <input type="email" name="cus_email"class="form-control" id="cus_email" value="{{$customer->cus_email}}">
  </div>
  
  <div class="form-group col-md-6">
  <button type="submit" class="btn btn-primary" href="{{route('customer')}}">Update</button>
  </div>
</form>
@endsection