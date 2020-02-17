@extends('app.layout')
@section('section')
  <h1>Welcome, this is your home page</h1>

  <a href="{{route('create')}}" class="btn btn-outline-success my-2 my-sm-0 add-task">+Add Task</a>

@endsection
