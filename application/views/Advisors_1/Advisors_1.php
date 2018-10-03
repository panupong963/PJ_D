<div class="content-wrapper">
    <div class="container-fluid">
      <h4>ผลการสมัครทุนทำงานพิเศษ</h4>
      <br>
<table class="table table-striped" >
  <thead>
  <tr align="center">
    <th width="51" align="center">ลำดับ</th>
    <th width="110" align="center">ประเภทงาน</th>
    <th width="140" align="center">รหัสนักศึกษา</th>
    <th width="250" align="center">ชื่อ - สกุล</th>
    <th width="180" align="center">หลักสูตร</th>
    <th width="220" align="center">ชื่องาน</th>
    <th width="150" align="center">ผลการพิจารณา</th>
  </tr>
</thead>
<tbody>
    <?php 
    $id = $this -> session -> userdata ( 'OFFICERID' );
    $i=1;foreach ($student_res as $row) { 
        if($row->OFFICERID == $id){
           foreach ($job_res as $row2) { 
            if($row->Job_ID == $row2->Job_ID){
        ?>
    <tr align="center">
    <th align="center"><?php echo $i++; ?></th>
    <th align="center"><?php echo $row2->Category; ?></th>
    <th align="center"><?php echo $row->student_code; ?></th>
    <th align="center"><?php echo $row->STUDENTNAME; ?></th>
    <th align="center"><?php echo $row->FACULTYNAME; ?></th>
    <th align="center"><?php echo $row2->Job_Name; ?></th>
    <th align="center"><?php if($row->Re_status == "1"){
                                echo "ผ่าน";
                            }else{
                                echo "ไม่ผ่าน";
                            } ?></th>
  </tr>
<?php }}}} ?>
</tbody>

</table>

</div>
</div>