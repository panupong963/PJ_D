<div class="content-wrapper">
	<div class="container-fluid">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">บันทึกการทำงาน</li>
        </ol>

<form action="<?php echo site_url("home/insertwork");?>" method="post">

<table width="900" border="0" align="center">
  <tr align="center">
    <td width="150">วัน/เดือน/ปี ปฎิบัติงาน</td>
    <td width="200">เวลาเข้า</td>
    <td width="200">เวลากลับ</td>
    <td width="251">รายละเอียดงานที่ทำ</td>
    <td width="77">&nbsp;</td>
  </tr>
  <tr align="center">
    <td height="156" valign="top"><input type="date" name="Work_Date" required></td>
    <td valign="top"><!-- <select>
  <option value="volvo">ชม.</option>
  <option value="saab">01</option>
  <option value="opel">02</option>
  <option value="audi">03</option>
</select>
<select>
  <option value="volvo">นาที</option>
  <option value="saab">01</option>
  <option value="opel">02</option>
  <option value="audi">03</option>
</select> --> <input type="time" name="Work_Start" required></td>
    <td valign="top"><!-- <select>
  <option value="volvo">ชม.</option>
  <option value="saab">01</option>
  <option value="opel">02</option>
  <option value="audi">03</option>
</select>
<select>
  <option value="volvo">นาที</option>
  <option value="saab">01</option>
  <option value="opel">02</option>
  <option value="audi">03</option>
</select> --> <input type="time" name="Work_Finish" required></td>
    <td valign="top"><textarea name="Job_Description" placeholder = "พิพ์ข้อความ" required></textarea></td>
    <td align="center"><button type="submit" class="btn btn-success">บันทึก</button></td>
  </tr>
</table>

</form>    

              <h5>ช่วงเวลาการบันทึกข้อมูลงานระหว่างวันที่ <font color="#FF0000" size="5">1/ม.ค./60 - 20/พ.ค./60 </font></h5>
            <hr color="#000000">
              <br>
              <div>

<table class="table">
  <thead>
    <tr align="center">
      <th colspan="5">ชื่องาน : จัดชั้นหนังสือ</th>
    </tr>
      <tr align="center">
    <th colspan="5">ชั่วโมงสะสมทั้งหมด : 20 ชั่วโมง</th>
  </tr>
  <tr align="center">
    <th width="55">ลำดับ</th>
    <th width="140">วันที่ปฎิบัติงาน</th>
    <th width="160">เวลาปฎิบัติงาน</th>
    <th width="248">รายละเอียดงาน</th>
    <th width="154"></th>
  </tr>
</thead>
<tbody>
  <tr align="center">
    <th>1</th>
    <th>16/ม.ค./60</th>
    <th>14.30 - 15.30 น.</th>
    <th><button type="button" class="btn btn-warning">รายละเอียด</button></th>
    <th><button type="button" class="btn btn-danger">ลบ</button>
    <button type="button" class="btn btn-primary">แก้ไข</button></th>
  </tr>
  <tr align="center">
    <th>2</th>
    <th>12/ม.ค./60</th>
    <th>14.30 - 15.30 น.</th>
    <th><button type="button" class="btn btn-warning">รายละเอียด</button></th>
    <th><button type="button" class="btn btn-danger">ลบ</button>
    <button type="button" class="btn btn-primary">แก้ไข</button></th>
  </tr>
  <tr align="center">
    <th>3</th>
    <th>9/ม.ค./60</th>
    <th>13.30 - 14.30 น.</th>
    <th><button type="button" class="btn btn-warning">รายละเอียด</button></th>
    <th><button type="button" class="btn btn-danger">ลบ</button>
    <button type="button" class="btn btn-primary">แก้ไข</button></th>
  </tr>
  <tr align="center">
    <th>4</th>
    <th>6/ม.ค./60</th>
    <th>13.30 - 14.30 น.</th>
    <th><button type="button" class="btn btn-warning">รายละเอียด</button></th>
    <th><button type="button" class="btn btn-danger">ลบ</button>
    <button type="button" class="btn btn-primary">แก้ไข</button></th>
  </tr>
  <tr align="center">
    <th>5</th>
    <th>3/ม.ค./60</th>
    <th>11.30 - 12.30 น.</th>
    <th><button type="button" class="btn btn-warning">รายละเอียด</button></th>
    <th><button type="button" class="btn btn-danger">ลบ</button>
    <button type="button" class="btn btn-primary">แก้ไข</button></th>
  </tr>
  <tr align="center">
    <th>6</th>
    <th>1/ม.ค./60</th>
    <th>11.30 - 12.30 น.</th>
    <th><button type="button" class="btn btn-warning">รายละเอียด</button></th>
    <th><button type="button" class="btn btn-danger">ลบ</button>
    <button type="button" class="btn btn-primary">แก้ไข</button></th>
  </tr>
  <tr align="content">
    <th colspan="5"> <ul class="pagination justify-content-center">
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">ถัดไป</a></li>
  </ul></th>
  </tr>
</tbody>
</table>

<h6><font color="#FF0000">*หมายเหตุ </font>นักศึกษาสามารถเเก้ไขข้อมูลการทำงานก่อน ผู้เสนองานรับรองผล</h6>
</div>
		
	</div>
</div>