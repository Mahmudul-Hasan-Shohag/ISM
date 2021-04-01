@extends('backend.master')
@section('purchase')


<div class="form-group col-md-4">
<a class="btn btn-success"  href="{{route('add')}}">Add Purchase Items</a>

</div>
<div class="form-group col-md-12 ">
<table class="table table-borderless table-dark table-hover ">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Category</th>
      <th scope="col">Unit Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total Price</th>
      <th scope="col">Purchase Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($purchase_details as $key=>$data)
    <tr class="table-primary">
    <th scope="row">{{$key+1}}</th>
    <td>{{$data->id}}</td>
            <td>{{$data->product_name}}</td>
            <td>{{$data->purchase_category}}</td>
            <td>{{$data->unit_price}}</td>
            <td>{{$data->quantity}}</td>
            <td>{{$data->unit_price*$data->quantity}}</td>
            <td>{{$data->purchase_date}}</td>
            
           
            <td>
            <form action="{{route('purchase.delete',$data->id)}}" method="post">
            @csrf
            @method('DELETE') 
      <button type="submit" class="btn btn-danger">Delete</button>
      </form>
      </td>

      @endforeach

    </tr>
   
  </tbody>
  
</table>

</div>

@endsection