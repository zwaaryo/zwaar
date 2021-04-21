@extends('adminlte.nav_admin')

@section('content')



<ul class="list-group">
  <li class="list-group-item"><h4 class="post">Add Role UserName</h4></li>
</ul>

<div class="card" style="width: 100%;">
   <div class="card-body">

   <form action="{{ route('add_roleuser') }}" method="POST">
{{ csrf_field() }}
  
  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">UserName</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01" name="user_id">
    @foreach($user as $username) 
       <option value="{{$username->id}}"> {{$username->name}}</option>
  @endforeach
  </select>
  <!-- <input name="user_id"> -->

  </div> 
  
 
   <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Roles  User </label>
  </div>
    <select class="custom-select" id="inputGroupSelect01" name="role_id">
     @foreach($add_role_user as $roles)
       <option value="{{$roles->id}}">{{$roles->name}} </option>
@endforeach
  </select>
  <!-- <input name="role_id"> -->
  </div> 
 
  {{ csrf_field() }}
  
   </div>
   
   
  <button type="submit" class="btn btn-primary2">Add</button>
</form>
   </div>
   </div>

@endsection 
 
