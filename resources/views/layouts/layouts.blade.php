<html>
    <head>
        <title>App Name - @yield('title')</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet"/>
 
 
 
 <style>
body, html {   
    padding: 0;
    font-family: "BaiJamjuree-Regular","BaiJamjuree-Bold",sans-serif;
    background-color:#dadee3;
    margin:0;
}

.box{
  border:1px solid #ddd;
    margin:10px;
    padding:1em;
    box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
}

.navbar a{
  color:white;
}

/* CSS */
.button {
  background-image: linear-gradient(#f7f8fa ,#e7e9ec);
  border-color: #adb1b8 #a2a6ac #8d9096;
  border-style: solid;
  border-width: 1px;
  border-radius: 3px;
  box-shadow: rgba(255,255,255,.6) 0 1px 0 inset;
  box-sizing: border-box;
  color: #0f1111;
  cursor: pointer;
  display: inline-block;
  font-family: "Amazon Ember",Arial,sans-serif;
  font-size: 16px;
  outline: 0;
  overflow: hidden;
  padding: 10px 10px 7px 7px;
  text-align: center;
  text-decoration: none;
  text-overflow: ellipsis;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
  margin:0;
}

.button:active {
  border-bottom-color: #a2a6ac;
}

.button:active:hover {
  border-bottom-color: #a2a6ac;
  font-size: 18px;
}

.button:hover {
  border-color: #a2a6ac #979aa1 #82858a;
}

.button:focus {
  border-color: #e77600;
  box-shadow: rgba(228, 121, 17, .5) 0 0 3px 2px;
  outline: 0;
}

.center {   
   margin:auto;
   padding:2em;
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

/*----- footer ---*/

.top-footer {
    color:black;
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    padding-bottom: 0.5rem;
    padding-top:0.5rem;
    border:1px solid #CFCFCF;
    background-image: linear-gradient(#edf0f5, #E0E0E0FF);

  }
  
.footer-title {
 
  font-size: 14pt;
  padding: 0.5rem 0;
  color:#000;
  background-clip: text;
  -webkit-background-clip: text;
  font-weight:bold;
}
.footer-items{
  cursor: pointer;
  font-size:12pt;
  padding: 0.2rem 0;
}
.footer-items :hover {
  text-decoration: underline;
}
.footer-items :last-child {
  padding-bottom: 2rem;
}

.end-footer {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  background-color: var(--third-color);
  padding:0.4em;
}


.form-control:focus{
  border-bottom:2px solid #1E90FF;
  outline: none;
  box-shadow: none;
}
   
@media (max-width: 920px) {


  .footer-items{
    width:100%;
    cursor: pointer;
    float:left;
    font-size:10pt;
    padding: 0.2rem 0;
    position:relative;
  }

  .top-footer {
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    padding-bottom: 8rem;
    padding-top: 2rem;
    padding:1em;
  }

.sticky{
  position:relative;
  opacity:1;
}
   
}
</style>

<style>


@font-face {
  font-family:manifestor;
  src: url('./assets/font/Manifestor/manifestor.ttf');
}

@font-face {
  font-family:BaiJamjuree-Regular;
  src: url('./assets/font/Bai_jamjuree/BaiJamjuree-Regular.ttf');
}

@font-face {
  font-family:BaiJamjuree-Bold;
  src: url('./assets/font/Bai_jamjuree/BaiJamjuree-Bold.ttf');
}


.navbar_link{
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.navbar_link li {
  display: inline;
}

.navbar_link li a{
  color:white;
}
</style>
    </head>
   
<body>
<div class="navbar navbar-expand-lg" style="margin-top:-25px;background-color:black;padding-left:10px;padding-right:10px;padding-top:0em;padding-bottom:0em;">
<div class="collapse navbar-collapse">
<ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" style="color:white;font-weight:bold;" href="#">สำนักวิจัยและพัฒนา มหาวิทยาลัยสงขลานครินทร์</a>
      </li>
</ul>
</div>
<div style="float:right;">
<a class="button" style="color:black;padding:0.2em;" href=""><i class="fa fa-paper-plane" aria-hidden="true"></i> เพิ่มกิจกรรมใหม่</a>
</div>
</div>
<nav class="navbar navbar-expand-lg" style="background-color:#da3f3b;padding:0;color:white;padding-left:10px;">
  <a class="navbar-brand" href="{{ url('/') }}" style="font-size:18pt;font-weight:bold;">หน้าแรก</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon" style="color:white;"><i class="fa fa-bars" aria-hidden="true"></i></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">กิจกรรม</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ข่าว</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ประกาศ</a>
      </li>
      </ul>
      
      <ul class="navbar-nav">
       <li class="nav-item">
        <a class="nav-link" style="margin:0;" href="{{ url('/register') }}">ลงทะเบียน</a>
       </li>
       <li class="nav-item" style="float:right;">
        <a class="nav-link" style="display:block;border:1px solid gray;color:black;" href="{{ url('/login') }}"><b>เข้าสู่ระบบ</b></a>
        </li>
      </ul>
      
        <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" style="margin:0;" href="{{ url('/admin') }}"><?php echo "<b>ปภาดา จันทรพัฒน์</b>";?></a>
       </li>  
        <li class="nav-item">
        <a class="nav-link" style="margin:0;" href=""><i class="fa fa-sign-out" aria-hidden="true"></i> sign out</a>
        </li>
      </ul>
   

  </div>
</nav>

<div class="container-fluid" style="min-height:1000px;">

@yield('content')

</div>
<div class="top-footer">
      <!-- footer item 1 -->
      <div class="footer-item">
        <h2 class="footer-title">หางานออนไลน์</h2>
        <div class="footer-items">
        หางานสามจังหวัดชายแดนใต้ หางานในพื้นที่สามจังหวัด
        <br>ปัตตานี ยะลา นราธิวาส
        </div>
      </div>
      <!-- footer item 2 -->
      <div class="footer-item">
        <h2 class="footer-title">สมัครงาน</h2>
        <div class="footer-items">
          สมัครงานปัตตานี
          <br>สมัครงานยะลา
          <br>สมัครงานนราธิวาส
        </div>
      </div>
      <!-- footer item 3 -->
      <div class="footer-item">
        <h2 class="footer-title">losinjob</h2>
        <div class="footer-items">
          หางาน 3 จังหวัด
          <br>หางานปัตตานี
          <br>หางานยะลา
          <br>หางานนราธิวาส
        </div>
      </div>
      <!-- footer item 4 -->
      <div class="footer-item">
        <h2 class="footer-title">ติดต่อ</h2>
        <div class="footer-items">
           มหาวิทยาลัยสงขลานครินทร์
          <br>15 ถ.กาญจนวณิชย์ อ.หาดใหญ่ จ.สงขลา 90110
        </div>
      </div>
</div>
<div style="color:black;padding:0;padding:0.5em;background-color:#da3f3b;">    
  <div class="text-center">
    Copyright@2025 : 
   <b><a class="text-reset fw-bold" href="https://เดินทีละ9.com/">บริษัท เดินทีละเก้า เว็บแอนด์ไอที CO.LTD</a></b>
  </div>
</div>
</body>


</html>