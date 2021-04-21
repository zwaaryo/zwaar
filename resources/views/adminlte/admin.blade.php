@extends('adminlte.nav_admin')

@section('content')

<ul class="list-group">
  <li class="list-group-item"><h4 class="post">All Links</h4></li>

</ul>

 
    <!-- Start Post All --> 
    @foreach($posts as $post)
    <div class="card a">
  <div class="card-body a">
 
  <div>#ID {{$post->id}}</div>
    <a href="#" class="link">{{$post->post_link}}</a> <hr>

    <form action="{{ route('delete.destroy.admin',['id'=>$post->id]) }}" method="POST">
   @method('DELETE')
   @csrf 
        <td><input class="btn btn-outline-light" type="submit" value="Delete" />  </td>
          </form>

      <!-- <button type="button" class="btn btn-outline-light">Delete</button> -->

 

  </div>
</div>
@endforeach
 
 

@endsection


 