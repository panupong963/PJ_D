<div class="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">ยืนยันการทำงานนักศึกษา</li>
        </ol>   
<table class="table table-striped">
  <thead>
    <tr align="center">
      <?php foreach ($job_res as $row) {
        # code...
      ?>
      <th colspan="7">ชื่องาน : <?php echo $row->Job_Name; ?></th>
    <?php } ?>
    </tr>
    <?php foreach ($student_res as $row2) {
      //$i=1; foreach ($work_res as $row3) {
        //if($row2->student_code == $row3->STUDENTCODE){


     ?>
    <tr >
      <th colspan="7">ชื่อ : <?php echo $row2->STUDENTNAME; ?></th>
    </tr>
   
  <tr align="center">
    <th >ลำดับ</th>
    <th>วันที่ทำงาน</th>
    <th>ช่วงเวลาปฏิบัติงาน</th>
    <th>รายละเอียดงาน</th>
    
    <th></th>
  </tr>
   
<?php $i = 1; foreach ($work_res as $row3) {
  if($row2->student_code == $row3->STUDENTCODE){
    if($row3->Work_Status == "0"){
        $Work_Start = $row3->Work_Start;
        $Work_Start2 = $row3->Work_Start2;
 ?>
</thead>
<tbody>
  <tr align="center">
    <th><?php echo $i++; ?></th>
    
    <th><?php echo date("d/m/Y", strtotime($row3->Work_Date)); ?></th>
    <th><?php 
            if($row3->Work_Start >= 10){
            if($row3->Work_Start2 >= 10){
              echo $row3->Work_Start.".".$row3->Work_Start2." - ";
              }
            }
            if($row3->Work_Start < 10){
            if($row3->Work_Start2 < 10){  
            echo "0".$row3->Work_Start."."."0".$row3->Work_Start2." - ";
            }
          }
            if($row3->Work_Start < 10){
            if($row3->Work_Start2 >= 10){  
            echo "0".$row3->Work_Start.".".$row3->Work_Start2." - ";
            }
          }
            if($row3->Work_Start >= 10 ){
            if($row3->Work_Start2 < 10){  
            echo $row3->Work_Start."."."0".$row3->Work_Start2." - ";
            }
          }          









          if($row3->Work_Finish >= 10 ){
          if($row3->Work_Finish2 >= 10){
           echo  $row3->Work_Finish.".".$row3->Work_Finish2." น.";
         }
       }
          if($row3->Work_Finish < 10 ){
          if($row3->Work_Finish2 < 10){
           echo  "0".$row3->Work_Finish."."."0".$row3->Work_Finish2." น.";
         }
       }  
          if($row3->Work_Finish < 10 ){
          if($row3->Work_Finish2 >= 10){
           echo  "0".$row3->Work_Finish.".".$row3->Work_Finish2." น.";
         }
       }
          if($row3->Work_Finish >= 10 ){
          if($row3->Work_Finish2 < 10){
           echo  $row3->Work_Finish."."."0".$row3->Work_Finish2." น.";
         }
       }           

              ?></th>
    <th><?php  $dd = $row3->Job_Description; ?><button type="button" class="btn btn-warning" onclick="myFunction3('<?php echo $dd; ?>')">รายละเอียด</button></th>
    
    <th><a class="btn btn-success" href="<?= site_url("home/update_JO/{$row3->Work_ID}"); ?>">ผ่าน</a>
      <a class="btn btn-primary" href="<?= site_url("home/Student_Save/{$row3->Work_ID}"); ?>">แก้ไข</a>
      <button  class="btn btn-danger" name="id" onclick="myFunction()">ไม่ผ่าน</button></th>
  </tr>

        <script>

    function myFunction3(txt) {
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
                                  url: '<?= site_url("home/update_ja3");  ?>',
                                  type: 'post', //หรือ post (ค่าเริ่มต้นเป็นแบบ get)
                                  data: {'txt' : txt, 'Work_ID' : <?= $row3->Work_ID; ?>},
                                  dataType: 'json', //หรือ json หรือ xml
                                  success: function(response){
                                      //callbackที่เตรียมไว้รันตอนเซิร์ฟเวอร์ตอบกลับมา
                                      alert(response.message)
                                     window.location.reload();
                                                                       
                                   }
                              });
                }
    </script>
<?php }}}} ?>
</tbody>
</table>
</div>
</div>