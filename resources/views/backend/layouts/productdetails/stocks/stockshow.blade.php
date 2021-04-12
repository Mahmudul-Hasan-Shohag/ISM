@extends('backend.master')
@section('dashboard')
<table class="table table-bordered table-info">
  <thead class="table-dark">
    <tr>
      <th scope="col">SL</th>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Category</th>
      
     
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach($stocks as $key=>$data)
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->productStock->product_id}}</td>
      <td>{{$data->productStock->product_name}}</td>
      <td>{{$data->productStock->category_name}}</td>
      @endforeach
    </tr>
  </tbody>
</table>
@endsection