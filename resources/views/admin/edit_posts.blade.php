@extends('layout.admin')
@section('title') Edit posts @endsection

@section('content')

<div class="col-lg-12 ">
  <h1>KASBA</h1>
  @for($i= 1; $i <= 3; $i++)
  <div class="col-lg-4">
     <br>
     <img src="/images/d830b5f3948e3ec788daf9c9cf0c69d3.jpg" alt="Mountain View" style="width:304px;height:228px;"><br><br>
      <button href="/" class="btn btn-default glyphicon glyphicon-thumbs-up" type="submit"> Edit!</button>
      <button href="/" class="btn btn-default glyphicon glyphicon-thumbs-down" type="submit"> Delete!</button>
      <button href="/" class="btn btn-default glyphicon glyphicon-pushpin " type="submit"> Re-Post!</button>

  </div>
  @for($i= 1; $i <= 3; $i++)
  <div class="col-lg-6">
     <br>
     <img src="/images/d830b5f3948e3ec788daf9c9cf0c69d3.jpg" alt="Mountain View" style="width:304px;height:228px;"><br><br>
      <button href="/" class="btn btn-default glyphicon glyphicon-thumbs-up" type="submit"> Edit!</button>
      <button href="/" class="btn btn-default glyphicon glyphicon-thumbs-down" type="submit"> Delete!</button>
      <button href="/" class="btn btn-default glyphicon glyphicon-pushpin " type="submit"> Re-Post!</button>
  </div>
  @endfor
  @endfor
</div>
<!-- content-box -->
<!--ads--->
<div class="col-lg-12 ">
  <h1>Mizaz</h1>
  @for($i= 1; $i <= 3; $i++)
  <div class="col-lg-4">
     <br>
     <img src="/images/d830b5f3948e3ec788daf9c9cf0c69d3.jpg" alt="Mountain View" style="width:304px;height:228px;"><br><br>
      <button href="/" class="btn btn-default glyphicon glyphicon-thumbs-up" type="submit"> Edit!</button>
      <button href="/" class="btn btn-default glyphicon glyphicon-thumbs-down" type="submit"> Delete!</button>
      <button href="/" class="btn btn-default glyphicon glyphicon-pushpin " type="submit"> Re-Post!</button>
  </div>
  @endfor
</div>
<div class="col-lg-12 ">
  <h1>Ravish ki Report</h1>
  @for($i= 1; $i <= 3; $i++)
  <div class="col-lg-4">
     <br>
     <img src="/images/d830b5f3948e3ec788daf9c9cf0c69d3.jpg" alt="Mountain View" style="width:304px;height:228px;"><br><br>
      <button href="/" class="btn btn-default glyphicon glyphicon-thumbs-up" type="submit"> Edit!</button>
      <button href="/" class="btn btn-default glyphicon glyphicon-thumbs-down" type="submit"> Delete!</button>
      <button href="/" class="btn btn-default glyphicon glyphicon-pushpin " type="submit"> Re-Post!</button>
  </div>
  @endfor
</div>
<div class="col-lg-12 ">
  <h1>Hindi Patti</h1>
  @for($i= 1; $i <= 3; $i++)
  <div class="col-lg-4">
     <br>
     <img src="/images/d830b5f3948e3ec788daf9c9cf0c69d3.jpg" alt="Mountain View" style="width:304px;height:228px;"><br><br>
      <button href="/" class="btn btn-default glyphicon glyphicon-thumbs-up" type="submit"> Edit!</button>
      <button href="/" class="btn btn-default glyphicon glyphicon-thumbs-down" type="submit"> Delete!</button>
      <button href="/" class="btn btn-default glyphicon glyphicon-pushpin " type="submit"> Re-Post!</button>
  </div>
  @endfor
</div>

@endsection
