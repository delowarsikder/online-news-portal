@extends('students.layout')
@section('content')

<div class="card">
  <div class="card-header">Add Student Info</div>
  <div class="card-body">
    <form action="{{url('student')}}" method="post">
      {!! csrf_field()!!}
      <div class="mt-2 form-outline">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" required />
      </div>

      <div class="mt-2 form-outline">
        <label for="address" class="form-label">Address</label>
        <input type="text" name="address" id="address" class="form-control" placeholder="Enter Address" required>
      </div>

      <div class="mt-2 form-outline">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="@stud.kuet.ac.bd" required>
      </div>

      <div class="mt-2 form-outline">
        <label for="mobile" class="form-label">Mobile Number</label>
        <input type="number" name="mobile" class="form-control" id="mobile" placeholder="mobile Number" required>
      </div>
      <div class="mt-2 form-outline">

        <button type="submit" class="mt-2 btn btn-primary">Save</button>
        <a href="/" class="btn btn-warning">Cancel </a>
      </div>
    </form>
  </div>
</div>

@stop