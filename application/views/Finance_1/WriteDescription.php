<div class="content-wrapper">
    <div class="container-fluid">

      <!--
<table width="900" border="0">
  <tr>
    <td width="214" align="left">ปีการศึกษา : <select>
  <option value="volvo">2561</option>
  <option value="saab">2560</option>
  <option value="mercedes">2559</option>
  <option value="audi">2558</option>
</select></td>
    <td width="307" align="left">ภาคการศึกษา : <label class="radio-inline"><input type="radio" name="optradio">1</label>
<label class="radio-inline"><input type="radio" name="optradio">2</label>
<label class="radio-inline"><input type="radio" name="optradio">3</label></td>
  </tr>
</table>
<br>
<a>ชื่องาน  <input type="text" size="36"> &nbsp;&nbsp; ประเภทงาน <select>
=======
      <h4>กรอกรายละเอียดงาน</h4>
      <br>

    <td width="214" align="left">ปีการศึกษา : 2561</td>
    <td width="307" align="left">ภาคการศึกษา : 1</td>
<br><br>
<a>ชื่องาน <font color="red">* </font> <input type="text" size="36"> &nbsp;&nbsp; ประเภทงาน <font color="red">* </font> <select>
  															<option value="volvo">ธุรการ</option>
  															<option value="saab">เชิงวิชาชีพ</option>
  															<option value="mercedes">เชิงบริการ</option>
  															<option value="audi">เชิงวิชาการ</option>
															</select>
 &nbsp;&nbsp; สำนักวิชา <font color="red">* </font> <select>
                                <option value="volvo">ไม่จำกัด</option>
                                <option value="saab">สารสนเทศศาสตร์</option>
                                <option value="mercedes">การจัดการ</option>
                                <option value="audi">ศิลปศาสตร์</option>
                              </select>
&nbsp;&nbsp;
<br>
<br>
 &nbsp;เพศ <font color="red">* </font><select>
                                <option value="volvo">ชาย</option>
                                <option value="saab">หญิง</option>
                                <option value="saab">ชาย/หญิง</option>
                              </select>  
&nbsp;&nbsp; จำนวนที่รับ <font color="red">* </font><select>
  															<option value="volvo">1</option>
  															<option value="saab">2</option>
  															<option value="mercedes">5</option>
  															<option value="audi">10</option>
   														</select> คน 
&nbsp;&nbsp; วันที่เริ่มต้นการทำงาน <font color="red">* </font><input id="date" type="date">
<br>
<br>
ลักษณะงาน <font color="red">* </font> : <input type="radio" name="gender" value="male"> ใช้เเรงงาน
             <input type="radio" name="gender" value="female"> ความสามาถทางวิชาการ<br><br>
รายละเอียดลักษณะงาน <font color="red">* </font><br>
<textarea name="textarea">Some text...</textarea>
<br>

<button type="button" class="btn btn-success">+ เพิ่ม</button>
</a>
<br>
<hr color="#000000">
<br>-->

<form action="<?php echo site_url("home2/insertjob");?>" method="post">
<div class="container">
  <br>
  <h3>กรอกรายละเอียดงาน</h3>
<div class="stepwizard">
    <div class="stepwizard-row setup-panel">

       <div class="stepwizard-step">

            <a href="#step-1" type="button" class="btn btn-primary btn-circle"><h6>1</h6></a>
            
            <h5><p>เพิ่มข้อมูลงาน</p></h5>
        </div>

        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled"><h6>2</h6></a>
            <h5><p>รายชื่องานที่เสนอ</p></h5>
        </div>
        <!--<div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled"><h6>2</h6></a>
            <h5><p>เพิ่มข้อมูลงาน</p></h5>
        </div>-->
        

    </div>

</div>

<form role="form">
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
                
                <div class="form-group">
                    
          <br>
          <!--<table class="table table-striped" >
        <thead>  
     <tr align="center">
    <th width="60">ลำดับ </th>
    <th width="160">ปีการศึกษา</th>
    <th width="140">ภาคการศึกษา</th>
    <th width="170">ชื่องาน</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
    
    <td >
          <button class="btn btn-info nextBtn btn-lg pull-right" type="button"  style="width:60px;height:40px" ><h6>ข้าม</h6></button></td>
              
    <th>&nbsp;</th>


    
  </tr>
