@extends('layout.master')
@section('title') Hindi PATTI @endsection
@section('content')

<h1>Hindi_patti</h1>
@for($i= 1; $i <= 6; $i++)
<div class="col-lg-6">
   <br><h2>Hindi_patti-{{$i}}</h2>
   <img src="/images/d830b5f3948e3ec788daf9c9cf0c69d3.jpg" alt="Mountain View" style="width:304px;height:228px;"><br><br>
    <button href="/" class="btn btn-default glyphicon glyphicon-thumbs-up" type="submit"> Like!</button>
   <button href="/" class="btn btn-default glyphicon glyphicon-thumbs-down" type="submit"> Dis_Like!</button>
</div>
@endfor

@endsection
