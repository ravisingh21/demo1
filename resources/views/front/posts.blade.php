@extends('layout.master')
@section('title')Post and Feedbacks @endsection
@section('content')

<h1>Naisadak-Ik Naya Rasta  </h1>

  <form class="login" id="adminform" method="post">
    {{csrf_field()}}
    <textarea rows="4" cols="50">
    At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies.
  </textarea>    <a href="#" class="btn btn-default " type="submit">Attach File</a>
<br><br>
  <input type="email" class="form-control" name="guest_email" placeholder="Please enter your email" required>
  <input type="submit" class=" btn btn-lg glyphicon glyphicon-send" Value="Send ">


  </form>
  <br>


@endsection
