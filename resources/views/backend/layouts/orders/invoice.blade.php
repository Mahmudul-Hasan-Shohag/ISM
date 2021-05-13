
<!DOCTYPE html>
<htmllang="en">
<head itemscope="" itemtype="http://schema.org/WebSite">
<title itemprop="name">Inventory Invoice</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="Preview Bootstrap snippets. Invoice with ribbon. Copy and paste the html, css and js code for save time, build your app faster and responsive">
<meta name="keywords" content="bootdey, bootstrap, theme, templates, snippets, bootstrap framework, bootstrap snippets, free items, html, css, js">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
<meta name="viewport" content="width=device-width">

<link rel="shortcut icon" type="image/x-icon" href="https://www.bootdey.com/img/favicon.ico">
<link rel="apple-touch-icon" sizes="135x140" href="https://www.bootdey.com/img/bootdey_135x140.png">
<link rel="apple-touch-icon" sizes="76x76" href="https://www.bootdey.com/img/bootdey_76x76.png">
<link rel="canonical" href="https://www.bootdey.com/snippets/preview/Invoice-with-ribbon" itemprop="url">
<meta property="twitter:account_id" content="2433978487" />
<meta name="twitter:card" content="summary"><meta
name="twitter:card" content="summary_large_image"><meta
name="twitter:site" content="@bootdey"><meta
name="twitter:creator" content="@bootdey"><meta
name="twitter:title" content="Preview Bootstrap  snippets. Invoice with ribbon"><meta
name="twitter:description" content="Preview Bootstrap snippets. Invoice with ribbon. Copy and paste the html, css and js code for save time, build your app faster and responsive"><meta
name="twitter:image" content="https://www.bootdey.com/files/SnippetsImages/bootstrap-snippets-477.png"><meta
name="twitter:url" content="https://www.bootdey.com/snippets/preview/Invoice-with-ribbon"><meta
property="og:title" content="Preview Bootstrap  snippets. Invoice with ribbon"><meta
property="og:url" content="https://www.bootdey.com/snippets/preview/Invoice-with-ribbon"><meta
property="og:image" content="https://www.bootdey.com/files/SnippetsImages/bootstrap-snippets-477.png"><meta
property="og:description" content="Preview Bootstrap snippets. Invoice with ribbon. Copy and paste the html, css and js code for save time, build your app faster and responsive"><link
rel="alternate" type="application/rss+xml" title="Latest snippets resources templates and utilities for bootstrap from bootdey.com:" href="http://bootdey.com/rss" /><link
rel="author" href="https://plus.google.com/u/1/106310663276114892188"/><link
rel="publisher" href="https://plus.google.com/+Bootdey-bootstrap/posts"/><meta
name="msvalidate.01" content="23285BE3183727A550D31CAE95A790AB" /> <script src="/cache-js/cache-1598759682-97135bbb13d92c11d6b2a92f6a36685a.js" type="text/javascript"></script> </head><body><div
id="snippetContent"><link
rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script> <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> <link
href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"><div
class="container bootstrap snippets bootdeys"><div
class="row"><div
class="col-sm-12">
<!--Button-->
<form action="{{route('create.final.invoice')}}" method="post">
@csrf

  <input type="hidden" class="form-control"  name="customer_id" value="{{$customer ->id}}">  
  <input type="hidden" class="form-control"  name="cus_name" value="{{$customer ->cus_name}}"> 
  <input type="hidden" class="form-control"  name="cus_mobile" value="{{$customer ->cus_mobile}}">  
  <input type="hidden" class="form-control"  name="cus_email" value="{{$customer ->cus_email}}">
  <input type="hidden" class="form-control"  name="cus_address" value="{{$customer ->cus_address}}">           
  <input type="hidden" class="form-control"  name="order_date" value="{{date('d/m/y')}}">
  <input type="hidden" class="form-control"  name="order_status" value="Pending">
  <input type="hidden" class="form-control"  name="total_products" value="{{Cart::count()}}">
  <input type="hidden" class="form-control"  name="subtotal" value="{{Cart::subtotal()}}">
  <input type="hidden" class="form-control"  name="totalprice" value="{{Cart::subtotal()}}">
  <input type="hidden" class="form-control"  name="payment_status" value="{{$payment}}">       
  <input type="hidden" class="form-control"  name="cash" value="{{$cash}}">
  <input type="hidden" class="form-control"  name="due" value="{{$due}}">
  
  <button type="submit"  class="btn btn-primary" href="" >Submit</button>


