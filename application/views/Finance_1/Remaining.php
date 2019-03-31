<?php 
$offid = $this -> session -> userdata ( 'OFFICERID' );
?>
<div class="content-wrapper">
    <div class="container-fluid">
      
      <h4>จัดสรรงานคงเหลือ</h4>
      <?php
      $Start_Date = $this -> session -> userdata ( 'Start_Date5' ); 
      $End_Date = $this -> session -> userdata ( 'End_Date5' ); 
      if(date('Y-m-d') >= $Start_Date && date('Y-m-d') <= $End_Date){      
      ?>
      <!--<td width="307" align="left"><font color="red"><b>*ตรวจสอบงานภายในวันที่ 20/เม.ย/60</b></font>-->
          </td>

      <br>
  <table class="table table-striped">
  	<thead>
  
  <tr align="center">
    <th width="80">ลำดับ</th>
    <th width="180">ประเภทงาน</th>
    <th width="250">ชื่องาน</th>
    <th width="230">จำนวนที่ได้/จำนวนที่รับ</th>
    <th width="230">&nbsp;&nbsp;</th>
  </tr>
  </thead>
    <?php  
    $i = 1;
    foreach ($job_res as $row) { 
      if($row->OFFICERID == $offid){

    ?>
    <tbody>
    <tr align="center">
    <th><?php echo $i++; ?></th>
    <th><?php echo $row->Category; ?></th>
    <th><a ><?php echo $row->Job_Name; ?></a></th>
    <?php 
      $n = 0;
      foreach ($student_res as $row2) {
        if($row->Job_ID == $row2->Job_ID){
          if ($row2->Re_status == '1') {
            $n +=1;
          }
        }
      }
    ?>
    <th><a class="btn btn-info" href="<?= site_url("home2/finance_balance_1/{$row->Job_ID}"); ?>"><?php echo $n."/".$row->Receiving_number; ?></a></th>
    <th><a class="btn btn-info" href="<?= site_url("home2/finance_TranscendJob_1/{$row->Job_ID}"); ?>">เลือก</a></th>
    </tr>
    <?php 
  }
}
    ?>
    <!--</tbody>
    <tbody>
    <tr align="center">
    <th>2</th>
    <th>ธุรการ</th>
    <th><a >จัดเรียงเอกสาร</a></th>
    <th><a class="btn btn-info" href="finance_balance_1">1/5</a></th>
    <th><a class="btn btn-info" href="finance_TranscendJob_1">เลือก</a></th>
    </tr>
    </tbody>
    <tbody>
    <tr align="center">
    <th>3</th>
    <th>ธุรการ</th>
    <th><a >พิมพ์เอกสาร</a></th>
    <th><a class="btn btn-info" href="finance_balance_1">0/5</a></th>
    <th><a class="btn btn-info" href="finance_TranscendJob_1">เลือก</a></th>
   </tr>-->
</tbody>
</table>
    
</table>
<?php
}elseif (date('Y-m-d') < $Start_Date && date('Y-m-d') <= $End_Date) {
echo "ยังไม่ถึงวันเวลาในการจัดสรรงานคงเหลือ";
}else{
  echo "เลยช่วงวันเวลาในการจัดสรรงานคงเหลือ";
  echo date('Y-m-d').">=".$Start_Date."=".date('Y-m-d') ."<=". $End_Date;
}
?>
    </div>
</div>