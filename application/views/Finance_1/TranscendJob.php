<div class="content-wrapper">
    <div class="container-fluid">
      <form action="<?php echo site_url("home2/update_st_job");?>" method="post">
        <h3>จัดสรรงานคงเหลือ</h3>
        <?php
        foreach ($job_res as $row3) {
          $name = $row3->Job_Name;
          $id = $row3->Job_ID;
      }
      
      ?>
        <h5><?php echo "งาน : ".$name; ?> <font color="#00ffff"><input type="text" name="idst" style="border: none ; color:#FFFFFF" readonly value="<?= $id; ?>" ></font></h5>
        
<table align="right">
<td ><button type="reset" onClick='window.history.back()' class="btn btn-warning" >กลับ</button></td>
</tr></table>

        <br>
<table class="table table-striped">
  <thead>
  <tr align="center">
    <th width="39">ลำดับ</th>
    <th width="130">รหัสนักศึกษา</th>
    <th width="200">ชื่อ - สกุล</th>
    <th width="200">สาขาวิชา</th>
    <th width="150">เกรดเฉลี่ย</th>
    <th width="150">รายละเอียด</th>
    <td>&nbsp;</td>
    <th width="150">การพิจารณา</th>
  <td>&nbsp;</td>
 


  </tr>
  </thead>
    <thead>
        <?php 
        $i = 1 ;
        foreach ($job_res as $row2) {
          $nn = $row2->Job_ID;
        foreach ($st_res as $row) {
            if($row->Re_status == '2' || $row->Re_status == '0'){

            
        ?>
  <tr align="center">
    <th><?php echo $i++; ?></th>
    <th><?php echo $row->student_code; ?></th>
    <th><?php echo $row->STUDENTNAME; ?></th>
    <th><?php echo $row->PROGRAMNAME; ?></th>
    <th><?php echo $row->GPAX; ?></th>
    <th><button type="button" class="btn btn-warning">รายละเอียด</button></th>
        <th colspan="8">
          <?php
          
            
         
          ?>
          <button type="submit" class="btn btn-success" name="joid" value="<?php echo $row->student_code; ?>">เลือก</button>
            <!--<a class="btn btn-success" href="<?//= site_url("home2/finance_SelectST_1/{$row->Job_ID}"); ?>">เลือก</a>-->
                    
                    </th>
 
  </tr>
  <?php
 }
  }
  } 
   ?>

  <!--<tr align="center">
    <th>2</th>
    <th>58134455</th>
    <th>สมจิต มากมาย</th>
    <th>สารสนเทศศาสตร์</th>
    <th>3.88</th>
    <th><button type="button" class="btn btn-warning">รายละเอียด</button></th>
        <th colspan="8">
            <a class="btn btn-info" href="<? //site_url("home2/finance_SelectST_1/{$row->Job_ID}"); ?>">เลือก</a>
                   
                    </th>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
  </tr>
  <tr align="center">
    <th>3</th>
    <th>58135778</th>
    <th>กนก มากมาย</th>
    <th>พยาบาลศาสตร์</th>
    <th>3.70</th>
    <th><button type="button" class="btn btn-warning">รายละเอียด</button></th>
        <th colspan="8">
            <button type="button" class="btn btn-success">ผ่าน</button>
                    
                    </th>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                  <td>&nbsp;</td>
  </tr>
  <tr align="center">
    <th>4</th>
    <th>58145778</th>
    <th>นกแก้ว บินดี</th>
    <th>สารสนเทศศาสตร์</th>
    <th>3.68</th>
    <th><button type="button" class="btn btn-warning">รายละเอียด</button></th>
        <th colspan="8">
            <button type="button" class="btn btn-success">ผ่าน</button>
                    
                    </th>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
  </tr>
  <tr align="center">
    <th>5</th>
    <th>58155778</th>
    <th>กรกนก เอนกชัย</th>
    <th>สารสนเทศศาสตร์</th>
    <th>3.50</th>
    <th><button type="button" class="btn btn-warning">รายละเอียด</button></th>
        <th colspan="8">
            <button type="button" class="btn btn-success">ผ่าน</button>
                    
                    </th>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
  </tr>
  <tr align="center">
    <th>6</th>
    <th>58165897</th>
    <th>ใจร้าย คิดมาก</th>
    <th>พยาบาลศาสตร์</th>
    <th>3.44</th>
    <th><button type="button" class="btn btn-warning">รายละเอียด</button></th>
        <th colspan="8">
            <button type="button" class="btn btn-success">ผ่าน</button>
                    
                    </th>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    
  </tr>-->

</thead>
</table>

</form>
</div>
</div>