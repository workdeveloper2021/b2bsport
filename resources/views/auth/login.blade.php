@extends('layouts.main-login')

@section('content')
<main class="login-bg">
  <div class="login-form-area">
    <div class="login-form">
      <div class="login-heading">
        <span>Authorization B2B</span>
        <p>Enter Login details to get access</p>
      </div>
      <div class="input-box">
        <div class="single-input-fields">
          <label>Email Address</label>
          <input type="email" name="email_address" id="email_address" value="{{ old('email_address') }}">
          <div class="bar"></div>
            @if ($errors->has('email_address'))
                <div class="alert alert-danger">
                    {{ $errors->first('email_address') }}
                </div>
            @endif
        </div>
        <div class="single-input-fields">
          <label>Password</label>
          <div class="bar"></div>
          
          <input type="password" name="password" id="password">
            @if ($errors->has('password'))
            <div class="alert alert-danger">
                {{ $errors->first('password') }}
            </div>
             @endif
        </div>
        <!-- <div class="single-input-fields login-check">
          <input type="checkbox" id="fruit1" name="keep-log">
          <label for="fruit1">Keep me logged in</label>
          <a href="#" class="f-right">Forgot Password?</a>
        </div> -->
      </div>
      <div class="login-footer">
        <p>Don’t have an account? <a href="{{  url('/') }}/register">Register</a> here </p>
        <button class="submit-btn3">Login</button>
      </div>
    </div>
  </div>
</main>
@endsection