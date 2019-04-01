<?php
$ST = $this -> session -> userdata ( 'ST' );
$id = $this -> session -> userdata ( 'student_code' );


foreach ($student_res as $row) {
  if ($row->student_code == $id) {
    # code...
    $STUDENTEMAIL = $row->STUDENTEMAIL;
    $PARENTPHONENO = $row->PARENTPHONENO;
    $Bank_Name = $row->Bank_Name;
    $BANKACCOUNT = $row->BANKACCOUNT;
    $Re_status = $row->Re_status;
    $Bank_Name_update16 = $row->Bank_Name_update16;
  }
  
}
?>
<div class="content-wrapper">
	<div class="container-fluid">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">ยืนยันการทำงาน</li>
        </ol>
        

        <form action="<?php echo site_url("home/update_student2");?>" method="post">  
         
		<table class="table table-bordered">
      <tbody>
  <tr class="table-info">
    <td><font size="3">ชื่องาน <u><?php echo $this -> session -> userdata ( 'Job_Name' ); ?></u></font></td>
    <td ><font size="3">ลักษณะงาน <u><?php echo $this -> session -> userdata ( 'Job_description' ); ?></u></font></td>
  </tr>
  <tr class="table-info">

    <td><font size="3">ชื่อผู้เสนองาน <u><?php echo $this -> session -> userdata ( 'job_name_ss' ); ?></u></font></td>
    <td><font size="3">ภาคการศึกษาที่  <u><?php echo $this -> session -> userdata ( 'term' ); ?></u> ปีการศึกษา <u><?php echo $this -> session -> userdata ( 'year' ); ?></u></font></td>
  </tr>
  <tr class="table-info">
    <td><font size="3">สถานที่ทำงาน <u><?php echo $this -> session -> userdata ( 'ss' ); ?></u></font></td>
    <td><font size="3">ช่องทางติดต่อ <u><?php echo $this -> session -> userdata ( 'Contact' ); ?></u></font></td>
  </tr>
  
    <?php if($Re_status == '0'){ 
      $nn = $this -> session -> userdata ( 'student_code' );
      ?>
 
    <tr align="center" class="table-info">
	         <td align="right"><button type="submit" class="btn btn-success" name="id" value="<?php echo $this -> session -> userdata ( 'student_code' ); ?>">ยืนยัน</button></td>
    	<td align="left"> <font color = "#ffffff"><a name="id2" id="id2"  class="btn btn-danger" onclick="myFunction()">ปฎิเสธ</a></font></td>
          
  </tr>
<?php } ?>
</tbody>
</table>
                <script>
                function myFunction() {
                    var res = "rrr";
                    var txt;
                    var person = prompt("กรุณากรอกเหตุผลการยกเลิก");
                    if (person == null || person == "") {
                        txt = "0";
                    } else {
                        txt = person;
                    }
                    

                  
                                $.ajax({
                                  url: '<?= site_url("home/update_ja");  ?>',
                                  type: 'post', //หรือ post (ค่าเริ่มต้นเป็นแบบ get)
                                  data: {'data' : txt},
                                  dataType: 'json', //หรือ json หรือ xml
                                  success: function(response){
                                      //callbackที่เตรียมไว้รันตอนเซิร์ฟเวอร์ตอบกลับมา
                                      alert(response.message)
                                     window.location.reload();
                                                                       
                                   }
                              });
                }
  

                </script>
                <?php
   
    ?>
                
 </form>
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
    <td align="right">ชื่อธนาคาร : </td>
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
    <td align="right">ชื่อบัญชี</td>
    <td><input type="text" name="Bank_Name_update16" class="form-control" placeholder = "<?php echo $Bank_Name_update16; ?>" required></td>
    <td>(ตัวอย่าง : ชวนัน ชาญอาวุธ )</td>
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