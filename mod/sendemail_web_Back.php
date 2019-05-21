<?php
date_default_timezone_set('America/Los_Angeles');
require_once('../phpmailer/class.phpmailer.php');

$date  		= date("F/d/Y - H:i:s");
$error 		= "OK";
$email 		= $_POST["con_emai"];
//$subject 	= $_POST["con_subj"];
$message	= $_POST["con_mess"];

$firstname 	= $_POST["con_name"];
//$lastname	= $_POST["con_last"];
$company	= $_POST["con_comp"];
$phone 		= $_POST["con_phon"];
$address	= $_POST["con_addr"];
$city 		= $_POST["con_city"];
$zipcode	= $_POST["con_zipc"];

/***************************************************************************************************************************************************
EMAIL - CUSTOMER
****************************************************************************************************************************************************/

$mail = new PHPMailer();
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
						<td colspan="4" align="right" >Los Angeles CA. '.$date.'<br/><br/></td>
					</tr>
					<tr align="center" >
						<td style="padding:5px;" colspan="4" ><strong style="font-size: 20px; color:#1E5799;" >Thank you for contact us, soon will be attended.</strong></td>
					</tr>
					<tr>
						<td colspan="4"><div style="width:100%; border-top: 2px solid #A2C655; text-align: center; border-bottom: 1px solid #E6E7E8; margin-top:25px;"  ></div></td>
					</tr>
					<tr align="left" >
						<td style="padding:5px;" ><strong>Employment at Grover</strong></td><td style="padding:5px;" ><strong>Technical Questions / Purchasing Department</strong></td><td colspan="2" style="padding:5px;" ><strong>Internet Suggestions</strong></td>
					</tr>
					<tr align="left" style="font-size: 12px; color: #000;" >
						<td style="padding:5px;" ><strong>Phone:</strong> (323) 263-9981<br/><strong>E-mail:</strong> heidi@groverproducts.com</td>
						<td style="padding:5px;" ><strong>Phone:</strong> (323) 263-9981<br/><strong>E-mail:</strong> heidi@groverproducts.com </td>
						<td colspan="2" style="padding:5px;" ><strong>FAX:</strong> (323) 268-8555<br/><strong>E-mail:</strong> kristen@groverproducts.com </td>
					</tr>
				</table>
			</p>
		</div></td>
	</tr>
</table>
';

$mail->SetFrom('webdesign@powercctv.com', 'WebDesign PowerCCTV');

$address	 = $email;
$nameAddress = "Contact US - Grover";

$mail->AddAddress($address, $nameAddress);
$mail->Subject    = "Grover";
$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
$mail->MsgHTML($body);
$mail->AddAttachment("email/logo.png");

if(!$mail->Send()) {
  $error = "ERROR";
} else {
  $error = "OK";
}

/***************************************************************************************************************************************************
EMAIL - CUSTOMER
****************************************************************************************************************************************************/

if( $error == "OK" ){	
	$mail = new PHPMailer();
	$body = '
	<table style="width:100%; max-width: 800px; min-width: 400px; border: 1px solid #E6E7E8; font-family: Calibri, Arial; color: #1E5799;">
	<tr>
		<td><div style="width:100%; border-top: 2px solid #1E5799; text-align: left; border-bottom: 2px solid #E6E7E8;"  ><img style="padding: 10px; width: 80px; float: left;" src="email/logo.png" ></div></td>
	</tr>
	<tr>
		<td><div style="width:100%; text-align: center; border-bottom: 1px solid #E6E7E8;"  >
			<p style="text-align: left;" >
				<table style="font-family: Calibri, Arial; color: #1E5799;" border="0" width="100%" >
					<tr align="right" ><td colspan="3" ></td><td  style="padding:5px;"  >Los Angeles CA. '.$date.'</td></tr>
					<tr align="left" style="background-color: #E6E7E8;" ><td width="80px" style="padding:5px;" ><strong>Company:</strong></td><td colspan="3"  style="padding:5px;"  >'.$company.'</td></tr>
					<tr align="left" ><td width="80px" style="padding:5px;" ><strong>First Name:</strong></td><td colspan="3"  style="padding:5px;"  >'.$firstname.'</td></tr>
					<tr align="left" ><td width="80px" style="padding:5px;" ><strong>Address:</strong></td><td colspan="3"  style="padding:5px;"  >'.$address.'</td></tr>
					<tr align="left" style="background-color: #E6E7E8;" ><td width="80px" style="padding:5px;" ><strong>City/State :</strong></td><td colspan="3"  style="padding:5px;"  >'.$city.'</td></tr>
					<tr align="left" ><td width="80px" style="padding:5px;" ><strong>Zip Code:</strong></td><td colspan="3"  style="padding:5px;"  >'.$zipcode.'</td></tr>
					<tr align="left" style="background-color: #E6E7E8;" ><td width="80px" style="padding:5px;" ><strong>E-mail:</strong></td><td colspan="3"  style="padding:5px;"  >'.$email.'</td></tr>
					<tr align="left" ><td width="80px" style="padding:5px;" ><strong>Phone:</strong></td><td colspan="3"  style="padding:5px;"  >'.$phone.'</td></tr>
					<tr align="left" ><td style="padding:5px;" ><strong>Message:</strong></td><td colspan="3"  style="padding:5px;"  >'.$message.'</td></tr>
				</table>
			</p>
		</div></td>
	</tr>
	</table>
	';

	//$mail->AddReplyTo("webdesign@powercctv.com","First Last");
	$mail->SetFrom('webdesign@powercctv.com', 'WebDesign PowerCCTV');

	$address	 = "webdesign@powercctv.com";
	$nameAddress = "Contact US - Grover";

	$mail->AddAddress($address, $nameAddress);
	$mail->Subject    = "Grover - Info Website";
	$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
	$mail->MsgHTML($body);
	$mail->AddAttachment("email/logo.png");

	if(!$mail->Send()) {
	  $error = "ERROR";
	} else {
	  $error = "OK";
	}
}

echo $error;
?>