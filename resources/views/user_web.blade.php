@extends('layouts.web_user')

@section('content')
<iframe width=80 height=80 src="https://zwaa1992.blogspot.com/"></iframe>
 <!-- صفحه عرض مقاطع الفيديو للزوار -->
    @foreach($links as $link)     
      @if($link->website_number === 1)
   
  <iframe class='cards' src="{{$link['link']}}?autoplay=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 
   
 @endif

@endforeach 

 <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-J3FSGDB5HK"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-J3FSGDB5HK');
</script>
@endsection

 
