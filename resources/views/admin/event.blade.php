@extends('layout.admin')
@section('title')  Events @endsection
@section('content')

<div class="panel">
  <div class="panel-heading">
    Events
  </div>
  <div class="panel-body">
    <p><b>Upcoming Events</b></p>
  </div>
      <ul class="list-group">
      @for($i= 1; $i <= 3; $i++)
      <li class="list-group-item">Cras justo odio <a href="/event">Delete</a> | <a href="/event">Edit</a></li>
      @endfor
      </ul>

  <div class="panel-body">
    <p><b>Past Events</b></p>
  </div>
      <ul class="list-group">
        @for($i= 1; $i <= 3; $i++)
        <li class="list-group-item">Cras justo odio <a href="/event">Delete</a> | <a href="/event">Edit</a></li>
        @endfor
      </ul>
</div>

@endsection
