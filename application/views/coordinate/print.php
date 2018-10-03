<div class="content-wrapper">
    <div class="container-fluid">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">ออกรายงานสรุปผลการปฏิบัติงาน</li>
        </ol> 
        <form action="<?php echo site_url("home/from_s");?>" method="post">
   <table class="table table-borderless">
    <thead>
      <tr>
        <th colspan="2">สำนักวิชา</th>
      </tr>
    </thead>
    <tbody>
      
      <?php foreach ($facultyname_res as $row) { ?>

      <tr>
        <td width="200"><?php echo $row->FACULTYNAME; ?> </td>
        <td> <button target="_blank" name="FACULTYNAME" value="<?php echo $row->FACULTYNAME; ?>" ><img src="<?php echo base_url(); ?>assets/img/print.ico" width="50"></button></td>
      </tr>
    <?php } ?>

    </tbody>
  </table>
  </form>
    </div>
</div>
