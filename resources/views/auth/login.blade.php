@extends('layouts.signup')

@section('content')
  
<!-- partial:index.partial.html -->
<div class="container">
  <img class="box-title" src="https://raw.githubusercontent.com/evansmbithi/ushindi/Maestro/img/ushindi_logo.svg">
  <div class="box">
    <!--     <h3 class="box-title">[Ushindi Sacco logo]</h3> -->
    <div class="button-box">
      <div id="btn"></div>
      <button type="button" class="toggle-btn" onclick="login()">Sign in</button>
      <button type="button" class="toggle-btn" onclick="register()">Register</button>
    </div>

    <form method="POST" action="{{ route('login') }}" id="login" class="input-group">
        @csrf

        
            {{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> --}}

            <div>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} input-field" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        

        
            {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> --}}

            <div >
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} input-field" name="password" placeholder="Password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        

        
            
                <div class="check-box">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            
          

        
            <div>
                <button type="submit" class="submit-btn">
                    {{ __('Login') }}
                </button>
            </div>

            <div>
                @if (Route::has('password.request'))
                    <a class="reset" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        
    </form>

    {{-- <form method="POST" action="/reg" id="register" class="input-group">
      <input type="email" class="input-field" placeholder="Enter Email" required>
      <input type="password" class="input-field" placeholder="Enter Password" required>
      <input type="password" class="input-field" placeholder="Confirm Password" required>
      <input type="checkbox" class="check-box"><span>I agree to the terms and conditions</span>
      <button type="submit" class="submit-btn">Sign up</button>
    </form> --}}

    <form method="POST" action="{{ route('register') }}" id="register" class="input-group">
        @csrf

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} input-field" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} input-field" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} input-field" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control input-field" name="password_confirmation" required>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="submit-btn" onclick="window1()">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>
  </div>
</div>

<!-- partial -->
@endsection


  

