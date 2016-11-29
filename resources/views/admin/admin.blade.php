@extends('layout.admin')
@section('title') Admin @endsection

@section('content')

<div class="panel">
  <div class="panel-heading">
    Admin_NAME
  </div>
  <div class="panel-body">
    <p><b>Social Pages</b></p>
  </div>
      <ul class="list-group">
      @for($i= 1; $i <= 3; $i++)
      <li class="list-group-item">Page {{ $i }} <a href="/admin">LOGIN</a> | <a href="/admin">LOGOUT</a></li>
      @endfor
      </ul>

  <div class="panel-body">
    <p><b>TO DO LIST</b></p>
  </div>
      <ul class="list-group">
        @for($i= 1; $i <= 3; $i++)
        <li class="list-group-item">TASK-{{ $i}} <a href="/admin">Delete</a> | <a href="/admin">Edit</a></li>
        @endfor
      </ul>
      <br>
      <a href="/admin">SAVE</a> ||  <a href="/">LOGOUT</a>
</div>

@endsection
