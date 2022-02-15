<?php
session_start();
	include("functions.php");
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
	//echo $date->format('d-m-Y H:i:s');
// Page footer

	$errname = "";
	$errquantity = "";
	$errphone= "";
	$erraddress = "";
	$errsize = "";
	$errdata = "";
	

	$successMessage="";
	$name = "";
	$quantity = "";
	$phone = "";
	$address = "";
	$size = "";
	$data ="";


	$errors = array();
	$messages= array();
	$_SESSION['success'] = "";
	// $admin_address = "0x2d2d8721fcacb58c7f5f2946bdcc487629da2d64";
	// $admin_token = getToken('admin', 'Agrikore8546&');

	$farmers = fetchFromDatabase('localhost', 'tanalyqo_admin', 'WjAnU1SDcJH5', 'tanalyqo_qualityrice', 'order_table');
	$status = 0;
	// connect to database
	$db = mysqli_connect('localhost', 'tanalyqo_admin', 'WjAnU1SDcJH5', 'tanalyqo_qualityrice');

	// REGISTER USER
	if (isset($_POST['check1'])) {

		$subject = mysqli_real_escape_string($db, $_POST['subject']);
		$content1 = mysqli_real_escape_string($db, $_POST['content1']);
		$content2 = str_replace( array( "\r", "\r\n", "\n", "\R\N" ), '', $content1 );
		$email='movtetp@gmail.com';
		




		if (empty($subject)) { array_push($errors, "Full Name is required"); }
		if(!preg_match("/^[A-Za-z0-9]*${4}/", $subject)){
		$errdata = '<p p style="background-color:red; color:white; border-radius:5px; font-size:10px; margin-top:8px; line-height:18px; padding:5px">Full Name Must contain letters or digit,and should be more than 3 characters</p>';
		 array_push($errors, $errdata);
		}
		

		if (empty($subject)) {
			$errdata = '<p style="background-color:red; color:white; border-radius:5px; font-size:10px; margin-top:8px; line-height:18px; padding:5px">Please Select a Request Type before Posting your Message</p>';
			array_push($errors, $errdata);}

		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$errdata = '<p style="background-color:red; color:white; border-radius:5px; font-size:10px; margin-top:8px; line-height:18px; padding:5px">Email Address Entered is Invalid or Incorrect</p>';
			array_push($errors, $errdata);
		}

		if (empty($content1)) {
			$errdata = '<p style="background-color:red; color:white; border-radius:5px; font-size:10px; margin-top:8px; line-height:18px; padding:5px">Request Content is required</p>';
			array_push($errors, $errdata);
		}

		if(strlen($content1) < 10){
		$errdata = '<p style="background-color:red; color:white; border-radius:5px; font-size:10px; margin-top:8px; line-height:18px; padding:5px"> Please Enter More details to help us Process the request</p>';
		array_push($errors, $errdata);}

		
		

		//This is how i check for multiple entry

			// connect to database
	// 	$db = mysqli_connect('localhost', 'tanalyqo_admin', 'WjAnU1SDcJH5', 'tanalyqo_qualityrice');

	// 	$query = "SELECT * FROM order_table WHERE  phone='$phone'";
	
	// 	$results = mysqli_query($db, $query);
	// 		$row = $results->fetch_assoc();
	// 	    $statusCod= $row['status'];
	// // $userAddress = $row['userAddress'];

	// 	if (mysqli_num_rows($results) > 0 ) {
	// 		if($statusCod != 1){
	// 			$errphone = '<p style="background-color:red; color:white; border-radius:5px; font-size:10px; margin-top:8px; line-height:18px; padding:5px">Sorry there is an existing order with this number that is NOT yet redeemed </p>';
	// 		    array_push($errors, $errphone);
	// 		}
			
	// 	}


		// register user if there are no errors in the form
		if (count($errors) == 0) {

			$digit= $phone;
			$no_of_digits=5;
			$var='';
			for($i=1; $i<=$no_of_digits; $i++){
			$var .=rand(0,9);
			$lastdigits = substr($digit, -4);
			$request_code= "Rccg/$var";
			}
			if(!empty($request_code)){

           InsertRequest('localhost', 'tanalyqo_admin', 'WjAnU1SDcJH5', 'tanalyqo_qualityrice', 'request_table', $subject, $content1,$request_code);

		   $messagesSuccess = '<p style="background-color:red; color:white; border-radius:5px; font-size:10px; margin-top:8px; line-height:18px; padding:5px">Thanks For Submitting a ' .$subject.' It will be proceed accordingly, Your REQUEST CODE is ' .$request_code.' Thanks<p>';
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

$mail->setFrom('cellulantharry@gmail.com', 'TETP request.ng.NG');
$mail->AddAddress($email, '');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional//
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $subject;
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
  <td style="font-family:Open Sans,Georgia, Times New Roman, Times, serif, Arial; font-size:35px; color:#00b300; font-weight:bold; line-height:42px; text-transform:capitalize;" mc:edit="nm10-02" data-color="theme-colour" valign="middle" align="center"><multiline>Rccg | TETP |Request.ng</multiline></td>
</tr>
<tr>
 <td style="line-height:20px; font-size:20px;" valign="middle" align="center" height="20">&nbsp;</td>
</tr>
<tr>
<td style="font-family:Open Sans,Georgia, Times New Roman, Times, serif, Arial; font-size:14px; color:#767676; font-weight:normal; line-height:32px;" mc:edit="nm10-06" valign="middle" align="left"><multiline> <span style=" font-size:14px; color:black; font-weight: bolder; text-transform:capitalize">Dear Admin</span> <br></multiline></td>
</tr>
<tr>

<tr>
<td><br></td>
</tr>
<tr>
<td style="font-family:Open Sans,Georgia, Times New Roman, Times, serif, Arial; font-size:16px; color:#787a77;  text-transform:capitalize;" mc:edit="nm10-03" valign="middle" align="left"><multiline style="color:black;">' .$content2.'</multiline></td>
</tr>
<tr>
<td><br></td>
</tr>
<tr>

<tr>
<td><br></td>
</tr>

<tr>
<td style="font-family:Open Sans,Georgia, Times New Roman, Times, serif, Arial; font-size:16px; color:#787a77;  text-transform:capitalize;" mc:edit="nm10-03" valign="middle" align="left"><multiline style="color:black;">Request Code: '.$request_code.'</multiline></td>
</tr>
<var><tr>
<td><br></td>
</tr>

<tr>
<td><br></td>
</tr>

<tr>
<td style="font-family:Open Sans,Georgia, Times New Roman, Times, serif, Arial; font-size:16px; color:#787a77;  text-transform:capitalize;" mc:edit="nm10-03" valign="middle" align="left"><multiline style="color:black;">Creation Date: '.$date->format('d-m-Y H:i:s').'</multiline></td>
</tr></var>
<tr>
<td valign="middle" align="center">&nbsp;</td>
</tr>
<tr>
<td style="font-family:Open Sans,Georgia, Times New Roman, Times, serif, Arial; font-size:12px; color:#ff0000; text-transform:capitalize;" mc:edit="nm10-03" valign="middle" align="center"><multiline style=" font-weight:bold; text-transform: capitalize">Kindly attend to the above request within 2 - 4 working days. and Update the Whatsapp group using the Request code</multiline></td>
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
<td valign="middle" bgcolor="#FFFFFF" align="center"><img editable="true" mc:edit="nm10-05" src="https://newsbreakersonline.com/wp-content/uploads/2019/10/praying-together-as-a-family.jpg" alt="" style="display:block;width:100% !important; height:auto !important; " width="600" height="350" class="image_target"></td>
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
<td style="font-family:Open Sans,Georgia, Times New Roman, Times, serif, Arial; font-size:10px;  font-weight:bold; line-height:28px; text-transform:uppercase;" mc:edit="nm10-07" valign="middle" align="center"><multiline><a href="#" style="text-decoration:none; ;" data-color="link-white">HOLINESS</a> . &nbsp; <a href="#" style="text-decoration:none; color:#00b300;" data-color="link-white">ACCOUNTABILITY</a> .  &nbsp;<a href="#" style="text-decoration:none; color:#FFF;" data-color="link-white">SACRIFICE</a></multiline></td>
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
<td style="font-family:Open Sans,Georgia, Times New Roman, Times, serif, Arial; font-size:14px; color:#272f3a; font-weight:normal; line-height:24px;" mc:edit="nm10-13" valign="top" align="center"><multiline>copyright © 2021 Rccg | TETP| Request.ng</multiline></td>
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
						$quantity = "";
						$phone = "";
						$address = "";
						$redeem_code= "";
						$size= "";
						


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
