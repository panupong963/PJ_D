

<div class="content-wrapper">
    <div class="container-fluid">
<table class="table table-bordered">
  <thead>
    <?php foreach ($job_res as $row) {
    
    ?>
  <tr align="center" bgcolor="#FF9900">
    <th colspan="5">ชื่องาน : <?php echo $row->Job_Name; ?></th>
  </tr>
  <tr>
    <th colspan="5">วันที่ปฏิบัติงาน : <?php echo date("d/m/Y", strtotime($row->Frist_date)); ?></th>
  </tr>
<?php } ?>
  <tr align="center">
    <th width="49">ลำดับ</th>
    <th width="150">รหัสนักศึกษา</th>
    <th>ชื่อ - นามสกุล</th>
    <th>ชั่วโมงงาน</th>
    <th>ช่องทางติดต่อ</th>
  </tr>
</thead>
<tbody>
  <?php $i=1;foreach ($student_res as $row) {
    if($row->Re_status == "1"){
      $n = $row->student_code;
      $PARENTPHONENO = $row->PARENTPHONENO;
  ?>
  <tr align="center">
    <td><?php echo $i++; ?></td>
    <td><?php echo $row->student_code; ?></td>
    <td align="left"><?php echo $row->STUDENTNAME; ?></td>
    <td><?php 
    $sum =0; foreach ($work_res as $row) {
                if($row->STUDENTCODE == $n){
                  if($row->Work_Status == "1"){
                    $sum += $row->Work_Hour;
                  }
                }
               } 
              echo floor($sum/60); 
              ?></td>
    <td><?php echo $PARENTPHONENO; ?></td>
  </tr>
<?php }
} 
?>

</tbody>
</table>
</div>
</div>