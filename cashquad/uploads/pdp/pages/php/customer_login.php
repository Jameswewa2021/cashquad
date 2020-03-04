<?php
include('dbh.php');

$_SESSION['empty']="";
$_SESSION['error']="";
$_SESSION['success']="";
$errors= array();
 if (isset($_POST['login'])) {
 	$custome_email = mysqli_real_escape_string($conn,$_POST['customer_email']);
 	$password = mysqli_real_escape_string($conn,$_POST['password']);

 
 	if (empty($customer_email) || empty($password)) {
 		$_SESSION['empty'] = "ALL FIELDS ARE REQUIRED";
 		
 	}
 	else {


 		$password = md5($password);//encrypt password before comparing with one from db
		$query = "SELECT * FROM customer_tbl WHERE customer_email ='$customer_email' AND password ='$password'";
		$result=mysqli_query($conn, $query);
		

		if (mysqli_num_rows($result)==1) {
			$query=mysqli_query($conn,"SELECT * FROM customer_tbl WHERE customer_email='$customer_email' ");
    		$data=mysqli_fetch_array($query);
    		$customer_id=$data['customer_id'];
   			 $customer_email=$data['customer_email'];
   			 $online =1;

   			 	$sqlonline="UPDATE customer_tbl SET online='$online' WHERE customer_email='$customer_email'";
				$queryonline=mysqli_query($conn,$sqlonline);

				
   			
		
	     $_SESSION['customer_email'] = $customer_email;
		$_SESSION['customer_id']=$customer_id;
		$_SESSION['success']="YOU ARE LOGED IN!";
		//header('location: customer_dashboard.php');//redirect to home page
		
		
		}else{
			 $_SESSION['error'] = "Wrong User Email or Password Combination! PLEASE TRY AGAIN";
			
		}
 		
 	}
 }
 

//logout
if (isset($_GET['logout'])){
	$customer_id = $_SESSION['custome_email'];
	$online = 0;
	$sqlonline="UPDATE customer_tbl SET online='$online' WHERE customer_id='$customer_id'";
				$queryonline=mysqli_query($conn,$sqlonline);
	session_destroy();
	unset($_SESSION['customer_id']);
	header('location:../index.php');

}

?>