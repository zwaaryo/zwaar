@extends('adminlte.nav_admin')

@section('content')

<ul class="list-group">
  <li class="list-group-item"><h4 class="post">All Users</h4></li>

</ul>
    <!-- Start Post All --> 
    @foreach($users as $user)
    
    <div class="card a">
  <div class="card-body a">
  <h5>#ID <span class="badge badge-pill badge-warning">{{$user->id}}</span></h5>
    <a href="#" class="link">{{$user->name}}</a> <hr>
      <button type="button" class="btn btn-outline-light">Delete</button>

 

  </div>
</div>
@endforeach
 
 

@endsection


 