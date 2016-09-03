<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "huhc_portal";
 
$connect = mysqli_connect($host,$user,$pass,$db);

if(!$connect){
	echo "not connected!";
} else {
	echo "connected!";
}



 ?>