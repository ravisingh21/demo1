@extends('layout.master')
@section('title') kasba @endsection
@section('content')

<h1>Ravish ki Report</h1>
<h1>Ravish ki Report</h1>
@for($i= 1; $i <= 3; $i++)
<div class="col-lg-4">
   <br><h2>Ravi_Ki_Report-{{$i}}</h2>
   <img src="/images/d830b5f3948e3ec788daf9c9cf0c69d3.jpg" alt="Mountain View" style="width:304px;height:228px;"><br><br>
    <button href="/" class="btn btn-default glyphicon glyphicon-thumbs-up" type="submit"> Like!</button>
   <button href="/" class="btn btn-default glyphicon glyphicon-thumbs-down" type="submit"> Dis_Like!</button>
</div>

@endfor
@endsection
