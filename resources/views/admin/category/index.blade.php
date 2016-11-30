@extends('layout.admin')
@section('title') Admin @endsection
@section('content')
<h2>Manage Category</h2>
<a href="/admin/category/create" class="btn btn-primary pull-right">Create New Category</a>
 <table class="table table-striped">
   <thead>
     <tr>
       <th>Category</th>
       <th>Action</th>
     </tr>
   </thead>
   <tbody>
     <tr>
       <td>Kasba</td>
       <td><a href="/admin/category/kasba">Delete</a> | <a href="/admin/category/kasba">Edit</a></td>
     </tr>
     <tr>
       <td>Mizaz</td>
       <td><a href="/admin/category/mizaz">Delete</a> | <a href="/admin/category/mizaz">Edit</a></td>
     </tr>
     <tr>
       <td>Hindi_patti</td>
       <td><a href="/admin/category/hindi_patti">Delete</a> | <a href="/admin/category/hindi_patti">Edit</a></td>
     </tr>
     <tr>
       <td>Ravish_ki_report</td>
       <td><a href="/admin/category/ravish_ki_report">Delete</a> | <a href="/admin/category/ravish_ki_report">Edit</a></td>
     </tr>
   </tbody>
 </table>
 <a href="/admin/category" class=" btn btn-lg glyphicon glyphicon-send" > Save </a>
@endsection
