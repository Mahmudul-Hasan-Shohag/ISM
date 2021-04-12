@extends('backend.master')
@section('dashboard')

<form action="{{route('cashmemo.create')}}" method="post">
@csrf
<div class="form-group">
    <label for="date">Date</label>
    <input type="date" class="form-control" name="date"id="date">
   </div>
  <div class="form-group">
    <label for="customer_name">Customer Name</label>
    <input type="text" class="form-control" name="customer_name"id="customer_name">
   </div>

  <div class="form-group">
    <label for="customer_id">Customer ID</label>
    <input type="text" class="form-control" name="customer_id"id="customer_id">
  </div>
  <div class="form-group">
    <label for="product_name">Product Name</label>
    <input type="text" class="form-control" name="product_name" id="product_name">
  </div>
  <div class="form-group">
    <label for="product_id">Product ID</label>
    <input type="text" class="form-control" name="product_id" id="product_id">
  </div>
  <div class="form-group">
    <label for="quantity">quantity</label>
    <input type="number" class="form-control" name="quantity" id="quantity">
  </div>
  <div class="form-group">
    <label for="unit_price">Unit Price</label>
    <input type="number" class="form-control" name="unit_price" id="unit_price">
  </div>
  <div class="form-group">
    <label for="discount">Discount</label>
    <input type="number" class="form-control" name="discount" id="discount">
  </div>
  <div class="form-group">
    <label for="cash">Cash</label>
    <input type="number" class="form-control" name="cash" id="cash">
  </div>
  <div class="form-group">
    <label for="due">Due</label>
    <input type="number" class="form-control" name="due" id="due">
  </div>
   
   
  
  
  <button type="submit"  href="{{route('cashmemo.show')}}" class="btn btn-primary" >Submit</button>
  <a   href="{{route('cashmemo.show')}}" class="btn btn-primary" >view</a>

</form>
@endsection