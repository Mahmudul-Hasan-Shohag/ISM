@extends('backend.master')
@section('memo')
<form action="{{route('memocreate')}}" method="post">
@csrf
  <div class="form-group col-md-6">
    <label for="customer_name">Customer Name</label>
    <input type="text" name="customer_name" class="form-control" id="customer_name" placeholder="">
  </div>
  <div class="form-group col-md-6">
    <label for="address">Customer Address</label>
    <input type="text" name="customer_name" class="form-control" id="address" placeholder="">
  </div>
  <div class="form-group col-md-6">
    <label for="mobile">Mobile</label>
    <input type="number" name="mobile" class="form-control" id="mobile" placeholder="">
  </div>
  <div class="form-group col-md-6">
    <label for="product_id">Product ID</label>
    <input type="text" name="product_id" class="form-control" id="product_id" placeholder="">
  </div>
  <div class="form-group col-md-6">
    <label for="product_name">Product Name</label>
    <input type="text" name="product_name" class="form-control" id="product_name" placeholder="">
  </div>
  <div class="form-group col-md-6">
    <label for="product_quantity">Quantity</label>
    <input type="number" name="product_quantity" class="form-control" id="product_quantity" placeholder="">
  </div>
  <div class="form-group col-md-6">
    <label for="unit_price">Unit Price</label>
    <input type="number" name="unit_price" class="form-control" id="unit_price" placeholder="">
  </div>
  <div class="form-group col-md-6">
    <label for="total_price">Total Price</label>
    <input type="number" name="total_price" class="form-control" id="total_price" placeholder="">
  </div>
  <div class="form-group col-md-6">
    <label for="discount">Discount</label>
    <input type="number" name="discount" class="form-control" id="discount" placeholder="">
  </div>
  <div class="form-group col-md-6">
    <label for="cash">Cash</label>
    <input type="number" name="cash" class="form-control" id="cash" placeholder="">
  </div>
  <div class="form-group col-md-6">
    <label for="due">Due</label>
    <input type="number" name="due" class="form-control" id="due" placeholder="">
  </div>
</form>
<div class="form-group col-md-12 mb-4">
<a class="btn btn-primary" href="{{route('cashmemo')}}">Create Cashmemo</a>
<a class="btn btn-danger" href="{{route('home')}}">Close</a>
</div>
@endsection