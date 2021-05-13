@extends('backend.master')
@section('dashboard')
<h4 style="text-align: center;color:white;background-color:teal;"><b>Order Details </b></h4>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Sl</th>
      <th scope="col">Order ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Unit Price</th>
     
      </tr>
  </thead>
  <tbody>
 @foreach($orderdetails as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
     
      <td>{{$data->order_id}}</td>
      <td style="color:green">{{$data->product_name}}</td>
      <td>{{$data->quantity}}</td>
      <td>{{$data->unit_price}}</td>
    </tr>
   @endforeach
  </tbody>
</table>
@endsection