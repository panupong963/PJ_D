<div class="content-wrapper">
    <div class="container-fluid">
      <h4>คัดเลือกผู้สมัครทุนทำงานพิเศษ</h4>
      <?php
      $Start_Date = $this -> session -> userdata ( 'Start_Date4' ); 
      $End_Date = $this -> session -> userdata ( 'End_Date4' ); 
      if(date('Y-m-d') >= $Start_Date && date('Y-m-d') <= $End_Date){
      ?>
      <!--<font color="red"><b>*ตรวจสอบงานภายในวันที่ 16/เม.ย/60</b></font>-->
        </div>
      <!--<td width="307" align="left"><font color="red">*ตรวจสอบงานภายในวันที่ 16/เม.ย/60</font>-->
          </td>
          <br>
      
  <table class="table table-striped">
  	<thead>
  
  <tr align="center">
    <th width="100">ลำดับ</th>
    <th width="130">ประเภทงาน</th>
    <th width="160">ชื่องาน</th>
    <th width="130">จำนวนที่รับ</th>
    <th width="130">จำนวนที่สมัคร</th>
    <th width="160">ผลการคัดเลือก</th>
    <th >&nbsp;&nbsp;</th>
    <th >&nbsp;&nbsp;</th>
    <th >&nbsp;&nbsp;</th>
  </tr>
  </thead>

    <tbody>
    <?php 
    $id = $this -> session -> userdata ( 'OFFICERID' );
    $i=1;
    foreach ($job_res as $row) { 
      if($row->OFFICERID == $id){ 
        if($this -> session -> userdata ( 'Year' ) == $row->year && $this -> session -> userdata ( 'semester' ) == $row->term){
        ?>

    <tr align="center">
    <th><?php echo $i++; ?></th>
    <td align="left"><b><?php echo $row->Category; ?></b></th>
    <td align="left"><b ><?php echo $row->Job_Name; ?></b></th>
    <th><?php echo $row->Receiving_number; ?></th>
    <th><?php $j=0;foreach ($student_res as $row2) { 
        if($row->Job_ID == $row2->Job_ID){
            $j++;
        }
    }
       echo $j; ?></th>
    <th><a class="btn btn-info" href="<?= site_url("home2/finance_Results_1/{$row->Job_ID}"); ?>"><?php
                                                             $k=0;foreach ($student_res as $row3) { 
                                                                if($row->Job_ID == $row3->Job_ID){
                                                                    if($row3->Re_status == "1" || $row3->Re_status == "3"){
                                                                    $k++;  
                                                                    }
                                                                }
                                                            }
                                                             echo $k."/".$row->Receiving_number; ?></a></th>
    <th><a class="btn btn-info" href="<?= site_url("home2/finance_SelectST_1/{$row->Job_ID}"); ?>">พิจารณา</a></th>
    <th >&nbsp;&nbsp;</th>
    <th >&nbsp;&nbsp;</th>
    </tr>
<?php } } } ?>
    </tbody>
</table>
    
</table>
<?php 
}elseif (date('Y-m-d') < $Start_Date && date('Y-m-d') <= $End_Date) {

  ?>
  <h5 align="center"><?php echo "เลยช่วงวันเวลาในการคัดเลือกผู้สมัคร"; ?></h5>
<?php
}else{
?>
  
  <h5 align="center"><?php echo "เลยช่วงวันเวลาในการคัดเลือกผู้สมัคร"; ?></h5>
  <?php 
  //echo date('Y-m-d').">=".$Start_Date."=".date('Y-m-d') ."<=". $End_Date;
}
?>
    </div>
</div>