</thead>
  <tbody>

  <tr align="center">
    <th>1</th>
    <th>2561</th>
    <th>1</th>
    <th>จัดชั้นหนังสือ</th>

    <th><button type="button" class="btn btn-warning">รายละเอียด</button></th>
    <th>&nbsp;</th>
    <th><button type="button" class="btn btn-success">เลือก</button></th>
    <th>&nbsp;</th>



  </tr>
  <tr align="center">
    <th>2</th>
    <th>2561</th>
    <th>1</th>
    <th>จัดส่งเอกสาร</th>
    
    <th><button type="button" class="btn btn-warning">รายละเอียด</button></th>
    <th>&nbsp;</th>
    <th><button type="button" class="btn btn-success">เลือก</button></th>
    <th>&nbsp;</th>

  </tr>
  <tr align="center">
    <th>3</th>
    <th>2560</th>
    <th>3</th>
    <th>พิมพ์งาน</th>
    <th><button type="button" class="btn btn-warning">รายละเอียด</button></th>
    <th>&nbsp;</th>
    <th><button type="button" class="btn btn-success">เลือก</button></th>
    <th>&nbsp;</th>

  </tr>
</tbody>
</table>-->

<table>
                    <tbody>
                    <tr>
                     <td>ชื่องาน <font color="red">* </font> <input type="text" name="Job_Name" size="36" required>
                     ประเภทงาน <font color="red">* </font> <select name="Category">
                                                      <option value="ธุรการ">ธุรการ</option>
                                                      <option value="เชิงวิชาชีพ">เชิงวิชาชีพ</option>
                                                      <option value="เชิงบริการ">เชิงบริการ</option>
                                                      <option value="เชิงวิชาการ">เชิงวิชาการ</option>
                                                    </select>
                       สำนักวิชา <font color="red">* </font> <select>
                                                      <option value="ไม่จำกัด">ไม่จำกัด</option>
                                                      <option value="สารสนเทศศาสตร์">สารสนเทศศาสตร์</option>
                                                      <option value="การจัดการ">การจัดการ</option>
                                                      <option value="ศิลปศาสตร์">ศิลปศาสตร์</option>
                                                    </select></td>
                      </tr>

                      <tr>
                       <td ><br>เพศ <font color="red">* </font><select name="Sex">
                                                      <option value="F">หญิง</option>
                                                      <option value="M" >ชาย</option>
                                                      <option value="X">ไม่ระบุ</option>
                                
                                                    </select> 
                                                    &nbsp;&nbsp;&nbsp;&nbsp;จำนวนที่รับ <font color="red">* </font><select name="Receiving_number">
                                                      <option value="1">1</option>
                                                      <option value="2">2</option>
                                                      <option value="5">5</option>
                                                      <option value="10">10</option>
                                                    </select> คน 
                      
                      &nbsp;&nbsp;&nbsp;&nbsp; วันที่เริ่มต้นการทำงาน <font color="red">* </font><input id="date" name="Frist_date" type="date"> <br><br>

                                      <form action="/action_page.php">
                      คุณสมบัติผู้สมัคร <font color="red">* </font> : 
                       
                       
                       
                       


                       <table border="0" class="table table-striped">
                        <tr>
                          <td>
                            <input type="checkbox" name="Attribute_applicants" value="มีความขยัน">มีความขยัน
                          </td>
                          <td>
                            <input type="checkbox" name="Attribute_applicants" value="มีความรับผิดชอบ">มีความรับผิดชอบ<br>
                          </td>
                        </tr>
                        <tr>
                          <td>
                          <input type="checkbox" name="Attribute_applicants" value="มีความอดทน">มีความอดทน
                          </td>
                          <td>
                            <input type="checkbox" name="Attribute_applicants" value="สามารถใช้คอมพิวเตอร์ได้ดี">สามารถใช้คอมพิวเตอร์ได้ดี
                          </td>
                        </tr>
                        <tr>
                          <td>
                       <input type="checkbox" name="Attribute_applicants" value="ใช้ภาษาอังกฤษได้เป็นอย่างดี">ใช้ภาษาอังกฤษได้เป็นอย่างดี
                     </td>
                     <td>
                        <input type="checkbox" name="Attribute_applicants" value="สามารถใช้ Microsoft office ได้" >สามารถใช้ Microsoft office ได้
                      </td>
                      </tr>
                        <tr>
                          <td>
                       <input type="checkbox" name="Attribute_applicants" value="ตรงต่อเวลา">ตรงต่อเวลา
                     </td>
                     <td>
                        <input type="checkbox" name="Attribute_applicants" value="สามารถทำงานร่วมกับผู้อื่นได้" >สามารถทำงานร่วมกับผู้อื่นได้
                      </td>
                      </tr> 
                       <tr>
                          <td>
                       <input type="checkbox" name="Attribute_applicants" value="มีความเเข็งเเรงทำงานหนักได้">มีความเเข็งเเรงทำงานหนักได้
                     </td>
                     <td>
                        <input type="checkbox" name="Attribute_applicants" value="เรียนรู้ได้เร็ว" >เรียนรู้ได้เร็ว
                      </td>
                      </tr>                                            
                        </table>
                      </form>

                    </td>
                    </tr>
                    </tbody>
    
                   
                  <tr>
                  <td colspan="3"><br>รายละเอียดลักษณะงาน <font color="red">* </font></td>
                  
                  </tr>
                       <table border="0" class="table table-striped">
                        <tr>
                          <td>
                            <input type="checkbox" name="Job_description" value="จัดเอกสาร">จัดเอกสาร
                          </td>
                          <td>
                            <input type="checkbox" name="Job_description" value="พิมพ์งาน / ถ่ายเอกสาร">พิมพ์งาน / ถ่ายเอกสาร<br>
                          </td>
                        </tr>
                        <tr>
                          <td>
                          <input type="checkbox" name="Job_description" value="ค้นหาข้อมูล">ค้นหาข้อมูล
                          </td>
                          <td>
                            <input type="checkbox" name="Job_description" value="จัดชั้นหนังสือ">จัดชั้นหนังสือ
                          </td>
                        </tr>
                        <tr>
                          <td>
                       <input type="checkbox" name="Job_description" value="คีย์ข้อมูล">คีย์ข้อมูล
                     </td>
                     <td>
                        <input type="checkbox" name="Job_description" value="เเล้วเเต่หน่วยงานจะมอบหมาย">เเล้วเเต่หน่วยงานจะมอบหมาย
                      </td>
                      </tr>
                                                                    
                        </table>

                <tr>
                <td><button class="btn btn-info btn-lg pull-right" type="button"  style="width:90px;height:40px"<a href="localhost/PJ_D/index.php/home2/finance_WriteDescription_1" ><h6>ย้อนกลับ</h6></button>

                 </td><td>
                 <button class="btn btn-info nextBtn btn-lg pull-right" type="submit"  style="width:70px;height:40px" ><h6>บันทึก</h6></button></td>
             
           
                </tr>
                </table>
                </table>
                </div>
                <!--<div class="form-group">
                    <label class="control-label">Last Name</label>
                    <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Last Name" />
                </div>-->
                </form>
                
            </div>

        </div>
    </div>

    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12">
             
                <!--<h3> กรอกรายละเอียดงาน</h3>-->
                
                
                <tr>
                <div class="form-group">
                  <!--<table>
                    <tbody>
                    <tr>
                     <td>ชื่องาน <font color="red">* </font> <input type="text" size="36" required>
                     ประเภทงาน <font color="red">* </font> <select>
                                                      <option value="volvo">ธุรการ</option>
                                                      <option value="saab">เชิงวิชาชีพ</option>
                                                      <option value="mercedes">เชิงบริการ</option>
                                                      <option value="audi">เชิงวิชาการ</option>
                                                    </select>
                       สำนักวิชา <font color="red">* </font> <select>
                                                      <option value="volvo">ไม่จำกัด</option>
                                                      <option value="saab">สารสนเทศศาสตร์</option>
                                                      <option value="mercedes">การจัดการ</option>
                                                      <option value="audi">ศิลปศาสตร์</option>
                                                    </select></td>
                      </tr>

                      <tr>
                       <td ><br>เพศ <font color="red">* </font><select>
                                                      <option value="saab">ไม่ระบุ</option>
                                                      <option value="saab">หญิง</option>
                                                      <option value="volvo">ชาย</option>
                                
                                                    </select> 
                                                    &nbsp;&nbsp;&nbsp;&nbsp;จำนวนที่รับ <font color="red">* </font><select>
                                                      <option value="volvo">1</option>
                                                      <option value="saab">2</option>
                                                      <option value="mercedes">5</option>
                                                      <option value="audi">10</option>
                                                    </select> คน 
                      
                      &nbsp;&nbsp;&nbsp;&nbsp; วันที่เริ่มต้นการทำงาน <font color="red">* </font><input id="date" type="date"> <br><br>

                                      <form action="/action_page.php">
                      คุณสมบัติผู้สมัคร <font color="red">* </font> : 
                       <input type="checkbox" name="vehicle" value="Bike">มีความอดทน
                       <input type="checkbox" name="vehicle" value="Bike">สามารถใช้คอมพิวเตอร์ได้ดี
                       <input type="checkbox" name="vehicle" value="Bike">มีคสามขยัน
                       <input type="checkbox" name="vehicle" value="Bike">มีความรับผิดชอบ<br>
                       <input type="checkbox" name="vehicle" value="Bike">ใช้ภาษาอังกฤษได้เป็นอย่างดี<br>
                        <input type="checkbox" name="vehicle" value="Car" checked>สามารถใช้ Microsoft office ได้<br>
                      </form>
                    </td>
                    </tr>
                    </tbody>
    
                   
                  <tr>
                  <td colspan="3"><br>รายละเอียดลักษณะงาน <font color="red">* </font></td>
                  
                  </tr>
                  <tr>
                  <td colspan="3"><textarea name="textarea">Some text...</textarea></td>
                  </tr>

                <tr>
                <td><button class="btn btn-info btn-lg pull-right" type="button"  style="width:90px;height:40px"<a href="localhost/PJ_D/index.php/home2/finance_WriteDescription_1" ><h6>ย้อนกลับ</h6></button>

                 </td><td>
                 <button class="btn btn-info nextBtn btn-lg pull-right" type="button"  style="width:70px;height:40px" ><h6>ถัดไป</h6></button></td>
             
           
                </tr>
                </table>
                    </table>
                
                </div>-->
