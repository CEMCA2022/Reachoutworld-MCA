<?php
session_start();
	include("functions.php");
	require 'PHPMailerAutoload.php';
	require 'class.phpmailer.php';
	// Turn off all error reporting
	// error_reporting(0);
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
	$firstname = "";
	$lastname = "";
	$title = "";
	$phone = "";
	$my_group = "";
	$email = "";
	$church = "";
	$data ="";
	


	$errors = array();
	$messages= array();
	$_SESSION['success'] = "";
	// $admin_address = "0x2d2d8721fcacb58c7f5f2946bdcc487629da2d64";
	// $admin_token = getToken('admin', 'Agrikore8546&');

	$farmers = fetchFromDatabase('localhost', 'root', '', 'reachout', 'users');
	$status = "0";
	// $my_group = "GARKI";
	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'reachout');

	// REGISTER USER
	if (isset($_POST['new_reg'])) {

		$title = mysqli_real_escape_string($db, $_POST['title']);
		$firstname = mysqli_real_escape_string($db, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
		$phone = mysqli_real_escape_string($db, $_POST['phone']);
		$location = mysqli_real_escape_string($db, $_POST['location']);
		$email = mysqli_real_escape_string($db, $_POST['email']); 
	

		if(empty($title)){
			$errtitle = '<p style="background-color:red; color:white; border-radius:5px; font-size:10px; margin-top:8px; line-height:18px; padding:5px">Title is Required</p>';
			array_push($errors, $errtitle);}

		if (empty($firstname)) { array_push($errors, "firstname is required"); }
		
		if(strlen($firstname) <= 1){
		$errfirstname = '<p p style="background-color:red; color:white; border-radius:5px; font-size:10px; margin-top:8px; line-height:18px; padding:5px"> Firstname Must contain letters or digit,and should be more than 3 characters </p>';
		array_push($errors, $errfirstname);}


		if (empty($lastname)) { array_push($errors, "lastname is required"); }
	
		if(strlen($lastname) <= 1){
		$errlastname = '<p p style="background-color:red; color:white; border-radius:5px; font-size:10px; margin-top:8px; line-height:18px; padding:5px"> lastname Must contain letters or digit,and should be more than 3 characters </p>';
		array_push($errors, $errfirstname);}


		if (empty($phone)) {
			$errphone = '<p style="background-color:red; color:white; border-radius:5px; font-size:10px; margin-top:8px; line-height:18px; padding:5px">Phone Number is required</p>';
			array_push($errors, $errphone);
		}
        if (empty($location)) {
			$errphone = '<p style="background-color:red; color:white; border-radius:5px; font-size:10px; margin-top:8px; line-height:18px; padding:5px">Location or Nearest Bus-stop is required</p>';
			array_push($errors, $errphone);
		}
		if(strlen($phone) != 11){
		$errphone = '<p style="background-color:red; color:white; border-radius:5px; font-size:10px; margin-top:8px; line-height:18px; padding:5px">Phone must comply with this mask: XXX-XXX-XXX-XX 11 Digit</p>';
		array_push($errors, $errphone);}


			
		//This is how i check for multiple entry

			// connect to database
		$db = mysqli_connect('localhost', 'root', '', 'reachout');

		$query = "SELECT * FROM users WHERE  phone='$phone'";
	
		$results = mysqli_query($db, $query);
			$row = $results->fetch_assoc();
		    $statusCod= $row['status'];
	// $userAddress = $row['userAddress'];

		if (mysqli_num_rows($results) > 0 ) {
			if($statusCod != 1){
				$errphone = '<p style="background-color:red; color:white; border-radius:5px; font-size:10px; margin-top:8px; line-height:18px; padding:5px">Sorry this phone number has is registered already  </p>';
			    array_push($errors, $errphone);
			}
			
		}


		// register user if there are no errors in the form
		elseif (count($errors) == 0) {

	

           InsertNewUser('localhost', 'root', '', 'reachout', 'users',  $email, $firstname, $lastname, $title, $phone, $location,$status);

		   $messagesSuccess = '<p style="background-color:red; color:white; border-radius:5px; font-size:10px; margin-top:8px; line-height:18px; padding:5px">Congratulations!' .$firstname.' Congratulations! Registration sucessful<p>';


		
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
<td style="font-family:Open Sans,Georgia, Times New Roman, Times, serif, Arial; font-size:14px; color:#767676; font-weight:normal; line-height:32px;" mc:edit="nm10-06" valign="middle" align="left"><multiline> <span style=" font-size:14px; color:black; font-weight: bolder; text-transform:capitalize">Dear ' .$firstname.'</span> <br></multiline></td>
</tr>
<tr>
<td style="font-family:Open Sans,Georgia, Times New Roman, Times, serif, Arial; font-size:14px; color:#767676; font-weight:normal; line-height:15px;" mc:edit="nm10-06" valign="middle" align="left"><multiline> <span style=" font-size:15px; color:#000000;">Thank you for expressing interest in Qualityrice.ng </span> </td>
</tr>
<tr>
<td style="font-family:Open Sans,Georgia, Times New Roman, Times, serif, Arial; font-size:16px; color:#ff0000; text-transform:uppercase;" mc:edit="nm10-03" valign="middle" align="left"><multiline style=" ">Below are your order details:</multiline></td>
</tr>

<tr>
<td><br></td>
</tr>
<tr>
<td style="font-family:Open Sans,Georgia, Times New Roman, Times, serif, Arial; font-size:16px; color:#787a77;  text-transform:capitalize;" mc:edit="nm10-03" valign="middle" align="left"><multiline style="color:black;"> Product name:' .$my_group.'</multiline></td>
</tr>
<tr>
<td><br></td>
</tr>
<tr>
<td style="font-family:Open Sans,Georgia, Times New Roman, Times, serif, Arial; font-size:16px; color:#787a77;  text-transform:capitalize;" mc:edit="nm10-03" valign="middle" align="left"><multiline style="color:black; ">Bag Size:' .$church.'</multiline></td>
</tr>
<tr>
<td><br></td>
</tr>
<tr>
<td style="font-family:Open Sans,Georgia, Times New Roman, Times, serif, Arial; font-size:16px; color:#787a77;  text-transform:capitalize;" mc:edit="nm10-03" valign="middle" align="left"><multiline style="color:black;">Quantity:' .$my_group. '</multiline></td>
</tr>
<tr>
<td><br></td>
</tr>
<tr>
<td style="font-family:Open Sans,Georgia, Times New Roman, Times, serif, Arial; font-size:16px; color:#787a77;  text-transform:capitalize;" mc:edit="nm10-03" valign="middle" align="left"><multiline style="color:black;">Phone Number: '.$phone.'</multiline></td>
</tr>
<var><tr>
<td><br></td>
</tr>
<tr>
<td style="font-family:Open Sans,Georgia, Times New Roman, Times, serif, Arial; font-size:16px; color:#787a77;  text-transform:capitalize;" mc:edit="nm10-03" valign="middle" align="left"><multiline style="color:black;">Redemption Code: '.$phone.'</multiline></td>
</tr>
<var><tr>
<td><br></td>
</tr>
<tr>
<td style="font-family:Open Sans,Georgia, Times New Roman, Times, serif, Arial; font-size:16px; color:#787a77;  text-transform:capitalize;" mc:edit="nm10-03" valign="middle" align="left"><multiline style="color:black;">Pick Up Address/ Redemption center:' .$phone.'</multiline></td>
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
<td style="font-family:Open Sans,Georgia, Times New Roman, Times, serif, Arial; font-size:12px; color:#ff0000; text-transform:capitalize;" mc:edit="nm10-03" valign="middle" align="center"><multiline style=" font-weight:bold; text-transform: capitalize">Kindly Note that you will receive a call from our Customer care personnel shortly to confirm your order.</multiline></td>
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