</form>
<!--end Button-->

<div
class="panel panel-default invoice" id="invoice"><div
class="panel-body"><div
class="invoice-ribbon"><div
class="ribbon-inner"></div></div><div
class="row"><div
class="col-sm-6 top-left"> <i
class=""></i></div><div
class="col-sm-6 top-right"><h3 class="marginright"></h3>
 <span class="marginright"></span>
</div>
</div>
<hr>
<div id="printArea">
<div class="row">
<div class="col-xs-4 from">
<h3>Seller Information:</h3>
<p >Seller: Mahmudul Hasan</p>
<p>Address:Mirpur,Dhaka</p>
<p>Mobile: 01521331269</p>
<p>Email: mhs331269@gmail.com</p>
</div>
<h3>Customer Information:</h3>
<div class="col-xs-4 to">
<p>Customer: {{$customer->cus_name}}</p>
<p>Customer ID:{{$customer->id}}</p>
<p>Address:{{$customer->cus_address}}</p>
<p>Mobile:{{$customer->cus_mobile}}</p>
<p>Email:{{$customer->cus_email}}</p>
</div>
<div>
<p>{{date("l jS \of F Y ")}}</p>
<p>Total Amount:{{Cart::subtotal()}} BDT</p>
<p>Payment Method:{{$payment}}</p>
<p>Paying Amount:{{$cash}}</p>
<p>Due:{{$due}}</p>
</div>
</div>
<div class="row table-row">
<table class="table table-striped">
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
@foreach($cart as $data)
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
</div>

<p style="text-align:center">THANK YOU.SEE YOU AGAIN</p>

</div>


 
 <button type="button" onclick="printDiv()"  class="btn btn-danger ">Print</button>

<a href=""class="btn btn-danger"><i class="fa fa-envelope-o"></i> Mail Invoice</a>

<script type="text/javascript">
function printDiv(){
var printContents=document.getElementById("printArea").innerHTML;
var originalContents=document.body.innerHTML;
document.body.innerHTML=printContents;
    window.print();
}

</script>





<style type="text/css">
body{margin-top:20px;
background:#eee;
}

/*Invoice*/
.invoice .top-left {
    font-size:65px;
	color:#3ba0ff;
}

.invoice .top-right {
	text-align:right;
	padding-right:20px;
}

.invoice .table-row {
	margin-left:-15px;
	margin-right:-15px;
	margin-top:25px;
}

.invoice .payment-info {
	font-weight:500;
}

.invoice .table-row .table>thead {
	border-top:1px solid #ddd;
}

.invoice .table-row .table>thead>tr>th {
	border-bottom:none;
}

.invoice .table>tbody>tr>td {
	padding:8px 20px;
}

.invoice .invoice-total {
	margin-right:-10px;
	font-size:16px;
}

.invoice .last-row {
	border-bottom:1px solid #ddd;
}

.invoice-ribbon {
	width:85px;
	height:88px;
	overflow:hidden;
	position:absolute;
	top:-1px;
	right:14px;
}

.ribbon-inner {
	text-align:center;
	-webkit-transform:rotate(45deg);
	-moz-transform:rotate(45deg);
	-ms-transform:rotate(45deg);
	-o-transform:rotate(45deg);
	position:relative;
	padding:7px 0;
	left:-5px;
	top:11px;
	width:120px;
	background-color:#66c591;
	font-size:15px;
	color:#fff;
}

.ribbon-inner:before,.ribbon-inner:after {
	content:"";
	position:absolute;
}

.ribbon-inner:before {
	left:0;
}

.ribbon-inner:after {
	right:0;
}

@media(max-width:575px) {
	.invoice .top-left,.invoice .top-right,.invoice .payment-details {
		text-align:center;
	}

	.invoice .from,.invoice .to,.invoice .payment-details {
		float:none;
		width:100%;
		text-align:center;
		margin-bottom:25px;
	}

	.invoice p.lead,.invoice .from p.lead,.invoice .to p.lead,.invoice .payment-details p.lead {
		font-size:22px;
	}

	.invoice .btn {
		margin-top:10px;
	}
}

@media print {
	.invoice {
		width:900px;
		height:800px;
	}
}</style>
 <script type="text/javascript"></script>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
 
  </div></body></html>
 