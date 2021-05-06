@extends('backend.master')
@section('dashboard')

<h1 style="text-align: center;color:blue;"><i> <u>Purchase Items Form<u></i></h1>


<form class=" col-md-10"  action="{{route('purchase.create')}}" method="post">
@csrf
  <div>
    <label for="purchase_id">ID</label>
    <input name="purchase_id" type="text" class="form-control" id="purchase_id" placeholder="">
  </div>
  <br>
  <div>
    <label for="product_name">Product Name</label>
    <input name="product_name" type="text" class="form-control" id="product_name" placeholder="">
  </div>
  <br>
  <div>
    <label for="purchase_category">Select Purchase Category</label>
    <select name="purchase_category" id="purchase_category" name="purchase_category">
    @foreach($categories as $data)
    <option value="{{$data->id}}">{{$data->purchasecategory_name}}</option>
    @endforeach
  </select>
  </div>
  <br>
  <div>
  <label for="unit_price">Unit Price</label>
  <input name="unit_price" type="number" class="form-control" id="unit_price" placeholder="">
  </div>
  <br>
  <div>
  <label for="quantity">Quantity</label>
  <input name="quantity" type="number" class="form-control" id="quanntity" placeholder="">
  </div>
  <br>
<div>
<label for="purchase_date">Purchase Date</label>
<input name="purchase_date" type="date" class="form-control" id="purchase_date" placeholder="">
</div>
<br>
<div>
<button type="submit" class="btn btn-primary" href="{{route('purchase')}}">Add Purchase Items</button>
<a class="btn btn-danger" href="{{route('purchase')}}">Close</a>
</div>
</br>
</form>
@endsection