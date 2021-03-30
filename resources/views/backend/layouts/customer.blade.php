@extends('backend.master')
@section('dashboard')
<div class="form-group col-md-12 ">
<table class="table table-borderless table-dark table-hover ">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Customer Address</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($customer_details as $key=>$data)
    <tr class="table-primary">
    <th scope="row">{{$key+1}}</th>
            <td>{{$data->cus_name}}</td>
            <td>{{$data->cus_address}}</td>
            <td>{{$data->cus_mobile}}</td>
            <td>{{$data->cus_email}}</td>         
      <td>
      
      
      <a class="btn btn-danger" href="">Update</a>
      </td>
      @endforeach

    </tr>
   
  </tbody>
  
</table>

</div>
@endsection