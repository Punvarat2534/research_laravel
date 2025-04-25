@extends('backend.admin')
<link rel="stylesheet" href="./assets/editor/editors.min.css" />
<script src="./assets/editor/editors.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet"/>


<style>

.row{
    border:1px solid #ddd;
    margin:10px;
    padding:1em;
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
    border-radius:5px;
}

.bpx{
   
}

.form-group{
    width:100%;
}

label{
    width:100%;
}


.title{
    width:100%;
}

.title .left{
    float:left;width:60%;
}

.title .right{
    float:left;width:40%;text-align:right;
}

.imgprev{
    display:none;
    margin:10px;
    cursor:pointer;
}

.imgprev:hover {opacity: 0.7;}


/*modal*/
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
 
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}



/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}

.error{
   color:red;font-weight:bold;
   font-size:10pt;
}

.msgs{
   margin-top:20px;
   border:1px solid #FF0000;
   padding:0.5em;
   text-align:left;
   background-color:#FFFACD;
   color:red;
   width:100%;
   margin-bottom:20px;
   display:none;
}

</style>

<script type="text/javascript">


$(document).ready(function() {
    var obj = ["short_text","full_text","event_localtion","quality_text","ativity_detail","job_apply","detail","condition_text","place_text"];
    $.each(obj, function (index, value) {
        seteditor(value);
        editor_control(value); //เป็น text control ที่ต้องเอาไปupdate ใน controller
    });


$('#btnsubmit').click(function (e) {
            var isValid = true;
            
            //,#editor_doctopic_text,#editor_quality_text,#editor_job_detail
            $('#txtevent_localtion,#txtatvname,#atvtype,#atvline,#regist_start,#regist_end,#date_start,#date_end,#txtregiscnt,#txtshort_text,#txtcondition_text,#txtdepartment,#txtcontactnm,#txtcontactphone,#txtcontactemail,#txtLineid,#txtcontactAdd,#txtfile,#txtmap').each(function () {
                if ($.trim($(this).val()) == '') {
                    isValid = false;
                    $(this).css({
                        "border": "1px solid red",
                        "background": "#FFCECE"
                    });

                    $("#text-msg").css("display", "block");
                    $("#text-msg").text("* กรุณาระบุข้อมูลให้ครบถ้วน");

                }else {
                    $(this).css({
                        "border": "1px solid #ccc",
                        "background": "#FFFFFF"
                    });

                    $("#text-msg").css("display", "none");
                }
            });




            if (isValid == false){
                $("html, body").animate({ scrollTop: 0 }, "slow");
                e.preventDefault();
            }else{
                e.currentTarget.submit();
            }

});

});

function logo_preview(input) {
    var url = input.value;
    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
    if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) {
        var reader = new FileReader();

        $('#imgtxtlogo').css("display", "block");
        reader.onload = function (e) {
            $('#imgtxtlogo').attr('src', e.target.result);
            $("#logo_img_error").text("");
        }

        reader.readAsDataURL(input.files[0]);
    }else{
    $("#logo_img_error").text("ประเภทfile ต้องเป็น gif,png,jpeg,jpg เท่านั้น");
    $('#imgtxtlogo').css("display", "none");
    $('#imgtxtlogo').attr('src',"");
    $("#imgtxtlogo").val("");
    //$('#txtlogo').prop('readonly', true);

    }
}

