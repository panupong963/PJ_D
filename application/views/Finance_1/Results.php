<div class="content-wrapper">
    <div class="container-fluid">
      <h4>รายชื่อนักศึกษาที่ผ่านการคัดเลือก</h4>
      <!--<h5>งาน : ขนของ</h5>--><br>
      <table align="right">
<td ><button type="reset" onClick='window.history.back()' class="btn btn-danger" >กลับ</button></td>
</tr></table>
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
<tbody>
  <?php $i=1;foreach ($student_res as $row) { 
    if($row->Re_status == "1"){ ?>
  <tr align="center">
    <th align="center"><?php echo $i++; ?></th>
    <th align="center"><?php echo $row->student_code; ?></th>
    <th align="center"><?php echo $row->STUDENTNAME; ?></th>
    <th align="center"><?php echo $row->FACULTYNAME; ?></th>
    <th align="center"><?php echo $row->GPAX; ?></th>
    <th><a href="<?= site_url("home2/update_st/{$row->student_code}"); ?>" class="btn btn-danger">ลบ</a><th>
    <th>
  </tr>
<?php }} ?>
</tbody>
</table>
</table>
</div>
</div>