<?php
$email=$_POST['email'];
$reset_code=$_POST['reset_code'];
$password=$_POST['password'];

// connect to database
require '../database/dbconfig.php';

// check whether email exists
$sqlcheck=mysqli_query($con,"SELECT * FROM tbl_users WHERE email='$email' AND reset_code='$reset_code'");

if (mysqli_num_rows($sqlcheck)>0) {
// confirm
$sqlconfirm=mysqli_query($con,"UPDATE tbl_users
	SET password='$password'
	WHERE email='$email'");

if ($sqlconfirm==true) {
?>
<script type="text/javascript">
	window.location.href='../index.php?info=password_reset&t=s';
</script>
<?php
}

}else{
// give warning
?>
<script type="text/javascript">
	window.location.href='reset_password.php?info=password_not_reset&t=d&email=<?php echo $email; ?>';
</script>
<?php
}


?>