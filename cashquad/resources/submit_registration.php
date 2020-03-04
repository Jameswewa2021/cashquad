<?php
// VARIABLES
$first_name=strtoupper($_POST['first_name']);
$last_name=strtoupper($_POST['last_name']);
$referral_id=$_POST['referral_id'];


$referral_id=intval($referral_id);



$country_code=$_POST['country_code'];
$phone_number=$_POST['phone_number'];
$email=strtolower($_POST['email']);
$password=$_POST['password'];
$email_confirmation="0";

// email code
    // GENERATE RANDOM NUMBER
$digits = 5;
$random = rand(pow(10, $digits-1), pow(10, $digits)-1);

$dig = 6;
$rand = rand(pow(10, $dig-1), pow(10, $dig)-1);
$member_id=$rand;
    // GENERATE RANDOM NUMBER
$email_code= $random;

// date registered
$hoursseen="0";
$dateseen = date("d-m-Y  H:i:s", strtotime(sprintf("+%d hours", $hoursseen))); //USER SEEN TIME
$seentimestamp= strtotime($dateseen); //USER SEEN TIMESTAMP
$dateseen = new DateTime("@".$seentimestamp);  //SNAP TO UTC
$utctimeseen=$dateseen->format('d-m-Y  H:i:s'); // UTC TIME
$utctimestampseen=strtotime($utctimeseen); // UTC TIMESTAMP
$seen=$utctimestampseen;
$date_registered=$seen;


$date_upgraded=$date_registered;
// EXP DATE
$expiry_date=$date_upgraded + (604800); //seconds for 120 days
// EXP DATE


$account_level="5";
$bitcoin_detail="0";


// connect database
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
require '../database/dbconfig.php';


$sqlreff=mysqli_query($con,"SELECT * FROM tbl_users WHERE member_id='$referral_id'");
if (mysqli_num_rows($sqlreff)>0) {
while ($rowreff=$sqlreff->fetch_assoc()) {
$referral_id=$row['id'];
}
}else{
$referral_id="0";
}

// echo $referral_id;

// check exisiting email or phone

$sqlexist="SELECT * FROM tbl_users WHERE email='$email' OR phone_number='$phone_number'";
$resultexist=mysqli_query($con,$sqlexist);
$countexist=mysqli_num_rows($resultexist);


if ($countexist>0) {
// header("location:register.php?info=user_exists");
?>
<script type="text/javascript">
	window.top.location.href='register.php?info=user_exists&t=d';
</script>
<?php
}else{


// check if referral_id exists
$sqlref=mysqli_query($con,"SELECT * FROM tbl_users WHERE id='$referral_id'");
$countref=mysqli_num_rows($sqlref);
if ($countref>0) {
// insert records
$sqlinsert=mysqli_query($con,"INSERT INTO tbl_users(member_id,referral_id,first_name,last_name,email,country_code,phone_number,password,email_confirmation,email_code,date_registered,account_level,date_upgraded,expiry_date,bitcoin_detail)
	VALUES('$member_id', '$referral_id', '$first_name', '$last_name', '$email', '$country_code','$phone_number','$password','$email_confirmation','$email_code','$date_registered','$account_level','$date_upgraded','$expiry_date','$bitcoin_detail')");

if ($sqlinsert==true) {
// header("location:index.php?info=registration_successful");

// SEND CONFIRMATION EMAIL
include 'registration_email.php';
// SEND CONFIRMATION EMAIL

}
}else{
// referral not exist

// insert records
$sqlinsert=mysqli_query($con,"INSERT INTO tbl_users(member_id,referral_id,first_name,last_name,email,country_code,phone_number,password,email_confirmation,email_code,date_registered,account_level,date_upgraded,expiry_date,bitcoin_detail)
	VALUES('$member_id', '$referral_id', '$first_name', '$last_name', '$email', '$country_code','$phone_number','$password','$email_confirmation','$email_code','$date_registered','$account_level','$date_upgraded','$expiry_date','$bitcoin_detail')");

if ($sqlinsert==true) {
// header("location:index.php?info=registration_successful");

?>
<div style="visibility:hidden;">
<?php
// SEND CONFIRMATION EMAIL
include 'registration_email.php';
// SEND CONFIRMATION EMAIL
?>	
</div>
<?php



}


?>
<script type="text/javascript">
	// window.top.location.href='register.php?info=referral_not_exist&t=d';
</script>
<?php	
}




}

?>