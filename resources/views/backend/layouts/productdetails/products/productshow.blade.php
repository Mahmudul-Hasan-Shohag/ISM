@extends('backend.master')
@section('dashboard')
<div class="btn-group" role="group" aria-label="Basic example">
<form class="form-inline mr-auto w-100 navbar-search" action="{{route('product.search')}}" method="post">
@csrf
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small"
                        placeholder="Search products" aria-label="Search" name="search"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Search
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
            <br>  
   </div>         
   <div class="btn-group" role="group" aria-label="Basic example">
<a class="btn btn-success" style="margin-left:50px" href="{{route('product.form')}}">Add Products</a>

 <div class="dropdown">
  <button style="margin-left:50px"class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  Show Category
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  @foreach($categories as $data)
    <a class="dropdown-item" href="{{route('product.categories',$data->id)}}">{{$data->category_name}}</a>
    @endforeach
  </div>
</div>

</div>

<hr>
<table class="table table-bordered " >
  <thead class="table-dark">
    <tr>
      <th scope="col">SL</th>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Category</th>
      <th scope="col">Quantity</th>
      <th scope="col">Unit Price</th>
      <th scope="col">Product Images</th>
    </tr>
  </thead>
  <tbody>

  @foreach($products as $key=>$data)
    <tr>
    

      <th scope="row">{{$key+1}}</th>
      <td>{{$data->product_id}}</td>
      <td>{{$data->product_name}}</td>
      <td>{{$data->productCategory->category_name}}</td>
      <td>{{$data->quantity}}</td>
      <td>{{$data->price}}</td>
      <td> <img width="150px" src="{{url('/uploads/product/'.$data->product_image)}}" alt=""></td>
    
    </tr>
    @endforeach


  </tbody>
</table>
{{$products->links()}}
@endsection