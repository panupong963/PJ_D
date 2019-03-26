<div class="content-wrapper">
    <div class="container-fluid">
      <h4>รายชื่อนักศึกษาที่ผ่านการคัดเลือก</h4>
      <?php 
      foreach ($job_res as $row2) {
        $name = $row2->Job_Name;
      }
      ?>

      <h5>งาน : <?php echo $name; ?></h5>
      
      <table align="right">
<td ><button type="reset" onClick='window.history.back()' class="btn btn-warning" >กลับ</button></td>
</tr></table>
      <br>
<table class="table table-striped" >
  <thead>
  <tr align="center">
    <th width="51" align="center">ลำดับ</th>
    <th width="140" align="center">รหัสนักศึกษา</th>
    <th width="275" align="center">ชื่อ - สกุล</th>
    <th width="200" align="center">สำนักวิชา</th>
    <th width="275" align="center">เกรดเฉลี่ย</th>
    <th width="275" align="center">การพิจารณา</th>
    
  </tr>
</thead>
<?php
$i = 1;
 foreach ($student_res as $row) {
   
 
 ?>
<tbody>
    <tr align="center">
    <th align="center"><?php echo $i++; ?></th>
    <th align="center"><?php echo $row->student_code; ?></th>
    <th align="center"><?php echo $row->STUDENTNAME; ?></th>
    <th align="center"><?php echo $row->FACULTYNAME; ?></th>
    <th align="center"><?php echo $row->GPAX; ?></th>
    <th>
      <a class="btn btn-danger" href="<?= site_url("home2/update_st_balanec/{$row->student_code}"); ?>">ลบ</a><th>
    <th>
  </tr>
</tbody>
<?php

}
?>
<!--<tbody>
    <tr align="center">
    <th align="center">2</th>
    <th align="center">58999999</th>
    <th align="center">เจ้าหญิง สร้อยทอง</th>
    <th align="center">พยาบาลศาสตร์</th>
    <th align="center">3.80</th>
    <th><button type="button" class="btn btn-danger">ลบ</button><th>
    <th>
    
  </tr>
</tbody>
<tbody>
    <tr align="center">
    <th align="center">3</th>
    <th align="center">58135778</th>
    <th align="center">กนก มากมาย</th>
    <th align="center">พยาบาลศาสตร์</th>
    <th align="center">3.70</th>
    <th><button type="button" class="btn btn-danger">ลบ</button><th>
    <th>
    
  </tr>
</tbody>-->
</table>
</table>
</div>
</div>