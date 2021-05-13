@extends('backend.master')
@section('dashboard')
<h4 style="text-align: center;color:white;background-color:purple;"><b>Purchase Category </b></h4>
<p style="text-align:center;margin-top:20px">
<a class="btn btn-success"  href="{{route('purchasecategory.form')}}">Add category</a>
<a class="btn btn-dark"  href="{{route('purchase')}}">Back</a>
</p>


<div class="form-group col-md-12 ">
@if(session()->has('message'))
<div class="alert alert-success">
{{session()->get('message')}}
</div>
@endif   
<table class="table table-bordered">

  <thead class="table table-dark">
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Category Name</th>
      <th scope="col">Description</th>
      <th scope="col">Images</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  
    <tr>
    @foreach($category as $key=>$data)
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->purchasecategory_name}}</td>
      <td>{{$data->purchasecategory_description}}</td>
      <td> <img width="150px" src="{{url('/uploads/purchasecategory/'.$data->purchasecategory_image)}}" alt=""></td>
      <td>
      <div class="btn-group">
      <a href="{{route('purchase.category.edit',$data->id)}}" class="btn btn-success"><i class="fas fa-edit"></i>Edit</a>
      <a href="{{route('purchase.category.delete',$data->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Delete</a>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>
</div>
{{$category->links()}}
@endsection