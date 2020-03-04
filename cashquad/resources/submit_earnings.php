<?php
session_start();
$user_id=$_SESSION['user_id'];
$referral_id=$_SESSION['referral_id'];
$account_level=$_SESSION['account_level'];

switch ($account_level) {
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

$hoursseen="0";
$dateseen = date("d-m-Y  H:i:s", strtotime(sprintf("+%d hours", $hoursseen))); //USER SEEN TIME
$seentimestamp= strtotime($dateseen); //USER SEEN TIMESTAMP
$dateseen = new DateTime("@".$seentimestamp);  //SNAP TO UTC
$utctimeseen=$dateseen->format('d-m-Y  H:i:s'); // UTC TIME
$utctimestampseen=strtotime($utctimeseen); // UTC TIMESTAMP
$seen=$utctimestampseen;

$date_earned= $seen;
$amount_earned="0.30";
$referral_amount="0.10";


$new_number_of_games=$number_of_games-1;



// connect db
require '../database/dbconfig.php';

$sqlcheck=mysqli_query($con,"SELECT * FROM tbl_earnings WHERE user_id='$user_id' ORDER BY id DESC LIMIT 0, 1");
if (mysqli_num_rows($sqlcheck)>0) {
while ($rowcheck=$sqlcheck->fetch_assoc()) {
$update_id=$rowcheck['id'];
$old_amount_earned=$rowcheck['amount_earned'];
$old_referral_amount=$rowcheck['referral_amount'];

// remaining_times
$myrec=mysqli_query($con,"SELECT * FROM tbl_number_of_games WHERE user_id='$user_id'");
while ($rowmyrec=$myrec->fetch_assoc()) {
$old_number_of_games=$rowmyrec['remaining_times'];	
}
$new_number_of_games=$old_number_of_games-1;

$new_amount_earned=$old_amount_earned+$amount_earned;
$new_referral_amount=$old_referral_amount+$referral_amount;

$old_game_date=$rowcheck['date_earned'];
$new_game_date=$date_earned;

// if today
$fdate = $new_game_date;
$sdate = $old_game_date;

$timezone='UTC';

$fdate = new DateTime("@".$fdate); // snap to UTC
$fdate->setTimezone(new DateTimeZone($timezone)); //set timezone
$fdate=$fdate->format('d F Y'); //disaplay time according to timezome
// echo $fdate;

$sdate = new DateTime("@".$sdate); // snap to UTC
$sdate->setTimezone(new DateTimeZone($timezone)); //set timezone
$sdate=$sdate->format('d F Y'); //disaplay time according to timezome
// echo $sdate;



if ($fdate != $sdate) {
// not today insert
// insert earnings
$sqlinsert=mysqli_query($con,"INSERT INTO tbl_earnings(user_id,referral_id,date_earned,amount_earned,referral_amount)
  VALUES('$user_id','$referral_id','$date_earned','$amount_earned','$referral_amount')");
if ($sqlinsert==true) {

// update tbl number of games
$updatetng=mysqli_query($con,"UPDATE tbl_number_of_games
      SET remaining_times='$new_number_of_games'
      WHERE user_id='$user_id'");
if ($updatetng==true) {
// update or insert table balance
$sqlbalance=mysqli_query($con,"SELECT * FROM tbl_balance WHERE user_id='$user_id'");
if (mysqli_num_rows($sqlbalance)>0) {
while ($rowbalance=$sqlbalance->fetch_assoc()) {
$balance=$rowbalance['balance'];
$new_balance=$balance+$amount_earned;
// update tbl balance
$updateb=mysqli_query($con,"UPDATE tbl_balance
      SET balance='$new_balance'
      WHERE user_id='$user_id'");
if ($updateb==true) {
?>
<script type="text/javascript">
window.top.location.href='earn.php?info=earned&t=s';
</script>
<?php
}
}
}else{
// insert tbl balance
$sqlinsertb=mysqli_query($con,"INSERT INTO tbl_balance(user_id,balance)
  VALUES('$user_id','$amount_earned')");
if ($sqlinsertb==true) {
?>
<script type="text/javascript">
window.top.location.href='earn.php?info=earned&t=s';
</script>
<?php
}
}
}

}
}else{
// today update
$sqlupdate=mysqli_query($con,"UPDATE tbl_earnings
      SET amount_earned='$new_amount_earned',referral_amount='$new_referral_amount'
      WHERE id='$update_id'");

if ($sqlupdate==true) {
// update tbl number of games
$updatetng=mysqli_query($con,"UPDATE tbl_number_of_games
      SET remaining_times='$new_number_of_games'
      WHERE user_id='$user_id'");
if ($updatetng==true) {
// update or insert table balance
$sqlbalance=mysqli_query($con,"SELECT * FROM tbl_balance WHERE user_id='$user_id'");
if (mysqli_num_rows($sqlbalance)>0) {
while ($rowbalance=$sqlbalance->fetch_assoc()) {
$balance=$rowbalance['balance'];
$new_balance=$balance+$amount_earned;
// update tbl balance
$updateb=mysqli_query($con,"UPDATE tbl_balance
      SET balance='$new_balance'
      WHERE user_id='$user_id'");
if ($updateb==true) {
?>
<script type="text/javascript">
window.top.location.href='earn.php?info=earned&t=s';
</script>
<?php
}
}
}else{
// insert tbl balance
$sqlinsertb=mysqli_query($con,"INSERT INTO tbl_balance(user_id,balance)
  VALUES('$user_id','$amount_earned')");
if ($sqlinsertb==true) {
?>
<script type="text/javascript">
window.top.location.href='earn.php?info=earned&t=s';
</script>
<?php
}
}
}
}
}

}


}else{
// insert earnings
$sqlinsert=mysqli_query($con,"INSERT INTO tbl_earnings(user_id,referral_id,date_earned,amount_earned,referral_amount)
  VALUES('$user_id','$referral_id','$date_earned','$amount_earned','$referral_amount')");
if ($sqlinsert==true) {
// update tbl number of games
$updatetng=mysqli_query($con,"UPDATE tbl_number_of_games
      SET remaining_times='$new_number_of_games'
      WHERE user_id='$user_id'");
if ($updatetng==true) {
// update or insert table balance
$sqlbalance=mysqli_query($con,"SELECT * FROM tbl_balance WHERE user_id='$user_id'");
if (mysqli_num_rows($sqlbalance)>0) {
while ($rowbalance=$sqlbalance->fetch_assoc()) {
$balance=$rowbalance['balance'];
$new_balance=$balance+$amount_earned;
// update tbl balance
$updateb=mysqli_query($con,"UPDATE tbl_balance
      SET balance='$new_balance'
      WHERE user_id='$user_id'");
if ($updateb==true) {
?>
<script type="text/javascript">
window.top.location.href='earn.php?info=earned&t=s';
</script>
<?php
}
}
}else{
// insert tbl balance
$sqlinsertb=mysqli_query($con,"INSERT INTO tbl_balance(user_id,balance)
  VALUES('$user_id','$amount_earned')");
if ($sqlinsertb==true) {
?>
<script type="text/javascript">
window.top.location.href='earn.php?info=earned&t=s';
</script>
<?php
}
}
}
}
}






?>