<?php
$message=$_POST['message'];
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
require '../database/dbconfig.php';

$insert=mysqli_query($con,"INSERT INTO tbl_notifications(message)
	VALUES('$message')");

if ($insert==true) {
?>
<script type="text/javascript">
	window.location.href='notifications.php?info=operation_successful&t=s';
</script>
<?php
}
?>