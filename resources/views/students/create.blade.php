@extends('layouts/admin')
@section('content')
<form action="store" method = "post">
{{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">first name</label>
    <input type="text" class="form-control" name="first_name"  placeholder="Enter your first name">
  
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">last name</label>
    <input type="text" class="form-control" name="last_name" placeholder="enter your last name">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection