
<div class="content-wrapper">
	<div class="container-fluid">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">บันทึกการทำงาน</li>
        </ol>

<form action="<?php echo site_url("home/insertwork");?>" method="post">

<table width="900" border="0" align="center">
  <tr align="center">
    <td width="150">วัน/เดือน/ปี ปฎิบัติงาน</td>
    <td width="200">เวลาเข้า</td>
    <td width="200">เวลากลับ</td>
    <td width="251">รายละเอียดงานที่ทำ</td>
    <td width="77">&nbsp;</td>
  </tr>
  <tr align="center">
    <td height="156" valign="top"><input type="date" name="Work_Date" required></td>
    <td valign="top">
      <select name="Work_Start"> 
     
  <option value="0">ชม.</option>
  <?php for($i=1; $i < 10; $i++){ ?> 
  <option value="<?php echo $i; ?>"><?php echo "0".$i; ?></option>
  <?php } ?>
  <?php for($i=10; $i <= 24; $i++){ ?> 
  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
  <?php } ?>
</select> 

<select name="Work_Start2">

  <option value="0">นาที</option>
  <?php for($i=0; $i < 10; $i++){ ?>
  <option value="<?php echo $i; ?>"><?php echo "0".$i; ?></option>
  <?php } ?>
  <?php for($i=10; $i <= 59; $i++){ ?> 
  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
  <?php } ?>
</select>ชั่วโมง / นาที <!--  <input type="time" name="Work_Start" required>--></td>
    
    <td valign="top"> 
    <select name="Work_Finish">
  <option value="0">ชม.</option>
  <?php for($i=1; $i < 10; $i++){ ?> 
  <option value="<?php echo $i; ?>"><?php echo "0".$i; ?></option>
  <?php } ?>
  <?php for($i=10; $i <= 24; $i++){ ?> 
  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
  <?php } ?>
</select>

<select name="Work_Finish2">
  <option value="0">นาที</option>
  <?php for($i=0; $i < 10; $i++){ ?>
  <option value="<?php echo $i; ?>"><?php echo "0".$i; ?></option>
  <?php } ?>
  <?php for($i=10; $i <= 59; $i++){ ?> 
  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
  <?php } ?>
</select>ชั่วโมง / นาที  <!--<input type="time" name="Work_Finish" required>--></td>
    <td valign="top"><textarea name="Job_Description" placeholder = "พิพ์ข้อความ" required></textarea></td>
    <td align="center"><button type="submit" class="btn btn-success">บันทึก</button></td>
  </tr>
</table>
</form> 
   

              <h5>ช่วงเวลาการบันทึกข้อมูลงานระหว่างวันที่ <font color="#FF0000" size="5">1/ม.ค./60 - 20/พ.ค./60 </font></h5>
            <hr color="#000000">
              <br>
 <div>
 <?php
 $id = $this -> session -> userdata ( 'student_code' ); 
 $n = 0;         
foreach ($work_res as $row) {
  if($row->STUDENTCODE == $id){
    if($row->Work_Status == "1"){
      $n += $row->Work_Hour;
    }
  }
}
$sum = $n / 60;
 ?>
<table class="table">
  <thead>
    <tr align="center">
      <th colspan="5">ชื่องาน : <?php echo $this -> session -> userdata ( 'Job_Name' ); ?></th>
    </tr>
      <tr align="center">
    <th colspan="5">ชั่วโมงสะสมทั้งหมด : <?php echo floor($sum); ?> ชั่วโมง</th>
  </tr>
  <tr align="center">
    <th width="55">ลำดับ</th>
    <th width="140">วันที่ปฎิบัติงาน</th>
    <th width="160">เวลาปฎิบัติงาน</th>
    <th width="248">รายละเอียดงาน</th>
    <th width="154"><font color=""><input type="text" name="Work_ID" value="<?php isset($row->Work_ID) ? $row->Work_ID : '' ?>" readonly  style="BORDER-RIGHT: medium none; BORDER-TOP: medium none; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none"></font></th>
  </tr>
</thead>
<tbody>
  <?php $i= 1; foreach ($work_res as $row) { 
    if($row->STUDENTCODE == $id){
      if($row->Work_Status == "0"){
  ?>
  <tr align="center">
    <th><?php echo $i++; ?></th>
    <th><?php echo date("d/m/Y", strtotime($row->Work_Date)); ?></th>
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
    <th><button type="button" class="btn btn-warning">รายละเอียด</button></th>
    <th><button type="button" class="btn btn-danger">ลบ</button>
    <a href="<?= base_url('home/Student_SaveJob_2/'.$row->Work_ID); ?>" class="btn btn-primary">แก้ไข</a></th>
  </tr>
<?php 
    }
  }
}
?>

  <!-- <tr align="center">
    <th>1</th>
    <th>16/ม.ค./60</th>
    <th>14.30 - 15.30 น.</th>
    <th><button type="button" class="btn btn-warning">รายละเอียด</button></th>
    <th><button type="button" class="btn btn-danger">ลบ</button>
    <button type="button" class="btn btn-primary">แก้ไข</button></th>
  </tr>
  <tr align="center">
    <th>2</th>
    <th>12/ม.ค./60</th>
    <th>14.30 - 15.30 น.</th>
    <th><button type="button" class="btn btn-warning">รายละเอียด</button></th>
    <th><button type="button" class="btn btn-danger">ลบ</button>
    <button type="button" class="btn btn-primary">แก้ไข</button></th>
  </tr>
  <tr align="center">
    <th>3</th>
    <th>9/ม.ค./60</th>
    <th>13.30 - 14.30 น.</th>
    <th><button type="button" class="btn btn-warning">รายละเอียด</button></th>
    <th><button type="button" class="btn btn-danger">ลบ</button>
    <button type="button" class="btn btn-primary">แก้ไข</button></th>
  </tr>
  <tr align="center">
    <th>4</th>
    <th>6/ม.ค./60</th>
    <th>13.30 - 14.30 น.</th>
    <th><button type="button" class="btn btn-warning">รายละเอียด</button></th>
    <th><button type="button" class="btn btn-danger">ลบ</button>
    <button type="button" class="btn btn-primary">แก้ไข</button></th>
  </tr>
  <tr align="center">
    <th>5</th>
    <th>3/ม.ค./60</th>
    <th>11.30 - 12.30 น.</th>
    <th><button type="button" class="btn btn-warning">รายละเอียด</button></th>
    <th><button type="button" class="btn btn-danger">ลบ</button>
    <button type="button" class="btn btn-primary">แก้ไข</button></th>
  </tr>
  <tr align="center">
    <th>6</th>
    <th>1/ม.ค./60</th>
    <th>11.30 - 12.30 น.</th>
    <th><button type="button" class="btn btn-warning">รายละเอียด</button></th>
    <th><button type="button" class="btn btn-danger">ลบ</button>
    <button type="button" class="btn btn-primary">แก้ไข</button></th>
  </tr> -->

  <!-- <tr align="content">
    <th colspan="5"> <ul class="pagination justify-content-center">
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">ถัดไป</a></li>
  </ul></th>
  </tr>-->
</tbody>
</table>

<h6><font color="#FF0000">*หมายเหตุ </font>นักศึกษาสามารถเเก้ไขข้อมูลการทำงานก่อน ผู้เสนองานรับรองผล</h6>
</div>
		
	</div>
</div>