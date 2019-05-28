<br>
<br>
<h4 align="center">รายงานสรุปผลการปฏิบัติงานนักศึกษาทุนทำงานพิเศษ</h4><br>
<p align="center">ช่วงเวลาปฏิบัติงาน : ช่วงเปิดภาคเรียน</p>
<p align="center">ประจำภาคเรียน : <?php echo $this -> session -> userdata ( 'semester' ); ?>/<?php echo $this -> session -> userdata ( 'Year' ); ?></p>
<?php foreach ($work_res2 as $row4) { $name = $row4->FACULTYNAME; } ?>
<p align="center">หน่วยงาน : สำนักวิชา<?php echo $name; ?></p>
<br>
<table class="table table-bordered">
  <thead>
  <tr align="center">
    <th width="43">ลำดับ</th>
    <th>เลขประจำตัว</th>
    <th width="300">ชื่อ-สกุล</th>
    <th width="300">สาขาวิชา</th>

    <th width="100">ปฎิบัติงาน(ชม.)</th>
    <th>คิดเป็นเงิน(บาท)</th>
    <th>ลงชื่อผู้ควบคุมงาน</th>
  </tr>
</thead>
<tbody>
  <?php  $i=1;foreach ($student_res as $row) { 
      $n=0;foreach ($work_res as $row3) { 
                if($row->student_code == $row3->STUDENTCODE){
                  $n += $row3->Work_Hour;
              }
        }
        $n2 = floor($n/60);
        if($n2 >= 20){
    ?>
  <tr align="center">
    <td><?php echo $i++; ?></td>
    <td><?php echo $row->student_code; ?></td>
    <td align="left"><?php echo $row->STUDENTNAME; ?></td>
    <td><?php echo $row->PROGRAMNAME; ?></td>
    
    <td><?php echo floor($n/60); ?></td>
    <td><?php   
              $m = floor($n/60);
              $sum += $m;
              echo floor($m*30); ?></td>
    <td>&nbsp;</td>
  </tr>

<?php }} ?>
  <tr>
    <td align="center" colspan="5"><b>รวม</b></td>
    <td align="center" colspan="2"><b><?php echo floor($sum*30); ?> </b></td>
  </tr>
  <!--<tr align="center">
    <td>2</td>
    <td>58118696</td>
    <td align="left">นางสาวสมใจ รักนิ</td>
    <td>สารสนเทศศาสตร์</td>
    <td>90</td>
    <td>2,700</td>
    <td>90</td>
    <td>2,700</td>
    <td>&nbsp;</td>
  </tr>
  <tr align="center">
    <td>3</td>
    <td>58122235</td>
    <td align="left">นางสาวพอใจ คงจริง</td>
    <td>สารสนเทศศาสตร์</td>
    <td>80</td>
    <td>2,400</td>
    <td>80</td>
    <td>2,400</td>
    <td>&nbsp;</td>
  </tr>
  <tr align="center">
    <td>4</td>
    <td>58123258</td>
    <td align="left">นางสาวจาริยา พอใจ</td>
    <td>สารสนเทศศาสตร์</td>
    <td>100</td>
    <td>3,000</td>
    <td>100</td>
    <td>3,000</td>
    <td>&nbsp;</td>
  </tr>  
  <tr align="center">
    <td colspan="6" align="center">รวมจำนวน ชั่วโมง / ค่าตอบเเทน ที่นักศึกษาของหน่วยงานปฏิบัติงาน</td>
    <td>370</td>
    <td>11,100</td>
    <td>&nbsp;</td>
  </tr>-->
</tbody>
</table>

<br>
<br>
<u><b>ความเห็นของผู้ควบคุมงาน</b></u><br>
<p>การตรวจสอบข้อมูลการปฏิบัติงานของนักศึกษาทุนทำงานพิเศษ ภาคเรียนที่ <b><?php echo $this -> session -> userdata ( 'semester' ); ?>/<?php echo $this -> session -> userdata ( 'Year' ); ?> </b> จำนวน <b><?php echo $i-1;; ?></b> คน เป็นเงิน <b><?php echo floor($sum*30); ?> </b>บาท <br>ตั้งเเต่ วันที่ 19 กุมภาพันธ์ ถึง 12 เมษายน 2561</p><br>
<br>
<br>

<p align="center">ลงชื่อ ..........................................................................</p>
<p align="center">( .......................................................................... )</p>
<p align="center">สำนักวิชาสารสนเทศ</p>






