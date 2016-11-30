@extends('layout.admin')
@section('title') Posts status @endsection
@section('content')
<h1>Welcome Admin!</h1>

@include('include.table_admin')
<br>
@include('include.table_post')
<br>
@include('include.admin_pick')
@endsection
