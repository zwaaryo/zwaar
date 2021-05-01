@extends('layouts.web_user')

@section('content')
<iframe width=80 height=80 src="https://zwaa1992.blogspot.com/"></iframe>
 <!-- صفحه عرض مقاطع الفيديو للزوار -->
    @foreach($links as $link)     
      @if($link->website_number === 1)
   //cards
  <iframe class='' src="{{$link['link']}}?autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 
   
 @endif

@endforeach 

 
@endsection

 
