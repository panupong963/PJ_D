<div class="content-wrapper">
    <div class="container-fluid">
        <h4>ผลการคัดเลือกนักศึกษา</h4>

        <table align="right">
<td ><button type="reset" onClick='window.history.back()' class="btn btn-danger" >กลับ</button></td>
</tr></table>
<table class="table table-striped">
  <thead>
  <tr align="center">
    <th width="39">ลำดับ</th>
    <th width="119">ชื่องาน</th>
    <th width="105">รหัสนักศึกษา</th>
    <th width="160">ชื่อ - สกุล</th>
    <th width="159">สาขาวิชา</th>
    <th width="90">เกรดเฉลี่ย</th>
    
 
    <th width="110">&nbsp;</th>
    <th width="110">&nbsp;</th>

  </tr>
  </thead>
    <tbody>
        <?php $i=1;foreach ($student_res as $row) { 
            if ($row->Re_status == '1') {
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