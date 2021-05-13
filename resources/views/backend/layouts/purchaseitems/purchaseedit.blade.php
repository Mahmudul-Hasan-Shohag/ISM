@extends('backend.master')
@section('dashboard')

<h4 style="text-align: center;color:white;background-color:purple;"><b>Edit Purchase Items </b></h4> 


<form class=" col-md-10"  action="{{route('purchase.update',$purchase->id)}}" method="post">
@csrf
@method('PUT')
  <div>
    <label for="purchase_id">Product Code</label>
    <input name="purchase_id" type="text" class="form-control" id="purchase_id" value="{{$purchase->purchase_id}}">
  </div>
  <br>
  <div>
    <label for="product_name">Product Name</label>
    <input name="product_name" type="text" class="form-control" id="product_name"  value="{{$purchase->product_name}}">
  </div>
  <br>
  <div >
    <label for="purchase_category">Select Purchase Category</label>
    <select name="purchase_category" id="purchase_category" name="purchase_category"class="form-control">
    @foreach($categories as $data)
    <option value="{{$data->id}}">{{$data->purchasecategory_name}}</option>
    @endforeach
  </select>
  </div>
  <br>
  <div>
  <label for="unit_price">Unit Price</label>
  <input name="unit_price" type="number" class="form-control" id="unit_price" value="{{$purchase->unit_price}}">
  </div>
  <br>
  <div>
  <label for="quantity">Quantity</label>
  <input name="quantity" type="number" class="form-control" id="quanntity"  value="{{$purchase->quantity}}">
  </div>
  <br>
<div>
<label for="purchase_date">Purchase Date</label>
<input name="purchase_date" type="date" class="form-control" id="purchase_date"  value="{{$purchase->purchase_date}}">
</div>
<br>
<div>
<button type="submit" class="btn btn-success">Update Items</button>
<a class="btn btn-danger" href="{{route('purchase')}}">Close</a>
</div>
</br>
</form>
@endsection