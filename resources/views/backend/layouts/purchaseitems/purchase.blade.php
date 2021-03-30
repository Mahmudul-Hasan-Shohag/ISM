@extends('backend.master')
@section('purchase')


<div class="form-group col-md-4">
<a class="btn btn-success"  href="{{route('add')}}">Add Purchase Items</a>

</div>
<div class="form-group col-md-12 ">
<table class="table table-borderless table-dark table-hover ">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Category</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Purchase Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($purchase_details as $key=>$data)
    <tr class="table-primary">
    <th scope="row">{{$key+1}}</th>
            <td>{{$data->product_name}}</td>
            <td>{{$data->purchase_category}}</td>
            <td>{{$data->purchase_price}}</td>
            <td>{{$data->quantity}}</td>
            <td>{{$data->purchase_date}}</td>
                  
      <td>
      
      
      <a class="btn btn-danger" href="">Drop</a>
      </td>
      @endforeach

    </tr>
   
  </tbody>
  
</table>

</div>

@endsection