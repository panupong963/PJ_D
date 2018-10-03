<div class="content-wrapper">
    <div class="container-fluid">
      <form action="<?php echo site_url("home2/update_calendar");?>" method="post">
      <h4>กำหนดปฏิทินการดำเนินงาน</h4>
      <br>
<table width="900" border="0">
  <?php foreach ($calendar_res as $row) {
      $Year = $row->Year;
      $semester = $row->semester;
  } ?>
  <tr>    
    <td width="214" align="left">ปีการศึกษา :<font color="red">* </font><select name="Year">
      <?php for($i=2561; $i<=2580; $i++){ 
        if($i == $Year){?>
      <option value="<?php echo $i; ?>" selected><?php echo $i; ?></option>
    <?php }else {?>
      <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
      <?php }} ?>
</select><!--<input type="text" id="datepicker" />--></td>

    <td width="307" align="left">ภาคการศึกษา :<font color="red">* </font>
      <?php for ($j=1; $j <= 3 ; $j++) {  
        if($j == $semester){?>
<label class="radio-inline"><input type="radio" name="semester" value="<?php echo $j; ?>" checked><?php echo $j; ?></label>
<?php }else{ ?>
<label class="radio-inline"><input type="radio" name="semester" value="<?php echo $j; ?>"><?php echo $j; ?></label>
<?php }} ?>
  </tr>
</table>
<br>
<!--
<table class="table">
  <thead>
  <tr align="center">
    <th width="561">กิจกรรม <font color="red">*</font></th>
    <th width="105">วันเเรก <font color="red">*</font></th>
    <th width="165">วันสุดท้าย <font color="red">*</font></th>
    <th></th>
  </tr>
</thead>
<tbody>
  <tr align="center">
    <th><textarea>Some text...</textarea></th>
    <th><input type="date"></th>
    <th><input type="date"></th>
    <th><button type="button" class="btn btn-success">เพิ่ม</button></th>
  </tr>
</tbody>
</table>
-->
<table class="table">
  <thead>
  <tr align="center">
    <th width="58">ลำดับ</th>
    <th width="420">กิจกรรม</th>
    <th width="109">วันเเรก</th>
    <th width="94">วันสุดท้าย</th>
    <th width="146"></th>
  </tr>
</thead>
<tbody>
  <?php $k=1;foreach ($calendar_res as $row) { ?>
  <tr align="center">
    <th><?php echo $k++; ?></th>
    <td align="left"><input type="text" readonly class="form-control" name="Create_Data" value="<?php echo $row->Create_Data; ?>"></td>
    <th><input type="date" readonly value="<?php echo $row->Start_Date; ?>" name="Start_Date" placeholder="<?php echo $row->Start_Date; ?>" required></th>
    <th><input type="date" readonly value="<?php echo $row->End_Date; ?>" name="End_Date" placeholder="<?php echo $row->End_Date; ?>" required></th>
    <th><a href="<?= site_url("home2/authorities_CA_2/{$row->Schedule_ID}"); ?>" class="btn btn-primary" >แก้ไข</a>
        <!--<button type="reset" class="btn btn-danger">ยกเลิก</button>--></th>
  </tr>
<?php } ?>
 <!--<tr align="center">
    <th>2</th>
    <td align="left"><b>เจ้าหน้าที่งานทุนพิจรณางานที่หน่วยงานเสนอ</b></td>
    <th>04/เม.ย/60</th>
    <th>06/เม.ย/60</th>
    <th><button type="button" class="btn btn-primary">แก้ไข</button>
        <button type="button" class="btn btn-danger">ยกเลิก</button></th>
  </tr>
  <tr align="center">
    <th>3</th>
    <td align="left"><b>นักศึกษาสมัครทุนทำงานพิเศษ</b></td>
    <th>08/เม.ย/60</th>
    <th>12/เม.ย/60</th>
    <th><button type="button" class="btn btn-primary">แก้ไข</button>
        <button type="button" class="btn btn-danger">ยกเลิก</button></th>
  </tr>
   <tr align="center">
    <th>4</th>
    <td align="left"><b>ผู้เสนองานคัดเลือกผู้สมัคร</b></td>
    <th>14/เม.ย/60</th>
    <th>16/เม.ย/60</th>
    <th><button type="button" class="btn btn-primary">แก้ไข</button>
        <button type="button" class="btn btn-danger">ยกเลิก</button></th>
  </tr>
   <tr align="center">
    <th>5</th>
    <td align="left"><b>ผู้เสนองานจัดสรรงานคงเหลือให้กับนักศึกษา</b></td>
    <th>18/เม.ย/60</th>
    <th>20/เม.ย/60</th>
    <th><button type="button" class="btn btn-primary">แก้ไข</button>
        <button type="button" class="btn btn-danger">ยกเลิก</button></th>
  </tr>
   <tr align="center">
    <th>6</th>
    <td align="left"><b>ประกาศผลการสมัคร</b></td>
    <th>22/เม.ย/60</th>
    <th>25/เม.ย/60</th>
    <th><button type="button" class="btn btn-primary">แก้ไข</button>
        <button type="button" class="btn btn-danger">ยกเลิก</button></th>
  </tr>-->
</tbody>
</table>
</form>
</div>
</div>