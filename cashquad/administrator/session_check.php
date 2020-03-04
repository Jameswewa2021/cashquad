<?php
session_start();
?>
        <link rel="shortcut icon" href="../favicon.ico" />
<div style="visibility:hidden">
	<?php
if(!$_SESSION["user_id"]){
  ?>
  <script type="text/javascript">
  window.location.href='index.php?info=lfirst&t=w';
  </script>
  <?php
}else{
// require '';
$user_id=$_SESSION['user_id'];
$user_email=$_SESSION["user_email"];
$first_name=$_SESSION['first_name'];


}  

    ?>
</div>