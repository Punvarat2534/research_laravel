@extends('layouts.layouts')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet"/>


<style>

.bg-red{
  background: #B51A09;
  background: linear-gradient(90deg,rgba(181, 26, 9, 1) 0%, rgba(253, 29, 29, 1) 50%, rgba(181, 26, 9, 1) 100%);
}

.menu{
    width:225px;
    float:right;
}

.menu li{
display:block;
padding:1em;
border:1px solid #ccc;
width:100%;
}

.menu li a{

}

</style>



<script type="text/javascript">

$(document).ready(function() {

});


</script>
@section('content')

  <div class="row box" style="background-color:white;margin-top:10px;margin-bottom:10px;border-radius:10px;"> 

     <!--ซ้าย-->
  <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
    <span style="font-weight:bold;font-size:24pt;color:#f70000;">Admins</span>
    
    <div style="border:1px solid #ccc;">
   
    <ul class="menu">
        <li>กิจกรรม</li>
        <li>ข่าว</li>
        <li>ประชาสัมพันธ?</li>
        <li>ข้อความเลื่อน</li>
        <li>การจัดการผู้ใช้</li>
    </ul>
    </div>
  </div>

  <!--กลาง-->
  <div class="xls col-md-10 col-lg-10 col-sm-12 col-xs-12" style="min-height:1040px;margin-right:0px;padding-bottom:20px;">
  @yield('contentadmin')
  </div>
  
  </div>    <!--endrow-->
  
@stop



