<?php
$id=$_GET['id'];
$status=$_GET['status'];

require '../database/dbconfig.php';

$processs=mysqli_query($con,"UPDATE tbl_transaction
	SET transaction_status='$status'
	WHERE id='$id'");

if ($processs==true) {
?>
<script type="text/javascript">
	window.location.href='withdraw.php?info=operation_successful&t=s';
</script>
<?php
}
?>