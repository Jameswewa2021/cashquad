<?php
session_start();
$user_id=$_SESSION['user_id'];
$balance=$_POST['balance'];
$amount=$_POST['amount'];
$password=$_POST['password'];
$new_balance=$balance-$amount;

// transaction date
$hoursseen="0";
$dateseen = date("d-m-Y  H:i:s", strtotime(sprintf("+%d hours", $hoursseen))); //USER SEEN TIME
$seentimestamp= strtotime($dateseen); //USER SEEN TIMESTAMP
$dateseen = new DateTime("@".$seentimestamp);  //SNAP TO UTC
$utctimeseen=$dateseen->format('d-m-Y  H:i:s'); // UTC TIME
$utctimestampseen=strtotime($utctimeseen); // UTC TIMESTAMP
$seen=$utctimestampseen;
$transaction_date=$seen;

$transaction_type="2";
$transaction_status="1";

require '../database/dbconfig.php';

// confirm password
$sqlcheck=mysqli_query($con,"SELECT * FROM tbl_users WHERE id='$user_id' AND password='$password' ");
if (mysqli_num_rows($sqlcheck)>0) {
// update tbl balance
$sqlupdate=mysqli_query($con,"UPDATE tbl_balance
 	SET balance='$new_balance'
 	    WHERE user_id='$user_id'");

// insert into tbl transaction
if ($sqlupdate==true) {
$sqlinsert=mysqli_query($con,"INSERT INTO tbl_transaction(user_id,transaction_type,transaction_amount,transaction_date,transaction_status)
	VALUES('$user_id','$transaction_type','$amount','$transaction_date','$transaction_status')");
if ($sqlinsert==true) {
?>
<script type="text/javascript">
window.top.location.href='withdraw.php?info=withdrawal_successful&t=s';
</script>
<?php
}
}

}else{
?>
<script type="text/javascript">
window.top.location.href='withdraw.php?info=wrong_password&t=d';
</script>
<?php
}


?>