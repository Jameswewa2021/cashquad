<?php
session_start();
 include('dbh.php'); 
$_SESSION['success'] = "";
$_SESSION['error'] = "";
$_SESSION['customer_email']="";
$_SESSION['order_num']="";
$htmlContent = "";
//register
 if (isset($_POST['register'])) {
 	
 	$email = $_POST['email'];
 	$password = $_POST['password'];
 	$password1 = $_POST['password1'];

 	$check_email ="SELECT * FROM staff_tbl WHERE email='$email' ";
		$check_result=mysqli_query($conn,$check_email);

	

	if (mysqli_num_rows($check_result) == 1){
			
			$_SESSION['error'] = "Email Exists!";
	}

 	elseif ( empty($email) || empty($password) || empty($password1)) {
 		$_SESSION['error'] = "All Fields Are Required!";
 	}
 	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 		$_SESSION['error'] = "Please Enter A Valid Email Address!";
 		

 	}
 	elseif ($password!=$password1) {
 		$_SESSION['error'] = "Passwords Don't Match!";

 	}
 	else {

 			//echo "<span class='form-success'> Submitted Successfully</span>";
 		$password = md5($password);//encrypt password before entering into the db
 		$sql="INSERT INTO staff_tbl (email,password) VALUES 
	    ('$email','$password')";
	    $query=mysqli_query($conn,$sql);

			if($query)
			{

				
				$query=mysqli_query($conn,"SELECT * FROM staff_tbl WHERE email='$email' ");
    		$data=mysqli_fetch_array($query);
    		$id=$data['id'];
   			 $email=$data['email'];

   			  $online =1;

   			 $sqlonline="UPDATE staff_tbl SET online='$online' WHERE email='$email'";
				$queryonline=mysqli_query($conn,$sqlonline);
   		
	     $_SESSION['email'] = $email;
		$_SESSION['id']=$id;
		$_SESSION['success']="YOU ARE LOGED IN!";
  				$_SESSION['id'] = $id;
				$_SESSION['success'] = "Successfully Registered!";
				header('location:dashboard.php');//redirect to home page

			}else{
				$_SESSION['error'] = "Registration Error Occured! Please Try Again Later!";
			}		 		
 }
}





//Login
if (isset($_POST['login'])) {
	
 	$email = $_POST['email'];
 	$password = $_POST['password'];

 
 	if (empty($email) || empty($password)) {
 		$_SESSION['error'] = "ALL FIELDS ARE REQUIRED";
 		
 	}
 	else {

 		$password = md5($password);//encrypt password before comparing with one from db
		$query = "SELECT * FROM staff_tbl WHERE email ='$email' AND password ='$password'";
		$result=mysqli_query($conn, $query);
	
		if (mysqli_num_rows($result)==1) {
			$query=mysqli_query($conn,"SELECT * FROM staff_tbl WHERE email='$email' ");
    		$data=mysqli_fetch_array($query);
    		$id=$data['id'];
   			 $email=$data['email'];

   			  $online =1;

   			 $sqlonline="UPDATE staff_tbl SET online='$online' WHERE email='$email'";
				$queryonline=mysqli_query($conn,$sqlonline);
   		
	     $_SESSION['email'] = $email;
		$_SESSION['id']=$id;
		$_SESSION['success']="YOU ARE LOGED IN!";
		header('location:dashboard.php');//redirect to home page
		
		
		}else{
			 $_SESSION['error'] = "Wrong User Email or Password Combination! PLEASE TRY AGAIN";
			
		}
 		
 	}
 }





 //logout
if (isset($_GET['logout'])){
	
	$customer_id = $_SESSION['customer_id'];
	$online = 0;
	$sqlonline="UPDATE customer_tbl SET online='$online' WHERE customer_id='$customer_id'";
	$queryonline=mysqli_query($conn,$sqlonline);
	session_destroy();
	unset($_SESSION['customer_id']);
	header('location:../authorisation.php');

}


if (isset($_POST['pass_recovery'])) {
	$customer_email = $_POST['customer_email'];
	$check_email ="SELECT * FROM customer_tbl WHERE customer_email='$customer_email' ";
		$check_result=mysqli_query($conn,$check_email);

	

	if (mysqli_num_rows($check_result) == 1){

		$str = "rodgersangalacreatedlegalwritings1209348756";
		$str = str_shuffle($str);
		$str = substr($str,0, 10);

		$sqlstatus="UPDATE customer_tbl SET token='$str' WHERE customer_email='$customer_email'";
				$querystatus=mysqli_query($conn,$sqlstatus);
		
		$url = "127.0.0.1/legal_writings/reset_password.php?token=$str&email=$customer_email";

		$htmlContent =  $url;


 require 'mailer/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';

$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "angalarodgers@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "Rod1vylle";
$mail->IsSMTP(true);

//Set who the message is to be sent from
$mail->setFrom('angalarodgers@gmail.com', 'Legal Writings');

//Set an alternative reply-to address
//$mail->addReplyTo($from, $name);

//Set who the message is to be sent to
 $mail_receiver = $customer_email;// $_POST['mail_receiver'];

$mail->addAddress($mail_receiver, $customer_email);

// add attchment
 
//$mail->addAttachment($filename, 'My uploaded file');
   
//Set the subject line
$mail->Subject = "Thank You or signing in Legal Writings";

$mail->headers = "MIME-Version: 1.0" . "\r\n";
$mail->headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


$mail->Body =  $htmlContent;


//send the message, check for errors
if (!$mail->send()) {
    
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {

	$_SESSION['success'] = "Request Was Successfully! Check your Email.";
}
			
	}
	else
	{
		$_SESSION['error'] = "Email Does Not Exists!";
	}
}
 



?>