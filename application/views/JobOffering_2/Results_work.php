<div class="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">สรุปผลการทำงาน/ ภาเรียนที่ 1 ปีการศึกษา 2560</li>
        </ol>   
<table width="900" border="0" align="center">
  <tr align="center">
    <td>ชื่องาน : <select>
  <option value="volvo">--- ทั้งหมด ---</option>
  <option value="saab">ขนของ</option>
  <option value="mercedes">2559</option>
  <option value="audi">2558</option>
</select></td>
    <td>สำนักวิชา : <select>
  <option value="volvo">--- ทั้งหมด ---</option>
  <option value="saab">สารสนเทศศาสตร์</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select></td>
    <td><button type="button" class="btn btn-warning">เเสดงผล</button></td>
  </tr>
</table>

              <br> 
      <div>
  <table class="table table-striped">
    <thead>
      <?php $i=1; $j = 1;foreach ($student_res as $row) {
        $FACULTYNAME = $row->FACULTYNAME;
      ?>
      <tr bgcolor="#66FFCC">
        <th colspan="5"><?php echo $i++."."; ?> สำนักวิชา : <?php echo $FACULTYNAME; ?></th>
      </tr>
  <tr align="center">
    <th>ลำดับ</th>
    <th>รหัสนักศึกษา</th>
    <th>ชื่อ-สกุล</th>
    <th>ชั่วโมงปฎิบัติงาน</th>
    <th>คิดเป็นเงิน (บาท)</th>
  </tr>
</thead>
<tbody>
  <?php 
    if($row->FACULTYNAME == $FACULTYNAME){ 
      $id = $row->student_code;
  ?>
  <tr align="center">
    <th><?php echo $j++; ?></th>
    <th><?php echo $row->student_code; ?></th>
    <td align="left"><b><?php echo $row->STUDENTNAME; ?></b></td>
    <?php $sum = 0; foreach ($work_res as $row) {
      if($row->STUDENTCODE == $id){
        if($row->Work_Status == "1"){
          $sum += $row->Work_Hour;
        }
      }
    }
       ?>
    <th><?php echo floor($sum/60); ?></th>
    <th><?php echo floor($sum/60*30); ?></th>
  </tr>
<?php 
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