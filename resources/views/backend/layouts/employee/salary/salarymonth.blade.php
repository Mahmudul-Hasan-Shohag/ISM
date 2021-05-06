@extends('backend.master')
@section('dashboard')



<p style="text-align:center;"> 
<a class="btn btn-success" href="{{route('month.view')}}">View Month</a>
<a class="btn btn-primary" href="{{route('month.form')}}">Add Month</a>
<a class="btn btn-info" href="{{route('salary.form')}}">Add Employee Salary</a>
</p>



<hr>
<div class="dropdown">
  <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Show Month
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  @foreach($month as $data)
    <a class="dropdown-item" href="{{route('salary.month',$data->id)}}">{{$data->month}}</a>
    @endforeach
  </div>
</div>
<hr>
<table class="table table-bordered">
  <thead>
    <tr>
    <th scope="col">SL</th>
      <th scope="col">Name</th>
      <th scope="col">ID</th>
       <th scope="col">Month</th>
      <th scope="col">Salary</th>
      <th scope="col">Amount</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
  @foreach($salarymonth as $key=>$data)
    <tr>
    <th scope="row">{{$key+1}}</th>
      <td>{{$data->emp_name}}</td>
      <td>{{$data->emp_id}}</td>

      <td>{{$data->salaryMonth->month}}</td>
      <td>{{$data->salary}}</td>
      <td>{{$data->amount}}</td>
      <td>{{$data->date}}</td>
    </tr>
    @endforeach
   
  </tbody>
</table>
@endsection