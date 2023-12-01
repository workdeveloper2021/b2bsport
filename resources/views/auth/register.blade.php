@extends('layouts.main-login')

@section('content')
<style>
.textd {
  margin: 0px;
    padding: 0px;
}
</style>
<main class="login-bg">
  <div class="register-form-area">
    <div class="register-form text-center">
      <div class="register-heading">
        <span>Sign Up</span>
        <p>Create your account to get full access</p>
      </div>
    <form class="login" action="{{ route('user_register') }}" method="post">     
      <div class="input-box">
          <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
          <div class="row paraRow">
          </div>
           <div class="single-input-fields">
            <label>First Name<span>*</span></label>
            <input type="text" name="first_name" id="first_name" value="{{ old('first_name') }}" required minlength="3">
            <div class="bar"></div>
            <div class="alert alert-danger textd" style="display: none" id="fname_val">

            </div>
          </div>
           <div class="single-input-fields">
            <label>Last Name<span>*</span></label>
            <input type="text" name="last_name" id="last_name" value="{{ old('last_name') }}" required minlength="3">
            <div class="bar"></div>
            <div class="alert alert-danger textd" style="display: none"  id="lname_val">
            </div>
          </div>
             <div class="single-input-fields">
                <label>MOBILE number:<span>*</span></label>
                <input type="text" name="phone" id="phone" value="{{ old('phone') }}" required minlength="10" maxlength="10">
                <div class="bar"></div>
                <div style="font-size: 13px;float: right;" id="phone_msg">Enter your 10 digit mobile number</div>
                <div class="alert alert-danger textd" style="display: none" id="phone_val"></div>
            </div>

           <div class="single-input-fields">
            <label>Email<span>*</span></label>
            <input type="email"  name="email_address" id="email_address" value="{{ old('email_address') }}" required minlength="3">
            <div class="bar"></div>
            <div class="alert alert-danger textd" style="display: none" id="email_val">
            </div>
          </div>
           <div class="single-input-fields">
            <label>Password<span>*</span></label>
            <input type="password" name="password" id="password" minlength="5" required>
            <div class="bar"></div>
            <div class="alert alert-danger textd" style="display: none" id="pass_val">

            </div>
          </div>
           <div class="single-input-fields">
            <label>Re-Enter Password<span>*</span></label>
            <input type="password" name="re_password" id="re-password" minlength="5" required>
            <div class="bar"></div>
            <div class="alert alert-danger textd" style="display: none" id="cpass_val">

            </div>
            <div class="alert alert-danger textd" style="display: none" id="pAndCPass_val">

            </div>
          </div>
      </div>
      <div class="register-footer">
        <p> Already have an account? <a href="{{  url('/login') }}"> Login</a> here </p>
        <button type="submit" id="submit" class="submit-btn3">Sign Up</button>
      </div>
      
      </form>
        
    </div>
  </div>
</main>
@endsection
@push('scripts')
@endpush