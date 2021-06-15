@extends('backend.master')
@section('dashboard')
<h4 style="text-align: center;color:white;background-color:green;"><b>Customers List </b></h4> 
<form action="{{route('customer.search')}}"method="post"class="form-inline my-4 my-lg-0">
    @csrf
      <input class="col-md-8" type="text" name="search" placeholder="Type id or name" aria-label="Search">
      <button class="btn btn-success" type="submit"><i class="fas fa-search"></i>Search</button>
    </form>
    <hr>
 <h3 style="text-align:center;color:black">Total Customers:{{count($customer_details)}}</h3>
  
   @if(session()->has('message'))
<div class="alert alert-success">
{{session()->get('message')}}
</div>
@endif     
<hr>
<table class="table table-bordered">
  <thead class="table-dark">
    <tr>
      <th scope="col"> SL</th>
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
            <td>{{$data->id}}</td>
            <td>{{$data->cus_name}}</td>
            <td>{{$data->cus_address}}</td>
            <td>{{$data->cus_mobile}}</td>
            <td>{{$data->cus_email}}</td>         
      <td>
      <div class="btn-group" role="group" aria-label="Basic example">
  <a type="button" href="{{route('customer.edit',$data->id)}}" class="btn btn-success"><i class="fas fa-edit"></i>Edit</a>
  <a href="{{route('customer.delete',$data->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Delete</a>
</div>
     </td>
    </tr>
    @endforeach

  </tbody>
  
</table>


@endsection