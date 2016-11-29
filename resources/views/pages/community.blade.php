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
    </div>
        <ul class="list-group">
        @for($i= 1; $i <= 3; $i++)
        <li class="list-group-item">Message by- GUEST NAME<a href="/community">Delete</a> | <a href="/community">Edit</a></li>
        @endfor
        </ul>

    <div class="panel-body">
      <p><b>Past Events</b></p>
    </div>
        <ul class="list-group">
          @for($i= 1; $i <= 3; $i++)
          <li class="list-group-item">Message by- GUEST NAME<a href="/community">Delete</a> | <a href="/community">Edit</a></li>
          @endfor
        </ul>
  </div>


@endsection