function file_preview(input) {
    var url = input.value;
    var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
    if (input.files && input.files[0]&& (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg" || ext == "doc" || ext == "docx" || ext == "pdf" || ext == "xls" || ext == "xlsx" || ext == "ppt")) {
        var reader = new FileReader();

        $('#imgtxtfile').css("display", "block");
        reader.onload = function (e) {
            $('#imgtxtfile').attr('src', e.target.result);
            $("#file_img_error").text("");
        }

        reader.readAsDataURL(input.files[0]);
    }else{
    $("#file_img_error").text("ประเภทfile ต้องเป็น gif,png,jpeg,jpg,doc,docx,pdf,ppt เท่านั้น");
    $('#imgtxtfile').css("display", "none");
    $('#imgtxtfile').attr('src',"");
    $("#imgtxtfile").val("");
    }
}

</script>
@section('contentadmin')
<div class="container-fluid" style="padding-bottom:100px;">
<form method="post" action="{{ url('activity-insert') }}" enctype='multipart/form-data'>

@csrf

<div class="row col-md-12 col-lg-12 col-sm-12 col-xs-12">



    <div class="title" style="margin-bottom:20px;">
        <div class="left" style="font-size:14pt;"><b>ข้อมูลทั่วไป</b> </div>
    </div>    

    <span id="text-msg" class="msgs">111</span>

    <div class="form-group">
    
    ชื่อกิจกรรม&nbsp;<span style="color:red;font-weight:bold;">*</span>
    <input type="text" class="form-control" id="txtatvname" name="txtatvname" placeholder="ชื่อกิจกรรม" required>
    </div>
    <div class="form-group">
    ประเภทกิจกรรม&nbsp;<span style="color:red;font-weight:bold;">*</span>&nbsp;&nbsp;
    <input type="radio" id="cmptype" name="atvtype" value="1" required checked> onsite &nbsp;&nbsp;
    <input type="radio" id="cmptype" name="atvtype" value="2" required> online &nbsp;&nbsp;
    <input type="radio" id="cmptype" name="atvtype" value="3" required> ontour   
    </div>
    <div class="form-group"> 
    <b>ส่งข่าวกิจกรรมเข้า Line กลุ่ม</b> &nbsp;<input type="radio" id="atvline" name="atvline" value="N">&nbsp;ส่ง &nbsp;<input type="radio" id="atvline" name="atvline" value="D">&nbsp;ไม่ส่ง 
    </div> 
    <div class="form-group" style="background-image: linear-gradient(#edf0f5, #E0E0E0FF);padding:1em;border:1px dotted #919191FF;">
      
    <div class="form-row">
   
    <br>
    <table style="width:100%;margin:0auto;">
    <tr>
        <td colspan="4"> <b>วันที่เปิดรับสมัคร <span style="color:red;font-weight:bold;">*</span></b> </td>
    </tr>    
    <tr>
            <td style="text-align:center;width:20%;">วันที่เริ่มต้น :</td>
            <td><input type="date" id="regist_start" name="regist_start" class="form-control"></td>
            <td style="text-align:center;width:20%;">วันที่สิ้นสุด :</td>
            <td><input type="date" id="regist_end" name="regist_end" class="form-control"></td>
    </tr>
    </table>    
    </div>
    <div class="form-row">
    <table style="width:100%;margin:0auto;">
    <tr>
        <td colspan="4"><b>วันที่จัดกิจกรรม <span style="color:red;font-weight:bold;">*</span></b></td>
    </tr> 
        <tr>
            <td style="text-align:center;width:20%;">วันที่เริ่มต้น :</td>
            <td><input type="date" id="date_start" name="date_start" class="form-control"></td>
            <td style="text-align:center;width:20%;">วันที่สิ้นสุด :</td>
            <td><input type="date" id="date_end" name="date_end" class="form-control"></td>
        </tr>
    </table>    
    </div>
    </div>

    <div class="form-group"> 
    <b>จำนวนที่เปิดรับ</b> &nbsp;<span style="color:red;font-weight:bold;">*</span> &nbsp;&nbsp;<input type="checkbox" class="chkcc9" data-id="txtsalary">&nbsp;ไม่จำกัดจำนวน    
    <input type="text" class="form-control" placeholder="ระบุจำนวน" id="txtregiscnt" name="txtregiscnt" required> 
    </div> 


    <div class="form-group">
        
    รายละเอียดเกี่ยวกิจกรรมแบบย่อ (ไม่เกิน 200 ตัวอักษร)&nbsp;<span style="color:red;font-weight:bold;">*</span>
            
    <div id='tool_short_text' class="editor-controls"></div>
    <div id='editor_short_text' class="editor-elements"  maxlength="200" contenteditable style='height:250px;background-color:#fff;'></div>                          
    <textarea  id="txtshort_text" class="editor-displaynone" name="txtshort_text"></textarea> 
    
    
    </div>
</div>

<div class="row col-md-12 col-lg-12 col-sm-12 col-xs-12">

    <div class="form-group">
        
    <b>เงื่อนไขกิจกรรม หรือ ผู้เข้าร่วมกิจกรรม (ไม่เกิน 200 ตัวอักษร)&nbsp;<span style="color:red;font-weight:bold;">*</span></b>
                <br>
        <div id='tool_condition_text' class="editor-controls"></div>
        <div id='editor_condition_text' class="editor-elements" contenteditable style='height:250px;background-color:#fff;'></div>                          
        <textarea  id="txtcondition_text" class="editor-displaynone" name="txtcondition_text"></textarea> 
        
        
    </div>
   
</div>

<div class="row col-md-12 col-lg-12 col-sm-12 col-xs-12">

    <div class="form-group"> 
    <b>ข้อมูลผู้ติดต่อ</b> &nbsp;<span style="color:red;font-weight:bold;">*</span>    
    </div> 
    <div class="form-group"> 
    ชื่อหน่วยงาน
    <input type="text" class="form-control" id="txtdepartment" name="txtdepartment" placeholder="ชื่อหน่วยงาน" required>
    </div>
    <div class="form-group"> 
    ชื่อผู้ติดต่อ
    <input type="text" class="form-control" id="txtcontactnm" name="txtcontactnm" placeholder="ชื่อผู้ติดต่อ" required>
    </div>
    <div class="form-group"> 
    เบอร์โทร 
    <input type="text" class="form-control" id="txtcontactphone" name="txtcontactphone" placeholder="เบอร์โทร" required>
    </div>  
    <div class="form-group"> 
    Email
    <input type="text" class="form-control" id="txtcontactemail" name="txtcontactemail" placeholder="Email" required>
    </div>
    <div class="form-group"> 
    LineID
    <input type="text" class="form-control" id="txtLineid" name="txtLineid" placeholder="LineID" required>
    </div>    
    <div class="form-group"> 
    ที่อยู่หน่วยงานหรือผู้ติดต่อ 
    <input type="text" class="form-control" id="txtcontactAdd" name="txtcontactAdd" placeholder="ที่อยู่หน่วยงานหรือผู้ติดต่อ" required>
    </div>  
</div>
<div class="row col-md-12 col-lg-12 col-sm-12 col-xs-12">
    <br><b>ข้อมูลรายละเอียดเกี่ยวกับกิจกรรม</b> &nbsp; <span style="color:red;font-weight:bold;">*</span>

    <div id='tool_full_text' class="editor-controls"></div>
    <div id='editor_full_text'  class="editor-elements" contenteditable style='height:1000px;'></div>
    <textarea  class="form-control" id="txtfull_text" name="txtfull_text"></textarea>                             
</div> 
<div class="row col-md-12 col-lg-12 col-sm-12 col-xs-12">
    <div class="form-group">
        <b>แนบรูปหรือไฟล์</b> (ไม่มีไม่ต้องใส่) : <span id="file_img_error" style="color:red;font-weight:bold;"></span>
        <img id="imgtxtfile" onclick="modal_image('imgtxtfile');"  src="" style="width:50%;"  class="imgprev"/> 
        <input type="file" class="form-control" onchange="file_preview(this);" id="txtfile" name="txtfile">
       
    </div>  
</div>
<div class="row col-md-12 col-lg-12 col-sm-12 col-xs-12">

    <div class="form-group">
        
    <b>ข้อมูลสถานที่จัดกิจกรรม &nbsp;<span style="color:red;font-weight:bold;">*</span></b>
                <br>
        <div id='tool_event_localtion' class="editor-controls"></div>
        <div id='editor_event_localtion' class="editor-elements" contenteditable style='height:250px;background-color:#fff;'></div>                          
        <textarea  id="txtevent_localtion" class="editor-displaynone" name="txtevent_localtion"></textarea> 
        
        
    </div>
   
</div>
<div class="row col-md-12 col-lg-12 col-sm-12 col-xs-12">
<br><b>แผนที่</b> &nbsp; <a href="">วิธีการใส่แผนที่</a>
<textarea  class="form-control" id="txtmap" name="txtmap"></textarea>                             
</div>
<div class="row col-md-12 col-lg-12 col-sm-12 col-xs-12">
    <div style="margin:auto;">
    <button type="submit" id="btnsubmit" class="btn btn-primary">เพิ่มกิจกรรมใหม่</button>
    </div>
</div>

</form>
</div>

</div>
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
<script>
var modal = document.getElementById("myModal");


function modal_image(id){
    var img = document.getElementById(id);
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  //captionText.innerHTML = this.alt;
}
}


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

span.onclick = function() { 
  modal.style.display = "none";
}

modal.onclick = function() { 
  modal.style.display = "none";
}
</script>

@stop