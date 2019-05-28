<br>
<br>
<h4 align="center">รายงานสรุปยอดเงินทุนทำงานพิเศษ</h4><br>
<table class="table table-bordered">
    <thead>
      <tr align="center">
        <th width="43">ลำดับ</th>
        <th width="75">รหัส น.ศ.</th>
        <th>ชื่อ-สกุล</th>
        <th>สำนักวิชา</th>
        <th>เลขที่บัญชี</th>
        <th width="150">ค่าล่วงเวลา (บาท)</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <?php $sum = 0; $v = 0; foreach ($job_res as $row) {  ?>
        <td colspan="5"><?php echo $row->Job_Name; ?></td>
      </tr>
      
        <?php  $i=1; foreach ($student_res as $row2) {
                      if($row->Job_ID == $row2->Job_ID){
                        $n=0;foreach ($work_res as $row3) { 
                if($row2->student_code == $row3->STUDENTCODE){
                  $n += $row3->Work_Hour;
              }
        }
        $n2 = floor($n/60);
        if($n2 >= 20){
          ?>
       <tr align="center">
        <td><?php $v++; echo $i++; ?></td>
        <td><?php echo $row2->student_code; ?></td>
        <td align="left"><?php echo $row2->STUDENTNAME; ?></td>
        <td align="left"><?php echo $row2->FACULTYNAME; ?></td>
        <td><?php echo $row2->Bank_id_update; ?></td>
        <td><?php   
              $m = floor($n/60);
              $sum += $m;
              echo floor($m*30); ?></td>
      </tr>
    <?php }}}} ?>
      
      <!-- <tr>
        <td></td>
        <td colspan="5">ศูนย์สหกิจศึกษาเเละพัฒนาอาชีพ</td>
      </tr>
      <tr align="center">
        <td>1</td>
        <td>58112848</td>
        <td align="left">นายชวนัท ชาญอาวุธ</td>
        <td align="left">สหเวชศาสตร์เเละสาธารณสุขศาสตร์</td>
        <td>8281478523</td>
        <td>1,500</td>
      </tr>
      <tr align="center">
        <td>2</td>
        <td>58112848</td>
        <td align="left">นายภาณุพงศ์ จันทมุณี</td>
        <td align="left">วิศวกรรมศาสตร์เเละทรัพยากร</td>
        <td>8281852473</td>
        <td>2,500</td>
      </tr>-->
      <tr>
      <td colspan="6" align="right">จำนวนนักศึกษาทั้งหมด <?php echo $v; ?> คน คิดเป็นยอดเงินทั้งหมด <?php echo floor($sum*30); ?> บาท</td> 
      </tr>  
    </tbody>
  </table>