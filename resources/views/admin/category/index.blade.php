@extends('layout.admin')
@section('title') Posts status @endsection
@section('content')
<h2>Manage Category</h2>
 <table class="table table-striped">
   <thead>
     <tr>
       <th>Name</th>
       <th>Action</th>
     </tr>
   </thead>
   <tbody>
     @for($i= 1; $i!= 10; $i++)
     <tr>
       <td>Ravish</td>
       <td><a href="/post_status">Delete</a> | <a href="/post_status">Edit</a></td>
     </tr>
     @endfor
   </tbody>
 </table>
 <a href="/post_status" class=" btn btn-lg glyphicon glyphicon-send" > Save </a>
@endsection
