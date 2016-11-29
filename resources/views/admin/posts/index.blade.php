@extends('layout.admin')
@section('title') Posts status @endsection
@section('content')
<h2>Posts</h2>
<a href=""></a>
 <table class="table table-striped">
   <thead>
     <tr>
       <th>Guest</th>
       <th>Post|Img</th>
       <th>Post Title|Comments</th>
       <th>Action</th>
     </tr>
   </thead>
   <tbody>
     @for($i= 1; $i!= 10; $i++)
     <tr>
       <td>Ravish</td>
       <td><img src=""></td>
       <td><img src=""></td>

       <td><a href="/post_status">Delete</a> | <a href="/post_status">Edit</a></td>
     </tr>
     @endfor
   </tbody>
 </table>
@endsection
