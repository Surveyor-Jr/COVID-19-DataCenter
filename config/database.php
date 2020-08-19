<?php
/*
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "covid19";
*/

$servername = "localhost";
$username = "y75d1904kr5i";
$password = "Nkm*10636";
$dbname = "survey-apps";


//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection
if (!$conn) {
	die("connection failed: " .mysqli_connect_error());
}
?>
