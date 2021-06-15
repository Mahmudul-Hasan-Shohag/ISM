<!DOCTYPE html>
<html lang="en">

<head>

   
</head>

<body>
<h1 style="text-align:center">Banglabazar Inventory Store</h1>
<h3 style="text-align:center">Address:Banglabazar,Naria,Shariatpur</h3>
<h5 style="text-align:center">Contact:01521331269</h3>

<p style="color:green">
<strong>
Dear customer,we have received your order successfully.
</strong>
</p>
<table class="table table-bordered">
<thead>
<tr>
<th>SL</th>
<th>Product Name</th>
<th >Quantity</th>
<th >Unit Price</th>
<th>Image</th>
<th >Subtotal</th>
</tr>
</thead>

<tbody>
@php
$sl=1;
@endphp
@foreach($orderdata as $data)
<tr>
<td>{{$sl++}}</td>
<td>{{$data->name}}</td>
<td>{{$data->qty}}</td>
<td>{{$data->price}}</td>
<td><img  width="55px" height="35px"src="{{url('/uploads/product/'.$data->options->size)}}" alt=""></td>
<td>{{$data->subtotal()}}</td>
</tr>
@endforeach
</tbody>
</table>
</body>

</html>
