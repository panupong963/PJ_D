<div class="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">สรุปผลการทำงาน/ ภาเรียนที่ 1 ปีการศึกษา 2560</li>
        </ol>  


              <br> 
      <div>
                <p align="center"><input type="text" id="myInput" onkeyup="myFunction412()" placeholder="----ค้นหาชื่อหน่วยงาน----" title="Type in a name">
<img src="<?php echo base_url(); ?>assets/img/vv.png" width = “40” height="40"></p>
  <table id = "myTable" class="table table-bordered">
    <thead>
      <?php 
      $FACULTYNAME1 = 1;
        $i=1; $j = 1;foreach ($student_res as $row) {
        $FACULTYNAME = $row->FACULTYNAME;
        if($FACULTYNAME != $FACULTYNAME1){
          if($row->OFFICERID == $this -> session -> userdata ( 'OFFICERID' )){
          $FACULTYNAME1 = $FACULTYNAME;
          
          
      ?>
      <tr bgcolor="#66FFCC">
        <th colspan="5"><?php echo $i++."."; ?> สำนักวิชา : <?php echo $FACULTYNAME1; ?></th>
      </tr>
  <tr align="center">
    <th>ลำดับ</th>
    <th>รหัสนักศึกษา</th>
    <th>ชื่อ-สกุล</th>
    <th>ชั่วโมงปฎิบัติงาน (นาที)</th>
    <th>คิดเป็นเงิน (บาท)</th>
  </tr>
</thead>
<tbody>
  <?php 
    foreach ($student_res as $row2) {
    if($row2->FACULTYNAME == $FACULTYNAME){ 
      $id = $row2->student_code;
  ?>
  <tr align="center">
    <td><b><?php echo $j++; ?></b></td>
    <td><b><?php echo $row2->student_code; ?></b></td>
    <td align="left"><b><?php echo $row2->STUDENTNAME; ?></b></td>
    <?php $sum = 0; foreach ($work_res as $row) {
      if($row->STUDENTCODE == $id){
        if($row->Work_Status == "1"){
          $sum += $row->Work_Hour;
        }
      }
    }
       ?>
    <th><?php echo floor($sum); ?></th>
    <th><?php echo floor($sum/60*30); ?></th>
  </tr>
<?php 
 }

  }
  $j=1;
}
 } 
}
?>
  <!-- <tr align="center">
    <th>2</th>
    <th>58112848</th>
    <td align="left"><b>ชวนัน คิดอีก</b></td>
    <th>100</th>
    <th>3,000</th>
  </tr>
    <tr align="center">
    <th colspan="3">รวม </th>
    <th>190</th>
    <th>5,700</th>
  </tr>
  <tr bgcolor="#66FFCC">
    <th colspan="5">2. สำนักวิชา : ศิลป์ศาสตร์</th>
  </tr>
  <tr align="center">
    <th>1</th>
    <th>58112356</th>
    <td align="left"><b>สมรัก หลงทาง</b></td>
    <th>100</th>
    <th>3,000</th>
  </tr>
  <tr align="center">
    <th>2</th>
    <th>58112458</th>
    <td align="left"><b>ภาณุพงศ์ จันทมุณี</b></td>
    <th>100</th>
    <th>3,000</th>
  </tr>
  <tr align="center">
    <th>3</th>
    <th>58112569</th>
    <td align="left"><b>หวนคิด คำนึง</b></td>
    <th>50</th>
    <th>1,500</th>
  </tr>
  <tr align="center">
    <th>4</th>
    <th>58112687</th>
    <td align="left"><b>สมสี สีเหลือง</b></td>
    <th>60</th>
    <th>2,100</th>
  </tr>
  <tr align="center">
    <th>5</th>
    <th>58112987</th>
    <td align="left"><b>ภาณุสหกิจ ยอดเยี่ยม</b></td>
    <th>85</th>
    <th>2,550</th>
  </tr>
  <tr align="center">
    <th>6</th>
    <th>58123658</th>
    <td align="left"><b>ชวกิจ ราชการงานสร้าง</b></td>
    <th>60</th>
    <th>2,100</th>
  </tr>
    <tr align="center">
    <th colspan="3">รวม </th>
    <th>455</th>
    <th>14,250</th>
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
    
    if (td || td2 ) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1 || td2.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>





            </div>
          </div>
        </div>