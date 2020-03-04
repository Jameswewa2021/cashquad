<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
require 'vend/autoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Host = 'mail.cashquad.com';
$mail->Port = 25;
$mail->SMTPAuth = true;
$mail->Username = 'support@cashquad.com';
$mail->Password = 'Cashquad@2019';
$mail->setFrom('support@cashquad.com', 'CashQuad');
$mail->addReplyTo('support@cashquad.com', 'CashQuad');

$email=$email;

$subject="Welcome to CashQuad";

$mes="Your registration at CashQuad is successful. Here is your verification code:<br><br>"."<b>".$email_code."</b>";

//To protect mysql injection
$em=stripslashes($email);
$to=$em;
$mail->addAddress($to, '');
$mail->isHTML(true);

$mail->Subject = $subject;
$mail->Body = '
<html><body>
<!-- ..................... -->
<div style="border:2px solid #eee;padding:5px;">
<div>
<img style="width:100%;" src="http://edusava.com/cashquad/images/mail_bar.jpg">	
</div>
<div align="center">
<hr style="width:100%;border:2px solid rgb(29,0,79);">	
</div>

<div align="center">
<!-- MESSAGE -->
<div align="left" style="width:90%;border:1px solid rgb(29,0,79);box-sizing:border-box;min-height:50px;display:block;margin-bottom:20px;padding:10px;">
<p>'.$mes.'</p>
</div>
<!-- FOOTER -->
<div style="background-color:#eee;padding:15px;color:#444;font-size:11px;">
                    <span>CashQuad</span>
                    <br><span>Making money brought to another level</span>
                    <br><span>All Rights Reserved</span>
</div>
<!-- FOOTER -->
</div>
</div>
<!-- .................. -->
</body></html>
';
$mail->AltBody = "This is the plain text version of the email content";
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
?>
<script type="text/javascript">
	window.location.href='confirm_email.php?info=registration_successful&t=s&email=<?php echo $email; ?>';
</script>
<?php
}
?>