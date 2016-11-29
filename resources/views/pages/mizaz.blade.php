@extends('layout.master')
@section('title') Mizaz @endsection
@section('content')

<h1>KASBA</h1>
@for($i= 1; $i <= 8; $i++)
<div class="col-lg-4">
   <br>
   <img src="/images/d830b5f3948e3ec788daf9c9cf0c69d3.jpg" alt="Mountain View" style="width:304px;height:228px;"><br><br>
    <button href="/" class="btn btn-default glyphicon glyphicon-thumbs-up" type="submit"> Like!</button>
   <button href="/" class="btn btn-default glyphicon glyphicon-thumbs-down" type="submit"> Dis_Like!</button>
</div>
@for($j= 1; $j <= 2; $j++)
<div class="col-lg-6">
   <br>
   <img src="/images/e9c3d64fedaa4fc561f4661c3360cab6.jpg" alt="Mountain View" style="width:304px;height:228px;"><br><br>
    <button href="/" class="btn btn-default glyphicon glyphicon-thumbs-up" type="submit"> Like!</button>
   <button href="/" class="btn btn-default glyphicon glyphicon-thumbs-down" type="submit"> Dis_Like!</button>
</div>

@endfor
@endfor
@endsection