<table class="table table-striped">
  <thead>
  <tr align="center">
    <th width="90">ลำดับ</th>
    <th width="120" >ชื่องาน</th>
    <th width="120">ประเภทงาน</th>
    <th width="120">ช่วงเวลางาน</th>
    <th width="100">เพศ</th>
    <th width="120">จำนวนรับ</th>
    <th width="120">ลักษณะงาน</th>
    <th>&nbsp;</th>
  </tr>
  </thead>
  <tbody>
  <tr align="center">
    <th>1</th>
    <th>จัดเรียงเอกสาร</th>
    <th>ธุรการ</th>
    <th>02/มิ.ย/60</th>
    <th>ชาย</th>
    <th>4</th>
    <th><button type="button" class="btn btn-warning">รายละเอียด</button></th>

  </tr>
  <tr align="center">
    <th>2</th>
    <th>พิมพ์งาน</th>
    <th>ธุรการ</th>
    <th>02/มิ.ย/60</th>
    <th>หญิง</th>
    <th>2</th>
    <th><button type="button" class="btn btn-warning">รายละเอียด</button></th>

  </tr>
  <tr align="center">
    <td height="80">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>

  </tr>
</tbody>
</table>

</div>

                <!-- <div class="form-group">
                    <label class="control-label">Company Address</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Address"  />
                </div>-->
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12">
                <!--<h3> รายชื่องานที่เสนอ</h3>-->
                 <br>
            </div>
        </div>
        <br>
 

