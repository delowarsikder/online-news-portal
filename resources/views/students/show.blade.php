@extends('students.layout')
@section('content')
<div class="card">
  <div class="card-header">
    <h2>Student Info</h2>
  </div>
  <div class="card-body">
    <h5>Name : {{$student->name}}</h5>
    <p>Address: {{$student->address}}</p>
    <p>Email: {{$student->email}}</p>
    <p>Mobile: {{$student->mobile}}</p>
  </div>
</div>

@stop
