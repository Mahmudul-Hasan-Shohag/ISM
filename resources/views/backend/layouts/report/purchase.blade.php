@extends('backend.master')
@section('dashboard')
<h4 style="text-align: center;color:white;background-color:purple;"><b>Purchase Report </b></h4>
<form action="{{route('purchase.report')}}" method="GET">
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

<div>
<hr>
@php 
$total_cost=0;
@endphp

@foreach($purchase as $data)
@php
$total_cost+=$data->unit_price*$data->quantity
@endphp
@endforeach 
<div id="printArea">
Total Purchase Cost: {{$total_cost}} TK

<hr>
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
     
    </tr>
  </thead>
  <tbody>
  @if(count($purchase)>0)
  @foreach($purchase as $key=>$data)

    <tr>
    <th scope="row">{{$key+1}}</th>
           <td>{{$data->purchase_id}}</td>
            <td>{{$data->product_name}}</td>
            <td>{{$data->purchaseCategory->purchasecategory_name}}</td>
            <td>{{$data->unit_price}}</td>
            <td>{{$data->quantity}}</td>
            <td>{{$data->unit_price*$data->quantity}}</td>
            <td>{{$data->purchase_date}}</td>
            
      @endforeach
       @else
        <h3 style="text-align:center;color:red;">No Data found</h3>
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
