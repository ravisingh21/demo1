@extends('layout.admin')
@section('title') Hindi_patti @endsection
@section('content')

<h1>Hindi_patti</h1>
<h3>Post Name</h3>
<form id="adminform" method="post">
  <textarea rows="4" cols="50">
  At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies.
</textarea><br><br>
  <a href="/admin/category/hindi_patti" class=" btn btn-lg glyphicon glyphicon-thumbs-up" > ADD</a>
  <a href="#" class="btn btn-default " type="submit">Attach File</a>
</form>

@endsection
