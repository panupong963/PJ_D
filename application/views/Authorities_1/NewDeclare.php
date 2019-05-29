<div class="content-wrapper">
    <div class="container-fluid">
      <h4>ผลการสมัครทุนทำงานพิเศษ</h4>
      <br>
<table class="table table-striped" >
  <thead>
<?php 
      $FACULTYNAME1 = 1;
        $j = 1;foreach ($student_res as $row) {
        $FACULTYNAME = $row->FACULTYNAME;
        if($FACULTYNAME != $FACULTYNAME1){
          $FACULTYNAME1 = $FACULTYNAME;
      ?>



      <tr bgcolor="#66FFCC">
        <th colspan="7"><?php echo $j++."."; ?> สำนักวิชา : <?php echo $FACULTYNAME; ?></th>
      </tr>
  <tr align="center">
    <th width="51" align="center">ลำดับ</th>
    <th width="140" align="center">รหัสนักศึกษา</th>
    <th width="110" align="center">ประเภทงาน</th>
    
    <th width="250" align="center">ชื่อ - สกุล</th>
    <th width="200" align="center">หลักสูตร</th>
    <th width="190" align="center">ชื่องาน</th>
    <th width="150" align="center">ผลการพิจารณา</th>
  </tr>
</thead>

<tbody>
              <?php $i=1;foreach ($student_res as $row2) {
        if($row2->Re_status != "0" && $row2->Re_status != "3"){
            if ($row2->FACULTYNAME == $FACULTYNAME) {
                
            
        $Job_ID = $row2->Job_ID;
        //echo $Job_ID;
        ?>

    <tr align="center">
    <th align="center"><?php echo $i++; ?></th>
    

    <?php foreach ($job_res as $row3) {
        if($row3->Job_ID == $Job_ID){
            //echo $row2->Job_ID ."==". $Job_ID."<br>";
    ?>

        

    <th align="center"><?php echo $row2->student_code; ?></th>
    <th align="center"><?php echo $row3->Category; ?></th>
    <td align="left"><B><?php echo $row2->STUDENTNAME; ?></B></td>
    <td align="left"><B><?php echo $row2->PROGRAMNAME; ?></B></td>
    <td align="left"><b><?php echo $row3->Job_Name; ?></b></td>
    <th align="center"><?php if($row2->Re_status == "1"){
                        echo "ผ่าน";
                         }else if($row2->Re_status == "2"){
                            echo "ไม่ผ่าน";
                         }
                         ?></th>
  </tr>
<?php 
}}
}}
}}} ?>
</tbody>
<!--<tbody>
    <tr align="center">
    <th align="center">2</th>
    <th align="center">บริการ</th>
    <th align="center">58134455</th>
    <th align="center">สมจิต มากมาย</th>
    <th align="center">สารสนเทศศาสตร์</th>
    <td align="left"><b>พิมพ์งานเอกสาร</b></td>
    <th align="center">ไม่ผ่าน</th>
  </tr>
</tbody>
<tbody>
    <tr align="center">
    <th align="center">3</th>
    <th align="center">บริการ</th>
    <th align="center">58135778</th>
    <th align="center">กนก มากมาย</th>
    <th align="center">พยาบาลศาสตร์</th>
    <td align="left"><b>พิมพ์งานเอกสาร</b></td>
    <th align="center">ผ่าน</th>
  </tr>
</tbody>
<tbody>
    <tr align="center">
    <th align="center">4</th>
    <th align="center">ธุรการ</th>
    <th align="center">58145778</th>
    <th align="center">นกแก้ว บินดี</th>
    <th align="center">สารสนเทศศาสตร์</th>
    <td align="left"><b>จัดชั้นหนังสือ</b></td>
    <th align="center">ผ่าน</th>
  </tr>
</tbody>
<tbody>
    <tr align="center">
    <th align="center">5</th>
    <th align="center">ธุรการ</th>
    <th align="center">58155778</th>
    <th align="center">กรกนก เอนกชัย</th>
    <th align="center">สารสนเทศศาสตร์</th>
    <td align="left"><b>พิมพ์งานเอกสาร</b></td>
    <th align="center">ไม่ผ่าน</th>
  </tr>
</tbody>
<tbody>
    <tr align="center">
    <th align="center">6</th>
    <th align="center">ธุรการ</th>
    <th align="center">58165778</th>
    <th align="center">ดวงกมล สุขจันทร์</th>
    <th align="center">บริหารธุรกิจ</th>
    <td align="left"><b>พิมพ์งานเอกสาร</b></td>
    <th align="center">ผ่าน</th>
  </tr>
</tbody>
<tbody>
    <tr align="center">
    <th align="center">7</th>
    <th align="center">ธุรการ</th>
    <th align="center">58168778</th>
    <th align="center">เมธินี แก้วเรือง</th>
    <th align="center">เทคโนโลยีการเกษตร</th>
    <td align="left"><b>จัดเรียงเอกสาร</b></td>
    <th align="center">ผ่าน</th>
  </tr>
</tbody>
<tbody>
    <tr align="center">
    <th align="center">8</th>
    <th align="center">ธุรการ</th>
    <th align="center">58169778</th>
    <th align="center">วนิดา ศรีสุข</th>
    <th align="center">ศิลปศาสตร์</th>
    <td align="left"><b>จัดเรียงเอกสาร</b></td>
    <th align="center">ผ่าน</th>
  </tr>
</tbody>
<tbody>
    <tr align="center">
    <th align="center">9</th>
    <th align="center">ธุรการ</th>
    <th align="center">58169999</th>
    <th align="center">ธิดารัตน์ ชูชาติ</th>
    <th align="center">ศิลปศาสตร์</th>
    <td align="left"><b>จัดส่งเอกสาร</b></td>
    <th align="center">ไม่ผ่าน</th>
  </tr>
</tbody>-->

</table>
</table>
</div>
</div>