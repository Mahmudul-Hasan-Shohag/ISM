@extends('backend.master')
@section('dashboard')
<h4 style="text-align: center;color:white;background-color:teal;"><b>Orders Report </b></h4> 
<form action="{{route('orders.report')}}" method="GET">
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
      $due+=$data->due;
      $cash+=$data->cash;
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
      <th scope="col">Order ID</th>
      <th scope="col">Customer ID</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Customer Email</th>
      <th scope="col">Order Date</th>
      <th scope="col">Order Status</th>
      <th scope="col">Total Products</th>
      <th scope="col">Paying Amount</th>
      <th scope="col">Due</th>
    </tr>
  </thead>
  <tbody>
  @if(count($order)>0)
  @foreach($order as $data)
    <tr>
    <td>{{$data->id}}</td>
      <td>{{$data->customer_id}}</td>
      <td>{{$data->cus_name}}</td>
      <td>{{$data->cus_email}}</td>
      <td>{{$data->order_date}}</td>
      <td><p  style="background-color:yellow">{{$data->order_status}}</p></td>
      <td>{{$data->total_products}}</td>
      <td>{{$data->cash}}</td>
      <td>{{$data->due}}</td>
 
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