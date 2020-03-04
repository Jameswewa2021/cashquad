<?php
session_start();
$email=$_POST['email'];
$password=$_POST['password'];

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// connect to database
require '../database/dbconfig.php';

// check match
$sqlcheck=mysqli_query($con,"SELECT * FROM tbl_users WHERE email='$email' AND password='$password'");

if (mysqli_num_rows($sqlcheck)>0) {
// ......................login successful..............................
// matched
// select variables and create sessions
while ($row=$sqlcheck->fetch_assoc()) {
$user_id=$row['id'];
$_SESSION["member_id"]=$row['member_id'];
$_SESSION["user_id"]=$row['id'];
$_SESSION["user_email"]=$row['email'];
$_SESSION["referral_id"]=$row['referral_id'];
$_SESSION['first_name']=$row['first_name'];
$_SESSION["account_level"]=$row['account_level'];
$_SESSION["avatar"]=$row['avatar'];
$email_confirmation=$row['email_confirmation'];
if ($_SESSION["account_level"]==true) {
if ($email_confirmation>0) {
// CHECK PAYMENTS
	$success="success";
	$sqlpayment=mysqli_query($con,"SELECT * FROM payments WHERE email='$email' AND status='$success'");
	if (mysqli_num_rows($sqlpayment)>0) {
// UPGRADE ACCOUNT 
while ($rowpayment=$sqlpayment->fetch_assoc()) {
$new_account_level=$rowpayment['new_level'];
$date_upgraded=$rowpayment['updated_at'];
$transaction_amount=$rowpayment['entered_amount'];
$payment_id=$rowpayment['id'];
// date up
$upgradedtimestamp= strtotime($date_upgraded); //USER DEADLINE TIMESTAMP
$date = new DateTime("@".$upgradedtimestamp);  //SNAP TO UTC
$utctime=$date->format('d-m-Y  H:i:s'); // UTC TIME
$utctimestamp=strtotime($utctime); // UTC TIMESTAMP
$date_upgraded=$utctimestamp;
// date up
// EXP DATE
$expiry_date=$date_upgraded + (10368000); //seconds for 120 days
// EXP DATE
// update tbl users
$sqltblusers=mysqli_query($con,"UPDATE tbl_users
	SET account_level='$new_account_level',date_upgraded='$date_upgraded',expiry_date='$expiry_date'
	WHERE email='$email'");
if ($sqltblusers==true) {
// update tbl transactions
$transaction_type="1";
$transaction_status="2";

$sqltransact=mysqli_query($con,"INSERT INTO tbl_transaction(user_id,transaction_type,transaction_amount,transaction_date,transaction_status)
	VALUES('$user_id','$transaction_type','$transaction_amount','$date_upgraded','$transaction_status')");

if ($sqltransact==true) {
// update tbl number of games
$myrec=mysqli_query($con,"SELECT * FROM tbl_number_of_games WHERE user_id='$user_id'");
switch ($new_account_level) {
  case '1':
   $number_of_games="4";
    break;
  case '2':
   $number_of_games="9";
    break; 
  case '3':
   $number_of_games="18";
    break; 
  case '4':
   $number_of_games="45";
    break;
  default:
   $number_of_games="2";
    break;
}
$new_game_date=$date_upgraded;
if (mysqli_num_rows($myrec)>0) {
$updatetng=mysqli_query($con,"UPDATE tbl_number_of_games
      SET remaining_times='$number_of_games'
      WHERE user_id='$user_id'");
if ($updatetng==true) {
// delete from payments
$sqldelete=mysqli_query($con,"DELETE FROM payments WHERE id='$payment_id'");
if ($sqldelete==true) {
?>
<script type="text/javascript">
    window.top.location.href='default.php';
</script>
<?php
}
}
}else{
$insertrec=mysqli_query($con,"INSERT INTO tbl_number_of_games(user_id,remaining_times,game_date)
  VALUES('$user_id','$number_of_games','$new_game_date')");
if ($insertrec==true) {
// delete from payments
$sqldelete=mysqli_query($con,"DELETE FROM payments WHERE id='$payment_id'");
if ($sqldelete==true) {
?>
<script type="text/javascript">
    window.top.location.href='default.php';
</script>
<?php
}
}
}
}
}
}
// UPGRADE ACCOUNT
	}else{
?>
<script type="text/javascript">
    window.top.location.href='default.php';
</script>
<?php
	}
// CHECK PAYMENTS
}else{
?>
<script type="text/javascript">
    window.top.location.href='confirm_email.php?email=<?php echo $email; ?>';
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
	window.top.location.href='login.php?info=wrong&t=d';
</script>
<?php
}

?>