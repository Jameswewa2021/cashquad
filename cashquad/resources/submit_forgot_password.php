<?php
$email=$_POST['email'];


// email code
    // GENERATE RANDOM NUMBER
$digits = 5;
$random = rand(pow(10, $digits-1), pow(10, $digits)-1);
    // GENERATE RANDOM NUMBER
$reset_code= $random;

// connect database
require'../database/dbconfig.php';

$sqlforgot=mysqli_query($con,"UPDATE tbl_users
	SET reset_code='$reset_code'
	WHERE email='$email'");

if ($sqlforgot==true) {

?>
<div style="visibility:hidden;">
	<?php
// SEND RESET EMAIL
include 'password_email.php';
// SEND RESET EMAIL
	?>
</div>
<?php




}


?>