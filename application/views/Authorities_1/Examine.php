<div class="content-wrapper">
    <div class="container-fluid">
      <form action="<?php echo site_url("home2/update_job3");?>" method="post">
        </form>
    <h4>ตรวจสอบงาน</h4>
    <br>
      
        
         <!-- <b><td width="214" align="left">ปีการศึกษา : 2561</td></b>
          <b><td width="307" align="left">ภาคการศึกษา : 1</td></b>&nbsp;&nbsp;
          <b><td width="307" align="left"><font color="red">*ตรวจสอบงานภายในวันที่ 06/เม.ย/60</font></b>
          </td>-->
      
   
    <table class="table table-striped">
      <thead>
        
  <tr align="center">
    <th width="20">ลำดับ</th>
    <th width="130">หน่วยงาน</th>
    <th width="150">ชื่องาน</th>
    <th width="120">จำนวนรับ</th>
    <th width="55">เพศ</th>
     <th width="120">ลักษณะงาน</th>
     <th width="120">ผู้เสนองาน</th>
    <th width="105">การพิจารณา</th>
    <th width="90">คำแนะนำ</th>

  </tr>
</thead>
<tbody>
  <?php $i=1; foreach ($job_res as $row) {
    if($row->Job_status == 0){?>
  <tr align="center">
    <th><?php echo $i++; ?></th>
    <th><?php echo $row->Department; ?></th>
    
    <td align="left"><b><?php echo $row->Job_Name; ?></b></td>
    <th><?php echo $row->Receiving_number; ?></th>
    <th><?php if ($row->Sex == "M") {
       echo "ชาย";
        }elseif ($row->Sex == "F") {
          echo "หญิง";
        }elseif ($row->Sex == "X") {
          echo "ไม่ระบุ";
        } ?></th>
                <?php 
              $description = $row->Job_description;
               ?>
    <th><a class="btn btn-warning" onclick="myFunction2('<?php echo $description; ?>')">รายละเอียด</a></th>


    <th><?php foreach ($employees_res as $row2) {
      if($row->OFFICERID == $row2->OFFICERID){
        echo $row2->OFFICERNAME;
      }
    } ?></th>
    
    <td width="245"><a class="btn btn-success" href="<?= site_url("home2/update_job_edit/{$row->Job_ID}"); ?>" style="width:50px;height:38px">ผ่าน</a>

      <a class="btn btn-primary" href="<?= site_url("home2/authorities_edit_1/{$row->Job_ID}"); ?>" style="width:55px;">แก้ไข</a>

      <button  class="btn btn-danger" name="id" onclick="myFunction()" style="width:61px;height:38px">ไม่ผ่าน</button></td>
      <th><input type="text" input name="Reason_job" size="12" required></th>
  </tr>
      <script>

    function myFunction2(txt) {
    alert(txt);
    }

    function myFunction() {
                    var res = "rrr";
                    var txt;
                    var person = prompt("กรุณากรอกเหตุผลการยกเลิก");
                    if (person == null || person == "") {
                        txt = "0";
                    } else {
                        txt = person;
                    }
                    

                  
                                $.ajax({
                                  url: '<?= site_url("home/update_ja4");  ?>',
                                  type: 'post', //หรือ post (ค่าเริ่มต้นเป็นแบบ get)
                                  data: {'txt' : txt, 'Job_ID' : <?= $row->Job_ID; ?>},
                                  dataType: 'json', //หรือ json หรือ xml
                                  success: function(response){
                                      //callbackที่เตรียมไว้รันตอนเซิร์ฟเวอร์ตอบกลับมา
                                      alert(response.message)
                                     window.location.reload();
                                                                       
                                   }
                              });
                }
    </script>
<?php }} ?>
 <!-- <tr align="center">
    <th>2</th>
    <th>ศูนณ์บรรณาสาร</th>
    <td align="left"><b>จัดหนังสือตามประเภท</b></td>
    
    <th>8</th>
    <th>หญิง</th>
    <th><button type="button" class="btn btn-warning">รายละเอียด</button></th>
    <th>ศรีสมร<br> ย้อมใจ</th>
    

    <th><button class="btn btn-success" type="success" style="width:50px;height:38px">ผ่าน</button>
      <button type="button" class="btn btn-primary" style="width:55px;">แก้ไข</button>
      <button type="button" class="btn btn-danger">ไม่ผ่าน</button></th>
      <th><input type="text" input name="textfield" size="12"></th>

  </tr>
  <tr align="center">
    <th>3</th>
    <th>ศูนณ์บรรณาสาร</th>
    <td align="left"><b>ตรวจสอบหนังสือ</b></td>
    
    
    <th>5</th>
    <th>หญิง</th>
    <th><button type="button" class="btn btn-warning">รายละเอียด</button></th>
    <th>ศรีสมร<br> ย้อมใจ</th>
    

    <th><button class="btn btn-success" type="success" style="width:50px;height:38px">ผ่าน</button>
      <button type="button" class="btn btn-primary" style="width:55px;">แก้ไข</button>
      <button type="button" class="btn btn-danger">ไม่ผ่าน</button></th>
      <th><input type="text" input name="textfield" size="12"></th>

  </tr>
  <tr align="center">
    <th>4</th>
    <th>ศูนณ์เครื่องมือวิทยาศาสตร์และเทคโนโลยี</th>
    <td align="left"><b>พิมพ์เอกสาร</b></td>
    
    <th>2</th>
    <th>หญิง</th>
    <th><button type="button" class="btn btn-warning">รายละเอียด</button></th>
    <th>สมรส<br> ใจดี</th>
    

    <th><button class="btn btn-success" type="success" style="width:50px;height:38px">ผ่าน</button>
      <button type="button" class="btn btn-primary" style="width:55px;">แก้ไข</button>
      <button type="button" class="btn btn-danger">ไม่ผ่าน</button></th>
      <th><input type="text" input name="textfield" size="12"></th>

  </tr>
  <tr align="center">
    <th>5</th>
    <th>ศูนณ์เทคโนโลยีดิจิทัล</th>
    <td align="left"><b>พิมพ์เอกสาร</b></td>
    
    <th>2</th>
    <th>ไม่ระบุ</th>
    <th><button type="button" class="btn btn-warning">รายละเอียด</button></th>
    <th>ขวัญใจ<br> ศรีเมือง</th>
    

    <th><button class="btn btn-success" type="success" style="width:50px;height:38px">ผ่าน</button>
      <button type="button" class="btn btn-primary" style="width:55px;">แก้ไข</button>
      <button type="button" class="btn btn-danger">ไม่ผ่าน</button></th>
      <th><input type="text" input name="textfield" size="12"></th>

  </tr> -->
</tbody>
</table>

</div>
</div>