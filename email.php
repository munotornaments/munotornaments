<?php
require("phpmailertesting/class.phpmailer.php");
$email = $_POST["email"];

$name = $_REQUEST['name'];
$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "localhost";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "web21cen@gmail.com";  // SMTP username
$mail->Password = "web21cen@sll"; // SMTP password

$mail->From = "web21cen@gmail.com";
$mail->FromName = "Web21Cen";

$mail->AddAddress($email);                  // name is optional

$mail->WordWrap = 50;                                 // set word wrap to 50 characters

$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = $subject;
$mail->Body    = "<div style='font-family:HelveticaNeue-Light,Arial,sans-serif                  ;background-color:#eeeeee'><center><h2>Welcome to Web21Cen                  </h2></center></div>
                    Thanks for Contacting <b>Web21Cen</b>.Your response is very precious for us. .We will Reach you with 24 hours<br>
                  <br>
                  Thanks<br>
                  Regards<br>
                  Sanil Rodrigues(Web21Cen)<br>
                  7507847096 <br>
                  sanil@web21cen.in";

$mail1 = new PHPMailer();

$mail1->IsSMTP();                                      // set mailer to use SMTP
$mail1->Host = "localhost";  // specify main and backup server
$mail1->SMTPAuth = true;     // turn on SMTP authentication
$mail1->Username = "web21cen@gmail.com";  // SMTP username
$mail1->Password = "web21cen@sll"; // SMTP password
$mail1->From = "support@web21cen.in";
$mail1->FromName = "Web21cen";

$mail1->AddAddress("web21cen@gmail.com"); 
$mail1->Subject = "Web21Cen";
$mail1->Body    = "$name has visited our Website <b>wen21cen.in</b>. 
					Contact as soon as possible<br>
                    Details Are $email<br>
								$name<br>
								";

if(!$mail->Send())
{
   return "error";
}
else if(!$mail1->Send())
{
    return "error";
}
echo 'sent';
?>