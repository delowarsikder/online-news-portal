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

    <form action="{{url('student/'.$student->id)}}" method="post" enctype='multipart/form-data'>
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
        <!-- <input type="email" class="form-control" name="email" id="email" value="{{$student->email}}"
          placeholder="@stud.kuet.ac.bd" pattern="^([\w]+@(stud\.kuet\.ac\.bd))$" required>
       -->
        <input type="email" class="form-control" name="email" id="email" value="{{$student->email}}"
          placeholder="@stud.kuet.ac.bd" required>
      </div>

      <div class="mt-2 form-group">
        <label for="mobile" class="form-label">Mobile Number</label>
        <!-- <input type="tel" id="mobile" name="mobile" class="form-control" placeholder="+880" value="{{$student->mobile}}"
          pattern="^(?:(?:\+|00)88)?(01[3-9])\d{8}$" required> -->
        <input type="tel" id="mobile" name="mobile" class="form-control" placeholder="+880" value="{{$student->mobile}}"
          required>
      </div>

      <div class="mt-2 form-group">
        <strong>Image:</strong>
        <input type="file" name="photo" id="photo" class="form-control @error('image') is-invalid @enderror">
        @error('photo')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <img width="100" height="100" name="photo" id="image" class="img-circle mt-1" src="{{asset(($student->photo))}}" alt="student-photo">
        </td>
      </div>

      <div class="mt-2 form-group">
        <button type="submit" class="btn btn-primary p-2">Update</button>
        <!-- <button type="submit" class="btn btn-primary p-2" onclick="return confirm('Are you Confirmed to update?')">Update</button> -->
        <button class="btn"> <a href="{{route('student.index')}}" type="button" class="btn btn-warning p-2">Cancel
          </a></button>
      </div>
    </form>
  </div>

@stop