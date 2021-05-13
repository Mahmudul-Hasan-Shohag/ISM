@extends('backend.master')
@section('dashboard')
<h4 style="text-align: center;color:white;background-color:purple;"><b>Edit Purchase Category </b></h4> 


<form  class=" col-md-12" action="{{route('purchase.category.update',$category->id)}}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')
<form>
  <div class="form-group">
    <label for="purchasecategory_name">Category Name</label>
    <input type="text" class="form-control" id="purchasecategory_name"  name="purchasecategory_name" value="{{$category->purchasecategory_name}}">
  </div>
  <div class="form-group">
    <label for="purchasecategory_description">Category Name</label>
    <input type="text" class="form-control" id="purchasecategory_description"  name="purchasecategory_description" value="{{$category->purchasecategory_description}}">
  </div>
  
 
  <button type="submit" class="btn btn-success" href="{{route('post.purchasecategory')}}">Update</button>
</form>
@endsection