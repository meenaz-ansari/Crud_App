@extends('layouts/admin')
@section('content')
<form action="/staff/update/{{$staff->id}}" method = "post">
{{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1"> name</label>
    <input type="text" class="form-control" name="name" value = "{{$staff->name}}"  >
    
  
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">ID</label>
    <input type="text" class="form-control" name="staff_id" value = "{{$staff->staff_id}}"  >
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="text" class="form-control" name="email"  value = "{{$staff->email}}" >
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Contact Number</label>
    <input type="text" class="form-control" name="contact_number" value = "{{$staff->contact_number}}"  >
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection