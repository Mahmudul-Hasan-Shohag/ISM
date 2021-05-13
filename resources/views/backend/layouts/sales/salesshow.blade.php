@extends('backend.master')
@section('dashboard')
<h4 style="text-align: center;color:white;background-color:green;"><b>Sales Records </b></h4>

     @php 
       $due=0;
       $cash=0;
      @endphp
  @foreach($order as $data)
    @php
      $due+=$data->orderdetailsOrder->due;
      $cash+=$data->orderdetailsOrder->cash;
    @endphp

  @endforeach
  <table class="table table-bordered">
  <thead>
  <tr class="table-info">
  <th style="color:coral"><strong>Total Selling Price={{ $cash+$due}} TK</strong></th>
  <th style="color:green"><strong>Total Cash={{ $cash}} TK</strong></th>
  <th style="color:red"><strong>Total Due={{ $due}} TK</strong></th>
  </tr>
  </thead>
  </table>

  



<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Order Date</th>
      <th scope="col">Order ID</th>
      <th scope="col">Total Products</th>
      <th scope="col">Total Price</th>
      <th scope="col">Due</th>
      <th scope="col">Product Name</th>
      <th scope="col">Quantity</th>
    </tr>
  </thead>
  <tbody>
  



  @foreach($order as $key=>$data)
    <tr>
    
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->orderdetailsOrder->order_date}}</td>
       <td>{{$data->order_id}}</td>
      <td>{{$data->orderdetailsOrder->total_products}}</td>
      <td>{{$data->orderdetailsOrder->totalprice}}</td>
      <td>{{$data->orderdetailsOrder->due}}</td>
      <td>{{$data->product_name}}</td>
      <td>{{$data->quantity}}</td>
      
     
    </tr>
    @endforeach
  </tbody>
</table>
{{$order->links()}}
@endsection