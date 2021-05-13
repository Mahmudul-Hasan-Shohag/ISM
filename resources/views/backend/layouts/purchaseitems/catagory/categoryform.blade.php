@extends('backend.master')
@section('dashboard')
<h4 style="text-align: center;color:white;background-color:purple;"><b>Add Purchase Category </b></h4> 


<form  class=" col-md-12" action="{{route('post.purchasecategory')}}" method="post" enctype="multipart/form-data">
@csrf
<form>
  <div class="form-group">
    <label for="purchasecategory_name">Category Name</label>
    <input type="text" class="form-control" id="purchasecategory_name"  name="purchasecategory_name">
  </div>
  <div class="form-group">
  <label for="purchasecategory_description" class="form-label">Category Description :</label>
   <textarea class="form-control" name="purchasecategory_description" id="purchasecategory_description"
       placeholder="Enter description."></textarea>
  </div>
  <div class="form-group">
    <label for="purchasecategory_image">Upload a photo</label>
    <input type="file" class="form-control-file" id="purchasecategory_image" name="purchasecategory_image">
  </div>
  <button type="submit" class="btn btn-primary" href="{{route('post.purchasecategory')}}">Submit</button>
</form>
@endsection