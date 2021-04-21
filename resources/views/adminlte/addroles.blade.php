@extends('adminlte.nav_admin')

@section('content')

<ul class="list-group">
  <li class="list-group-item"><h4 class="post">Add Name Roles</h4></li>
</ul>

<div class="card" style="width: 100%;">
   <div class="card-body">
   @if(Session::has('message'))
<p class="alert alert-info">{{ Session::get('message') }}</p>
@endif
<form action="{{ route('add_roles') }}" method="POST">
{{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Name Roles</label>
    <input type="text" name="name_roles" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  required>
    <small id="emailHelp" class="form-text text-muted">اسم الرولز</small>

   </div>
  <div class="form-group">
                             <!-- اسم العرض  -->
    <label for="exampleInputPassword1">Display Name</label>
    <input  type="text" name="display_name" class="form-control" id="exampleInputPassword1" required >
    <small id="emailHelp" class="form-text text-muted">اسم العرض</small>

  </div>

  <div class="form-group">
                             <!-- وصف الرولز  -->
    <label for="exampleInputPassword1">Description</label>
    <input  type="text" name="description" class="form-control" id="exampleInputPassword1" required >
    <small id="emailHelp" class="form-text text-muted">وصف الرولز</small>

  </div>

  <div class="form-group">
                             <!-- الراوت المخصص للرولز  -->
    <label for="exampleInputPassword1">Allowed Route</label>
    <input  type="text" name="allowed_route" class="form-control" id="exampleInputPassword1" required>
    <small id="emailHelp" class="form-text text-muted">الراوت المخصص للرولز</small>

  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
 
 

@endsection


 