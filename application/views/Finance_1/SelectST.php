<div class="content-wrapper">
    <div class="container-fluid">
      <h4>คัดเลือกผู้สมัคร</h4>
      <!--<h5>งาน : ขนของ</h5><br>-->
      
      <br>

<table class="table table-striped">
  <thead>
  <tr align="center">
    <th width="39">ลำดับ</th>
    <th width="130">รหัสนักศึกษา</th>
    <th width="180">ชื่อ - สกุล</th>
    <th width="159">สาขาวิชา</th>
    <th width="120">เกรดเฉลี่ย</th>
    <th width="125">รายละเอียด</th>
    <th width="130">การพิจารณา</th>
    <th>&nbsp;</th>
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
    <td width="320"><a href="<?= site_url("home2/update_st2/{$row->student_code}"); ?>" class="btn btn-success" style="width:60px;height:38px">อนุมัติ</a>
   <th>&nbsp;</th>
     </td>
  </tr>
<?php }} ?>

</tbody>
</table>
<button type="button" onclick="history.back();" class="btn btn-warning">ย้อนกลับ</button>
</div>
</div>