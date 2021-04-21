@extends('layouts.nav')

@section('content')
  
    <div class="pad">

        <div class="row  mb-12">
 <img class='img1'  alt="Responsive image" src='https://visme.co/blog/wp-content/uploads/2019/08/header-1.gif'>
 
<br> <div class="col-12">
          
 <div class="card" style="width: 100%">
  <div class="card-body">
    <h5 class="card-title"> شاهد المواقع التاليهّ واكسب زوار مجانا لمقاطعك على يوتيوب</h5>
      <!-- <img class="youtube_img" src="https://ar.seaicons.com/wp-content/uploads/2015/11/MetroUI-YouTube-icon.png">  -->
          </div>
   </div>
</div>
        </div>
        @php 
        $website_numbers = 0;
        $not_website_numbers = 0;
        @endphp
        @foreach($links as $link)
          @php
        
          if($link->website_number == 0){
            $website_numbers++;
          }

          if($link->website_number == 1){
            $not_website_numbers++;
          }

          @endphp
        
        @endforeach
 <div class='website'>
@if($website_numbers > 0)
 
 
    <button type="button" class="btn btn-primary no">
روابط غير مفعلهّ <span class="badge badge-light">{{$website_numbers}}</span>
</button>
@endif


@if($not_website_numbers > 0)

 <button type="button" class="btn btn-primary">
الروابط المفعلهّ <span class="badge badge-light">{{$not_website_numbers}}</span>
</button>
 
@endif
   
        </div>

         
        <div class="card-group">
          
       <div class="card col-12">
        


      @foreach($posts as $post)

  
 <div class="card-body">
 
   <form action="{{  route('add_post_user')}}" method="post">
   @csrf
 
   <input type="name" class="d-inline-flex p-2 bd-highlight"name="post_user" value="{{$post['post_link']}}">
  
  <button type="submit" class="btn btn-light pull-right">   <!-- Add Number -->
 
    شاهد الموقع </button> 
  


   </form>
           </div> <hr>  
 
    @endforeach       
    <div style="display:block;margin: 0 auto 0 auto;">
    <img class="img2" alt="Responsive image" src='https://digitalmarketer.com/wp-content/uploads/2019/03/Fb-Ad-Template-Library-cta.gif'>

</div>
  
  
     <!-- <iframe width="300" height="300" src="https://www.youtube.com/embed/QVdrzHnQiF0?autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      
        <iframe width="300" height="300" src="https://www.youtube.com/embed/NtpkmftbrBU?autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->


  </div>
 </div> 
 </div>
        
@endsection

 
 