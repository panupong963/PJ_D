<div class="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">สรุปข้อมูลยืนยันการทำงาน</li>
        </ol>   
<table class="table table-striped">
  <thead>
  <tr align="center">
    <th>ประเภทงาน</th>
    <th>ชื่องาน</th>
    <th>ชื่อหน่วยงาน</th>
    <th>จำนวนนักศึกษาในงาน</th>
    <th>ข้อมูลยืนยันการทำงาน</th>
  </tr>
</thead>
<tbody>
  <?php $sum1 = 0;
        $sum2 = 0;
  foreach ($job_res as $row) {
  
        $id = $row->Job_ID;
  ?>
  <tr align="center">
    <th><?php echo $row->Category; ?></th>
    <td align ="left"><b><?php echo $row->Job_Name; ?></b></td>
    <th><?php echo $row->Department; ?></th>
    <th><a class="btn btn-link" href="<?= site_url("home/JobOffering_YConfirm_2/{$id}"); ?>"><?php $i=0;foreach ($student_res as $row) {
                                                                  if($row->Job_ID == $id){
                                                                    if($row->Re_status == "1"){
                                                                    $i++;
                                                                    }
                                                                  }
                                                                } 
                                                                echo $i;
                                                                $sum1 += $i;
                                                                ?></a></th>
    <th><a class="btn btn-link" href="<?= site_url("home/JobOffering_NoConfirm_2/{$id}"); ?>"><?php $j=0;foreach ($student_res as $row) {
                                                                  if($row->Job_ID == $id){
                                                                    if($row->Re_status != "1" ){
                                                                    $j++;
                                                                    }
                                                                  }
                                                                } 
                                                                echo $j; 
                                                                $sum2 += $j;
                                                                ?></button> </th>
  </tr>
<?php 
 } ?>
  <tr align="center">
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
  </tr>
    <tr align="center">
    <th colspan="3">รวม</th>
    <th><?php echo $sum1 ?></th>
    <th><?php echo $sum2; ?></th>
  </tr>

</table>
</tbody>
    </div>
</div>