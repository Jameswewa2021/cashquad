<?php
$email=$_POST['email'];
$confirmation_code=$_POST['confirmation_code'];

// connect to database
require'../database/dbconfig.php';

// check whether email exists
$sqlcheck=mysqli_query($con,"SELECT * FROM tbl_users WHERE email='$email' AND email_code='$confirmation_code'");

if (mysqli_num_rows($sqlcheck)>0) {
// confirm
$sqlconfirm=mysqli_query($con,"UPDATE tbl_users
	SET email_confirmation='1'
	WHERE email='$email'");

if ($sqlconfirm==true) {
?>
<script type="text/javascript">
	window.location.href='../index.php?info=email_confirmed&t=s';
</script>
<?php
}

}else{
// give warning
?>
<script type="text/javascript">
	window.location.href='confirm_email.php?info=email_not_confirmed&t=d&email=<?php echo $email; ?>';
</script>
<?php
}

?>