@extends('backend.master')
@section('dashboard')

<p style="text-align:center">
<a href="{{route('order.details')}}" class="btn btn-info">Show Order Details</a>
</p>
@if(session()->has('message'))
<div class="alert alert-success">
{{session()->get('message')}}
</div>
@endif       
<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Order ID</th>
      <th scope="col">Customer ID</th>
      <th scope="col">Order Date</th>
      <th scope="col">Order Status</th>
      <th scope="col">Total Products</th>
      <th scope="col">Paying Amount</th>
      <th scope="col">Due</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($order as $data)
    <tr>
    <td>{{$data->id}}</td>
      <td>{{$data->customer_id}}</td>
      <td>{{$data->order_date}}</td>
      <td><p  style="background-color:yellow">{{$data->order_status}}</p></td>
      <td>{{$data->total_products}}</td>
      <td>{{$data->cash}}</td>
      <td>{{$data->due}}</td>
      <td>
      <div class="btn-group">
      <a href="{{route('order.process',$data->id)}}" class="btn btn-success"><i class="fas fa-hand-holding-usd"></i>Sell</a>
      <a href="{{route('order.view',$data->id)}}" class="btn btn-info"><i class="fas fa-eye"></i>View</a>
      <a href="{{route('update.invoice',$data->id)}}" class="btn btn-warning"><i class="fas fa-file-invoice"></i>Invoice</a>
      </div>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>
@endsection