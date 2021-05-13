@extends('backend.master')
@section('dashboard')
<h4 style="text-align: center;color:white;background-color:purple;"><b>Employees List </b></h4>   
<form action="{{route('employee.list.search')}}"method="post"class="form-inline my-4 my-lg-0">
    @csrf
      <input class="form-control col-md-6" type="text" name="search" placeholder="search employee name" aria-label="Search">
      <button class="btn btn-success" type="submit"><i class="fas fa-search"></i>Search</button>
    </form>
<hr>
@if(session()->has('message'))
<div class="alert alert-info">
{{session()->get('message')}}
</div>
@endif   


<table class="table table-bordered">
  <thead class="table table-dark">
    <tr>
      <th scope="col">SL</th>
      <th scope="col">ID</th>
      <th scope="col"> Name</th>
      <th scope="col"> Address</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Email</th>
      <th scope="col">Salary</th>
      <th scope="col">Photos</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  
  @foreach($employee_info as $key=>$data)
    <tr>
    <th scope="row">{{$key+1}}</th>
            
            <td>{{$data->id}}</td>
            <td>{{$data->emp_name}}</td>
            <td>{{$data->emp_address}}</td>
            <td>{{$data->emp_mobile}}</td>
            <td>{{$data->emp_email}}</td> 
            <td>{{$data->salary}}</td> 
            <td><img style="width:100px;height:100px;" src="{{url('uploads/employee/'.$data->emp_image)}}"> </td>         
      <td>
      <div class="btn-group">
  <a type="button" href="{{route('employee.edit',$data->id)}}" class="btn btn-success"><i class="fas fa-edit"></i>Edit</a>
  <a href="{{route('employee.delete',$data->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Delete</a>
</div>
      </td>
      @endforeach

    </tr>
   
  </tbody>
  
</table>

</div>

@endsection