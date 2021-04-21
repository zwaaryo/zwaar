@extends('adminlte.nav_admin')

@section('content')

<ul class="list-group">
  <li class="list-group-item"><h4 class="post">All Roles Name  <a href="addroles" class="btn btn-info  btn-sm"><i class="fas fa-plus-square"></i></a>
</h4>
</li>
</ul>

<div class="card" style="width: 100%;">
   <div class="card-body">

   <table class="table">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Name Roles</th>
      <th scope="col">Display Name</th>
      <th scope="col">Description</th>
      <th scope="col">Allowed Route</th>
       <th scope="col">Edit</th>
       <th scope="col">Delete</th>
    </tr>
  </thead>
  @if(Session::has('message'))
<p class="alert alert-info">{{ Session::get('message') }}</p>
@endif
  @foreach($allrole as $role) <tbody> 
   <tr>
     
      <th scope="row"><span class="badge badge-info">{{$role->id}}</span></th>
      <td>{{$role->name}}</td>
      <td>{{$role->display_name}}</td>
      <td>{{$role->description}}</td>
      <td>{{$role->allowed_route}}</td>   
     <td>
     
      <a href="{{route('edit_role', [$role->id])}}" class="btn btn-info" >Edit</a>

      </td>

    <td>
    <form action="{{ url('delete_roles/'.$role->id) }}" method="post">
   
        @csrf
        @method('DELETE')
         <button type="submit" class="btn btn-danger">Delete</button>
    </form>

    </td>
  
</div>
     <td>
     
 
  </tbody>   @endforeach 
</table>


</div>
</div>

 



@endsection


 