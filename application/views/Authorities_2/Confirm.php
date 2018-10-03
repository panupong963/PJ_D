<div class="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">รับรองการทำงานนักศึกษา</li>
        </ol>   
<table class="table table-striped">
<thead>
  <tr align="center">
    <th>ลำดับ</th>
    <th>ชื่องาน</th>
    <th>ยอดเงินทั้งหมด (บาท)</th>
    <th>จำนวน นศ. ที่ยังไม่ได้รับรองผล</th>
    <th>รับรองผล</th>
  </tr>
</thead>
<tbody>
<tbody>
  <?php $i=1 ; foreach ($job_res as $row) { 
        $Job_ID2 = $row->Job_ID;?>
      
    
  <tr align="center">
    <th><?php echo $i++; ?></th>
    <td align="left"><b><?php echo $row->Job_Name; ?></b></td>
    <?php $j = 0; foreach($student_res as $row){ 
          if($row->Job_ID == $Job_ID2){
            if($row->Re_status == 1){
              $j++;
              }
            }
          }
          $sum = $j*100*30;
          ?>
    <th><?php echo $sum; ?></th>

    <?php $k = 0; foreach($work_res as $row){ 
          if($row->Job_ID == $Job_ID2){
            if($row->Work_Status == 0){
              $k++;
              }
            }
          }
          ?>
          <th><?php echo $k; ?></th>
    <th><a class="btn btn-info" href = "<?= site_url("home/Authorities_job_2/{$Job_ID2}"); ?>">คลิก</a></th>
  </tr>
<?php 
}
       ?>
  
</tbody>
</table>

    </div>
</div>