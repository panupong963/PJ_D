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


<div class="container">
<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
            <p>ขั้นตอนที่ 1</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
            <p>ขั้นตอนที่ 2</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
            <p>ขั้นตอนที่ 3</p>
        </div>
    </div>
</div>
<form role="form">
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3>ขั้นตอนที่ 1</h3>
                <div class="form-group">
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
                </div>
                <!--<div class="form-group">
                    <label class="control-label">Last Name</label>
                    <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Last Name" />
                </div>-->
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> ขั้นตอนที่ 2</h3>
                <div class="form-group">
                      <a>ชื่องาน <font color="red">* </font> <input type="text" size="36" required> &nbsp;&nbsp; ประเภทงาน <font color="red">* </font> <select>
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
                </div>
                <!-- <div class="form-group">
                    <label class="control-label">Company Address</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Address"  />
                </div>-->
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> ขั้นตอนที่ 3</h3>
                   ลักษณะงาน <font color="red">* </font> : <input type="radio" name="gender" value="male"> ใช้เเรงงาน
                  <input type="radio" name="gender" value="female"> ความสามาถทางวิชาการ<br><br>
                  รายละเอียดลักษณะงาน <font color="red">* </font><br>
                  <textarea name="textarea">Some text...</textarea><br>
                <button class="btn btn-success btn-lg pull-right" type="submit">บันทึก</button>
            </div>
        </div>
    </div>
</form>
</div>
<br>









<!-- เเยก -->



<table class="table table-striped">
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
    <th>ขายของ</th>
    <th>เชิงวิชาชีพ</th>
    <th>02/มิ.ย/60</th>
    <th>ชาย</th>
    <th>5</th>
    <th><button type="button" class="btn btn-warning">รายละเอียด</button></th>
    <th><button type="button" class="btn btn-primary">แก้ไข</button>
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
</div>