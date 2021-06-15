@extends('backend.master')
@section('dashboard')
<h4 style="text-align: center;color:white;background-color:teal;"><b>Sales Report </b></h4> 
<form action="{{route('sales.report')}}" method="GET">
<div class="row">
<div class="form-group col-md-6">
<label for="from_date">Date From</label>
<input type="date" class="form-control" id="from" name="from_date">
</div>
<div class="form-group col-md-6">
<label for="to_date">Date To</label>
<input type="date" class="form-control" id="to" name="to_date">
</div>
</div>
<p style="text-align:center">
<button type="submit" class="btn btn-primary "><i class="fas fa-search"></i>search</button>

<button type="button" onclick="printDiv()"  class="btn btn-danger "><i class="fas fa-print"></i>Print</button>
</p>
</form> 
<div id="printArea">
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
<hr>
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
  @if(count($order)>0)
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
   @else
   <h3 style="color:red;text-align:center">No Data Found</h3>
   @endif
   </tr>
  </tbody>
</table>
<p style="text-align:center">Date:{{date('Y-m-d')}}</p>
</div>
<script type="text/javascript">
function printDiv(){
var printContents=document.getElementById("printArea").innerHTML;
var originalContents=document.body.innerHTML;
document.body.innerHTML=printContents;
    window.print();
}

</script>

@endsection