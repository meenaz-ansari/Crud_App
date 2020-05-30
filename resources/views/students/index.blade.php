@extends('layouts/admin')
@section('content')
<!-- DataTales Example -->
<div class="card shadow mb-4">
            
            <div class="card-header py-8" >
<a href="create" class="btn btn-primary btn-round">ADD STUDENT</a>


</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Number</th>
                      <th>First name</th>
                      <th>Last name</th>
                      <th colspan = "2"> Action </th>
                    </tr>
                  </thead>
                  
                  <tbody>
                  @foreach($all_student as $student)
                    <tr>
                      <td>{{$loop-> iteration}}</td>
                      <td>{{$student-> first_name}}</td>
                      <td>{{$student-> last_name}}</td>
                      <td><a href="/edit/{{$student->id}}" class="btn">Edit</a></td>
                      <td><form action ="/delete/{{$student->id}}" method = POST> 
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