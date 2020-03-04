<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "cashquaddb";
$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname); 
if (mysqli_connect_errno()) {
	echo "Failed to connect to database:" . 
	mysqli_connect_error();
}


// $dbhost = "localhost";
// $dbuser = "root";
// $dbpass = "";
// $dbname = "cashquaddb";
// $con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname); 
// if (mysqli_connect_errno()) {
// 	echo "Failed to connect to database:" . 
// 	mysqli_connect_error();
// }


// $dbhost = "localhost";
// $dbuser = "edusavac_cashquad";
// $dbpass = "cashquad2019";
// $dbname = "edusavac_cashquad";
// $con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname); 
// if (mysqli_connect_errno()) {
// 	echo "Failed to connect to database:" . 
// 	mysqli_connect_error();
// }



?>