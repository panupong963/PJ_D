<div class="content-wrapper">
    <div class="container-fluid">
      <?php
      $Start_Date = $this -> session -> userdata ( 'Start_Date3' ); 
      $End_Date = $this -> session -> userdata ( 'End_Date3' ); 
      if(date('Y-m-d') >= $Start_Date && date('Y-m-d') <= $End_Date){      
      ?>
      <h4>รายชื่องานทุน</h4>
      <br>
<a>ค้นหาชื่อหน่วยงานหรือประเภทงาน</a>      
<input type="text" id="myInput" onkeyup="myFunction412()" placeholder="----ค้นหาชื่อหน่วยงาน----" title="Type in a name">
<img src="<?php echo base_url(); ?>assets/img/vv.png" width = “40” height="40">

<br>
<br>
<form action="<?php echo site_url("home2/update_job");?>" method="post">   		
<table id = "myTable" class="table table-borderless">
  <thead>
  <tr align="center">
  	<th width="90">ลำดับ</th>
    <th width="210">หน่วยงาน</th>
    <th width="130">ประเภทงาน</th>
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
  	<td><b><?php echo $i++; ?></b></td>
    <td><b><?php echo $row->Department; ?></b></td>
    <td><b><?php echo $row->Category; ?></b></td>
     <th align="left"><b><?php echo $row->Job_Name; ?></b></th>
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
<script>
function myFunction412() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    td2 = tr[i].getElementsByTagName("td")[2];
    if (td || td2) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1 || td2.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</form>

<?php
}elseif (date('Y-m-d') < $Start_Date && date('Y-m-d') <= $End_Date) {
?>
<h5 align="center"><?php echo "ยังไม่ถึงวันเวลาในการคัดเลือกผู้สมัคร"; ?></h5>
<?php

}else{

  ?>
 
  <h5 align="center"><?php echo "เลยช่วงวันเวลาในการสมัคร"; ?></h5>

  <?php
  //echo date('Y-m-d').">=".$Start_Date."=".date('Y-m-d') ."<=". $End_Date;

}
?>
</div>
</div>
