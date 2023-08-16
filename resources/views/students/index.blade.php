@extends('layouts.master')
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
        <div class="table-responsive mt-1">
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($students as $student)
              <tr class="text-center">
                <td>{{$student->id}}</td>
                <td>
                  @if ($student->photo)
                  <img width="100" height="100" class="img-circle " src="{{asset(($student->photo))}}"
                    alt="{{asset(($student->photo))}}">
                  @else
                  <img width="100" height="100" class="img-circle " src="{{asset('/images/user.png')}}"
                    alt=" {{asset(('images/user.png'))}}" />
                  @endif
                </td>
                <td>{{$student->name}}</td>
                <td>{{$student->address}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->mobile}}</td>
                <td >
                  <span class="p-1"> <a href="{{url('/student/'.$student->id)}}" title="Student Details"
                      class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> view</a> </span>
                  <span class="p-1"><a href="{{url('/student/'.$student->id.'/edit')}}" title="Update Student Details"
                      class="btn btn-secondary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Edit</a> </span>
                  <span class="p-1">
                    <form method="POST" action="{{ url('/student' . '/' . $student->id) }}" accept-charset="UTF-8"
                      style="display:inline">
                      {{ method_field('DELETE') }}
                      {{ csrf_field() }}
                      <button type="submit" class="btn btn-danger btn-sm" title="Delete Student"
                        onclick="return confirm('are you Confirmed to delete?')">Delete</button>
                    </form>
                  </span>
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