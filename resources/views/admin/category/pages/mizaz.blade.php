@extends('layout.admin')
@section('title') Mizaz @endsection
@section('content')

<h1>Mizaz
  <a href="/admin/category/add_mizaz" class=" btn btn-lg glyphicon glyphicon-thumbs-up" > ADD</a>
</h1>
@for($i= 1; $i <= 8; $i++)
<div class="col-lg-4">
   <br><h2>Mizaz-{{$i}}</h2>
   <img src="/images/d830b5f3948e3ec788daf9c9cf0c69d3.jpg" alt="Mountain View" style="width:304px;height:228px;"><br><br>
    <button href="/admin/category/mizaz" class="btn btn-default glyphicon glyphicon-thumbs-up" type="submit"> Repost!</button>
   <button href="/admin/category/mizaz" class="btn btn-default glyphicon glyphicon-thumbs-down" type="submit"> Hide!</button>
</div>


@endfor
@endsection
