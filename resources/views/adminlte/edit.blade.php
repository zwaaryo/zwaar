@extends('adminlte.nav_edit')

@section('content')
 


<div id="form-main">
  <div id="form-div">
    <h1> Edit Roles</h1>
    @if(Session::has('message'))
<p class="alert alert-info">{{ Session::get('message') }}</p>
@endif
    <form class="form" id="form1" action="{{ route('update_role') }}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{$edit_roles['id']}}">
      <p class="name">
        <input name="name"  value="{{$edit_roles->name}}"type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" />
        <small id="emailHelp" class="form-text text-muted">Name Role</small>
      </p>
      
      <p class="name">
        <input name="display_name"  value="{{$edit_roles->display_name}}"type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" />
        <small id="emailHelp" class="form-text text-muted">Display Name</small>
      </p>
      <p class="name">
        <input name="description"  value="{{$edit_roles->description}}"type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" />
        <small id="emailHelp" class="form-text text-muted">Description</small>
      </p>
      <p class="name">
        <input name="allowed_route"  value="{{$edit_roles->allowed_route}}"type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" />
        <small id="emailHelp" class="form-text text-muted">Allowed Route</small>
      </p>
      
      
      <div class="submit">
        <input type="submit" value="Seve" id="button-blue"/>
        <div class="ease"></div>
      </div>
    </form>
  </div>
 
 


 


  @endsection
