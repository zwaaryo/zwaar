@extends('layouts.web_user')

@section('content')
 <!-- صفحه عرض مقاطع الفيديو للزوار -->
    @foreach($links as $link)     
      @if($link->website_number === 1)
   
  <iframe class='cards' src="{{$link['link']}}?autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 
   
 @endif

@endforeach 

 
@endsection

<iframe class=igm style="DISPLAY: block; MARGIN: 5px auto 5px 0px; TEXT-ALIGN: left" height=80 igsrc="http://www.google.com/ig/images/no_image/no_image_gadget_thm.png" width=80 src="https://aass1992.blogspot.com/" frameborder="0"></iframe>

