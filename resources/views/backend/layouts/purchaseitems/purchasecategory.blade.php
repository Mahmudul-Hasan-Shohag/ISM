@extends('backend.master')
@section('dashboard')


<p style="text-align:center; margin-top:30px"> 
<a class="btn btn-success"  href="{{route('add')}}">Add Purchase Items</a>
<a class="btn btn-info"  href="{{route('purchase.category')}}">Category</a>
</p>
<div class="form-group col-md-12 ">
@if(session()->has('message'))
<div class="alert alert-info">
{{session()->get('message')}}
</div>
@endif 

<table class="table table-bordered col-md-12">
@php 
$total_cost=0;
@endphp


@foreach($purchase_details as $data)
@php
$total_cost+=$data->unit_price*$data->quantity
@endphp
@endforeach 

  <thead>
  
    <tr  class="table-info">
    
      <th scope="col" style="color:green">Total Purchase Cost: {{$total_cost}} TK</th> 
      <th scope="col">
      <div class="dropdown">
  <button class="btn btn-info dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  Show Category
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  @foreach($categories as $data)
    <a class="dropdown-item" href="{{route('purchase.category.show',$data->id)}}">{{$data->purchasecategory_name}}</a>
    @endforeach
  </div>
</div>
</th> 
     
    </tr>
    
  </thead>
</table>

<table class="table table-bordered ">
  <thead class="table-dark">
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Product Code</th>
      <th scope="col">Product Name</th>
      <th scope="col">Category</th>
      <th scope="col">Unit Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total Price</th>
      <th scope="col">Purchase Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($purchase_details as $key=>$data)

    <tr>
    <th scope="row">{{$key+1}}</th>
           <td>{{$data->purchase_id}}</td>
            <td>{{$data->product_name}}</td>
            <td>{{$data->purchaseCategory->purchasecategory_name}}</td>
            <td>{{$data->unit_price}}</td>
            <td>{{$data->quantity}}</td>
            <td>{{$data->unit_price*$data->quantity}}</td>
            <td>{{$data->purchase_date}}</td>


            <td>
            <div class="btn-group">
            <a href="{{route('purchase.edit',$data->id)}}" class="btn btn-success"><i class="fas fa-edit"></i>Edit</a>
            <a href="{{route('purchase.delete',$data->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Delete</a>
               
            </td>

      @endforeach

    </tr>
   
  </tbody>
  
</table>

</div>

@endsection