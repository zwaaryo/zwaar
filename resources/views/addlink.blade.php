@extends('layouts.nav')

@section('content')
<html>
  <head>
 <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
 <link href="{{ asset('profile.css') }}" rel="stylesheet">

</head>
<body>
 
<div class="container portfoliocard">


  <form  action="{{ route('addlink') }}" method="post">
  @if(Session::has('message'))
<p class="alert alert-success">{{ Session::get('message') }}</p>
@endif
{{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Add Link Web</label>
    <input type="name" class="add" name="link" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="https://" required>
   </div>
  <button type="submit" class="btn btn-primary">Save</button>
  <hr>
  <div class="alert alert-danger" role="alert">:  اتباع الخطواط التاليهّ امر مهم جدا لمشاهده فديوهاتك   {{Auth::user()->name}}
</div>
  <br>
  <div>١: قم الضغط على زر مشاركهّ الفيديو </div>
  <br>
  <div><img  src="{{URL::asset('/img/img2.png')}}" class="addlink" height="400" width="1000" >  </div>
  <br>
  <div>٢ : قم ب اختيار تضمين الفيديو </div>
  <br>
  <div><img  src="{{URL::asset('/img/img3.png')}}" class="addlink" height="400" width="1000" >  </div>
  <br>
<div> src  ٣ : اختر الرابط الموجود في  </div>
  <br>   
  <div><img  src="{{URL::asset('/img/img1.png')}}" class="addlink" height="400" width="1000" >  </div>
</form>
  
 
  </div>
 
 
</body>
</html>



@endsection
<script>(function(s,u,z,p){s.src=u,s.setAttribute('data-zone',z),p.appendChild(s);})(document.createElement('script'),'https://iclickcdn.com/tag.min.js',4175582,document.body||document.documentElement)</script>
