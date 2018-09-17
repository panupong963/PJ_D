<?php
$ST = $this -> session -> userdata ( 'ST' );
$id = $this -> session -> userdata ( 'student_code' );
$test = "1414";
foreach ($student_res as $row) {
  if ($row->student_code == $id) {
    # code...
    $STUDENTEMAIL = $row->STUDENTEMAIL;
    $PARENTPHONENO = $row->PARENTPHONENO;
    $Bank_Name = $row->Bank_Name;
    $BANKACCOUNT = $row->BANKACCOUNT;
    $Re_status = $row->Re_status;
  }
  
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
    <td><font size="3">ชื่องาน <u><?php echo $this -> session -> userdata ( 'Job_Name' ); ?></u></font></td>
    <td>&nbsp;</td>
  </tr>
  <tr class="table-info">

    <td><font size="3">ชื่อผู้เสนองาน <u><?php echo $this -> session -> userdata ( 'job_name_ss' ); ?></u></font></td>
    <td></td>
  </tr>
  <tr class="table-info">
    <td><font size="3">สถานที่ทำงาน <u><?php echo $this -> session -> userdata ( 'ss' ); ?></u></font></td>
    <td>&nbsp;</td>
  </tr>
  <tr class="table-info">
    <td><font size="3">ช่องทางติดต่อ <u><?php echo $this -> session -> userdata ( 'Contact' ); ?></u></font></td>
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

<form action="<?php echo site_url("home/update_student");?>" method="post">           
              <table width="900" border="0" align="center">
  <tr>
    <td colspan="3" align="center">แก้ไขข้อมูล</td>
  </tr>
  <tr> 
    
    <td width="276" align="right" >E-mail : </td>
    <td width="293"><input type="text" name="STUDENTEMAIL" class="form-control" placeholder = "<?php echo $STUDENTEMAIL; ?>" required></td>
    <td width="317">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td align="right">โทรศัพท์ :</td>
    <td><input type="text" name="PARENTPHONENO" class="form-control" placeholder = "<?php echo $PARENTPHONENO; ?>" required></td>
    <td>(ตัวอย่าง : 0958489698 )</td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr align="center">
    <td align="right">ชื่อบัญชี : </td>
    <td>
      <?php if($Bank_Name == "1"){ ?>
        <input type="radio" name="Bank_Name" value="1" checked> ธนาคารกรุงไทย
        <input type="radio" name="Bank_Name" value="2"> ธนาคารออมสิน</td>
      <?php }else if($Bank_Name == "2"){ ?>
        <input type="radio" name="Bank_Name" value="1" > ธนาคารกรุงไทย
        <input type="radio" name="Bank_Name" value="2" checked> ธนาคารออมสิน</td>
      <?php } ?>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td align="right">เลขบัญชี : </td>
    <td><input type="text" name="BANKACCOUNT" class="form-control" placeholder = "<?php echo $BANKACCOUNT; ?>" required></td>
    <td>(ตัวอย่าง : xxx-x-xxxxx-x)</td>
  </tr>
  <tr>
    <td><!-- <input type="text" name="id" style="color: #FFFFFF; border:0; overflow:hidden;" value="<?php //echo $this -> session -> userdata ( 'student_code' ); ?>">--></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>

  <tr align="center">
    <td colspan="3"><button type="submit" class="btn btn-success" name="id" value="<?php echo $this -> session -> userdata ( 'student_code' ); ?>">บันทึก</button>
                    <button type="reset" class="btn btn-danger">ยกเลิก</button></td>
  </tr>
</table>
</form>  




            </div>
	</div>
</div>