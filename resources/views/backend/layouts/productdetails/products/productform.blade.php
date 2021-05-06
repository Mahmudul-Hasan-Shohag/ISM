@extends('backend.master')
@section('dashboard')
<form class=" col-md-10" action="{{route('product.create')}}" method="post" enctype="multipart/form-data">
@csrf
  <div class="form-group">
    <label for="product_id">ID</label>
    <input type="text" class="form-control" id="product_id" name="product_id" >
    
  </div>

  <div class="form-group">
    <label for="product_name">Name</label>
    <input type="text" class="form-control" id="product_name" name="product_name" >
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
    <input type="number" class="form-control" id="quantity" name="quantity" >
    
  </div>
  <div>
  <div class="form-group">
    <label for="price">Price</label>
    <input type="number" class="form-control" id="price" name="price" >
    
  </div>
  <div class="form-group">
    <label for="product_image">Upload a photo</label>
    <input type="file" class="form-control-file" name="product_image"id="product_image">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection