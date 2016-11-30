<table class="table table-bordered">
  <thead>
    <tr>
      <col width="10">
      <col width="300">
      <col width="50">
      <th>#</th>
      <th>Messages</th>
      <th>Action
      </tr>
  </thead>
  <tbody>
    @for($i=1;$i<=3;$i++)
    <tr>
      <th scope="row">{{$i}}</th>
      <th>Message By Guest{{$i}}</th>
      <th><a href="/admin">Delete</a> | <a href="/admin">Reply</a></th>
    </tr>
    @endfor
  </tbody>
</table>
