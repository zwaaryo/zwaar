@extends('adminlte.nav_admin')

@section('content')

<ul class="list-group">
  <li class="list-group-item"><h4 class="post">All Roles User Name</h4></li>

</ul>
 
 
<div class="card" style="width: 100%;">
   <div class="card-body">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">User Name</th>
      <th scope="col">Admin</th>
      <!-- <th scope="col">Edtor</th> -->
      
       <th scope="col">Delete</th>

     </tr>
  </thead>
    <tbody>
  @foreach($role_user as $role)
   <tr>
      <th scope="row"><span class="badge badge-secondary">{{$role->id}}</span></th>
   
     @foreach($users as $user)
      <th> {{$user->name}}</th>
    @endforeach
      <td>Admin 
 
        <div class="form-group form-check">
        @role('admin')
             <input type="checkbox" class="form-check-input" value=" " checked='checked'   id="exampleCheck1">

             @else
             <input type="checkbox" class="form-check-input" value="1"  id="exampleCheck1">

            @endrole
           </div>  
        
      </td>
      <!-- <td>Edtor 
       <div class="form-group form-check">
       @role('Edtor')
             <input type="checkbox" class="form-check-input" value="1" checked="checked" id="exampleCheck1">
            @else
            <input type="checkbox" class="form-check-input" value="1" id="exampleCheck1">

             @endrole
           </div>
      </td> -->

      <!-- <form action="{{ route('delete.roleusername', $role->id) }}" method="POST">
      @csrf
     

       <td><input class="btn btn-danger" type="submit" value="Delete" />  </td>
          
           </form> -->
           <form action="{{ route('delete.roleusername',  [$role->id] ) }}" method="POST">
        @csrf 
        @method('delete')      
        <td><button class="btn btn-danger btn-sm delete-confirm"  type="submit">Delete</button></td>
       </form>
 
          
 
    </tr>
 @endforeach
      
  </tbody>   
</table>


</div>
</div>
 
 

@endsection


 