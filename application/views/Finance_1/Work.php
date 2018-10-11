<div class="content-wrapper">
    <div class="container-fluid">
      <h4>ประวัติการเสนองาน</h4>

<form action="<?php echo site_url("home2/finance_WriteDescription_12");?>" method="post">
<br>
<table class="table table-striped">

  <thead>  
  <tr align="center">
    <tr align="center">
    <th width="60">ลำดับ </th>
    <th width="120">ปีการศึกษา</th>
    <th width="130">ภาคการศึกษา</th>
    <th width="220">ชื่องาน</th>
    <th width="220">ลักษณะงาน</th>

    <th>&nbsp;</th>
  </tr>
</thead>
  <tbody>
    <?php $i=1;foreach ($job_res as $row) { 
      if($this -> session -> userdata ( 'semester' ) != $row->term || $this -> session -> userdata ( 'Year' ) != $row->year){
      ?>
  <tr align="center">
    <th><?php echo $i++; ?></th>
    <th><?php echo $row->year; ?></th>
    <th><?php echo $row->term; ?></th>
    <td align="left"><b><?php echo $row->Job_Name; ?></b></th>
<th><?php echo $row->Job_description; ?></th>
    <th><button type="submit" name="id" value="<?php echo $row->Job_ID; ?>" class="btn btn-success">เลือก</button></th>
  </tr>
<?php }} ?>
</tbody>
</table>
</form>
</div>
</div>