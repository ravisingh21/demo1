<table class="table table-bordered">
  <thead>
    <tr>
      <col width="10">
      <col width="300">
      <col width="50">
      <th>#</th>
      <th>Post Reach</th>
      <th>Action
      </tr>
  </thead>
  <tbody>
    @for($i=1;$i<=3;$i++)
    <tr>
      <th scope="row">{{$i}}</th>
      <th>Post Name{{$i}}</th>
      <th><a href="/admin">Shares</a> | <a href="/admin">Comments</a></th>
    </tr>
    @endfor
  </tbody>
</table>
