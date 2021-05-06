@extends('backend.master')
@section('dashboard')

<form action="{{route('customer.search')}}"method="post"class="form-inline my-4 my-lg-0">
    @csrf
      <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
 
  
   @if(session()->has('message'))
<div class="alert alert-danger">
{{session()->get('message')}}
</div>
@endif     
<hr>
<h3 style="text-align:center;color:navy;"><u>Employee List</u></h3>
<hr>
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col"> ID</th>
      <th scope="col"> Name</th>
      <th scope="col"> Address</th>
      <th scope="col">Mobile </th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($customer_details as $key=>$data)
    <tr>
    <th scope="row">{{$key+1}}</th>
            <td>{{$data->cus_name}}</td>
            <td>{{$data->cus_address}}</td>
            <td>{{$data->cus_mobile}}</td>
            <td>{{$data->cus_email}}</td>         
      <td>
      <div class="btn-group" role="group" aria-label="Basic example">
  <a type="button" href="" class="btn btn-success"><i class="fas fa-edit"></i>update</a>
  <a href="{{route('customer.delete',$data->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Delete</a>
</div>
     </td>
    </tr>
    @endforeach

  </tbody>
  
</table>


@endsection