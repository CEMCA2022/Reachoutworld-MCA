4
5
6
7
8
9
<?php
$toEmail = "cellulantharry@gmail.com";
$mailHeaders = "From: " . $_POST["ccb_name"] . "<". $_POST["email"] .">\r\n";
if(mail($toEmail, $_POST["comments"], $mailHeaders)) {
echo"<p class='success'>Contact Mail Sent.</p>";
} else {
echo"<p class='Error'>Problem in Sending Mail.</p>";
}
?>