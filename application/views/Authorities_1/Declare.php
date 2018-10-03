<div class="content-wrapper">
    <div class="container-fluid">
      <h4>งานที่ผ่านการตรวจสอบ</h4>
      <!--<td width="307" align="left"><font color="red"><b>*ตรวจสอบงานภายในวันที่ 06/เม.ย/60</b></font>-->
          </td>
<table class="table table-striped">
  <thead>
  <tr align="center">
    <th width="41">ลำดับ</th>
    <th width="120">หน่วยงาน</th>
    <th width="110">ประเภทงาน</th>
    <th width="130">ชื่องาน</th>
    <th width="70">จำนวนรับ</th>
    <th width="160">&nbsp;</th>
  </tr>
  </thead>
  <tbody>
    <?php $i=1;foreach ($job_res as $row) {
      if($row->Job_status == "1"){?>
  <tr align="center">
    <th><?php echo $i++; ?></th>
    <th><?php echo $row->Department; ?></th>
    <th><?php echo $row->Category; ?></th>
    <td align="left"><b><?php echo $row->Job_Name; ?></b></td>
    
    <th><?php echo $row->Receiving_number; ?></th>
    <th><button type="button" class="btn btn-primary">แก้ไข</button>
    	<a href="<?= site_url("home2/authorities_Declare_1/{$row->Job_ID}"); ?>" class="btn btn-danger">ยกเลิก</a></th>
  </tr>
<?php }} ?>
 <!-- <tr align="center">
    <th>2</th>
    <th>ศูนณ์บรรณาสาร</th>
    <th>บริการ</th>
    <td align="left"><b>จัดหนังสือตามประเภท</b></td>
    
    <th>10</th>
    <th><button type="button" class="btn btn-primary">แก้ไข</button>
      <button type="button" class="btn btn-danger">ยกเลิก</button></th>
  </tr>

  <tr align="center">
    <th>3</th>
    <th>ศูนณ์บรรณาสาร</th>
    <th>บริการ</th>
    <td align="left"><b>ตรวจสอบหนังสือ</b></td>
    
    <th>5</th>
    <th><button type="button" class="btn btn-primary">แก้ไข</button>
      <button type="button" class="btn btn-danger">ยกเลิก</button></th>
  </tr>

  <tr align="center">
    <th>4</th>
    <th>ศูนย์เครื่องมือวิทยาศาสตร์และเทคโนโลยี</th>
    <th>บริการ</th>
    <td align="left"><b>พิมพ์เอกสาร</b></td>
    
    <th>2</th>
    <th><button type="button" class="btn btn-primary">แก้ไข</button>
      <button type="button" class="btn btn-danger">ยกเลิก</button></th>
  </tr>

  <tr align="center">
    <th>5</th>
    <th>ศูนณ์เทคโนโลยีดิจิทัล</th>
    <th>ธุรการ</th>
    <td align="left"><b>พิมพ์เอกสาร</b></td>
    
    <th>2</th>
    <th><button type="button" class="btn btn-primary">แก้ไข</button>
      <button type="button" class="btn btn-danger">ยกเลิก</button></th>
  </tr>
  <tr align="center">
  <th colspan="6"><button type="button" class="btn btn-primary" >ยืนยัน</button></th>
  </tr>-->
</tbody>
</table>

</div>
</div>