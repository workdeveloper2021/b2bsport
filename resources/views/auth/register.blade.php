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
      <form class="login" id="frmRegister" action="#" method="post" name="frmRegister">     
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
 <!-- Added notification msg library by Akshay Patil on 27th Nov 2018-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Added notification msg library-->
<script type="text/javascript">
    $(window).load(function() {
        $('#confirmBox').delay(10000).fadeOut();
    });
    $("#submit").click(function () {
        var first_name = document.forms["frmRegister"]["first_name"];
        var last_name = document.forms["frmRegister"]["last_name"];
        var email_address = document.forms["frmRegister"]["email_address"];
        var phone = document.forms["frmRegister"]["phone"];
        var password = document.forms["frmRegister"]["password"];
        var re_password = document.forms["frmRegister"]["re_password"];
        $(".alert").hide();
        re_passwordFlag = 0;
        var flag = 0;
        if (first_name.value == "")
        {
            $("#fname_val").text("First Name is required").show();
            flag = 1;
        }
        if (last_name.value == "")
        {
            $("#lname_val").text("Last Name is required").show();
            flag = 1;
        }
        if (email_address.value == "")
        {
            $("#email_val").text("Email is required").show();
            flag = 1;
        }else if(email_address.value != ""){
            var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if(!re.test(email_address.value)){
                $("#email_val").text("Please enter proper email address").show();
                flag = 1;
            }
        }
        if (phone.value == "")
        {
            $("#phone_val").text("Enter your 10 digit mobile number").show();
            $("#phone_msg").hide();
            flag = 1;
        }else if(phone.value != ""){
            var phoneNum = phone.value.replace(/[^\d]/g, '');
            if(phoneNum.length < 6 || phoneNum.length > 11) {
                $("#phone_val").text("Please enter valid phone number").show();
                flag = 1;
            }
        }
        if (password.value == "" || password.value.length < 6 || password.value.length > 20)
        {
            $("#pass_val").text("Password is required and should be minimum 6 characters and Max 20 characters.").show();
            flag = 1;
        }
        if (re_password.value == "" || re_password.value.length < 6 || re_password.value.length > 20)
        {
            $("#cpass_val").text("Confirm Password is required and should be minimum 6 characters and Max 20 characters.").show();
            flag = 1;
            re_passwordFlag = 1;
        }

        if (re_password.value != password.value)
        {
            if(re_passwordFlag != 1)
                $("#pAndCPass_val").text("Password and Confirm Password should be same").show();
            flag = 1;
        }
        if(flag == "1"){
            window.location.hash = "frmRegister";
            return false;
        }
        var token = $("#token").val();
        $.ajax({
            type: "POST",
            headers: {'X-CSRF-TOKEN': token},
            url: "/send-otp",
            data: {"mobile":phone.value,"email_address":email_address.value,"first_name":first_name.value,"last_name":last_name.value},
            success: function (data) {
                if(data.status == "200"){
                   $("#submit_otp").click();
                }else{
                    if (data.message)
                        iziToast.show({
                            icon: 'fa fa-check',
                            backgroundColor: '#ffb3b3',
                            title: 'Error!',
                            pauseOnHover: false,
                            position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
                            message: data.message,
                        });
                    else
                        iziToast.show({
                            icon: 'fa fa-check',
                            backgroundColor: '#ff8080',
                            title: 'Error!',
                            pauseOnHover: false,
                            position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
                            message: "Something went wrong while processing your request! Please try again.",
                        });
                    return false;
                }
            }
        });
        return false;
    });
    $("#submit_otp").click(function () {
        var values = {};
        $.each($('#frmRegister').serializeArray(), function(i, field) {
            values[field.name] = field.value;
        });
        mobile_otp = $("#mobile_otp").val();
        email_otp = $("#email_otp").val();
        otp_field = mobile_otp+""+email_otp;
        var token = $("#token").val();
        $.ajax({
            type: "POST",
            headers: {'X-CSRF-TOKEN': token},
            url: "/register",
            data: {"phone":values.phone,"email_address":values.email_address,"first_name":values.first_name,"last_name":values.last_name,"password":values.password,"re-password":values.re_password,"otp":otp_field},
            success: function (data) {
              console.log(data);
               if(data.status == 200){
                   iziToast.show({
                       icon: 'fa fa-check',
                       backgroundColor: '#b3cf7a',
                       title: 'Success!',
                       pauseOnHover: false,
                       position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
                       message: 'You are registered and logged In successfully! Please wait while we are redirecting you.',
                       onClosing: function(){
                           window.location.replace("/");
                       }
                   });
               }else{
                   iziToast.show({
                       icon: 'fa fa-check',
                       backgroundColor: '#ff8080',
                       title: 'Error!',
                       pauseOnHover: false,
                       position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
                       message: data.msg,
                   });
               }
            }
        });
    });
</script>

@endpush