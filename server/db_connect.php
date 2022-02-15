<?php

/* Database connection start */
$servername = "localhost";
$username = "tanalyqo_admin";
$password = "WjAnU1SDcJH5";
$dbname = "tanalyqo_qualityrice";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>
