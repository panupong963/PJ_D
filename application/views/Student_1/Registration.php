<?php
$id = $this -> session -> userdata ( 'student_code' );
foreach ($student_res as $row) {
  if($row->student_code == $id){
  $STUDENTCODE = $row->student_code;
  $STUDENTNAME = $row->STUDENTNAME;
  $FACULTYNAME = $row->FACULTYNAME;
  $PROGRAMNAME = $row->PROGRAMNAME;
  $GPAX = $row->GPAX;
  $PARENTPHONENO = $row->PARENTPHONENO;
  $HOMEADDRESS1 = $row->HOMEADDRESS1;
  $HOMEDISTRICT = $row->HOMEDISTRICT;
  $PROVINCENAME = $row->PROVINCENAME;
  $STUDENTEMAIL = $row->STUDENTEMAIL;
  $job = $row->Job_ID;


?>
<div class="content-wrapper">
    <div class="container-fluid">
<h4>ใบสมัครทุนทำงานพิเศษ</h4>
<form action="<?php echo site_url("home2/update_student");?>" method="post">
<table class="table table-borderless">
  <thead>
    <tr>
    <th colspan="3" bgcolor="#CCFFFF">1. ข้อมูลส่วนตัวนักศึกษา</th>
    </tr>
</thead>
  
  <tr>
    <th >รหัสนักศึกษา <u><?php echo $STUDENTCODE; ?></u></th>
    <th >ชื่อ - สกุล <u><?php echo $STUDENTNAME; ?></u></th>
    <th >สาขา <u> <?php echo $PROGRAMNAME; ?></u></th> 
    
  </tr>
  <tr>
    <th>สำนักวิชา <u> <?php echo $FACULTYNAME; ?></u></th>
    <th colspan="3">เกรดเฉลี่ย <u> <?php echo $GPAX; ?></u></th>
    
  </tr>
  <tr>
    <th>วัน/เดือน/ปี เกิด <u> 19/12/2529</u></th>
    <th >E-mail <u> <?php echo $STUDENTEMAIL; ?></u></th>
    <th colspan="3">เบอร์โทรศัพท์ <u> <?php echo $PARENTPHONENO; ?></u></th>

  </tr>
  <tr>
  <th>ศาสนา <u> <?php echo $row->RELIGIONNAME; ?></u></th>
  <th colspan="2">สัญชาติ <u><?php echo $row->Nationality; ?></u></th>
  </tr>

    <tr>
  <th>ที่อยู่ บ้าเลขที่ <u> <?php echo $row->HOMEADDRESS1; ?></u></th>
  <th>ถนน/ซอย <u><?php echo $row->Road; ?></u></th>
  <th>หมู่ <u>  <?php echo $row->Moo; ?></u></th>
  </tr>
  <tr>
  <th>ตำบล <u> <?php echo $row->district; ?></u></th>
  <th>อำเภอ <u> <?php echo $row->HOMEDISTRICT; ?></u></th>
  <th>จังหวัด <u> <?php echo $row->PROVINCENAME; ?></u></th>
  </tr>
  <tr>
  <th >รหัสไปรษณีย์ <u> <?php echo $row->Zip_code; ?></u></th>
   <th colspan="3">ประวัติการทำงาน <u> <?php if($row->Career_History == "1"){
                                                echo "เคยทำงานทุนพิเศษ";
                                                }else if($row->Career_History == "0"){
                                                echo "ไม่เคยเคยทำงานทุนพิเศษ";
                                                }
                                      ?></u></th>
  </tr>
<?php }} ?>

<?php foreach ($job_res as $row) {
    if($row->Job_ID == $job){
      $Job_Name = $row->Job_Name;
      $Category = $row->Category;
      $Department = $row->Department;      
    }
}
 ?>
  <tr>
  </tbody>
  <thead>
    <tr>
    <th colspan="3" bgcolor="#CCFFFF">2. ข้อมูลงาน</th>
    </tr>
    <tbody>
    <?php if($job != "0"){ ?>
    <tr>
    <th >ชื่องานที่สมัคร <u><?php echo $Job_Name; ?></u></th>
    <th>ประเภทงาน <u><?php echo $Category; ?></u></th>
    <th>หน่วยงาน/สำนักวิชา <u><?php echo $Department; ?></u></th>
  </tr>
    <?php }else {?>
      <tr>
    <th >ชื่องานที่สมัคร <u></u></th>
    <th>ประเภทงาน <u></th>
    <th>หน่วยงาน/สำนักวิชา <u></u></th>  
    </tr>    
  <?php }?>

