@extends('backend.master')
@section('dashboard')

@if(session()->has('message'))
<div class="alert alert-success">
{{session()->get('message')}}
</div>
@endif 
<h4 style="text-align: center;color:white;background-color:indigo;"><b>Edit Products </b></h4> 
<form class=" col-md-10" action="{{route('product.update',$product->id)}}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')
  <div class="form-group">
    <label for="product_id">Product Code</label>
    <input type="text" class="form-control" id="product_id" name="product_id" value="{{$product->product_id}}">
    
  </div>

  <div class="form-group">
    <label for="product_name">Name</label>
    <input type="text" class="form-control" id="product_name" name="product_name"value="{{$product->product_name}}">
  </div>

  <div class="form-group">
  <label for="product_category">Select Category</label>
                <select class="form-control" name="product_category" id="product_category">
                    @foreach($categories as $data)
                    <option value="{{$data->id}}"> {{$data->category_name}}</option>
                   @endforeach
                </select>
            </div>

  <div>
  <div class="form-group">
    <label for="quantity">Quantity</label>
    <input type="number" class="form-control" id="quantity" name="quantity" value="{{$product->quantity}}" >
    
  </div>
  <div>
  <div class="form-group">
    <label for="price">Unit Price</label>
    <input type="number" class="form-control" id="price" name="price"value="{{$product->price}}" >
    
  </div>
  
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection