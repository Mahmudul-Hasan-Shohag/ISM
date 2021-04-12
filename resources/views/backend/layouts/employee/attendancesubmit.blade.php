@extends('backend.master')
@section('dashboard')

<form action="{{route('attendance.create')}}" method="post">
@csrf
<div>
<label for="attendance_date">attendance date</label>
<input name="attendance_date" type="date" class="form-control" id="attendance_date" placeholder="">
</div>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">sl</th>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">attendance</th>
    </tr>
  </thead>
  <tbody>
  @foreach($attendance as $key=>$data)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td> {{$data->employeeAttendance->emp_id}} </td>
      <td>{{$data->employeeAttendance->emp_name}}</td>
      <td><div>
    <label for="attendance"></label>
    <select name="attendance" id="attendance">
    <option value="1">1</option>
    <option value="0">0</option>
  </select>
  </div></td>
    </tr>
    @endforeach   
  </tbody>
</table>


 
  
 
  

  
  
  <button type="submit" class="btn btn-primary" href="{{route('attendance.show')}}">Submit</button>
  </body>
  </table>
</form>
@endsection