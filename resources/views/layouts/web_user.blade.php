<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
      
        <title>{{ config('app.name', 'Zwaar') }}</title>
    <link href="{{ asset('web_user.css') }}" rel="stylesheet">
 
             <body id="page-top" class="index" data-pinterest-extension-installed="cr1.3.4">

 
  

<main class="py-2">
            @yield('content')

</main>


  </html>
