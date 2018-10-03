<div class="content-wrapper">
    <div class="container-fluid">
      <h4>สรุปผลการคัดเลือกนักศึกษา</h4>


      <br>
  <table class="table table-striped">
  	<thead>
  
  <tr align="center">
    <th width="80">ลำดับ</th>
    <th width="180">ประเภทงาน</th>
    <th width="250">ชื่องาน</th>
    <th width="190">จำนวนที่ได้/จำนวนรับ</th>
    <th>&nbsp;&nbsp;</th>
    <th>&nbsp;&nbsp;</th>
    <th>&nbsp;&nbsp;</th>
    <th>&nbsp;&nbsp;</th>
  </tr>
  </thead>

    <tbody>
        <?php 
        $id = $this -> session -> userdata ( 'OFFICERID' );
        $i=1;foreach ($job_res as $row) { 
            if($row->OFFICERID == $id){ 
                 if($this -> session -> userdata ( 'Year' ) == $row->year && $this -> session -> userdata ( 'semester' ) == $row->term){
            ?>
    <tr align="center">
    <th><?php echo $i++; ?></th>
    <th><?php echo $row->Category; ?></th>
    <th><a ><?php echo $row->Job_Name; ?></a></th>
    <th><?php
                                                             $k=0;foreach ($student_res as $row3) { 
                                                                if($row->Job_ID == $row3->Job_ID){
                                                                    if($row3->Re_status == "1"){
                                                                    $k++;  
                                                                    }
                                                                }
                                                            }
                                                             echo $k."/".$row->Receiving_number; ?></th>
    <th><a class="btn btn-info" href="<?= site_url("home2/finance_Selection_1/{$row->Job_ID}"); ?>">เลือก</a></th>
    <th>&nbsp;&nbsp;</th>
    <th>&nbsp;&nbsp;</th>
    <th>&nbsp;&nbsp;</th>
    </tr>
<?php }}} ?>
    <!--</tbody>
    <tbody>
    <tr align="center">
    <th>2</th>
    <th>ธุรการ</th>
    <th><a >จัดเรียงเอกสาร</a></th>
    <th>2/5</th>
    <th><a class="btn btn-info" href="finance_Selection_1">เลือก</a></th>
    <th>&nbsp;&nbsp;</th>
    <th>&nbsp;&nbsp;</th>
    <th>&nbsp;&nbsp;</th>
    </tr>
    </tbody>
    <tbody>
    <tr align="center">
    <th>3</th>
    <th>ธุรการ</th>
    <th><a >พิมพ์เอกสาร</a></th>
    <th>1/5</th>
    <th><a class="btn btn-info" href="finance_Selection_1">เลือก</a></th>
    <th>&nbsp;&nbsp;</th>
    <th>&nbsp;&nbsp;</th>
    <th>&nbsp;&nbsp;</th>
   </tr>-->
</tbody>
</table>
    
</table>
    </div>
</div>