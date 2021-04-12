@extends('backend.master')
@section('dashboard')
<h1 style="text-align: center;color:black;background-color:coral;"><b> Category list </b></h1>


<form  class=" col-md-12" action="{{route('category.create')}}" method="post" enctype="multipart/form-data">
@csrf
<form>
  <div class="form-group">
    <label for="category_name">Category Name</label>
    <input type="text" class="form-control" id="category_name"  name="category_name">
  </div>
  <div class="form-group">
  <label for="categorydescription" class="form-label">Category Description :</label>
   <textarea class="form-control" name="category_description" id="category_description"
       placeholder="Enter description."></textarea>
  </div>
  <div class="form-group">
    <label for="category_image">Upload a photo</label>
    <input type="file" class="form-control-file" id="category_image" name="category_image">
  </div>
  <button type="submit" class="btn btn-primary" href="{{route('category.create')}}">Submit</button>
</form>
@endsection