</thead>
  <thead>
    <th colspan="3" bgcolor="#CCFFFF">3. กรอกข้อมูลเพิ่มเติม</th>
  </tr>
</thead>
<tbody>
  <?php 
  $id = $this -> session -> userdata ( 'student_code' );
  foreach ($student_res as $row) { 
    if($row->student_code == $id){


  ?>

  <tr>
  <th colspan="3"><font color="red">*</font>  ชื่อธนาคาร :
                        <?php if($row->Bank_Name == NULL){ ?>  
                        <input type="radio" name="Bank_Name" value="1"> ธนาคารกรุงไทย
                        <input type="radio" name="Bank_Name" value="2"> ธนาคารออมสิน
                        <?php }else if($row->Bank_Name == "1"){ ?>
                        <input type="radio" name="Bank_Name" value="1" checked> ธนาคารกรุงไทย
                        <input type="radio" name="Bank_Name" value="2"> ธนาคารออมสิน                          
                        <?php }else if($row->Bank_Name == "2"){ ?>
                        <input type="radio" name="Bank_Name" value="1" > ธนาคารกรุงไทย
                        <input type="radio" name="Bank_Name" value="2" checked> ธนาคารออมสิน
                        <?php } ?>  
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php if($row -> BANKACCOUNT == NULL){ ?>
                        <font color="red">*</font>เลขบัญชี : <input type="text" name=" BANKACCOUNT"></th>
                      <?php }else if($row -> BANKACCOUNT != NULL){ ?>
                        เลขบัญชี <font color="red">*</font><input type="text" name="BANKACCOUNT" placeholder = "<?php echo $row->BANKACCOUNT; ?>"></th>
                      <?php } ?>
  </tr>
  <tr>
  
  <th colspan="3"><font color="red">*</font>ค่าใช่จ่ายต่อเดือน :
                                                              <?php if($row -> Expenses == NULL){ ?>
                                                              <input type="text" name="Expenses"> บาท</th>
                                                            <?php }else if($row -> Expenses != NULL){ ?>
                                                               <input type="text" name="Expenses" placeholder = "<?php echo $row->Expenses; ?>"> บาท</th>
                                                            <?php }?>
  </tr>

 
    <tr>
  <th colspan="3"><font color="red">*</font>ความสามารถพิเศษ </th>
  </tr>
  <tr>
  <th colspan="3">
                  <?php if($row -> Talent == NULL){ ?>
                  <textarea name="Talent" placeholder = "พิมพ์ข้อความ"></textarea></th>
                <?php }else if($row -> Talent != NULL){ ?>
                   <textarea name="Talent" placeholder = "<?php echo $row->Talent; ?>"></textarea></th>
                <?php } ?>
  </tr>
      <tr>
  <th colspan="3"><font color="red">*</font>เหตุผลเเละความจำเป็นในการขอทุน </th>
  </tr>
  <tr>
  <th colspan="3">
                  <?php if($row -> Necessary == NULL){ ?>
                  <textarea name="Necessary" placeholder = "พิมพ์ข้อความ"></textarea></th>
                <?php }else if($row -> Necessary != NULL){ ?>
                   <textarea name="Necessary" placeholder = "<?php echo $row->Necessary; ?>"></textarea></th>
                <?php } ?>
  </tr>
   <tr align="center">
  <th colspan="3">
            <?php if($row->Bank_Name && $row->BANKACCOUNT && $row->Expenses && $row->Talent && $row->Necessary != NULL){ ?>
  					<button type="submit" value="<?php echo $this -> session -> userdata ( 'student_code' ); ?>" class="btn btn-success">บันทึก</button>
            <button type="reset" class="btn btn-danger">ยกเลิก</button></th>
            <?php }else {  ?>
            <button type="submit" value="<?php echo $this -> session -> userdata ( 'student_code' ); ?>" class="btn btn-success">บันทึก</button>
            <button type="reset" class="btn btn-danger">ยกเลิก</button></th>
          <?php } ?>
  </tr>
<?php }} ?>
</tbody>
</table>
</div>
</div>