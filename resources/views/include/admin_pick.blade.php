<table class="table table-bordered">
  <thead>
    <tr>
      <col width="10">
      <col width="300">
      <col width="50">
      <th>#</th>
      <th>URLs/Editorials List</th>
      <th class="pull-left">
        <a href="/admin/" class="btn btn-primary pull-right">Add New</a>
      </tr>
  </thead>
  <tbody>
    @for($i=1;$i<=3;$i++)
    <tr>
      <th scope="row">{{$i}}</th>
      <th>Content{{$i}} Link</th>
      <th><a href="/admin">Delete</a> | <a href="/admin">Edit</a></th>
    </tr>
    @endfor
  </tbody>
</table>
