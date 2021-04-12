@extends('backend.master')
@section('dashboard')
<a class="btn btn-success"  href="{{route('product.form')}}">Add Products</a>
<table class="table table-bordered table-info">
  <thead class="table-dark">
    <tr>
      <th scope="col">SL</th>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Category</th>
      <th scope="col">Age</th>
      <th scope="col">Weight</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Product Images</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach($products as $key=>$data)
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->product_id}}</td>
      <td>{{$data->product_name}}</td>
      <td>{{$data->productCategory->category_name}}</td>
      <td>{{$data->age}}</td>
      <td>{{$data->weight}}</td>
      <td>{{$data->quantity}}</td>
      <td>{{$data->price}}</td>
      <td> <img width="150px" src="{{url('/uploads/product/'.$data->product_image)}}" alt=""></td>
      @endforeach
    </tr>
  </tbody>
</table>
{{$products->links()}}
@endsection