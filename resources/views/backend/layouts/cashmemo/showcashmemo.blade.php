@extends('backend.master')
@section('dashboard')
<h1>Cashmemo</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Date</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Customer ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product ID</th>
      <th scope="col">quantity</th>
      <th scope="col">Unit Price</th>
      <th scope="col">Discount</th>
      <th scope="col">Cash</th>
      <th scope="col">Due</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
   
  @foreach($cashmemo as $data)
      <th scope="row">1</th>
     
      
      <td>{{$data->date}}</td>
     
      <td>{{$data->customer_name}}</td>
      <td>{{$data->customer_id}}</td>
      <td>{{$data->product_name}}</td>
      <td>{{$data->product_id}}</td>
      <td>{{$data->quantity}}</td>
      <td>{{$data->unit_price}}</td>
      <td>{{$data->discount}}</td>
      <td>{{$data->cash}}</td>
      <td>{{$data->due}}</td>
      <td><a  class="btn btn-info" href="{{route('cashmemo.view',$data->id)}}" class="btn btn-primary" >view</a></td>
    </tr>
    
    @endforeach
  </tbody>
  
</table>
@endsection