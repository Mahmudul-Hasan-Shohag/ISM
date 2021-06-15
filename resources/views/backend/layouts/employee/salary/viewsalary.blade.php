@extends('backend.master')
@section('dashboard')
<h4 style="text-align: center;color:white;background-color:purple;"><b>Employees Salary </b></h4>  
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">
      <form class="" action="{{route('employee.search')}}" method="post">
            @csrf
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small"
                        placeholder="Type employee id or month" aria-label="Search" name="search"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Search
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
      </th>
      <th scope="col"><a class="btn btn-info" href="{{route('salary.form')}}">Add Employee Salary</a></th>
      <th scope="col"><button type="button" onclick="printDiv()"  class="btn btn-danger "><i class="fas fa-print"></i>Print</button></th>
    </tr>
  </thead>
</table>
<hr>
<div id="printArea">
<table class="table table-bordered">
  <thead class="table-dark">
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
  @foreach($salary as $key=>$data)
    <tr>
    <th scope="row">{{$key+1}}</th>
      <td>{{$data->emp_name}}</td>
      <td>{{$data->emp_id}}</td>

      <td>{{$data->month}}</td>
      <td>{{$data->salary}}</td>
      <td>{{$data->amount}}</td>
      <td>{{$data->date}}</td>
    </tr>
    @endforeach
   
  </tbody>
</table>
</div>
<script type="text/javascript">
function printDiv(){
var printContents=document.getElementById("printArea").innerHTML;
var originalContents=document.body.innerHTML;
document.body.innerHTML=printContents;
    window.print();
}

</script>
@endsection