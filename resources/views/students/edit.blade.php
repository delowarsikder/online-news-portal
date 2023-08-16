@extends('students.layout')
@section('content')
<div class="card">
  <div class="card-header">
    @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>
    @endif
    @if(session()->get('danger'))
    <div class="alert alert-danger">
      {{ session()->get('danger') }}
    </div>
    @endif
    <h2>Update Student Info</h2>
  </div>
  <div class="card-body">

    <form action="{{url('student/'.$student->id)}}" method="post">
      {!! csrf_field()!!}
      @method('PUT')
      <div class="mt-2 form-group">
        <strong>Name:</strong>
        <input type="text" name="name" class="form-control" value="{{$student->name}}" placeholder="Name" required>
      </div>

      <div class="mt-2 form-group">
        <label for="address" class="form-label">Address</label>
        <input type="text" name="address" id="address" class="form-control" value="{{$student->address}}"
          placeholder="Enter Address" required>
      </div>

      <div class="mt-2 form-group">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" value="{{$student->email}}"
          placeholder="@stud.kuet.ac.bd" pattern="^([\w]+@(stud\.kuet\.ac\.bd))$" required>
      </div>

      <div class="mt-2 form-group">
        <label for="mobile" class="form-label">Mobile Number</label>
        <input type="tel" id="mobile" name="mobile" class="form-control" placeholder="+880" value="{{$student->mobile}}"
          pattern="^(?:(?:\+|00)88)?(01[3-9])\d{8}$" required>
      </div>
      <div class="mt-2 form-group">

        <button type="submit" class="mt-2 btn btn-primary"
          onclick="return confirm('Are you Confirmed to update?')">Update</button>
        <a href="{{route('student.index')}}" class="btn btn-warning">Cancel </a>
      </div>

    </form>


  </div>
</div>

@stop