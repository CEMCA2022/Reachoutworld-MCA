<?php
session_start();
	include("functions.php");
	// Turn off all error reporting
	error_reporting(0);
	// variable declaration
	require 'PHPMailerAutoload.php';
	require 'class.phpmailer.php';
	// Turn off all error reporting
	error_reporting(0);
	// variable declaration
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;
	
	// Load Composer's autoloader
	require 'vendor/autoload.php';

	$date = new DateTime('now', new DateTimeZone('Africa/Lagos'));
	$errname = "";
	$errtoken = "";
	$errphone= "";
	$errpassword_1 = "";
	$erremail = "";


$successMessage="";
	$name = "";
	$phone = "";
	$password_1 = "";
	$token = "";
	$email = "";


	$errors = array();
	$messages= array();
	$_SESSION['success'] = "";
	// $admin_address = "0x2d2d8721fcacb58c7f5f2946bdcc487629da2d64";
	// $admin_token = getToken('admin', 'Agrikore8546&');

	$farmers = fetchFromDatabase('localhost', 'tanalyqo_admin', 'WjAnU1SDcJH5', 'tanalyqo_qualityrice', 'agent_table');
	$status = 0;
	// connect to database
	$db = mysqli_connect('localhost', 'tanalyqo_admin', 'WjAnU1SDcJH5', 'tanalyqo_qualityrice');

	// REGISTER USER
	if (isset($_POST['pass'])) {

		$name = mysqli_real_escape_string($db, $_POST['name']);
		$token = mysqli_real_escape_string($db, $_POST['token']);
		$phone = mysqli_real_escape_string($db, $_POST['phone']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$email = mysqli_real_escape_string($db, $_POST['email']);



		$password_1= md5($password_1);

		if (empty($name)) {
			$errname ='<p style="background-color:red; color:white; border-radius:4px; font-size:10px; margin-top:8px; line-height:18px; padding:5px"> Full Name is required</p>';
		    array_push($errors, $errname);}
		
		if(!preg_match("/^[A-Za-z0-9]*${4}/", $name)){
		$errname = '<p style="background-color:red; color:white; border-radius:4px; font-size:10px; margin-top:8px; line-height:18px; padding:5px"> Full Name Must contain letters or digit,and should be more than 3 characters</p>';
		 array_push($errors, $errname);
		}
		if(strlen($name) <= 3){
		$errname = '<p style="background-color:red; color:white; border-radius:4px; font-size:10px; margin-top:8px; line-height:18px; padding:5px"> Full Name Must contain letters or digit,and should be more than 3 characters </p>';
		array_push($errors, $errname);}

		if (empty($email)) {
			$erremail = '<p style="background-color:red; color:white; border-radius:5px; font-size:10px; margin-top:8px; line-height:18px; padding:5px">Email Address is required</p>';
			array_push($errors, $erremail);}

		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$erremail = '<p style="background-color:red; color:white; border-radius:5px; font-size:10px; margin-top:8px; line-height:18px; padding:5px">Email Address Entered is Invalid or Incorrect</p>';
			array_push($errors, $erremail);
		}


		if (empty($phone)) {
			$errphone ='<p style="background-color:red; color:white; border-radius:4px; font-size:10px; margin-top:8px; line-height:18px; padding:5px"> Phone Number is required</p>';
		    array_push($errors, $errphone);}
			
		if(strlen($phone) != 11){
		$errphone ='<p style="background-color:red; color:white; border-radius:4px; font-size:10px; margin-top:8px; line-height:18px; padding:5px"> Phone must comply with this mask: XXX-XXX-XXX-XX 11 Digit</p>';
		array_push($errors, $errphone);}



		if (empty($password_1)) { 
			$errpassword_1 ='<p style="background-color:red; color:white; border-radius:4px; font-size:10px; margin-top:8px; line-height:18px; padding:5px"> Please Enter a password</p>';
			array_push($errors, $errpassword_1);}

		if(strlen($password_1) < 8){
		$errpassword_1 = '<p style="background-color:red; color:white; border-radius:4px; font-size:10px; margin-top:8px; line-height:18px; padding:5px"> Please Agent Password should be Minimum of 8 Characters</p>';
		array_push($errors, $errpassword_1);}
						//This is how i check for multiple entry

											// connect to database
											$db = mysqli_connect('localhost', 'tanalyqo_admin', 'WjAnU1SDcJH5', 'tanalyqo_qualityrice');

										$query = "SELECT * FROM token_table ";
										$results = mysqli_query($db, $query);
										$row = $results->fetch_assoc();
											$status= $row['status'];
											$system_token = $row['token'];

											// if (mysqli_num_rows($results) == 0) {
											// 	$errtoken = '<p class="$errusername">Sorry the TOKEN does not Exit</p>';
											// 	array_push($errors, $errtoken);
											// }


										$query = "SELECT token FROM token_table WHERE token='$token' ";
										$results = mysqli_query($db, $query);
										if (mysqli_num_rows($results) == 0) {
											$errtoken = '<p style="background-color:red; color:white; border-radius:4px; font-size:10px; margin-top:8px; line-height:18px; padding:5px"> Sorry the TOKEN is Incorrect or Does Not Exit</p>';
											array_push($errors, $errtoken);
										}





										$query = "SELECT * FROM token_table WHERE token='$token' ";
										$results = mysqli_query($db, $query);
										$row = $results->fetch_assoc();
											$status= $row['status'];
											if (	$status != 0) {
												$errtoken = '<p style="background-color:red; color:white; border-radius:4px; font-size:10px; margin-top:8px; line-height:18px; padding:5px"> Sorry the TOKEN has Expired (used)</p>';
												array_push($errors, $errtoken);
											}



										$query = "SELECT * FROM agent_table WHERE  phone='$phone'";
										$results = mysqli_query($db, $query);
										if (mysqli_num_rows($results) > 0) {
											$errphone = '<p style="background-color:red; color:white; border-radius:4px; font-size:10px; margin-top:8px; line-height:18px; padding:5px"> Sorry the Mobile Number already Exit in the System</p>';
											array_push($errors, $errphone);
										}

										$query = "SELECT * FROM agent_table WHERE  email='$email'";
										$results = mysqli_query($db, $query);
										if (mysqli_num_rows($results) > 0) {
											$erremail = '<p style="background-color:red; color:white; border-radius:4px; font-size:10px; margin-top:8px; line-height:18px; padding:5px"> Sorry the Email Address already Exit in the System</p>';
											array_push($errors, $erremail);
										}


										$query = "SELECT * FROM agent_table WHERE  phone='$phone'";
										$results = mysqli_query($db, $query);
										if (mysqli_num_rows($results) > 0) {
											$errphone = '<p style="background-color:red; color:white; border-radius:4px; font-size:10px; margin-top:8px; line-height:18px; padding:5px"> Sorry the Phone already Exit in the System</p>';
											array_push($errors, $errphone);
										}


		// register user if there are no errors in the form
												elseif (count($errors) == 0) {
													$digit= $phone;
													$no_of_digits=5;
													$var='';
													for($i=1; $i<=$no_of_digits; $i++){
													$var .=rand(0,9);
													$var = substr($var, -3);
													$clearance_Id= "agent$var";
													}


			if(!empty($clearance_Id)){

      InsertAgent('localhost', 'tanalyqo_admin', 'WjAnU1SDcJH5', 'tanalyqo_qualityrice', 'agent_table', $name, $email, $phone, $password_1,$clearance_Id);
 						updateTokenTable('localhost', 'tanalyqo_admin', 'WjAnU1SDcJH5', 'tanalyqo_qualityrice', 'token_table', $token);
						$messagesSuccess =  '<p style="background-color:red; color:white; border-radius:4px; font-size:10px; margin-top:8px; line-height:18px; padding:5px"> Congratulations! Agent '.$name.', Your CLEARANCE-ID is '.$clearance_Id.' Please check '.$email.' for details </p>';
						// array_push($messages, $successMessage);


}
		
$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'cellulantharry@gmail.com';                 // SMTP username
$mail->Password = 'advancegrace2016';                         // SMTP password
//$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('cellulantharry@gmail.com', 'QUALITYRICE.NG');
$mail->AddAddress($email, '');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional//
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'QUALITYRICE.NG';
$mail->Body    = '<body marginwidth="0" marginheight="0" style="margin-top: 0; margin-bottom: 0; padding-top: 0; padding-bottom: 0; width: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;" offset="0" topmargin="0" leftmargin="0"><table data-bgcolor="BodyBg" data-module="notemail-3" data-thumb="http://www.freetemplates.bz/design/thumbnails/notemail/3.png" width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#f0f0f0" class="">


					
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;"><title>Full Screen</title><style>

body{width: 100%; background-color: #f0f0f0; margin:0; padding:0; -webkit-font-smoothing: ;mso-margin-top-alt:0px; mso-margin-bottom-alt:0px; mso-padding-alt: 0px 0px 0px 0px;}

p,h1,h2,h3,h4{margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;}

span.preheader{display: none; font-size: 1px;}

html{width: 100%;}

table{font-size: 12px;border: 0;}

.menu-space{padding-right:25px;}

a,a:hover { text-decoration:none; color:#FFF;}


@media only screen and (max-width:640px)

{
body{width:auto!important;}
table[class=main] {width:440px !important;}
table[class=two-left] {width:420px !important; margin:0px auto;}
table[class=full] {width:100% !important; margin:0px auto;}
table[class=alaine] { text-align:center;}
table[class=menu-space] {padding-right:0px;}
table[class=banner] {width:438px !important;}
table[class=menu] {width:438px !important; margin:0px auto; border-bottom:#e1e0e2 solid 1px;}
table[class=date] {width:438px !important; margin:0px auto; text-align:center;}
table[class=two-left-inner] {width:400px !important; margin:0px auto;}
table[class=menu-icon] { display:block;}
table[class=two-left-menu] {text-align:center;}

}

@media only screen and (max-width:479px)
{
body{width:auto!important;}
table[class=main]  {width:310px !important;}
table[class=two-left] {width:300px !important; margin:0px auto;}
table[class=full] {width:100% !important; margin:0px auto;}
table[class=alaine] { text-align:center;}
table[class=menu-space] {padding-right:0px;}
table[class=banner] {width:308px !important;}
table[class=menu] {width:308px !important; margin:0px auto; border-bottom:#e1e0e2 solid 1px;}
table[class=date] {width:308px !important; margin:0px auto; text-align:center;}
table[class=two-left-inner] {width:280px !important; margin:0px auto;}
table[class=menu-icon] { display:none;}
table[class=two-left-menu] {width:310px !important; margin:0px auto;}


}



</style>

	
</head><body marginwidth="0" marginheight="0" style="margin-top: 0; margin-bottom: 0; padding-top: 0; padding-bottom: 0; width: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;" offset="0" topmargin="0" leftmargin="0"><table data-bgcolor="BodyBg" data-module="notemail-10" data-thumb="http://www.freetemplates.bz/design/thumbnails/notemail/10.png" width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#f0f0f0" class="">
<tbody><tr>
<td valign="middle" align="center">


<!--Top Space Start-->

<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td valign="top" align="center"><table class="main" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td style="line-height:80px; font-size:80px;" valign="middle" align="center" height="80">&nbsp;</td>
</tr>
</tbody></table></td>
</tr>
</tbody></table>

<!--Top Space End-->

<!--Logo Part Start-->

<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td valign="top" align="center"><table class="main" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td style="-moz-border-radius: 8px 8px 0px 0px; border-radius: 8px 8px 0px 0px;" data-bgcolor="theme-bg" valign="middle" bgcolor="#00b300" align="center"><table class="two-left-inner" width="500" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td style="line-height:25px; font-size:25px;" valign="middle" align="center" height="25">&nbsp;</td>
</tr>
<tr>
<td valign="top" align="left"><table width="165" cellspacing="0" cellpadding="0" border="0" align="center">

<tbody>
</tbody></table>



</td>
</tr>
<tr>
<td style="line-height:25px; font-size:25px;" valign="middle" align="center" height="25">&nbsp;</td>
</tr>
</tbody></table></td>
</tr>
</tbody></table></td>
</tr>
</tbody></table>

<!--Logo Part End-->

<!--Offer Part Start-->

<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td valign="top" align="center"><table class="main" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td style="-moz-border-radius: 0px 0px 8px 8px; border-radius: 0px 0px 8px 8px;" valign="middle" bgcolor="#FFFFFF" align="center"><table class="two-left-inner" width="500" cellspacing="0" cellpadding="0" border="0">
<tbody><tr>
<td style="line-height:70px; font-size:70px;" valign="middle" align="center" height="70">&nbsp;</td>
</tr>
<tr>
<td valign="middle" align="center"><table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
  <td style="font-family:Open Sans,Georgia, Times New Roman, Times, serif, Arial; font-size:35px; color:#00b300; font-weight:bold; line-height:42px; text-transform:capitalize;" mc:edit="nm10-02" data-color="theme-colour" valign="middle" align="center"><multiline>Qualityrice.ng</multiline></td>
</tr>
<tr>
 <td style="line-height:20px; font-size:20px;" valign="middle" align="center" height="20">&nbsp;</td>
</tr>
<tr>
<td style="font-family:Open Sans,Georgia, Times New Roman, Times, serif, Arial; font-size:14px; color:#767676; font-weight:normal; line-height:32px;" mc:edit="nm10-06" valign="middle" align="left"><multiline> <span style=" font-size:14px; color:black; font-weight: bolder; text-transform:capitalize">Dear ' .$name.'</span> <br></multiline></td>
</tr>
<tr>
<td style="font-family:Open Sans,Georgia, Times New Roman, Times, serif, Arial; font-size:14px; color:#767676; font-weight:normal; line-height:19px;" mc:edit="nm10-06" valign="middle" align="center"><multiline> <span style=" font-size:15px; color:#000000;">Thank you for Registering as an agent with Qualityrice.ng </span> </td>
</tr>
<tr>
<td style="font-family:Open Sans,Georgia, Times New Roman, Times, serif, Arial; font-size:16px; color:#ff0000; text-transform:uppercase;" mc:edit="nm10-03" valign="middle" align="center"><multiline style=" ">Below are your registeration Details:</multiline></td>
</tr>

<tr>
<td><br></td>
</tr>
<tr>
<td style="font-family:Open Sans,Georgia, Times New Roman, Times, serif, Arial; font-size:15px; color:#000000;  text-transform:capitalize;" mc:edit="nm10-03" valign="middle" align="left"><multiline style="color:black;"> Agent Name:' .$name.'</multiline></td>
</tr>
<tr>
<td><br></td>
</tr>
<tr>
<td style="font-family:Open Sans,Georgia, Times New Roman, Times, serif, Arial; font-size:15px; color:#000000;  text-transform:capitalize;" mc:edit="nm10-03" valign="middle" align="left"><multiline style="color:black; ">Agent ID:' .$clearance_Id.'</multiline></td>
</tr>
<tr>
<td><br></td>
</tr>
<tr>
<td style="font-family:Open Sans,Georgia, Times New Roman, Times, serif, Arial; font-size:15px; color:#000000;  text-transform:capitalize;" mc:edit="nm10-03" valign="middle" align="left"><multiline style="color:black;">phone:' .$phone. '</multiline></td>
</tr>
<tr>
<td><br></td>
</tr>
<tr>
<td style="font-family:Open Sans,Georgia, Times New Roman, Times, serif, Arial; font-size:15px; color:#000000;  text-transform:capitalize;" mc:edit="nm10-03" valign="middle" align="left"><multiline style="color:black;">Agent Password:  **********</multiline></td>
</tr>
<var><tr>
<td><br></td>
</tr>

<tr>
<td style="font-family:Open Sans,Georgia, Times New Roman, Times, serif, Arial; font-size:15px; color:#000000;  text-transform:capitalize;" mc:edit="nm10-03" valign="middle" align="left"><multiline style="color:black;">Registration Date: '.$date->format('d-m-Y H:i:s').'</multiline></td>
</tr></var>
<tr>
<td valign="middle" align="center">&nbsp;</td>
</tr>
<tr>
<td style="font-family:Open Sans,Georgia, Times New Roman, Times, serif, Arial; font-size:12px; color:#ff0000; text-transform:capitalize;" mc:edit="nm10-03" valign="middle" align="center"><multiline style=" font-weight:bold; text-transform: capitalize">Please ensure to keep your registration details safe, and abide by the terms and conditions</multiline></td>
</tr>
<tr>
<td><br></td>
</tr>
<tr>
<td valign="middle" align="center" class=""><table width="155" cellspacing="0" cellpadding="0" border="0" align="center">
</table></td>
</tr>
<tr>
 <td style="line-height:60px; font-size:60px;" valign="middle" align="center" height="60">&nbsp;</td>
</tr>

</tbody></table></td>
</tr>

</tbody></table></td>
</tr>
</tbody></table></td>
</tr>
</tbody></table>

<!--Offer Part End-->

<!--Offer Image Part Start-->

<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td valign="top" align="center"><table class="main" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td valign="middle" bgcolor="#FFFFFF" align="center"><img editable="true" mc:edit="nm10-05" src="https://borgenproject.org/wp-content/uploads/Agriculture_in_Nigeria.jpg" alt="" style="display:block;width:100% !important; height:auto !important; " width="600" height="350" class="image_target"></td>
</tr>
</tbody></table></td>
</tr>
</tbody></table>

<!--Offer Image Part End-->

<!--Text Part Start-->

<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
</table></td>
</tr>
</tbody></table>

<!--Text Part End-->

<!--Footer Menu Part Start-->

<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td valign="top" align="center"><table class="main" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td style="-moz-border-radius: 0px 0px 8px 8px; border-radius: 0px 0px 8px 8px;" data-bgcolor="theme-bg" valign="middle" bgcolor="transparent" align="center"><table class="two-left-inner" width="490" cellspacing="0" cellpadding="0" border="0">
<tbody><tr>
<td style="line-height:25px; font-size:25px;" valign="middle" align="center" height="25">&nbsp;</td>
</tr>
<tr>
<td style="font-family:Open Sans,Georgia, Times New Roman, Times, serif, Arial; font-size:10px;  font-weight:bold; line-height:28px; text-transform:uppercase;" mc:edit="nm10-07" valign="middle" align="center"><multiline><a href="#" style="text-decoration:none; ;" data-color="link-white">Quality</a> . &nbsp; <a href="#" style="text-decoration:none; color:#00b300;" data-color="link-white">Best-Price</a> .  &nbsp;<a href="#" style="text-decoration:none; color:#FFF;" data-color="link-white">Accessibility</a></multiline></td>
</tr>
<tr>
<td style="line-height:25px; font-size:25px;" valign="middle" align="center" height="25">&nbsp;</td>
</tr>

</tbody></table></td>
</tr>
</tbody></table></td>
</tr>
</tbody></table>

<!--Footer Menu Part End-->

<!--Social Media Part Start-->

<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td valign="top" align="center"><table class="main" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td valign="middle" align="center"><table class="two-left-inner" width="490" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td style="line-height:40px; font-size:40px;" valign="middle" align="center" height="40">&nbsp;</td>
</tr>
<tr>
<td valign="middle" align="center"><table width="120" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td valign="middle" align="center"><a href="#"><img mc:edit="nm10-08" editable="true" src="http://www.freetemplates.bz/design/notemail/preview/images/facebook-icon1.png" alt="" width="20" height="20"></a></td>
<td valign="middle" align="center"><a href="#"><img mc:edit="nm10-09" editable="true" src="http://www.freetemplates.bz/design/notemail/preview/images/twitter-icon1.png" alt="" width="20" height="20"></a></td>
<td valign="middle" align="center"><a href="#"><img mc:edit="nm10-10" editable="true" src="http://www.freetemplates.bz/design/notemail/preview/images/google-icon1.png" alt="" width="20" height="20"></a></td>
<td valign="middle" align="center"><a href="#"><img mc:edit="nm10-11" editable="true" src="http://www.freetemplates.bz/design/notemail/preview/images/rss-icon1.png" alt="" width="20" height="20"></a></td>
<td valign="middle" align="center"><a href="#"><img mc:edit="nm10-12" editable="true" src="http://www.freetemplates.bz/design/notemail/preview/images/youtube-icon1.png" alt="" width="20" height="20"></a></td>
</tr>
</tbody></table></td>
</tr>
</tbody></table></td>
</tr>
</tbody></table></td>
</tr>
</tbody></table>

<!--Social Media Part End-->

<!--Copyright Part Start-->

<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td valign="top" align="center"><table class="main" width="600" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td valign="middle" align="center"><table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td style="line-height:20px; font-size:20px;" valign="middle" align="center" height="20">&nbsp;</td>
</tr>
<tr>
<td valign="top" align="center"><table class="two-left-inner" width="355" cellspacing="0" cellpadding="0" border="0" align="center">
<tbody><tr>
<td style="font-family:Open Sans,Georgia, Times New Roman, Times, serif, Arial; font-size:14px; color:#272f3a; font-weight:normal; line-height:24px;" mc:edit="nm10-13" valign="top" align="center"><multiline>copyright © 2021 Qualityrice.ng</multiline></td>
</tr>
<tr>
<td style="font-family:Open Sans,Georgia, Times New Roman, Times, serif, Arial; font-size:14px; color:#272f3a; font-weight:bold; line-height:28px; text-transform:uppercase;" mc:edit="nm10-14" valign="top" align="center"></td>
</tr>
</tbody></table></td>
</tr>
<tr>
<td style="line-height:40px; font-size:40px;" valign="middle" align="center" height="40">&nbsp;</td>
</tr>
</tbody></table></td>
</tr>
</tbody></table></td>
</tr>
</tbody>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo '';
}


    }

		
	$name = "";
	$token = "";
	$phone = "";
	$apassword_1 = "";
	$clearance_Id= "";


}

	// ...

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				//$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>
