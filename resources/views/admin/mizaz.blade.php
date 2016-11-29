@extends('layout.admin')
@section('title') Mizaz @endsection
@section('content')

<h1>KASBA</h1>

  <form id="adminform" method="post">
    <textarea rows="4" cols="50">
    At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies.
  </textarea><br><br>
    <a href="/" class=" btn btn-lg glyphicon glyphicon-thumbs-up" > Submit </a>
  </form>
  <br>


@endsection
