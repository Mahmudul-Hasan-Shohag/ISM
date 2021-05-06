@extends('backend.master')
@section('dashboard')

<p>Order ID:{{$order->id}}</p>
<p>Customer ID:{{$order->customer_id}}</p>
<p>Order Date:{{$order->order_date}}</p>
<p>Order Status:{{$order->order_status}}</p>
<p>Total Products:{{$order->total_products}}</p>
<p>Subtotal:{{$order->subtotal}}</p>
<p>Total Price:{{$order->totalprice}}</p>
<p>Payment Status:{{$order->payment_status}}</p>
<p>Paying Amount:{{$order->cash}}</p>
<p>Due:{{$order->due}}</p>

@endsection