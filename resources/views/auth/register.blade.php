@extends('layouts.nav')


@section('content')
<header>
<div class="container ">
<div class="row justify-content-center">
    <div class="col-md-8 login">
             <div class="container">
                <h1 >{{ __('Register') }}</h1>

         
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                      <input id="name" type="name" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                      

                       
 
                       
                                <input id="email" type="email" class="" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           

 
                                 <input id="password" type="password" class="" name="password" required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           

 
                                 <input id="password-confirm" type="password" class="" name="password_confirmation" required autocomplete="new-password" placeholder="Password">
                         
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   {{ __('Register') }}
                                </button>
                                 <div class="register">
                <a class="but ton" type="submit" href="{{ url('/login') }}" >تسجيل الدخول <i class="fas fa-arrow-circle-right"></i></a>
                
          </div>
                            </div> 
                         </div>
                    </form>
                </div>
         
        
    </div>
   
    </div>
    </div>
</div> 

</header>
    @endsection
