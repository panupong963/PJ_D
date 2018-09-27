
<div class="content-wrapper">
	<div class="container-fluid">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">เเก้ไขการบันทึกการทำงาน </li>
        </ol>

<form action="<?php echo site_url("home/update_edit");?>" method="post">
      
      <?php foreach ($edit_res as $row) { ?>
<table width="900" border="0" align="center">
  <tr align="center">
    <td width="150">วัน/เดือน/ปี ปฎิบัติงาน</td>
    <td width="200">เวลาเข้า</td>
    <td width="200">เวลากลับ</td>
    <td width="251">รายละเอียดงานที่ทำ</td>
    <td width="77">&nbsp;</td>
  </tr>
  <tr align="center">
    <td height="156" valign="top"><input type="date" value="<?php echo $row->Work_Date; ?>" name="Work_Date" placeholder="<?php echo $row->Work_Date; ?>" required></td>
    <td valign="top">
      <select name="Work_Start"> 

  <option value="0">ชม.</option>
  <?php for($i=1; $i < 10; $i++){
  if($row->Work_Start == $i){ ?> 
  <option value="<?php echo $i; ?>" selected><?php echo "0".$i; ?></option>
  <?php }else{?>
  <option value="<?php echo $i; ?>"><?php echo "0".$i; ?></option>
  <?php }
      } ?>


  <?php for($i=10; $i <= 24; $i++){ 
    if($row->Work_Start == $i){ ?>
  <option value="<?php echo $i; ?>" selected><?php echo $i; ?></option>
  <?php }else{?>
    <option value="<?php echo $i; ?>" ><?php echo $i; ?></option>
  <?php } 
        }?>
</select> 


<select name="Work_Start2">

  <option value="0">นาที</option>
  <?php for($i=0; $i < 10; $i++){ 
    if($row->Work_Start2 == $i){ ?>
  <option value="<?php echo $i; ?>" selected><?php echo "0".$i; ?></option>
  <?php }else{?>
    <option value="<?php echo $i; ?>"><?php echo "0".$i; ?></option>
  <?php } 
        }?>


  <?php for($i=10; $i <= 59; $i++){ 
    if($row->Work_Start2 == $i){ ?> 
  <option value="<?php echo $i; ?>" selected><?php echo $i; ?></option>
  <?php }else{?>
    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
  <?php } 
        }?>
</select>ชั่วโมง / นาที <!--  <input type="time" name="Work_Start" required>--></td>
    
    <td valign="top"> 
    <select name="Work_Finish">
  <option value="0">ชม.</option>
  <?php for($i=1; $i < 10; $i++){ 
    if($row->Work_Finish == $i){ ?> 
  <option value="<?php echo $i; ?>" selected><?php echo "0".$i; ?></option>
  <?php }else{?>
    <option value="<?php echo $i; ?>"><?php echo "0".$i; ?></option>
  <?php } 
        } ?>


  <?php for($i=10; $i <= 24; $i++){ 
    if($row->Work_Finish == $i){ ?> 
  <option value="<?php echo $i; ?>" selected><?php echo $i; ?></option>
  <?php }else{?>
    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
  <?php } 
        }?>
</select>

<select name="Work_Finish2">
  <option value="0">นาที</option>
  <?php for($i=0; $i < 10; $i++){ 
    if($row->Work_Finish2 == $i){  ?>
  <option value="<?php echo $i; ?>" selected><?php echo "0".$i; ?></option>
  <?php }else{?>
    <option value="<?php echo $i; ?>"><?php echo "0".$i; ?></option>
  <?php } 
        }?>



  <?php for($i=10; $i <= 59; $i++){ 
    if($row->Work_Finish2 == $i){ ?> 
  <option value="<?php echo $i; ?>" selected><?php echo $i; ?></option>
  <?php }else{?>
    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
  <?php } 
        }?>
</select>ชั่วโมง / นาที  <!--<input type="time" name="Work_Finish" required>--></td>
    <td valign="top"><textarea name="Job_Description" placeholder = "พิพ์ข้อความ"  required><?php echo $row->Job_Description; ?></textarea></td>
    <td align="center"><button type="submit" name="id" value="<?php echo $row->Work_ID; ?>" class="btn btn-success">บันทึก</button></td>
  </tr>
</table>
<?php } ?>
</form> 
   

              <h5>ช่วงเวลาการบันทึกข้อมูลงานระหว่างวันที่ <font color="#FF0000" size="5">1/ม.ค./60 - 20/พ.ค./60 </font></h5>
            <hr color="#000000">
              <br>
 
		
	</div>
</div>