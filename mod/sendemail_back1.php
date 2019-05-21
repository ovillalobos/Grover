<?php
date_default_timezone_set('America/Los_Angeles');
require_once('../phpmailer/class.phpmailer.php');

$mail             = new PHPMailer(); // defaults to using php "mail()"

//$body             = file_get_contents('contents.html');
//$body             = eregi_replace("[\]",'',$body);

$email 		= $_POST["email"];
$subject 	= $_POST["subject"];
$message	= $_POST["message"];

$body = '
<table style="width:100%; max-width: 800px; min-width: 400px; border: 1px solid #E6E7E8; font-family: Calibri, Arial; color: #1E5799;">
	<tr>
		<td><div style="width:100%; border-top: 2px solid #1E5799; text-align: center; border-bottom: 1px solid #E6E7E8;"  ><img style="padding: 10px;" src="email/logo.png" width="70px" ></div></td>
	</tr>
	<tr>
		<td><div style="width:100%; text-align: center; border-bottom: 1px solid #E6E7E8;"  >
			<p style="text-align: left;" >
				<table style="font-family: Calibri, Arial; color: #1E5799;" border="0" width="100%" >
					<tr align="right" >
						<td colspan="3" ></td><td  style="padding:5px;"  >Los Angeles CA. '.date("F/d/Y - H:i:s").'</td>
					</tr>
					<tr align="left" >
						<td width="80px" style="padding:5px;" ><strong>E-mail:</strong></td><td colspan="3"  style="padding:5px;"  >'.$email.'</td>
					</tr>
					<tr align="left" style="background-color: #E6E7E8;" >
						<td style="padding:5px;" ><strong>Subject:</strong></td><td colspan="3"  style="padding:5px;"  >'.$subject.'</td>
					</tr>
					<tr align="left" >
						<td style="padding:5px;" ><strong>Message:</strong></td><td colspan="3"  style="padding:5px;"  >'.$message.'</td>
					</tr>
				</table>
			</p>
		</div></td>
	</tr>
</table>
';

//$mail->AddReplyTo("webdesign@powercctv.com","First Last");
//$mail->AddReplyTo("webdesign@powercctv.com","First Last");
$mail->SetFrom('webdesign@powercctv.com', 'WebDesign PowerCCTV');

$address	 = $email;
$nameAddress = "Contact US - Grover";

$mail->AddAddress($address, $nameAddress);
$mail->Subject    = "InfoWebSite - ".$subject;
$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
$mail->MsgHTML($body);

//Attachment
$mail->AddAttachment("email/logo.png");
//$mail->AddAttachment("images/horn_1.png"); 

if(!$mail->Send()) {
  //echo "Mailer Error: " . $mail->ErrorInfo;
  echo "ERROR";
} else {
  echo "OK";
}
?>