@extends('backend.master')
@section('dashboard')

<table class="table table-bordered">
    <thead>
      <tr>
      
      <th>Name</th>
      <th>ID</th>
        <th>Attendance</th>
        <th>Date</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    
      <tr>
     @foreach($attendance as $data)

    
     <td>{{$data->employeeAttendance->emp_id}}</td>
     <td>{{$data->employeeAttendance->emp_name}}</td>
        <td>{{$data->attendance}}</td>
        <td>{{$data->attendance_date}}</td>
        <td><button type="submit" class="btn btn-success" >Update</button></td>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection