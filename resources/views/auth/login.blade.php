@extends('layouts.layouts')
<style>
.app-block{
    display:block;
    padding:0.5em;
    border:1px solid gray;
    margin-top:10px;
    font-size:14pt;
    text-decoration:none;
    color:black;
    text-align:center;
}

.msg{
   margin-top:20px;
   margin-bottom:20px;
   border:1px solid #FF0000;
   padding:0.5em;
   text-align:center;
   background-color:#FFFACD;
   color:red;
   display:block;
}

.field-icon {
  float: right;
  margin-left: -27px;
  margin-right: 30px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}

.box{
    border:1px solid #ddd;
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
    border-radius:5px;
}

.center{
  margin:0 auto;
}

</style>

<script>

$(document).ready(function () {
  var uname;
  var psswd;
  BtnEnable();


  $(".toggle-password").click(function() {
      $(this).toggleClass("fa-eye fa-eye-slash");
      var input = $($(this).attr("toggle"));
      if (input.attr("type") == "password") {
         input.attr("type", "text");
      } else {
         input.attr("type", "password");
      }
   });

  $('input').keyup(function() {
  var elmId = $(this).attr("id");
  if($(this).val()!=""){ 
   switch(elmId) { 
      case "username": uname=true;break;
      case "password": psswd=true;break;
   }
 
  }else{
   switch(elmId) { 
      case "username": uname=false;break;
      case "password": psswd=false;break;
   }
  }
BtnEnable();
});

  function BtnEnable() {
      if((uname==true) && (psswd==true)){
            $(':input[type="submit"]').prop('disabled', false);
      }else{
            $(':input[type="submit"]').prop('disabled', true);
      }
   }

});

</script>
@section('content')
<div class="container-fluid">
   <div class="row row-centered" style="padding-top:50px;padding-bottom:500px;">

<div style="background-color:white;" class="col col-sm-12 col-md-5 col-lg-5 center box">
   <center><h3><b>LosinJob เข้าสู่ระบบ</b></h3></center>
   <form method="post" action="" enctype="multipart/form-data">
   <?php //if($this->session->getFlashdata('msg')){ ?>
    <span id="msg-text" class="msg"><i class="fa fa-times-circle-o" aria-hidden="true"></i> error </span>
   <?php //} ?>
<a href="{{ url('/google/redirect') }}" class="app-block">
<i class="fa fa-google" aria-hidden="true"></i> LogIn with Google 
</a>

  <!-- Email input -->
    <div data-mdb-input-init class="form-outline mb-7" style="margin-top:20px;">
    <label class="form-label" for="form2Example1">Phone Or Email</label> 
    <input type="text" id="username" name="username" class="form-control" />
    </div>

  <!-- Password input -->
    <div data-mdb-input-init class="form-outline mb-7">
    <label class="form-label" for="form2Example2">Password</label>
    <input type="password" id="password" name="password" class="form-control" />
    <span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
    </div>

    <div class="row">
    <div class="col">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31"> Remember me </label>
      </div>
    </div>

    <div>
      <!-- Simple link -->
      <a href="#!">Forgot password?</a>
    </div>
  </div>
 <br>
  <!-- Submit button -->
  <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign in</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>Not a member? <a href="">Register</a> or sign up with:</p>
    <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
      <i class="fab fa-facebook-f"></i>
    </button>

    <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
      <i class="fab fa-google"></i>
    </button>

    <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
      <i class="fab fa-twitter"></i>
    </button>

    <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
      <i class="fab fa-github"></i>
    </button>
  </div>
</form>
</div>
   </div>
   </div>

@stop