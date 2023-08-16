@extends('layouts.master')
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
    <div class="pull-left">
      <h2>Student Info</h2>
    </div>
    <div class="pull-right">
      <a class="btn btn-primary" href="{{ route('student.index') }}"> Back</a>
    </div>

  </div>
  <div class="card-body">
    <p>Id : {{$student->id}}</p>
    <p> <img width="100" height="100" class="img-circle" src="{{asset(($student->photo))}}" alt="student-photo"></p>
    <h5>Name : {{$student->name}}</h5>
    <p>Address: {{$student->address}}</p>
    <p>Email: {{$student->email}}</p>
    <p>Mobile: {{$student->mobile}}</p>
  </div>
</div>

@stop