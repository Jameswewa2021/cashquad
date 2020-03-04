<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];
$secret=$_POST['secret'];

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// connect to database
require '../database/dbconfig.php';

//check key
if ($secret=="cq2019") {
// check match
$sqlcheck=mysqli_query($con,"SELECT * FROM tbl_users WHERE email='$email' AND password='$password'");

if (mysqli_num_rows($sqlcheck)>0) {
// ......................login successful..............................
// matched
// select variables and create sessions
while ($row=$sqlcheck->fetch_assoc()) {
$user_id=$row['id'];
$_SESSION["user_id"]=$row['id'];
$_SESSION["user_email"]=$row['email'];
$_SESSION["referral_id"]=$row['referral_id'];
$_SESSION['first_name']=$row['first_name'];
$_SESSION["account_level"]=$row['account_level'];
$_SESSION["avatar"]=$row['avatar'];
$email_confirmation=$row['email_confirmation'];
if ($_SESSION["account_level"]==true) {
if ($email_confirmation>0) {
?>
<script type="text/javascript">
    window.top.location.href='dashboard.php';
</script>
<?php
}else{
?>
<script type="text/javascript">
    window.top.location.href='../resources/confirm_email.php?email=<?php echo $email; ?>';
</script>
<?php
}
}
}
// ......................login successful..............................
}else{
// not matching
?>
<script type="text/javascript">
	window.top.location.href='index.php?info=wrong&t=d';
</script>
<?php
}
}else{
?>
<script type="text/javascript">
	window.top.location.href='index.php?info=wrong_secret&t=d';
</script>
<?php
}



?>