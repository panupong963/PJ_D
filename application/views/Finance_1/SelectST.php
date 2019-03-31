<div class="content-wrapper">
    <div class="container-fluid">
      <h4>คัดเลือกผู้สมัครทุนทำงานพิเศษ</h4>
      <!--<h5>งาน : ขนของ</h5><br>-->
      <table align="right">
<td ><button type="reset" onClick='window.history.back()' 
  class="btn btn-warning" >กลับ</button></td>
</tr></table>
      <br>

<table class="table table-striped">
  <thead>
  <tr align="center">
    <th width="39">ลำดับ</th>
    <th width="130">รหัสนักศึกษา</th>
    <th width="200">ชื่อ - สกุล</th>
    <th width="165">สาขาวิชา</th>
    <th width="120">เกรดเฉลี่ย</th>
    <th width="125">รายละเอียด</th>
    <th width="120">การพิจารณา</th>
    <th><button type="button" onclick="history.back();" class="btn btn-warning">ย้อนกลับ</button></th>
  </tr>
  </thead>
    <tbody>
  <?php $i=1;foreach ($student_res as $row) { 
    if($row->Re_status == "0"){ ?>
  <tr align="center">
    <th><?php echo $i++; ?></th>
    <th><?php echo $row->student_code; ?></th>
    <th><?php echo $row->STUDENTNAME; ?></th>
    <th><?php echo $row->PROGRAMNAME; ?></th>
    <th><?php echo $row->GPAX; ?></th>
    <th><button type="button" class="btn btn-warning">รายละเอียด</button></th>
<<<<<<< HEAD
    <td width="140"><a href="<?= site_url("home2/update_st2/{$row->student_code}"); ?>" class="btn btn-success" style="width:60px;height:38px">อนุมัติ</a>
=======
    <td width="320"><a href="<?= site_url("home2/update_st2/{$row->student_code}"); ?>" class="btn btn-success" style="width:60px;height:38px">อนุมัติ</a>
      <button type="button" class="btn btn-danger">ปฏิเสธ</a>
>>>>>>> b0fdc98bdc7fdfbc1e37010188d7bf0e383eb357
   <th>&nbsp;</th>
     </td>
  </tr>
<?php }} ?>

</tbody>
</table>

</div>
</div>