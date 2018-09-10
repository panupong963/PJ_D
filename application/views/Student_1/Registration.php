<?php
foreach ($student_res as $row) {
  $STUDENTCODE = $row->STUDENTCODE;
  $STUDENTNAME = $row->STUDENTNAME;
  $FACULTYNAME = $row->FACULTYNAME;
  $PROGRAMNAME = $row->PROGRAMNAME;
  $GPAX = $row->GPAX;
  $PARENTPHONENO = $row->PARENTPHONENO;
  $HOMEADDRESS1 = $row->HOMEADDRESS1;
  $HOMEDISTRICT = $row->HOMEDISTRICT;
  $PROVINCENAME = $row->PROVINCENAME;
  $STUDENTEMAIL = $row->STUDENTEMAIL;

} 
?>
<div class="content-wrapper">
    <div class="container-fluid">
<h4>ใบสมัครทุนทำงานพิเศษ : เลขที่ใบสมัคร 001</h4>

<table class="table table-borderless">
  <thead>
    <tr>
    <th colspan="3" bgcolor="#CCFFFF">1. ข้อมูลส่วนตัวนักศึกษา</th>
    </tr>
</thead>
  
  <tr>
    <th >รหัสนักศึกษา <u><?php echo $STUDENTCODE; ?></u></th>
    <th >ชื่อสกุล - สกุล <u><?php echo $STUDENTNAME; ?></u></th> 
    <th>สำนักวิชา <u> <?php echo $FACULTYNAME; ?></u></th>
  </tr>
  <tr>
    <th >สาขา <u> <?php echo $PROGRAMNAME; ?></u></th>
    <th colspan="3">เกรดเฉลี่ย <u> <?php echo $GPAX; ?></u></th>
    
  </tr>
  <tr>
    <th>วัน/เดือน/ปี เกิด <u> 19/12/2529</u></th>
    <th >E-mail <u> <?php echo $STUDENTEMAIL; ?></u></th>
    <th colspan="3">เบอร์โทรศัพท์ <u> <?php echo $PARENTPHONENO; ?></u></th>

  </tr>
  <tr>
  <th>ศาสนา <u> พุทธ</u></th>
  <th colspan="2">สัญชาติ <u> ไทย</u></th>
  </tr>

    <tr>
  <th>ที่อยู่ บ้าเลขที่ <u> 202/36</u></th>
  <th>ถนน/ซอย <u> -</u></th>
  <th>หมู่ <u> 2</u></th>
  </tr>
  <tr>
  <th>ตำบล <u> ชะมาย</u></th>
  <th>อำเภอ <u> ทุ่งใหญ่</u></th>
  <th>จังหวัด <u> นครศรีธรรมราช</u></th>
  </tr>
  <tr>
  <th >รหัสไปรษณีย์ <u> 80160</u></th>
   <th colspan="3">ประวัติการทำงาน <u> เคยทำงานทุนพิเศษ</u></th>
  </tr>

  <tr>
  </tbody>
  <thead>
    <tr>
    <th colspan="3" bgcolor="#CCFFFF">2. ข้อมูลงาน</th>
    </tr>
    <tbody>
    <tr>
    <th >ชื่องานที่สมัคร <u>ขนของ</u></th>
    <th>ประเภทงาน <u>บริการ</u></th>
    <th>หน่วยงาน/สำนักวิชา <u>ศูนย์บรรณาสารเเละสื่อการศึกษา</u></th>
  </tr>
</thead>
  <thead>
    <th colspan="3" bgcolor="#CCFFFF">3. กรอกข้อมูลเพิ่มเติม</th>
  </tr>
</thead>
<tbody>
  <tr>
  <th colspan="3">ชื่อบัญชี <font color="red">*</font> :   
                        <input type="radio" name="gender" value="male"> ธนาคารกรุงไทย
                        <input type="radio" name="gender" value="female"> ธนาคารออมสิน
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        เลขบัญชี <font color="red">*</font><input type="text"></th>
  </tr>
  <tr>
  
  <th colspan="3">ค่าใช่จ่ายต่อเดือน <font color="red">*</font><input type="text"> บาท</th>
  </tr>

 
    <tr>
  <th colspan="3">ความสามารถพิเศษ <font color="red">*</font></th>
  </tr>
  <tr>
  <th colspan="3"><textarea>พิมพ์ข้อความ</textarea></th>
  </tr>
      <tr>
  <th colspan="3">เหตุผลเเละความจำเป็นในการขอทุน <font color="red">*</font></th>
  </tr>
  <tr>
  <th colspan="3"><textarea>พิมพ์ข้อความ</textarea></th>
  </tr>
   <tr align="center">
  <th colspan="3"><button type="button" class="btn btn-success">บันทึก</button>
  					<button type="button" class="btn btn-primary">เเก้ไข</button>
            <button type="button" class="btn btn-danger">ยกเลิก</button></th>
  </tr>
</tbody>
</table>
</div>
</div>