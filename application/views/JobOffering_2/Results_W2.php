<div class="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">สรุปผลการทำงาน/ ภาเรียนที่ 1 ปีการศึกษา 2560</li>
        </ol>   
<form action="<?php echo site_url("home/JobOffering_results_23");?>" method="post">  
<table width="900" border="0" align="center">
   <tr align="center">
   <!--tr <td>ชื่องาน : <select name="">
  <option value="volvo">--- ทั้งหมด ---</option>
  <?php //foreach ($job_res as $row3) { ?>

  <option value="<?php //echo $row3->Job_Name; ?>"><?php //echo $row3->Job_Name; ?></option>
  <?php //} ?>
</select></td>-->
    <td>สำนักวิชา : <select name="STUDENTNAME">
  <option value="0">--- ทั้งหมด ---</option>
        <?php 
        $FACULTYNAME4 = 1;
        foreach ($student_res as $row4) {
        $FACULTYNAME3 = $row4->FACULTYNAME;
        if($FACULTYNAME3 != $FACULTYNAME4){
          $FACULTYNAME4 = $FACULTYNAME3;
      ?>
  <option value="<?php echo $row4->FACULTYNAME; ?>"><?php echo $row4->FACULTYNAME; ?></option>

<?php }} ?>
</select></td>
    <td><button type="submit" class="btn btn-warning">เเสดงผล</button></td>
  </tr>
</table>
</form>

              <br> 
      <div>
  <table class="table table-bordered">
    <thead>
      <?php 
      $FACULTYNAME1 = 1;
        $i=1; $j = 1;foreach ($student_res2 as $row) {
        $FACULTYNAME = $row->FACULTYNAME;
        if($FACULTYNAME != $FACULTYNAME1){
          $FACULTYNAME1 = $FACULTYNAME;
      ?>
      <tr bgcolor="#66FFCC">
        <th colspan="5"><?php echo $i++."."; ?> สำนักวิชา : <?php echo $FACULTYNAME; ?></th>
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
    foreach ($student_res2 as $row2) {
    if($row2->FACULTYNAME == $FACULTYNAME){ 
      $id = $row2->student_code;
  ?>
  <tr align="center">
    <th><?php echo $j++; ?></th>
    <th><?php echo $row2->student_code; ?></th>
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
 } ?>
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





            </div>
          </div>
        </div>