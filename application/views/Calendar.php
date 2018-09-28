<div class="content-wrapper">
    <div class="container-fluid">
       <h4>ปฏิทินการดำเดินงาน</h4>
      <br>
<table class="table table-bordered">
  <thead>
  <tr align="center">
     <td width="50"><b>ลำดับ</b></td>
    <td width="566"><b>กิจกรรม</b></td>
    <td width="156"><b>วันเริ่มต้น</b></td>
    <td width="156"><b>วันสิ้นสุด</b></td>

  </tr>
      </thead>
    <tbody>
    <?php $i=1;foreach ($calendar_res as $row) { ?>
  <tr align="center">
     <th><?php echo $i++; ?></th>
    <td align="left"><?php echo $row->Create_Data.$row->Schedule_ID; ?></td>
     <th><?php echo date("d/m/Y", strtotime($row->Start_Date)); ?></th>
    <th><?php echo date("d/m/Y", strtotime($row->End_Date)); ?></th>
  </tr>
<?php } ?>
 <!--  <tr align="center">
    <th>2</th>
    <td align="left">เจ้าหน้าที่งานทุนพิจรณางานที่หน่วยงานเสนอ</td>
   <th>04/เม.ย/60</th>
    <th>06/เม.ย/60</th>
  </tr>
   <tr align="center">
    <th>3</th>
    <td align="left">นักศึกษาสมัครทุนทำงานพิเศษ</td>
    <th>08/เม.ย/60</th>
    <th>12/เม.ย/60</th>
  </tr>
  <tr align="center">
    <th>4</th>
    <td align="left">ผู้เสนองานคัดเลือกผู้สมัคร</td>
    <th>14/เม.ย/60</th>
    <th>16/เม.ย/60</th>
  </tr><tr align="center">
    <th>5</th>
    <td align="left">ผู้เสนองานจัดสรรงานคงเหลือให้กับนักศึกษา</td>
    <th>18/เม.ย/60</th>
    <th>20/เม.ย/60</th>
  </tr><tr align="center">
    <th>6</th>
    <td align="left">ประกาศผลการสมัคร</td>
     <th>22/เม.ย/60</th>
    <th>25/เม.ย/60</th>
  </tr>-->
</tbody>
</table>
</div>
</div>