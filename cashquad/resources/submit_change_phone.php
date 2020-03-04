<?php
session_start();
$user_id=$_SESSION["user_id"];
$country_code=$_POST["country_code"];
$phone=$_POST['phone_number'];

// connect database
require'../database/dbconfig.php';

$sqlchange=mysqli_query($con,"UPDATE tbl_users
	SET country_code='$country_code',phone_number='$phone'
	WHERE id='$user_id'");

if ($sqlchange==true) {
?>
<script type="text/javascript">
	window.top.location.href='profile.php?info=phone_changed&t=s';
</script>
<?php
}

?>