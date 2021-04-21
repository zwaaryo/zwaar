@extends('layouts.nav')

@section('content')
<html>
  <head>
 <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
 <link href="{{ asset('profile.css') }}" rel="stylesheet">

</head>
<body>
 <div class="container portfoliocard">

 
<div class="left_col">

<div class="">
  
<h3 class="location">
 
<!-- ----------------------------------------- -->
<ul class="list-group">
  <li class="list-group-item active">
  <!-- Star User Name -->
  @if(Auth::user())
{{Auth::user()->name}}
@endif
 <!-- End User Name -->
  </li>
</ul>
<!-- ----------------------------------------- -->


<ul class="list-group">
  <li class="list-group-item active">
    <div class="user_1"><div class=" website_number">
    <a href="{{ route('addlink') }}"><i class="fas fa-edit"></i>     </a>اظافهّ موقع جديد
   </div>  
  </li>
</ul>
</h3> 
<!-- ----------------------------------------- -->

</div> 
</div>
</div>

</div>

<!-- ----------------------------------------- -->

<div class="container link_user ">  
 <div class="alert alert-danger" role="alert">
 ملآحظهّ يجب مشاهده جميع الروابط والرجوع لتفعيل روابط مقاطعك في حال لم تشاهد الروابط لن تظهر لك خاصيهّ تفعيل مقاطعك
 </div>

<!-- ----------------------------------------- -->
 <!-- Star Posts User -->
   @foreach($postuserlink as $post)
   <!-- Star User Check -->

   @foreach($checks as $check)

@if($check->user_id != Auth::user()->id)

  <div class="alert alert-danger" role="alert">
 Not check
</div>
  @else
<div class="table-responsive">
<div class="card a">
@if(Session::has('message'))
<p class="alert alert-success">{{ Session::get('message') }}</p>
@endif
<!-- End if -->
<!-- ----------------------------------------- -->


  <div class="card-body a">
 <!-- ----------------------------------------- -->
  <!-- Star Links -->
   @foreach($links as $link)
   <div class="class_link">
  <div class="card">
    <h5 class="card-header">   #ID  {{$link['id']}}</h5>
  </div>
    <br><br>
       {{$link['link']}}  
       <br><br>
            @if($link->website_number === 1  )
                <div class="form-group form-check activation">
                <label class="form-check-label btn btn-outline-light btn-sm" for="exampleCheck1">Enabled </label> 
                </div>
            @else
                <div class="form-group form-check not_activation">
                    <form action="{{  route('checkbox_website_number',['id'=>$link->id])}}" method="GET">
                      @csrf 
                    <label class="form-check-label" for="exampleCheck1">Nots Enabled   </label> 
                    <button type="submit" class="btn btn-outline-light btn-sm">Activation</button>
                    </form>
                </div>
          @endif
         <form action="{{ url('delete/link/'.$link->id )}}" method="POST">
      @method('DELETE')
      @csrf 
      <!-- <input class="btn btn-danger" type="submit" value="Delete"/>  -->
      <button type="submit" class="btn btn-danger btn-sm">Delete</button>
   </form>
    <hr> 
  @endforeach   
  
  <!-- End Links -->
<!-- ----------------------------------------- -->

   </div>

 </div>
 @endif   


@endforeach      
@endforeach      
  <!-- End Post User -->
<!-- ----------------------------------------- -->
 
</div>
</div>
</div>
 
  
 


  </div>
</div>
</body>
</html>

@endsection
