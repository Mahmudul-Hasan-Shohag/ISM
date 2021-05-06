@extends('backend.master')
@section('dashboard')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Number</th>
     
      <th scope="col">Month</th>
    </tr>
  </thead>
  <tbody>
  @foreach($month as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$data->month}}</td>
    </tr>
  @endforeach
  
  </tbody>
</table>
@endsection