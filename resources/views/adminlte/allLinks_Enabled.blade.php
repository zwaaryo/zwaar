@extends('adminlte.nav_admin')
 
@section('content')

 
<ul class="list-group">
  <li class="list-group-item"><h4 class="post">All Links  Enabled</h4></li>
</ul>
<hr>
    @foreach($links_admin as $link)
  @if($link->website_number == 1)
    <div class="card a">
  <div class="card-body a">
 
  <div>#ID {{$link->id}}</div>
    <a href="{{$link->link}}" class="link-enabled">{{$link->link}}</a> <hr>
      <button type="button" class="btn btn-outline-light">Delete</button>
     <a class="link-enabled"> UserName : {{$link->user->name}}</a>


  </div>
</div>@endif
@endforeach
 
 

@endsection
