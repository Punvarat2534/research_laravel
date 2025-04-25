@extends('layouts.layouts')
<script>

$(document).ready(function () {

   var fname=false;
   var uname=false;
   var phone=false;
   var psswd=false;
   var cfpsswd=false;
   var chk1=false;
   var chk2=false;
   var errtext=false;

   BtnEnable();

   $("#frmregister").submit(function(e) {
      e.preventDefault();
      $.ajax({
          url: ""+"ctcheck",
          type: "GET",
          data:{"phone":$("#phone").val(),"username":$("#uname").val()},
          dataType: "html",
       }).done(function (data) {
         if(data=="success"){
            e.currentTarget.submit();
         }else{
            $("#msg-text").css("display", "block");
            $("#msg-text").text(data);
            $("html, body").animate({ scrollTop: 0 }, "slow");
         }
       });
   });

   $(".toggle-password").click(function() {
      $(this).toggleClass("fa-eye fa-eye-slash");
      var input = $($(this).attr("toggle"));
      if (input.attr("type") == "password") {
         input.attr("type", "text");
      } else {
         input.attr("type", "password");
      }
   });

   $("#chk1,#chk2").change(function() {
      var elmId = $(this).attr("id");
      if(this.checked) {
         if(elmId=="chk1"){
            chk1=true;
         }else{
            chk2=true;
         }
      }else{
         if(elmId=="chk1"){
            chk1=false;
         }else{
            chk2=false;
         }
      }
      BtnEnable();
   });

   $('#cfpsswd').keyup(function() {
      if(($(this).val()=="")||($(this).val()==$("#psswd").val())){
         $("#cferror").text("");
         errtext=true;
      }else{
         $("#cferror").text("รหัสผ่านไม่ตรงกัน");
         errtext=false;
      }
   });

   $('#psswd').keyup(function() {
      
      if($(this).val()==''){
         $("#pwderror").text("");
         errtext=false;
      }else{
         var validate=validatePassword($(this).val());
         if(validate!=''){
            $("#pwderror").html(validate);
            psswd=false;
            errtext=false;
         }else{
            psswd=true;
            $("#pwderror").text("");
            if($("#cfpsswd").val()!==''){       
               if(($(this).val()=="")||($(this).val()==$("#cfpsswd").val())){    
                  $("#cferror").text("");
                  errtext=true;
               }else{
                  $("#cferror").text("รหัสผ่านไม่ตรงกัน");
                  errtext=false;
                  psswd=false;
               }
      }
            
         }
      }
   });

   $('#uname').keyup(function() {
      if((IsEmail($(this).val())==true)||($(this).val()=="")){
         $("#unmerror").text("");
         errtext=true;
      }else{
         $("#unmerror").text("รูปแบบ Email ไม่ถูกต้อง");
         errtext=false;
      }
   });

   $('input').keyup(function() {

      var elmId = $(this).attr("id");
      if($(this).val()!=""){ 
         switch(elmId) { 
	         case "fname": fname=true;break;
            case "uname": uname=true;break;
            case "phone": phone=true;break;
            case "psswd": psswd=true;break;
            case "cfpsswd": cfpsswd=true;break;
         }
       
      }else{
         switch(elmId) { 
	         case "fname": fname=false;break;
            case "uname": uname=false;break;
            case "phone": phone=false;break;
            case "psswd": psswd=false;break;
            case "cfpsswd": cfpsswd=false;break;
         }
      }
      BtnEnable();
   });

   function BtnEnable() {
      if((fname==true) && (uname==true) && (phone==true) && (psswd==true) && (cfpsswd==true) && (chk1==true) && (chk2==true) && (errtext==true)){
            $(':input[type="submit"]').prop('disabled', false);
         }else{
            $(':input[type="submit"]').prop('disabled', true);
         }
   }

   function IsEmail(email) {
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!regex.test(email)) {
           return false;
        }else{
           return true;
        }
   }

   function validatePassword(p) {
    errors = [];
    if (p.length < 8) {
        errors.push("พาสเวิร์ดต้องมีอย่างน้อย 8 ตัวอักษร<br>"); 
    }
    if (p.search(/[ก-ฮ]/i) > 0) {
        errors.push("พาสเวิร์ดต้องไม่เป็นภาษาไทย<br>");
    }
    if (p.search(/[0-9]/) < 0) {
        errors.push("พาสเวิร์ดต้องมีตัวเลข 0-9<br>"); 
    }
    if (p.search(/^(?=.*[A-Z]).*$/) < 0) {
        errors.push("พาสเวิร์ดต้องมีตัวอักษรภาษาอังกฤษพิมพ์ใหญ่ (A-Z) อย่างน้อย 1 ตัวอักษร<br>"); 
    }

    if (p.search(/^(?=.*[a-z]).*$/) < 0) {
        errors.push("พาสเวิร์ดต้องมีตัวอักษรภาษาอังกฤษพิมพ์ใหญ่ (a-z) อย่างน้อย 1 ตัวอักษร<br>"); 
    }
    
    if (p.search(/^(?=.*[~`!@#$%^&*()--+={}\[\]|\\:;"'<>,.?/_₹]).*$/) < 0) {
        errors.push("พาสเวิร์ดต้องมีตัวอักขระพิเศษ (~`!@#$%^&*()--+=) อย่างน้อย 1 ตัวอักษร<br>"); 
    }
    
    return errors;
   }
});

</script>

<style>

.field-icon {
  float: right;
  margin-left: -27px;
  margin-right: 30px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}

.app-block{
    display:block;
    padding:0.3em;
    border:1px solid gray;
    margin-top:10px;
    font-size:16pt;
    text-align:center;
    text-decoration:none;
    color:black;
    background-color:white;

}

.error{
   color:red;font-weight:bold;
   font-size:10pt;
}

.msg{
   margin-top:20px;
   border:1px solid #FF0000;
   padding:0.5em;
   text-align:center;
   background-color:#FFFACD;
   color:red;
   display:none;
}

.box{
    border:1px solid #ddd;
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
    border-radius:5px;
}
</style>
@section('content')
<div class="container-fluid">
   <div class="row row-centered">
   <div class="box col col-sm-12 col-md-5 col-lg-5 center" style="background-color:white;margin-bottom:120px;margin-top:50px;">
   <form method="post" id="frmregister" action="">
   <center><h3>ลงทะเบียน Online</h3></center>
   
   <span id="msg-text" class="msg"></span>
   <br>
   <a href="#" class="app-block"><i class="fa fa-google" aria-hidden="true"></i> Sign Up with Google </a>
<a href="#" class="app-block"><i class="fa fa-facebook" aria-hidden="true"></i> Sign Up with Facebook </a>
 <!-- Username input -->
 

 <div data-mdb-input-init class="form-outline mb-7" style="padding:0.5em;">
 <label class="form-label">ชื่อ-นามสกุล</label> <span style="color:red;"><b>*</b></span>  
    <input type="text" class="form-control" id="fname" name="fname" placeholder="Full-Name" style="width:100%;" required/> 
 </div>

 <!-- Phone input -->
 <div data-mdb-input-init class="form-outline mb-7" style="padding:0.5em;">
 <label class="form-label">หมายเลขโทรศัพท์</label> <span style="color:red;"><b>*</b></span>    
    <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone" style="width:100%;" required/> 
 </div>

  <!-- Username input -->
    <div data-mdb-input-init class="form-outline mb-7" style="padding:0.5em;">
    <label class="form-label">Email</label> <span style="color:red;"><b>*</b></span>
    <input type="email" class="form-control" id="uname" name="uname" required/>   
    <span class="error" id="unmerror"></span> 
    </div>

     <!-- Password input -->
    <div data-mdb-input-init class="form-outline mb-7" style="padding:0.5em;">
    <label class="form-label">Password</label> <span style="color:red;"><b>*</b></span>
    <input type="password" class="form-control" id="psswd" name="psswd" required/>
    <span toggle="#psswd" class="fa fa-fw fa-eye field-icon toggle-password"></span>
    <span class="error" id="pwderror"></span>
    </div>

    <!-- Password input -->
    <div data-mdb-input-init class="form-outline mb-7" style="padding:0.5em;">
    <label class="form-label">Confirm-Password</label>
    <input type="password" id="cfpsswd" name="cfpsswd" class="form-control" />  <span toggle="#cfpsswd" class="fa fa-fw fa-eye field-icon toggle-password"></span>
    <span class="error" id="cferror"></span>
    </div>

    <div data-mdb-input-init class="form-outline mb-7" style="padding:0.5em;">
    <input type="checkbox" id="chk1" name="chk1">&nbsp;ยอมรับ&nbsp;&nbsp;ข้อกำหนดและเงื่อนไขการใช้บริการ
    <br><input type="checkbox" id="chk2" name="chk2">&nbsp;ยอมรับ&nbsp;&nbsp;นโยบายคุ้มครองข้อมูลส่วนบุคคล (Privacy policy)
    </div>

    

    <!-- Submit button -->
    <div data-mdb-input-init class="form-outline mb-7" style="padding:0.5em;">
    <button  type="submit" id="btnsubmit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">SignUp</button>
    </div>
    </form>
</div>
   </div>
   </div>

@stop