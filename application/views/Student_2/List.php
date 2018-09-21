<div class="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">รายการปฎิบัติงาน</li>
        </ol>
<table class="table">
<thead>
    <tr align="center">
        <th colspan="8">ชื่องาน : จัดชั้นหนังสือ</th>
    </tr>
    <tr align="center">
    <th width="48">ลำดับ</th>
    <th width="119">วันที่ปฎิบัติงาน</th>
    <th width="130">เวลาปฎิบัติงาน</th>
    <th width="138">จำนวน ชม. ทำงาน</th>
    
    <th width="62">ยอดเงิน</th>
    <th width="88">สถานะ</th>
    <th width="143">หมายเหตุ</th>
  </tr>
</thead>
<tbody>
  <?php 
    $id = $this -> session -> userdata ( 'student_code' ); 
    $i= 1; foreach ($work_res as $row) { 
    if($row->STUDENTCODE == $id){
  ?>
<tr align="center">
    <th><?php echo $i++; ?></th>
    <th><?php echo $row->Work_Date; ?></th>
    <th><?php echo $row->Work_Start.".".$row->Work_Start2." - ".$row->Work_Finish.".".$row->Work_Finish2." น." ?></th>
    <th><?php echo $row->Work_Hour/60; ?></th>
   
    <th><?php echo $row->Work_Hour*30; ?></th>
    <th>
        <?php if($row->Work_Status == "0"){ ?>
            <u>รอรับรองผล</u>
        <?php }else if($row->Work_Status == "1"){ ?>
            <font color="green"><u>ผ่านการรับรองผล</u></font>
        <?php }else if($row->Work_Status == "2"){?>
            <font color="red"><u>ไม่ผ่านการรับรองผล</u></font>
        <?php } ?>
    </th>
    <th><?php echo $row->Reason_certifying; ?></th>
 </tr>
<?php }} ?>
     <!--<tr align="center">
    <th>2</th>
    <th>25/ธ.ค./59</th>
    <th>11.30 - 12.30 น.</th>
    <th>10</th>
    <th>2</th>
    <th>150</th>
    <th><font color="green"><u>ผ่านการรับรองผล</u></font></th>
    <th></th>
  </tr>
  <tr align="center">
    <th>3</th>
    <th>1/ม.ค./60</th>
    <th>11.30 - 12.30 น.</th>
    <th>10</th>
    <th>2</th>
    <th>150</th>
    <th><u>รอรับรองผล</u></th>
    <th></th>
  </tr>

  
  <tr align="center">
    <th height="300"></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th><u></u></th>
  </tr>-->
</tbody>
</table>
</div>
</div>