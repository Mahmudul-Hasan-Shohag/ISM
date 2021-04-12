@extends('backend.master')
@section('dashboard')

<div class="form-group col-md-12 ">
<table class="table table-borderless table-dark table-hover ">
  <thead>
    <tr>
      <th scope="col">SL</th>
      <th scope="col">ID</th>
      <th scope="col"> Name</th>
      <th scope="col"> Address</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Email</th>
      <th scope="col">Photos</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  
  @foreach($employee_info as $key=>$data)
    <tr class="table-primary">
    <th scope="row">{{$key+1}}</th>
            
            <td>{{$data->emp_id}}</td>
            <td>{{$data->emp_name}}</td>
            <td>{{$data->emp_address}}</td>
            <td>{{$data->emp_mobile}}</td>
            <td>{{$data->emp_email}}</td>  
            <td><img style="width:100px;height:100px;" src="{{url('uploads/employee/'.$data->emp_image)}}"> </td>         
      <td>
      
      
      <a class="btn btn-danger" href="">Update</a>
      </td>
      @endforeach

    </tr>
   
  </tbody>
  
</table>

</div>

@endsection