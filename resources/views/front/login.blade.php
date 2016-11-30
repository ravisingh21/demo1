@extends('layout.master')
@section('title') LOGIN @endsection
@section('content')

<div class="login">
<h1>Login</h1>
  <form method="post">
    {{ csrf_field() }}
    <input type="text" name="username" placeholder="Username" required="required" /><br><br>
      <input type="password" name="password" placeholder="Password" required="required" /><br><br>
      <input type="submit" class="btn btn-primary btn-block btn-large" value="Admin Gateway">
  </form>
</div>

@endsection
