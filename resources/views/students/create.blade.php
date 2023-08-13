@extends('students.layout')
@section('content')

<div class="card">
  <div class="card-header">Add Student Info</div>
  <div class="card-body">
    @if ($errors->any())
    <div class="alert alert-danger">
      <strong>Error!</strong> <br>
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <form action="{{url('student')}}" method="post" enctype='multipart/form-data'>
      {!! csrf_field()!!}
      <div class="mt-2 form-group">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" required />
      </div>

      <div class="mt-2 form-group">
        <label for="address" class="form-label">Address</label>
        <input type="text" name="address" id="address" class="form-control" placeholder="Enter Address" required>
      </div>

      <div class="mt-2 form-group">
        <label for="email" class="form-label">Email</label>
        <input type="" class="form-control" name="email" id="email" placeholder="@stud.kuet.ac.bd" required>
        <!-- <input type="email" class="form-control" name="email" id="email" placeholder="@stud.kuet.ac.bd" pattern="^([\w]+@(stud\.kuet\.ac\.bd))$" required> -->
      </div>

      <div class="mt-2 form-group">
        <label for="mobile" class="form-label">Mobile Number</label>
        <!-- <input type="tel" id="mobile" name="mobile" class="form-control" value="+880" placeholder="+880" pattern="^(?:(?:\+|00)88)?(01[3-9])\d{8}$" required> -->
        <input type="tel" id="mobile" name="mobile" class="form-control" value="+880" placeholder="+880" required>
      </div>
      <div class="mt-2 form-group">
        <input type="file" name="photo" id="photo" class="form-control @error('image') is-invalid @enderror">
        @error('photo')
        <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>


      <div class="mt-2 form-group">
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show mb-2" role="alert">
          {{ $message }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <img src="storage/images/{{ Session::get('image') }}" class="mb-2" style="width:400px;height:200px;">
        @endif
      </div>

      <div class="mt-2 form-group">
        <button type="submit" class="mt-2 btn btn-primary">Save</button>
        <a href="{{route('student.index')}}" class="btn btn-warning">Cancel </a>
      </div>
    </form>
  </div>
</div>
@stop