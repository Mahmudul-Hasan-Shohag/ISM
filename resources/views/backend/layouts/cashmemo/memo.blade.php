@extends('backend.master')
@section('cash')

<div class="container">

  <h2 style="text-align: center;">Cash Memo</h2>
  <div class="card">
    <div class="card-body"><div class="row">
    <img src="/images/QR.png";style="width:100px;height:100px;"/>
    
    <div class="form-group">
    <h3 style="text-align: center;">Shariatpur Agro Farm</h2>
    <p style="text-align:center;">Bijhari Union,Naria,Shariatpur</p>
    <p style="text-align:center;">Mobile:01521331269,01675262065 Email:agrofarmshariatpur@gmail.com</p>
   </div>
   </div>
<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>



<table >
@foreach($cash_memo as $data)
<tr>
<td>Customer Name:</td>
<td>{{$data->customer_name}}</td>
</tr>
<tr>
<tr>
<td>Address:</td>
<td>{{$data->address}}</td>
</tr>
<tr>
<td>Mobile:</td>
<td>{{$data->mobile}}</td>
<tr>
</table>
<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>

<table>
<tr>
<td>Product ID:</td>
<td>{{$data->product_id}}</td>
</tr>
<tr>
<tr>
<td>Product Name:</td>
<td>{{$data->product_name}}</td>
</tr>
<tr>
<td>Product Quantity:</td>
<td>{{$data->product_quantity}}</td>
<tr>
<tr>
<td>Unit Price:</td>
<td>{{$data->unit_price}}</td>
<tr>
<tr>
<td>Total Price:</td>
<td>{{$data->total_price}}</td>
<tr>
<tr>
<td>Discount:</td>
<td>{{$data->discount}}</td>
<tr>
<tr>
<td>Cash:</td>
<td>{{$data->cash}}</td>
<tr>
<tr>
<td>Due:</td>
<td>{{$data->due}}</td>
<tr>
@endforeach
</table>


</div>
  </div>
</div>
@endsection