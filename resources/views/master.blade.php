@extends('layouts.layouts')
<style>

.bg-red{
  background: #B51A09;
  background: linear-gradient(90deg,rgba(181, 26, 9, 1) 0%, rgba(253, 29, 29, 1) 50%, rgba(181, 26, 9, 1) 100%);
}

</style>



<script type="text/javascript">

$(document).ready(function() {

});


</script>
@section('content')

  <div class="row box" style="background-color:white;margin-top:10px;margin-bottom:10px;border-radius:10px;padding:1em;"> 
  <!--กลาง-->
  <div class="xls col-md-9 col-lg-9 col-sm-12 col-xs-12" style="margin-right:0px;padding-bottom:20px;">


<div class="row" style="padding:1em;text-align:center;">
  <table style="width:100%;">
    <tr>
      <td style="width:10%;text-align:center;background-color:#091551;padding:0.5em;border-radius:10px;"><i class="fa fa-bullhorn" style="font-size:30pt;color:#fff;"></i> </td>
      <td>
      <marquee direction="left"><b>mediathailand วิ่งจากขวาไปซ้าย</b></marquee></div>
      </td>
    </tr>
  </table>
</div>

  
  <div style="width:100%;border-bottom:5px solid#f70000;margin-bottom:10px;">
  <span style="border-radius:5px;text-align:center;width:200px;padding:0.2em;font-size:15pt;font-weight:bold;display:block;background-color:#BE1010FF;color:white;">กิจกรรมมาใหม่</span>  
  </div>
  <span style="float:left;">
    <select style="width:200px;" class="form-control">
      <option value="1">กิจกรรมทั้งหมด</option>
      <option value="2">กิจกรรม onsite</option>
      <option value="3">กิจกรรม online</option>
      <option value="4">กิจกรรม ontour</option>
    </select>
  </span> 
  <span style="margin:10px;float:right;"><b>วันจันทร์ ที่ 21 เมษายน 2568</b></span> 
  <br><br>
  <div style="width:100%;border:1px solid #ccc;overflow-x:scroll;height:1000px;">
  <center>
  @foreach($activity as $activity)
    <div class="box" style="width:95%;border:1px solid #999;margin:10px;padding:0;">
        <table style="width:100%;cursor:pointer;">
          <tr>
            
            <td style="width:80%;color:black;padding:1em;">
             <span style="font-size:18pt;"><b>หลักสูตร Digital Transformation</b></span> 
             <br><br><span style="font-size:10pt;">ทรานส์ฟอร์เมชัน (Digital Transformation) คือกระบวนการที่นำเอาดิจิทัล เทคโนโลยี มาปรับใช้กับทุกส่วนของธุรกิจ 
             ตั้งแต่รากฐานกระบวนการทำงาน การสร้างสรรค์ผลิตภัณฑ์ การตลาด วัฒนธรรมองค์กร และการกำหนดเป้าหมายการเติบโตในอนาคต 
             เพื่อให้ธุรกิจปรับตัวต่อการเปลี่ยนแปลงได้อย่างรวดเร็ว</span> 
             <br> <br>
              <table style="width:100%;font-size:10pt;">
              <tr>
                <th style="width:30%;"><i class="fa fa-tasks" aria-hidden="true"></i>&nbsp;ประเภท :</th>
                <td>e-Learning  &nbsp;&nbsp;<b>จำนวนเปิดรับ :</b> ไม่จำกัด</td>
              </tr>
              <tr>
                <th><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;วันที่จัดกิจกรรม :</th>
                <td>1 ม.ค. 2563 เวลา 00:00 น. - 31 ม.ค. 2576 เวลา 00:00 น. </td>
              </tr>
              <tr>
                <th><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;วันที่รับสมัคร :</th>
                <td>1 ม.ค. 2563 เวลา 00:00 น. - 31 ม.ค. 2576 เวลา 00:00 น. </td>
              </tr>
              <tr>
                <th><i class="fa fa-user" aria-hidden="true" title="ผู้ลงทะเบียนแล้ว"></i> : 0</th>
                <td></td>
              </tr>
              </table>
           
            </td>
            <td style="width:20%;border:1px solid #999;text-align:center;" class="bg-red">
              <br><a href="{{ url('atvdetail') }}" style="font-size:20pt;color:white;">ลงทะเบียน</a>
            </td>
          </tr>
        </table>

    </div>
  @endforeach
</center>
</div>

</div>
     
     <!--ซ้าย-->
  <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12" style="padding:0;margin:0;">
    <span style="font-weight:bold;font-size:24pt;color:#f70000;">NEWs</span> ข่าวสารกิจกรรม
    <br><a style="float:right;" href="#">แสดงทั้งหมด</a><br>
  <div style="overflow-x:scroll;height:1040px;border:1px solid #ccc;">
  <center>
    @for ($i = 0; $i < 10; $i++)
    <div class="box" style="width:92%;border:1px solid #ccc;margin:10px;padding:1em;text-align:left;font-size:10pt;">
      <img src="https://s.isanook.com/sp/0/ud/316/1583550/momaesa2.jpg?ip/resize/w728/q80/jpg" style="width:100%;height:150px;">
      <br>ส่องแคปชันล่าสุด "มายด์ พัชรบุษย์" โพสต์ IG มูฟออนแล้ว หลังเจอดรามารุนแรง
      <br><i class="fa fa-calendar-o" aria-hidden="true" title="วันที่ลงข่าว"></i>&nbsp;20-04-2025
    </div>
    @endfor
  </center>
  </div>
  </div>
  
  </div>    <!--endrow-->
  
@stop



