@extends('layout.admin')
@section('title') Posts status @endsection
@section('content')
<h2>Posts</h2>
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
 <a href="/post_status" class=" btn btn-lg glyphicon glyphicon-send" > Save </a>

<br>
<br>

 @for($i= 1; $i!= 10; $i++)
Post Title|ABCD
<div class="progress">
  <div class="progress-bar progress-bar-success" style="width: 35%">Like
  </div>
  <div class="progress-bar progress-bar-warning progress-bar-striped" style="width: 20%">Dislike
  </div>
  <div class="progress-bar progress-bar-danger" style="width: 10%">Share
  </div>
  <div class="progress-bar progress-bar-info progress-bar-striped" style="width: 10%">Comments
  </div>
</div>
@endfor

@endsection
