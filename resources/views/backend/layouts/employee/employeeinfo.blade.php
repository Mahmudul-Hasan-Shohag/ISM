@extends('backend.master')
@section('dashboard')
     
<form action="{{route('employee.list.search')}}"method="post"class="form-inline my-4 my-lg-0">
    @csrf
      <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
<hr>
@if(session()->has('message'))
<div class="alert alert-danger">
{{session()->get('message')}}
</div>
@endif   
<h3 style="text-align:center;color:navy;"><u>Employee List</u></h3>
<hr>
<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">ID</th>
      <th scope="col"> Name</th>
      <th scope="col"> Address</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Email</th>
      <th scope="col">Photos</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  
  @foreach($employee_info as $key=>$data)
    <tr>
    <th scope="row">{{$key+1}}</th>
            
            <td>{{$data->emp_id}}</td>
            <td>{{$data->emp_name}}</td>
            <td>{{$data->emp_address}}</td>
            <td>{{$data->emp_mobile}}</td>
            <td>{{$data->emp_email}}</td>  
            <td><img style="width:100px;height:100px;" src="{{url('uploads/employee/'.$data->emp_image)}}"> </td>         
      <td>
      <div class="btn-group" role="group" aria-label="Basic example">
  <a type="button" href="" class="btn btn-success"><i class="fas fa-edit"></i>update</a>
  <a href="{{route('employee.delete',$data->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Delete</a>
</div>
      </td>
      @endforeach

    </tr>
   
  </tbody>
  
</table>

</div>

@endsection