@extends('layouts.nav')

@section('content')

<div class="card-body container portfoliocard">

  <div class="card container portfoliocard">
 
  <div class="card-body">
  <h5 class="card-title">قم بتاكيد مشاهده الرابط</h5>
    <p class="card-text">في حاله لم تقم بتاكيد المشاهده لا يتم احتسابها مشاهده</p>
  <form  action="{{ route('add_id_user_check') }}" method="POST">
       {{ csrf_field() }}
       <button type="submit" class="btn btn-primary ok">تاكيد</button>
</form>

  </div>


</div>
   

 
</div>



@endsection
