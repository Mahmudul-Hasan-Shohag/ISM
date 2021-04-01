@extends('backend.master')
@section('add')
<h1 style="text-align: center;color:white;background-color:Tomato;"><b> Purchase Items </b></h1>

<form class="p-3 mb-2 bg-info text-white" action="{{route('purchase.create')}}" method="post">
@csrf
  <div class="form-group col-md-8 ">
    <label for="id">ID</label>
    <input name="id" type="text" class="form-control" id="id" placeholder="">
  </div>
  <div class="form-group col-md-8">
    <label for="product_name">Product Name</label>
    <input name="product_name" type="text" class="form-control" id="product_name" placeholder="">
  </div>
  <div class="form-group col-md-8">
    <label for="purchase_category">Select Purchase Category</label>
    <select name="purchase_category" id="purchase_category">
    <option value="Animal">Animal</option>
    <option value="Animal Food">Animal Food</option>
    <option value="Medicine">Medicine</option>
    <option value="Others">Others</option>
  </select>
  </div>
  <div class="form-group col-md-8">
  <label for="unit_price">Unit Price</label>
  <input name="unit_price" type="number" class="form-control" id="unit_price" placeholder="">
  </div>
  <div class="form-group col-md-8">
  <label for="quantity">Quantity</label>
  <input name="quantity" type="number" class="form-control" id="quanntity" placeholder="">
  </div>
  
<div class="form-group col-md-8">
<label for="purchase_date">Purchase Date</label>
<input name="purchase_date" type="date" class="form-control" id="purchase_date" placeholder="">
</div>
<div class="form-group col-md-8 mb-4">
<button type="submit" class="btn btn-primary" href="{{route('purchase')}}">Add Purchase Items</button>
<a class="btn btn-danger" href="{{route('purchase')}}">Close</a>
</div>
</form>
@endsection