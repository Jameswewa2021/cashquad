<?php
session_start();
$user_id=$_SESSION['user_id'];
$bitcoin_detail=$_POST['btc_detail'];

// connect database
require '../database/dbconfig.php';
$update_bitcoin=mysqli_query($con,"UPDATE tbl_users
	SET bitcoin_detail='$bitcoin_detail'
	WHERE id='$user_id'");

if ($update_bitcoin==true) {
?>
<script type="text/javascript">
	window.location.href='btc_details.php?info=operation_successful&t=s';
</script>
<?php
}
?>