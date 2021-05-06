@extends('backend.master')
@section('dashboard')
<form action="{{route('month.create')}}" method="post">
@csrf
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-group col-md-8">
      <label for="month">Month</label>
      <select id="month" class="form-control" name="month">
        <option selected>January</option>
        <option>February</option>
        <option>March</option>
        <option>April</option>
        <option>May</option>
        <option>June</option>
        <option>July</option>
        <option>August</option>
        <option>September</option>
        <option>October</option>
        <option>Movember</option>
        <option>December</option>
      </select>
    </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
@endsection