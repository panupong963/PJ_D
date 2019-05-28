<?php
require($_SERVER['DOCUMENT_ROOT']."/PJ_D/phpmailer/PHPMailerAutoload.php");
	/*foreach ($st_res as $row) {
		foreach ($job_res as $row2) {
			if($row2->Job_ID == $row->Job_ID){
				foreach ($calendar_res as $row3) {
					if($row2->term == $row3->semester && $row2->year == $row3->Year){

					}
				}
			}
		}
	}*/
	/*foreach ($date_res as $row) {
		$date = date_create($row->Frist_date);
		date_add($date, date_interval_create_from_date_string('7 days'));
		//echo date_format($date, 'Y-m-d');
		$day_alert = date_format($date, 'Y-m-d');
		echo $day_alert;
		if(date('Y-m-d') == $day_alert){
			foreach ($st_res as $row2) {
				if($row->Job_ID == $row2->Job_ID){
					
				}
			}
		}
	}	*/
	//panupong_963@hotmail.com
	//panupongklanaja@gmail.com
  
	foreach ($st_res as $row) {
        echo $row->alert_date."==".date('Y-m-d')."<br>";
		if($row->alert_date == date('Y-m-d')){
            //นับครั้ง
            $i = 1;
            $n = $row->student_code;
            foreach ($wa_res as $row2) {
                if ($row2->Notifications_ID == $n) {
                    $i++;
                }
            }

            if ($i <= '3') {
 
            echo $row->alert_date."=/=".date('Y-m-d');


        $date = date_create($row->alert_date);
        date_add($date, date_interval_create_from_date_string('7 days'));
        //echo date_format($date, 'Y-m-d');
        $day_alert = date_format($date, 'Y-m-d');
        echo $day_alert;

   

header('Content-Type: text/html; charset=utf-8');
 
$mail = new PHPMailer;
$mail->CharSet = "utf-8";
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
 
 
$gmail_username = "panupongklanaja@gmail.com"; // gmail ที่ใช้ส่ง
$gmail_password = "k0811883329"; // รหัสผ่าน gmail
// ตั้งค่าอนุญาตการใช้งานได้ที่นี่ https://myaccount.google.com/lesssecureapps?pli=1
 
 
$sender = "WU Support"; // ชื่อผู้ส่ง
$email_sender = "noreply@ibsone.com"; // เมล์ผู้ส่ง 
$email_receiver = $row->STUDENTEMAIL; // เมล์ผู้รับ ***
 echo $email_receiver;
$subject = "เปลี่ยนรหัสผ่าน"; // หัวข้อเมล์
 
 
$mail->Username = $gmail_username;
$mail->Password = $gmail_password;
$mail->setFrom($email_sender, $sender);
$mail->addAddress($email_receiver);
$mail->Subject = $subject;
 
$email_content = '
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="x-apple-disable-message-reformatting">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="telephone=no" name="format-detection">
    <title></title>

    <link href=" '.base_url().'https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

</head>

<body>
    <div class="es-wrapper-color">

        <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                    <td class="esd-email-paddings" valign="top">
                        <table class="es-content es-preheader esd-header-popover" cellspacing="0" cellpadding="0" align="center">
                            <tbody>
                                <tr>
                                    <td class="es-adaptive esd-stripe" esd-custom-block-id="2730" align="center">
                                        <table class="es-content-body" width="600" cellspacing="0" cellpadding="0" align="center">
                                            <tbody>
                                                <tr>
                                                    <td class="esd-structure es-p10t es-p10b es-p10r es-p10l" align="left">
                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="esd-container-frame" width="580" valign="top" align="center">
                                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="es-infoblock esd-block-text" align="center">
                                                                                       
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="es-header es-preheader" cellspacing="0" cellpadding="0" align="center">
                            <tbody>
                                <tr>
                                    <td class="es-adaptive esd-stripe" esd-custom-block-id="2731" align="center">
                                        <table class="es-header-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#f6f6f6" align="center">
                                            <tbody>
                                                <tr>
                                                    <td class="esd-structure es-p10t es-p10b es-p10r es-p10l" style="background-color: rgb(51, 51, 51);" bgcolor="#333333" align="left">
                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="esd-container-frame" width="580" valign="top" align="center">
                                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="esd-block-image" align="center">
                                                                                        <a href="" target="_blank"><img src=" '.base_url().'assets/img/wu.png" alt="Fashion logo" title="Fashion logo" width="200"></a>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="esd-structure es-p10t es-p10b" esd-general-paddings-checked="false" align="left">
                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="esd-container-frame" width="600" valign="top" align="center">
                                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="esd-block-menu" esd-img-prev-h="16" esd-img-prev-w="16">
                                                                                        <table class="es-menu" width="100%" cellspacing="0" cellpadding="0">
                                                                                            <tbody>
                                                                                                
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="es-content" cellspacing="0" cellpadding="0" align="center">
                            <tbody>
                                <tr>
                                    <td class="esd-stripe" esd-custom-block-id="2732" align="center">
                                        <table class="es-content-body" width="600" cellspacing="0" cellpadding="0" bgcolor="#f6f6f6" align="center">
                                            <tbody>
                                                <tr>
                                                    <td class="esd-structure" align="left">
                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="esd-container-frame" width="600" valign="top" align="center">
                                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="esd-block-banner" style="position: relative;" align="center" esdev-config="h1">
                                          
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="es-footer" cellspacing="0" cellpadding="0" align="center">
                            <tbody>
                                <tr>
                                    <td class="esd-stripe" esd-custom-block-id="2744" align="center">
                                        <table class="es-footer-body" width="600" cellspacing="0" cellpadding="0" align="center">
                                            <tbody>
                                                <tr>
                                                    <td class="esd-structure" esd-general-paddings-checked="false" align="left">
                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="esd-container-frame" width="600" valign="top" align="center">
                                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="esd-block-spacer es-p10t es-p10b es-p20r es-p20l" align="center">
                                                                                        <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="border-bottom: 1px solid transparent; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; height: 1px; width: 100%; margin: 0px;"></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="esd-structure es-p10t" esd-general-paddings-checked="false" align="left">
                                                       
                                                        <table class="es-left" cellspacing="0" cellpadding="0" align="left">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="es-m-p0r es-m-p20b esd-container-frame" width="187" align="center">
                                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="esd-block-spacer es-p20" align="center">
                                                                                        <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="border-bottom: 1px solid #cccccc; background:none; height:1px; width:100%; margin:0px 0px 0px 0px;"></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                    <td class="es-hidden" width="20"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                   
                                                        <table class="es-left" cellspacing="0" cellpadding="0" align="left">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="es-m-p20b esd-container-frame" width="187" align="center">
                                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="esd-block-social" align="center">
                                                                                        <table class="es-table-not-adapt es-social" cellspacing="0" cellpadding="0">
                                                                                            <tbody>
                                                                                                
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                       
                                                        <table class="es-right" cellspacing="0" cellpadding="0" align="right">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="esd-container-frame" width="186" align="center">
                                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="esd-block-spacer es-p20" align="center">
                                                                                        <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="border-bottom: 1px solid #cccccc; background:none; height:1px; width:100%; margin:0px 0px 0px 0px;"></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                   
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="esd-structure" esd-general-paddings-checked="false" align="left">
                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="esd-container-frame" width="600" valign="top" align="center">
                                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="esd-block-spacer es-p10t es-p10b es-p20r es-p20l" align="center">
                                                                                        <table width="100%" height="100%" cellspacing="0" cellpadding="0" border="0">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td style="border-bottom: 1px solid transparent; background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%; height: 1px; width: 100%; margin: 0px;"></td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="esd-structure es-p10t es-p10b es-p10r es-p10l" esd-general-paddings-checked="false" style="background-color: rgb(228, 232, 234);" bgcolor="#e4e8ea" align="left">
                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="esd-container-frame" width="580" valign="top" align="center">
                                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="esd-block-text" align="left">
                                                                                        <p align="center" style="line-height: 150%;">ทุนทำงานพิเศษ</p>
                                                                                        <p align="center" style="line-height: 150%;">เเจ้งเตือนเรื่อง บันทึกข้อมูลการทำงาน ครั้งที่ '.$i.' </p>
                                                                                        <p style="line-height: 150%;">เรียนคุณ '.$row->STUDENTNAME.' ท่านไม่ได้ทำการบันทึกข้อมูลการทำงานผ่านทางระบบติดตามทุนทำงานพิเศษ กรุณาทำการบันทึกข้อมูลการทำงานผ่านทางเว็บไซต์ <a href = "http://localhost/PJ_D/index.php/home">http://localhost/PJ_D/index.php/home</a> ก่อนวันที่ '.$day_alert.'<br></p>
                                                                                        <br>
                                                                                        <br>
                                                                                        <br>
                                                                                        <p style="line-height: 150%;">โทร <u>0915293284</u></p>
                                                                                        <p style="line-height: 150%;">ติดต่อเพิ่มเติมได้ที่ ฝ่ายทุนการศึกษา(ทุนทำงานพิเศษ)</p>
                                                                                        <p style="line-height: 150%;"><a href="www.wu.ac.th">www.wu.ac.th</a><br></p>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table class="esd-footer-popover es-content" cellspacing="0" cellpadding="0" align="center">
                            <tbody>
                                <tr>
                                    <td class="esd-stripe" align="center">
                                        <table class="es-content-body" style="background-color: transparent;" width="600" cellspacing="0" cellpadding="0" align="center">
                                            <tbody>
                                                <tr>
                                                    <td class="esd-structure es-p30t es-p30b es-p20r es-p20l" align="left">
                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="esd-container-frame" width="560" valign="top" align="center">
                                                                        <table width="100%" cellspacing="0" cellpadding="0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="esd-block-image es-infoblock" align="center">
                                                                                        
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
    
';
 
//  ถ้ามี email ผู้รับ
if($email_receiver){
    $mail->msgHTML($email_content);
 
 
    if (!$mail->send()) {  // สั่งให้ส่ง email
 
        // กรณีส่ง email ไม่สำเร็จ
        echo "<h3 class='text-center'>ระบบมีปัญหา กรุณาลองใหม่อีกครั้ง</h3>";
        echo $mail->ErrorInfo; // ข้อความ รายละเอียดการ error
    }else{
        // กรณีส่ง email สำเร็จ
        echo "ระบบได้ส่งข้อความไปเรียบร้อย";
        ?>


<html>
<head>
<title>ThaiCreate.Com Tutorial</title>
</head>
<body >
<form name="form1" action="<?php echo site_url("alert/alert_w");?>" method="post">

    <input type="text" name="alert_date" value="<?php echo  $day_alert;?>">
    <input type="text" name="id" value="<?php echo $row->student_code; ?>">
    <input type="text" name="Notifications_Number" value="<?php echo $i; ?>">
</form>

<script language='javascript'>
document.form1.submit();
</script>
</body>
</html>
        <?php

    }   
}




		}else{
            echo "ครบ 3 ครั้ง เเล้ว";
        }
        }
	}

?>
