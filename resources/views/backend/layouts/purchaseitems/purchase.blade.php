@extends('backend.master')
@section('purchase')


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
    <tr class="table-primary">
      <th scope="row">1</th>
      <td >Cow</td>
      <td>Animal</td>
      <td>45000tk</td>
      <td>45000tk</td>
      <td>2021-03-25</td>
      <td> <a class="btn btn-success" href="{{route('add')}}">Add</a></td>
      @yield('add')
      <td> <a class="btn btn-danger" href="">Drop</a></td>

    </tr>
    
  </tbody>
</table>



@endsection