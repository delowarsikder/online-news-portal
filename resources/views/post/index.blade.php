@extends('layouts.master')
@section('content')
<h1>Index method of Posts</h1>
<a href={{ route('post.show',['id'=>1]) }}> show post</a>
@endsection