<div class="content-wrapper">
    <div class="container-fluid">
      <?php
      $Start_Date = $this -> session -> userdata ( 'Start_Date3' ); 
      $End_Date = $this -> session -> userdata ( 'End_Date3' ); 
      if(date('Y-m-d') >= $Start_Date && date('Y-m-d') <= $End_Date){      
      ?>
      <h4>รายชื่องานทุน</h4>
      <br>
<a>หน่วยงาน/สำนักวิชา <select>
  <option value="volvo">ศูนย์บรรณาสารเเละสื่อการศึกษา</option>
  <option value="volvo">ส่วนพัสดุ</option>
  <option value="saab">ส่วนกิจการนักศึกษา</option>
  <option value="mercedes">ส่วนการเงิน</option>
  <option value="audi">หอพัก</option>
</select>&nbsp;&nbsp; ประเภทงาน : <select>
  <option value="volvo">ทั้งหมด</option>
  <option value="volvo">บริการ</option>
  <option value="saab">ธุรการ</option>
  <option value="mercedes">วิชาชีพ</option>
  <option value="audi">วิชาการ</option></select></a>
  &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-warning">ค้นหา</button>
<br>
<br>
<form action="<?php echo site_url("home2/update_job");?>" method="post">   		
<table class="table table-borderless">
  <thead>
  <tr align="center">
  	<th width="90">ลำดับ</th>
    <th width="200">หน่วยงาน</th>
    <th width="120">ประเภทงาน</th>
    <th width="200">ชื่องาน</th>
    <th width="200">ผู้ควบคุมงาน</th>
    <th width="150">จำนวนรับ</th>
    <th width="150">จำนวนสมัคร</th>
    <th>&nbsp;</th>
  </tr>
</thead>
<tbody>
  <?php $i= 1; foreach ($job_res as $row) { 
  $n = $row->Job_ID; ?>
  <tr align="center">
  	<th><?php echo $i++; ?></th>
    <th><?php echo $row->Department; ?></th>
    <th><?php echo $row->Category; ?></th>
     <td align="left"><b><?php echo $row->Job_Name; ?></b></td>
     <th><?php echo $row->job_name_ss; ?></th>
    <th><?php echo $row->Receiving_number; ?></th>
    <th><?php $j = 0; foreach ($student_res as $row) { 
        if($row->Job_ID == $n){
          $j += 1;
        }
        } 
        echo $j; ?></th>
    <th><button type="submit" class="btn btn-info" name="Job_ID" value="<?php echo $n; ?>">เลือกงาน</button></th>
  </tr>
<?php } ?>
  <!-- <tr align="center">
  	<th>2</th>
    <th>ศูนย์บรรณาสารเเละสื่อการศึกษา</th>
    <th>บริการ</th>
    <td align="left"><b>พิมพ์เอกสาร</b></td>
    <th>จิตรา การแก้ว</th>
    <th>5</th>
    <th>1</th>
    <th><button type="button" class="btn btn-info">เลือกงาน</button></th>
  </tr>
  <tr align="center">
    <th>3</th>
    <th>ศูนณ์บรรณาสาร</th>
    <th>บริการ</th>
    <td align="left"><b>จัดหนังสือตามประเภท</b></td>
    <th>นกแก้ว กว้างขวาง</th>
    <th>5</th>
    <th>2</th>
    <th><a class="btn btn-info" href="Student_registration_1">เลือกงาน</a></th>
  </tr>
  <tr align="center">
    <th>4</th>
    <th>ศูนณ์เครื่องมือวิทยาศาสตร์และเทคโนโลยี</th>
    <th>บริการ</th>
    <td align="left"><b>พิมพ์เอกสาร</b></td>
    <th>นานา บุญรักษา</th>
    <th>4</th>
    <th>0</th>
    <th><a class="btn btn-info" href="Student_registration_1">เลือกงาน</a></th>
  </tr>
  <tr align="center">
    <th>5</th>
    <th>ศูนณ์เทคโนโลยีดิจิทัล</th>
    
    <th>ธุรการ</th>
    <td align="left"><b>พิมพ์เอกสาร</b></td>
    <th>ใจกล้า กล้าหานมาก</th>
    <th>3</th>
    <th>2</th>
    <th><a class="btn btn-info" href="Student_registration_1">เลือกงาน</a></th>
  </tr>-->
</tbody>
</table>
</form>
<?php
}elseif (date('Y-m-d') < $Start_Date && date('Y-m-d') <= $End_Date) {
echo "ยังไม่ถึงเวลา";
}else{
  echo "เลยเวลา";
  echo date('Y-m-d').">=".$Start_Date."=".date('Y-m-d') ."<=". $End_Date;
}
?>
</div>
</div>