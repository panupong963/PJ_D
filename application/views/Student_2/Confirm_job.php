<?php
$ST = $this -> session -> userdata ( 'ST' );
foreach ($job_res as $row) {
  $Job_ID = $row->Job_ID;
  $Job_Name = $row->Job_Name;
  $job_name_ss = $row->job_name_ss;
  $Contact = $row->Contact;
  $ss = $row->ss;
}
foreach ($student_res as $row) {
  $Re_status = $row->Re_status;
}
?>
<div class="content-wrapper">
	<div class="container-fluid">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">ยืนยันการทำงาน</li>
        </ol>
		<table class="table table-bordered">
      <tbody>
  <tr class="table-info">
    <td><font size="3">ชื่องาน <u><?php echo $Job_Name; ?></u></font></td>
    <td>&nbsp;</td>
  </tr>
  <tr class="table-info">

    <td><font size="3">ชื่อผู้เสนองาน <u><?php echo $job_name_ss; ?></u></font></td>
    <td></td>
  </tr>
  <tr class="table-info">
    <td><font size="3">สถานที่ทำงาน <u><?php echo $ss; ?></u></font></td>
    <td>&nbsp;</td>
  </tr>
  <tr class="table-info">
    <td><font size="3">ช่องทางติดต่อ <u><?php echo $Contact; ?></u></font></td>
    <td>&nbsp;</td>
    <?php if($Re_status == '0'){ ?>
  </tr>
    <tr align="center" class="table-info">
	<td colspan="2"><button type="button" class="btn btn-success">ยืนยัน</button>
    				<button type="button" class="btn btn-danger" onclick="myFunction()">ปฎิเสธ</button></td>
  </tr>
<?php } ?>
</tbody>
</table>

            <h5>วันทีทำงาน <font color="#FF0000" size="5">20/02/60 - 20/05/60 </font></h5>
            <hr color="#000000">
              <br>
              <div>
              <table width="900" border="0" align="center">
  <tr>
    <td colspan="3" align="center">แก้ไขข้อมูล</td>
  </tr>
  <tr> 
    
    <td width="276" align="right" >E-mail : </td>
    <td width="293"><input type="text" class="form-control" placeholder = "<?php echo $this -> session -> userdata ( 'STUDENTEMAIL' ); ?>"></td>
    <td width="317">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td align="right">โทรศัพท์ :</td>
    <td><input type="text" class="form-control" placeholder = "<?php echo $this -> session -> userdata ( 'PARENTPHONENO' ); ?>"></td>
    <td>(ตัวอย่าง : 0958489698 )</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr align="center">
    <td align="right">ชื่อบัญชี : </td>
    <td>
      <?php if($this -> session -> userdata ( 'Bank_Name' )=="1"){ ?>
        <input type="radio" name="gender" value="male" checked> ธนาคารกรุงไทย
        <input type="radio" name="gender" value="female"> ธนาคารออมสิน</td>
      <?php }else if($this -> session -> userdata ( 'Bank_Name' )=="2"){ ?>
        <input type="radio" name="gender" value="male" > ธนาคารกรุงไทย
        <input type="radio" name="gender" value="female" checked> ธนาคารออมสิน</td>
      <?php } ?>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td align="right">เลขบัญชี : </td>
    <td><input type="text" class="form-control" placeholder = "<?php echo $this -> session -> userdata ( 'BANKACCOUNT' ); ?>"></td>
    <td>(ตัวอย่าง : xxx-x-xxxxx-x)</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr align="center">
    <td colspan="3"><button type="button" class="btn btn-success">บันทึก</button>
                    <button type="button" class="btn btn-danger">ยกเลิก</button></td>
  </tr>
</table>




            </div>
	</div>
</div>