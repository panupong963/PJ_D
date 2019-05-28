<div class="content-wrapper">
    <div class="container-fluid">
        <h4>ผลการคัดเลือกนักศึกษา</h4>
<table class="table table-striped">
  <thead>
  <tr align="center">
    <th width="39">ลำดับ</th>
    <th width="160">ชื่องาน</th>
    <th width="120">รหัสนักศึกษา</th>
    <th width="200">ชื่อ - สกุล</th>
    <th width="180">สาขาวิชา</th>
    <th width="100">เกรดเฉลี่ย</th>
    <th><button type="button" onclick="history.back();" class="btn btn-warning">ย้อนกลับ</button></th>
    
    <th width="110">&nbsp;</th>

  </tr>
  </thead>
    <tbody>
        <?php $i=1;foreach ($student_res as $row) { 
            if ($row->Re_status == '1' || $row->Re_status == '3') {
            foreach ($job_res as $row2) {
                if($row->Job_ID == $row2->Job_ID){
                    $name = $row2->Job_Name;
                }
            }
            ?>
  <tr align="center">
    <th><?php echo $i++; ?></th>
    <th ><?php echo $name; ?></th>
    <th><?php echo $row->student_code; ?></th>
    <th><?php echo $row->STUDENTNAME; ?></th>
    <th><?php echo $row->PROGRAMNAME; ?></th>
    <th><?php echo $row->GPAX; ?></th>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
<?php }
} 
?>

</tbody>
</table>
</div>
</div>