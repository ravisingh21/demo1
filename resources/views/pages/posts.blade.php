@extends('layout.master')
@section('title')Post and Feedbacks @endsection
@section('content')

<h1>Naisadak-Ik Naya Rasta  </h1>

  <form id="adminform" method="post">
    <textarea rows="4" cols="50">
    At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies.
  </textarea><br><br>
    <a href="/" class=" btn btn-lg glyphicon glyphicon-send" > Send </a>
  </form>
  <br>


@endsection
