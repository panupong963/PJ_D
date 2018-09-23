<div class="content-wrapper">
    <div class="container-fluid">
      <h4>ผลการสมัครทุนทำงานพิเศษ</h4>
      <br>
<table class="table table-striped" >
  <thead>
    <?php 
    $id = $this -> session -> userdata ( 'student_code' );
    foreach ($student_res as $row) {
    if($row->student_code == $id){
      $job = $row->Job_ID;
    }
  }
    foreach ($job_res as $row){ 
      if($row->Job_ID == $job){
        $Job_Name = $row->Job_Name;
        $Category = $row->Category;
      }
    }
      ?>

  <tr align="center">
    <th width="220" align="center" colspan="5">ชื่องาน : <?php echo $Job_Name; ?></th> 
  </tr>
  <tr align="center">
    <th width="125" align="center" colspan="5">ประเภทงาน : <?php echo $Category; ?></th>    
  </tr>
  <tr align="center">
    <th width="51" align="center">ลำดับ</th>
    <th width="140" align="center">รหัสนักศึกษา</th>
    <th width="250" align="center">ชื่อ - สกุล</th>
    <th width="180" align="center">หลักสูตร</th>
    <th width="150" align="center">ผลการพิจารณา</th>
  </tr>
</thead>
<tbody>
<?php 
    $id = $this -> session -> userdata ( 'student_code' );
    $i = 1 ;foreach ($student_res as $row) {
    if($row->Job_ID == $job){
      if($row->Re_status == "1"){

?>
  <tr align="center">
    <th align="center"><?php echo $i++; ?></th>
    <th align="center"><?php echo $row->student_code; ?></th>
    <td align="left"><b><?php echo $row->STUDENTNAME; ?></b></td>
    <th align="center"><?php echo $row->FACULTYNAME; ?></th>
    <th align="center">ผ่าน</th>
  </tr>
<?php }else if($row->Re_status == "2"){ ?>
  <tr align="center">
    <th align="center"><?php echo $i++; ?></th>
    <th align="center"><?php echo $row->student_code; ?></th>
    <td align="left"><b><?php echo $row->STUDENTNAME; ?></b></td>
    <th align="center"><?php echo $row->FACULTYNAME; ?></th>
    <th align="center">ไม่ผ่าน</th>
  </tr>


<?php
}
} 
}?>
</tbody>


</table>
</table>
</div>
</div>