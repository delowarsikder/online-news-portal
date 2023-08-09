@extends('students.layout')
@section('content')

<div class="container">
  <div class="row">
    <div class="card">

      <div class="card-header">
        <h2>All Student Info</h2>
      </div>
      <div class="card-body">
        <a href="{{url('/student/create')}}" class="btn btn-primary" title="Add New Student">
          <i class="fa-solid fa-plus"></i>
          Add Student Info</a>
        <br />
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Mobile</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach($students as $student)
              <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->address}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->mobile}}</td>
                <td>
                  <a href="{{url('/student/'.$student->id)}}" title="Student Details" class="btn btn-info btn-sm"><i
                      class="fa fa-eye" aria-hidden="true"></i> view</a>
                  <a href="{{url('/student/'.$student->id.'/edit')}}" title="Edit Student Details"
                    class="btn btn-warning btn-sm">Edit</a>
                  <form method="POST" action="{{ url('/student' . '/' . $student->id) }}" accept-charset="UTF-8"
                    style="display:inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Student"
                      onclick="return confirm('are you Confirmed to delete?')">Delete</button>
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
</div>

@stop