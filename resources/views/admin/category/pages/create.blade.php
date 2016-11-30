@extends('layout.admin')
@section('title') Hindi PATTI @endsection
@section('content')
<br>
<form>
  <input type="text" class="form-control" placeholder="Category Name" >
  <button class="btn btn-default " type="submit">Create</button>
  <button class="btn btn-default " type="button" id="dropdownMenu1" >
    Category/Sub-Category
    <span class="caret"></span>
  </button>
  <a href="/admin/category/firstpost" class="btn btn-default " type="submit">Add New Post</a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Category</a></li>
    <li><a href="#">Sub-Category</a></li>
  </ul>
</form>

<h1>Category Name</h1>
<h3>Post Name</h3>
<form id="adminform" method="post">
  <textarea rows="4" cols="50">
  At w3schools.com you will learn how to make a website. We offer free tutorials in all web development technologies.
</textarea><br><br>
  <a href="/admin/category" class=" btn btn-lg glyphicon glyphicon-thumbs-up" > ADD</a>
  <a class="btn btn-default " type="submit">Attach File</a>
</form>

@endsection
