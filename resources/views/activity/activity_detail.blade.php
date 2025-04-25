@extends('layouts.layouts')
<style>

.bg-red{
  background: #B51A09;
  background: linear-gradient(90deg,rgba(181, 26, 9, 1) 0%, rgba(253, 29, 29, 1) 50%, rgba(181, 26, 9, 1) 100%);
}

.box1{
  box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
}


@import url('https://fonts.googleapis.com/css?family=Arimo:400,700&display=swap');
body{
  background:#CDDC39;
  font-family: 'Arimo', sans-serif;
}
h2{
  color:#000;
  text-align:center;
  font-size:2em;
}
.warpper{
  display:flex;
  flex-direction: column;
  align-items:left;
}
.tab{
  cursor: pointer;
  padding:10px 20px;
  margin:0px 2px;
  background:#b51a09;
  display:inline-block;
  color:#fff;
  border-radius:3px 3px 0px 0px;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
}
.panels{
  background:#fffffff6;
  min-height:1200px;
  width:100%;
  border-radius:3px;
  overflow:hidden;
  padding:20px;  
}
.panel{
  display:none;
  animation: fadein .8s;
}
@keyframes fadein {
    from {
        opacity:0;
    }
    to {
        opacity:1;
    }
}
.panel-title{
  font-size:1.5em;
  font-weight:bold
}
.radio{
  display:none;
}
#one:checked ~ .panels #one-panel,
#two:checked ~ .panels #two-panel,
#three:checked ~ .panels #three-panel{
  display:block
}
#one:checked ~ .tabs #one-tab,
#two:checked ~ .tabs #two-tab,
#three:checked ~ .tabs #three-tab{
  background:#fffffff6;
  color:#000;
  border-top: 3px solid #000;
}

</style>



<script type="text/javascript">

$(document).ready(function() {

});


</script>
@section('content')

  <div class="row box" style="background-color:white;margin-top:10px;margin-bottom:10px;border-radius:10px;padding:1em;"> 
  <!--กลาง-->

  <div class="xls col-md-9 col-lg-9 col-sm-12 col-xs-12" style="margin:0px;">
  
  <div style="border:1px solid #999;padding-bottom:20px;min-height:1000px;">


  <div class="warpper">
  <input class="radio" id="one" name="group" type="radio" checked>
  <input class="radio" id="two" name="group" type="radio">
  <input class="radio" id="three" name="group" type="radio">
  
  <div class="tabs" style="text-align:left;">
  <label class="tab" id="one-tab" for="one">รายละเอียด</label>
  <label class="tab" id="two-tab" for="two">แผนที่</label>
  <label class="tab" id="three-tab" for="three">ติดต่อ</label>
  </div>

  <div class="panels">
  <div class="panel" id="one-panel">
    <div class="panel-title"><i class="fa fa-flag" aria-hidden="true"></i>&nbsp;ข้อมูลรายละเอียด</div>
    <p>Without CSS, every web page would be drab plain text and images that flowed straight down the page. With CSS, you can add color and background images and change the layout of your page — your web pages can feel like works of art!</p>
    
    <br><br>
    <div class="panel-title"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;วันที่จัดกิจกรรม และ เงื่อนไขการเข้าร่วมกิจกรรม</div>
    <p>You will learn many aspects of styling web pages! You’ll be able to set up the correct file structure, edit text and colors, and create attractive layouts. With these skills, you’ll be able to customize the appearance of your web pages to suit your every need!</p>
    
    <br><br>
    <div class="panel-title"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;ข้อมูลสถานที่จัดงาน</div>
    <p>We recommend that you complete Learn HTML before learning CSS.</p>

  
  </div>
  <div class="panel" id="two-panel">
    <div class="panel-title">วันที่จัดกิจกรรม และ เงื่อนไขการเข้าร่วมกิจกรรม</div>
    <p>You will learn many aspects of styling web pages! You’ll be able to set up the correct file structure, edit text and colors, and create attractive layouts. With these skills, you’ll be able to customize the appearance of your web pages to suit your every need!</p>
  </div>
  <div class="panel" id="three-panel">
    <div class="panel-title"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;ข้อมูลสถานที่จัดงาน</div>
    <p>We recommend that you complete Learn HTML before learning CSS.</p>
  </div>
  </div>
</div>

  </div>

  </div>
     
     <!--ซ้าย-->
  <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12" style="margin:0;">
 
  <a class="btn" href="#" style="color:white;background-color:#B51A09;padding:1em;width:100%;font-size:20pt;border-radius:10px;">
  <b>ลงทะเบียน</b>
  </a>
  <br><a href="#"><b>จำนวนผู้ลงทะเบียน (15)</b></a>
  <br><a href="#"><b>จำนวนผู้ลงทะเบียน (15)</b></a>
  </div>

</div>    <!--endrow-->
  
@stop



