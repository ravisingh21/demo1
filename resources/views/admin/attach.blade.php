@extends('layout.admin')
@section('title') Attachments @endsection

@section('content')

<div class="form-group" >
<form method="post" class="navbar-form navbar-left" role="search">
{{ csrf_field() }}
    <textarea rows="4" cols="50">
    At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies.
  </textarea><br>
  <button class="btn btn-default glyphicon glyphicon-folder-open"> Attach Files</button>
  <button type="submit" class="btn btn-default glyphicon glyphicon-floppy-disk"> Save</button>

</form>.
</div>

@endsection
