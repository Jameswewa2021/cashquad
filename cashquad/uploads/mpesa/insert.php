<?php
session_start();
include_once'dbconfig.php';
$id=$_SESSION['idd'];
$phone=$_SESSION['phone'];
$date=$_SESSION['date'];
$time=$_SESSION['time'];
$money=$_SESSION['money'];

//insert
$sql="SELECT * FROM tblmpay WHERE idd='$id'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if ($count<1) {
	
		mysqli_query($con,"INSERT INTO tblmpay (idd, phone, dates, times, payment)
VALUES ('$id', '$phone', '$date', '$time', '$money')");
if(mysqli_affected_rows($con) >0) {?>
<script>
		alert('Successfully Inserted!');
        
        </script><?php
}else{?>
	<script>
		alert('Failed!');
        
        </script><?php
}
	
}else{
	echo "already exists!";
}
//insert
?>