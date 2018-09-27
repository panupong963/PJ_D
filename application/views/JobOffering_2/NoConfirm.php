<div class="content-wrapper">
    <div class="container-fluid">
<table class="table table-bordered">
  <thead>
      <?php foreach ($job_res as $row) {
    
    ?>
  <tr align="center" bgcolor="#FF9900">
    <th colspan="6">ชื่องาน : <?php echo $row->Job_Name; ?></th>
  </tr>
  <?php } ?>
  <tr align="center">
    <th width="49">ลำดับ</th>
    <th>รหัสนักศึกษา</th>
    <th>ชื่อ - นามสกุล</th>
    <th>เหตุผลยกเลิกยืนยันการทำงาน</th>
    <th>ช่องทางติดต่อ</th>
    <th>สถานะ</th>
  </tr>
</thead>
<tbody>
    <?php $i=1;foreach ($student_res as $row) {
    if($row->Re_status != "1"){
      $n = $row->student_code;
      $PARENTPHONENO = $row->PARENTPHONENO;
  ?>
  <tr align="center">
    <td><?php echo $i++; ?></td>
    <td><?php echo $row->student_code; ?></td>
    <td align="left"><?php echo $row->STUDENTNAME; ?></td>
    <th><?php echo $row->Reason_ST; ?></th>
    <td><?php echo $PARENTPHONENO; ?></td>
    <td>
      <?php if($row->Re_status == "0"){ ?>
        <font color="#CCCC00"><u>เพิกเฉย</u></font>
      <?php } ?>
      <?php if($row->Re_status == "2"){ ?>
      <font color="#FF9900"><u>ปฏิเสธ</u></font>
      <?php } ?>
    </td>
  </tr>



<?php }
} ?>

</tbody>
</table>
</div>
</div>