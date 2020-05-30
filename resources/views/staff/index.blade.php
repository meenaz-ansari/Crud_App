@extends('layouts/admin')
@section('content')
<!-- DataTales Example -->
<div class="card shadow mb-4">
            
            <div class="card-header py-8" >
<a href="create" class="btn btn-primary btn-round">ADD STAFF</a>


</div>  
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>ID</th>
                      <th>Email</th>
                      <th>Contact Number</th>
                      <th colspan = "2"> Action </th>
                    </tr>
                  </thead>
                  
                  <tbody>
                  @foreach($all_staff as $staff)
                    <tr>
                      <!-- <td>{{$loop-> iteration}}</td> -->
                      
                      <td>{{$staff->name}}</td>
                      <td>{{$staff->staff_id}}</td>
                      <td>{{$staff->email}}</td>
                      <td>{{$staff->contact_number}}</td>
                      <td><a href="/staff/edit/{{$staff->id}}" class="btn">Edit</a></td>
                      <td><form action ="/staff/delete/{{$staff->id}}" method = POST> 
                      @csrf 
                      @method('DELETE')
                      <button class="btn" type = "submit">Delete</button>
                      </form>

                      </td>

                    </tr>

                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
@endsection()