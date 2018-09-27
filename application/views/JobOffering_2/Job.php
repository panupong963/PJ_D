<?php
  foreach ($job_res as $row) {
    $Job_Name = $row->Job_Name;
    $idj = $row->Job_ID;
  }

  foreach ($work_res as $row ) {
    if($row->Job_ID == $idj){
      if($row->Work_Status == "0"){
        $id = $row->STUDENTCODE;
        foreach ($student_res as $row) {
        if($row->student_code == $id){
          $STUDENTNAME = $row->STUDENTNAME;
        }
      }

      }
    }
  }
?>
<div class="content-wrapper">
    <div class="container-fluid">
      <form action="<?php echo site_url("home/update_student_confirm");?>" method="post">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">ยืนยันการทำงานนักศึกษา</li>
        </ol>   
<table class="table table-striped">
  <thead>
    <tr align="center">
      <th colspan="7">ชื่องาน : <?php echo $Job_Name; ?></th>
    </tr>
  <tr align="center">
    <th >ลำดับ</th>
    <th>ชื่อ-นามสกุล</th>
    <th>ช่วงเวลาปฏิบัติงาน</th>
    <th>วันที่ทำงาน</th>
    <th>รายละเอียดงาน</th>
    <th>เหตุผล ไม่รับรอง/เเก้ไขข้อมูล</th>
    <th></th>
  </tr>
</thead>
<tbody>

  <?php 

  $i=1; foreach ($work_res as $row ) {
    if($row->Job_ID == $idj){
      if($row->Work_Status == "0"){
        $id = $row->STUDENTCODE;
        $Work_Start = $row->Work_Start;
        $Work_Start2 = $row->Work_Start2;

 

      /*foreach ($student_res as $row) {
        if($row->student_code == $id){
          $STUDENTNAME = $row->STUDENTNAME;
        }
      }*/
    ?>




  <tr align="center">
    <th><?php echo $i++;; ?></th>
    <td align="left"><b><?php echo $STUDENTNAME; ?></b></td>

    <th><?php 
            if($row->Work_Start >= 10){
            if($row->Work_Start2 >= 10){
              echo $row->Work_Start.".".$row->Work_Start2." - ";
              }
            }
            if($row->Work_Start < 10){
            if($row->Work_Start2 < 10){  
            echo "0".$row->Work_Start."."."0".$row->Work_Start2." - ";
            }
          }
            if($row->Work_Start < 10){
            if($row->Work_Start2 >= 10){  
            echo "0".$row->Work_Start.".".$row->Work_Start2." - ";
            }
          }
            if($row->Work_Start >= 10 ){
            if($row->Work_Start2 < 10){  
            echo $row->Work_Start."."."0".$row->Work_Start2." - ";
            }
          }          









          if($row->Work_Finish >= 10 ){
          if($row->Work_Finish2 >= 10){
           echo  $row->Work_Finish.".".$row->Work_Finish2." น.";
         }
       }
          if($row->Work_Finish < 10 ){
          if($row->Work_Finish2 < 10){
           echo  "0".$row->Work_Finish."."."0".$row->Work_Finish2." น.";
         }
       }  
          if($row->Work_Finish < 10 ){
          if($row->Work_Finish2 >= 10){
           echo  "0".$row->Work_Finish.".".$row->Work_Finish2." น.";
         }
       }
          if($row->Work_Finish >= 10 ){
          if($row->Work_Finish2 < 10){
           echo  $row->Work_Finish."."."0".$row->Work_Finish2." น.";
         }
       }           

              ?></th>
    <th><?php echo date("d/m/Y", strtotime($row->Work_Date)); ?></th>


    <th><button type="button" class="btn btn-warning">รายละเอียด</button></th>
    <th><input type="text" name="Reason_certifying"></th>
    <th><button type="button" class="btn btn-success">ผ่าน</button>
      <button type="button" class="btn btn-primary">แก้ไข</button>
      <button type="submit" class="btn btn-danger" name="id" value="<?php echo $row->Work_ID; ?>">ไม่ผ่าน</button></th>
  </tr>
<?php 
}
}
}
       ?>
</tbody>
</table>
</form>
</div>
</div>