@extends('backend.master')
@section('dashboard')
<h5 style="color:red">**Pleashe Check Everything**</h5>
<form action="{{route('order.confirm',$order->id)}}" method="post">
@csrf 
@method('PUT')
  
  <div class="form-group col-md-8">
    <label for="customer_id">Customer ID</label>
    <input type="number" class="form-control" value="{{$order->customer_id}}" name="customer_id">
  </div>
 
  <div class="form-group col-md-8">
    <label for="order_status">Order Status</label>
    <input type="text" class="form-control" value="Delivered" name="order_status">
  </div>
  <div class="form-group col-md-8">
    <label for="total_products">Total Products</label>
    <input type="number" class="form-control" value="{{$order->total_products}}" name="total_products">
  </div>
  
  <div class="form-group col-md-8">
    <label for="cash">Cash</label>
    <input type="number" class="form-control" value="{{$order->cash}}" name="cash">
  </div>
  <div class="form-group col-md-8">
    <label for="due">Due</label>
    <input type="number" class="form-control" value="{{$order->due}}" name="due">
  </div>
  <button type="submit" class="btn btn-primary">Confirm</button>
</form>
@endsection