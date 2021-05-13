@extends('backend.master')
@section('dashboard')

<h4 style="text-align: center;color:white;background-color:indigo;"><b>Products Category </b></h4>
<p style="text-align:center; margin-top:25px;"> 
<a class="btn btn-success"  href="{{route('category.form')}}">Add category</a>
</p>



<div class="form-group col-md-12 ">
<table class="table">
@if(session()->has('message'))
<div class="alert alert-danger">
{{session()->get('message')}}
</div>
@endif      
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Category Name</th>
      <th scope="col">Description</th>
      <th scope="col">Images</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($category_list as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->category_name}}</td>
      <td>{{$data->category_description}}</td>
      <td> <img width="150px" src="{{url('/uploads/category/'.$data->category_image)}}" alt=""></td>
      <td>
                <form action="" method="">
                  @csrf
                  <div class="btn-group">
                  <a href="{{route('category.edit',$data->id)}}" class="btn btn-success"><i class="fas fa-edit"></i>Edit</a>
                  <a href="{{route('category.delete',$data->id)}}" class="btn btn-danger "><i class="fas fa-trash-alt"></i>

Delete</a>
               </form>
            </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection