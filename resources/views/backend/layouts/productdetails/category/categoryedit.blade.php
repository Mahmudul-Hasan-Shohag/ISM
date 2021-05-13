@extends('backend.master')
@section('dashboard')
<h4 style="text-align: center;color:white;background-color:indigo;"><b>Edit Category </b></h4> 


<form  class=" col-md-12" action="{{route('category.update',$category->id)}}" method="post" enctype="multipart/form-data">
@csrf
@method('PUT')
<form>
  <div class="form-group">
    <label for="category_name">Category Name</label>
    <input type="text" class="form-control" id="category_name"  name="category_name" value="{{$category->category_name}}">
  </div>
  <div class="form-group">
  <label for="categorydescription" class="form-label">Category Description :</label>
   <textarea class="form-control" name="category_description" id="category_description" value="{{$category->category_description}}"
       placeholder="Enter description."></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary" href="{{route('category.create')}}">Update</button>
</form>
@endsection