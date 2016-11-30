@extends('layout.master')
@section('title') IK NAYA RASTA @endsection
@section('content')

<div class="col-lg-12 ">
  <h1>Kasba</h1>
  @for($i= 1; $i <= 6; $i++)
  <div class="col-lg-4">
     <br><h3>Kasba-{{$i}}</h3>
     <img src="/images/d830b5f3948e3ec788daf9c9cf0c69d3.jpg" alt="Mountain View" style="width:304px;height:228px;"><br><br>
      <button href="/" class="btn btn-default glyphicon glyphicon-thumbs-up" type="submit"> Edit!</button>
     <button href="/" class="btn btn-default glyphicon glyphicon-thumbs-down" type="submit"> Delete!</button>
  </div>
  @endfor
</div>

<div class="col-lg-12 ">
  <h1>Mizaz</h1>
  @for($i= 1; $i <= 8; $i++)
  <div class="col-lg-4">
     <br><h3>Mizaz-{{$i}}</h3>
     <img src="/images/d830b5f3948e3ec788daf9c9cf0c69d3.jpg" alt="Mountain View" style="width:304px;height:228px;"><br><br>
      <button href="/" class="btn btn-default glyphicon glyphicon-thumbs-up" type="submit"> Like!</button>
     <button href="/" class="btn btn-default glyphicon glyphicon-thumbs-down" type="submit"> Dis_Like!</button>
  </div>
  @endfor
</div>


<div class="col-lg-12 ">
  <h1>Ravish ki Report</h1>
  @for($i= 1; $i <= 3; $i++)
  <div class="col-lg-4">
     <br><h3>Ravi_Ki_Report-{{$i}}</h3>
     <img src="/images/d830b5f3948e3ec788daf9c9cf0c69d3.jpg" alt="Mountain View" style="width:304px;height:228px;"><br><br>
      <button href="/" class="btn btn-default glyphicon glyphicon-thumbs-up" type="submit"> Like!</button>
     <button href="/" class="btn btn-default glyphicon glyphicon-thumbs-down" type="submit"> Dis_Like!</button>
  </div>
  @endfor
</div>

<div class="col-lg-12 ">
  <h1>Hindi_patti</h1>
  @for($i= 1; $i <= 6; $i++)
  <div class="col-lg-6">
     <br><h3>Hindi_patti-{{$i}}</h3>
     <img src="/images/d830b5f3948e3ec788daf9c9cf0c69d3.jpg" alt="Mountain View" style="width:304px;height:228px;"><br><br>
      <button href="/" class="btn btn-default glyphicon glyphicon-thumbs-up" type="submit"> Like!</button>
     <button href="/" class="btn btn-default glyphicon glyphicon-thumbs-down" type="submit"> Dis_Like!</button>
  </div>
  @endfor
</div>
@endsection
