@extends('backend.master')
@section('dashboard')
<form style="padding-left:20px" action="{{route('salary.create')}}" method="post">
  @csrf
  

  <div class="form-group col-md-8">
    <label for="emp_name">Employee Name</label>
    <input type="text" class="form-control" id="emp_name" name="emp_name"  placeholder=""> 
 
  </div>

    <div class="form-group col-md-8">
    <label for="emp_id">Employee ID</label>
    <input type="text" class="form-control" id="emp_id" name="emp_id"  placeholder=""> 
 
  </div>
    
    <div class="form-group col-md-8">
      <label for="salary">Salary</label>
      <select id="salary" class="form-control" name="salary">
        <option selected>Paid</option>
      </select>
    </div>
    <div class="form-group col-md-8">
      <label for="month">Month</label>
      <select id="month" class="form-control" name="month">
      @foreach($month as $data)
        <option value="{{$data->id}}">{{$data->month}}</option>
       @endforeach
      </select>
    </div>

    <div class="form-group col-md-8">
    <label for="amount">Amount</label>
    <input type="number" class="form-control" id="amount" name="amount"  placeholder=""> 
 
  </div>
    

    <div class="form-group col-md-8">
    <label for="date"></label>
    <input type="date" class="form-control" id="date" name="date"  placeholder="Select Date"> 
 
  </div>
    
   
  <button type="submit" class="btn btn-primary" style="btn btn-block" >Add</button>
  
</form>
@endsection