@extends('adminlte.nav_admin')

@section('content')


<ul class="list-group">
  <li class="list-group-item"><h4 class="post">Call Message</h4></li>
</ul>

  
    <div class="card a">
     <div class="card-body a">
 
  <table class="table table-bordered">
 
      <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Message</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach($calls as $call)
    <tr>
      <th scope="row">{{$call->id}}</th>
      <td>{{$call->name}}</td>
      <td>{{$call->email}}</td>
      <td>{{$call->phone}}</td>
      <td>{{$call->message}}</td>
  
      
       <form action="{{ route('delete.call.admin',['id'=>$call->id]) }}" method="POST">
   @method('DELETE')
   @csrf 
        <td><input class="btn btn-outline-light" type="submit" value="Delete" />  </td>
          </form> 
    </tr>
     @endforeach
  </tbody>
</table>
 

  </div>
 </div> 





 
 

@endsection