<!--<table class="table table-striped">
  <thead>
  <tr align="center">
    <th>ลำดับ</th>
    <th>ชื่องาน</th>
    <th>ประเภทงาน</th>
    <th>ช่วงเวลางาน</th>
    <th>เพศ</th>
    <th>จำนวนรับ</th>
    <th>ลักษณะงาน</th>
    <th>&nbsp;</th>
  </tr>
  </thead>
  <tbody>
  <tr align="center">
    <th>1</th>
    <th>จัดเรียงเอกสาร</th>
    <th>ธุรการ</th>
    <th>02/มิ.ย/60</th>
    <th>ชาย</th>
    <th>4</th>
    <th><button type="button" class="btn btn-warning">รายละเอียด</button></th>
    <th><button class="btn btn-success" type="success" style="width:70px;height:38px">ยืนยัน</button>
      <button type="button" class="btn btn-primary">แก้ไข</button>
      <button type="button" class="btn btn-danger">ลบ</button></th>
  </tr>
  <tr align="center">
    <th>2</th>
    <th>พิมพ์งาน</th>
    <th>ธุรการ</th>
    <th>02/มิ.ย/60</th>
    <th>หญิง</th>
    <th>2</th>
    <th><button type="button" class="btn btn-warning">รายละเอียด</button></th>
    <th><button class="btn btn-success" type="success" style="width:70px;height:38px">ยืนยัน</button>
      <button type="button" class="btn btn-primary">แก้ไข</button>
      <button type="button" class="btn btn-danger">ลบ</button></th>
  </tr>
  <tr align="center">
    <td height="80">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</tbody>
</table>


    </div>
</form>
</div>
<br>-->


<!-- เเยก -->


</div>
</div>