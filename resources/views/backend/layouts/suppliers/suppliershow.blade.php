@extends('backend.master')
@section('dashboard')
<h4 style="text-align: center;color:white;background-color:cyan;"><b>Suppliers Information </b></h4>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col"><form class="" action="{{route('supplier.search')}}" method="post">
            @csrf
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small"
                        placeholder="Type employee name" aria-label="Search" name="search"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Search
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form></th>
      <th scope="col"><a href="{{route('supplier.form')}}" class="btn btn-success">Add Supplier Information</a></th>
    </tr>
  </thead>
  
</table>




@if(session()->has('message'))
<div class="alert alert-info">
{{session()->get('message')}}
</div>
@endif    
<table class="table table-bordered">
  <thead class="table table-dark">
    <tr>
      <th scope="col">SL</th>
      <th scope="col"> ID</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Mobile</th>
      <th scope="col">Email</th>
      <th scope="col">Total Amount</th>
      <th scope="col">Paying Amount</th>
      <th scope="col">Due</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($suppliers as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->id}}</td>
      <td>{{$data->supplier_name}}</td>
      <td>{{$data->supplier_address}}</td>
      <td>{{$data->supplier_mobile}}</td>
      <td>{{$data->supplier_email}}</td>
      <td>{{$data->paying_amount+$data->due}}</td>
      <td>{{$data->paying_amount}}</td>
      <td>{{$data->due}}</td>
      <td>
      <div class="btn-group">
      <a href="{{route('supplier.edit',$data->id)}}" class="btn btn-success"><i class="fas fa-edit"></i>Edit</a>
      <a href="{{route('supplier.delete',$data->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection