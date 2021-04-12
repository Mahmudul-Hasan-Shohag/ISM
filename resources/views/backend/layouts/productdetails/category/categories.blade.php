@extends('backend.master')
@section('dashboard')

<div class="form-group col-md-4">
<a class="btn btn-success"  href="{{route('category.form')}}">Add category</a>

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
  @foreach($category_list as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->category_name}}</td>
      <td>{{$data->category_description}}</td>
      <td> <img width="150px" src="{{url('/uploads/category/'.$data->category_image)}}" alt=""></td>
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