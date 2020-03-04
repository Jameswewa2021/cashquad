<?php
$id=$_GET['id'];

require '../database/dbconfig.php';
$delete=mysqli_query($con,"DELETE FROM tbl_notifications WHERE id='$id'");

if ($delete==true) {
?>
<script type="text/javascript">
	window.location.href='notifications.php?info=operation_successful&t=s';
</script>
<?php
}
?>