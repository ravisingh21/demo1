@extends('layout.master')
@section('title') Community @endsection
@section('content')

<h1>Discussions</h1>

  <form id="adminform" method="post">
    <textarea rows="4" cols="50">
    At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies.
  </textarea><br><br>
    <a href="/" class=" btn btn-lg glyphicon glyphicon-thumbs-up" > Comment </a>
  </form>
  <br>
  <div class="panel">
    <div class="panel-heading">
      Event's Discussion
    </div>
    <div class="panel-body">
      <p><b>Upcoming Events</b></p>
    </div  @for($i= 1; $i <= 3; $i++)
    <div class="panel-body">
      <p><b>Event {{$i}}</b></p>
    </div>
        <ul class="list-group">
          <li class="list-group-item">Comment by- GUEST NAME  <a href="/community">Delete</a> | <a href="/community">Edit</a></li>
        </ul>
          @endfor
    <div class="panel-body">
      <p><b>Past Events</b></p>
    </div>
      @for($i= 1; $i <= 3; $i++)
    <div class="panel-body">
      <p><b>Event {{$i}}</b></p>
    </div>
        <ul class="list-group">
          <li class="list-group-item">Comment by- GUEST NAME  <a href="/community">Delete</a> | <a href="/community">Edit</a></li>
        </ul>
          @endfor
  </div>


@endsection
