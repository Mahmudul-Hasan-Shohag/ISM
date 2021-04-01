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
<tr>
<td>Customer Name:</td>
<td>{{$cash_memo->customer_name}}</td>
</tr>
<tr>
<tr>
<td>Address:</td>
<td>{{$cash_memo->address}}</td>
</tr>
<tr>
<td>Mobile:</td>
<td>{{$cash_memo->mobile}}</td>
<tr>
</table>
<p>------------------------------------------------------------------------------------------------------------------------------------------------</p>

<table>
<tr>
<td>Product ID:</td>
<td>{{$cash_memo->product_id}}</td>
</tr>
<tr>
<tr>
<td>Product Name:</td>
<td>{{$cash_memo->product_name}}</td>
</tr>
<tr>
<td>Product Quantity:</td>
<td>{{$cash_memo->product_quantity}}</td>
<tr>
<tr>
<td>Unit Price:</td>
<td>{{$cash_memo->unit_price}}</td>
<tr>
<tr>
<td>Total Price:</td>
<td>{{$cash_memo->total_price}}</td>
<tr>
<tr>
<td>Discount:</td>
<td>{{$cash_memo->discount}}</td>
<tr>
<tr>
<td>Cash:</td>
<td>{{$cash_memo->cash}}</td>
<tr>
<tr>
<td>Due:</td>
<td>{{$cash_memo->due}}</td>
<tr>

</table>


</div>
  </div>
</div>
@endsection