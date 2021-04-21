@extends('layouts.nav')

@section('content')
<header>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 login">
         <h1> Login </h1>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

  
                            
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                       
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                       

                     
                                
                                <input type="checkbox"><span>{{ __('Remember Me') }}</span>
                                @if (Route::has('password.request'))
                                
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>

                            @endif
                              
                      

                               
                                <button type="submit">
                                    {{ __('Login') }}
                                </button>
                                <div class="row">
                                <a class="button" type="submit" href="{{ url('/register') }}" >Register <i class="fas fa-arrow-circle-right"></i></a>
                           </div> 
                    </form>
                </div>
           
        </div>
    </div>
</div>

 

 
@endsection
</header>