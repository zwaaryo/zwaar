@extends('adminlte.nav_admin')

@section('content')
<ul class="list-group">
  <li class="list-group-item"><h4 class="post">Add Posts</h4></li>
</ul>
 <div class="card" style="width: 100%;">
   <div class="card-body">
<form  action="{{ route('add_post_admin') }}" method="POST">
{{ csrf_field() }}
  <div class="form-group ">
    <label for="exampleInputEmail1">Add Posts</label>
    <input type="text" name="post_link" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Add Post" required>
     
    <small id="emailHelp" class="form-text text-muted">Add posts Link </small>
  </div>
     <button type="submit" class="btn btn-outline-light">Add</button>
 </form>
 
 
   
   </div>
</div>

@endsection


 