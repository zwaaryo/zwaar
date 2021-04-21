@extends('layouts.nav')

@section('content')
 <!-- صفحه عرض مقاطع الفيديو للزوار -->
     @foreach($links as $link)     
      @if($link->website_number === 1)
           
<iframe class='cards' src="{{$link['link']}}?autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

  @endif
   @endforeach 


  
   @endsection

 
 