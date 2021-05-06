@extends('backend.master')
@section('dashboard')
<div class="form-group col-md-4">
<a class="btn btn-success"  href="{{route('purchasecategory.form')}}">Add category</a>
<a class="btn btn-dark"  href="{{route('purchase')}}">Back</a>
</div>


<div class="form-group col-md-12 ">
<table class="table">
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
  
    <tr>
    @foreach($category as $key=>$data)
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->purchasecategory_name}}</td>
      <td>{{$data->purchasecategory_description}}</td>
      <td> <img width="150px" src="{{url('/uploads/purchasecategory/'.$data->purchasecategory_image)}}" alt=""></td>
      <td>
                <form action="" method="">
                  @csrf
                 
                  <button type="submit" class="btn btn-danger btn-block">Drop</button>
               </form>
            </td>
    </tr>
   @endforeach
  </tbody>
</table>
</div>
@endsection