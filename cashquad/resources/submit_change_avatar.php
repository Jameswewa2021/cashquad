<?php
session_start();
$user_id=$_SESSION['user_id'];
require '../database/dbconfig.php';

// echo ini_get('post_max_size');
// echo ini_get('upload_max_filesize');
// ini_set('upload_max_filesize', '8M');
if(isset($_POST['submit_image']))
{    
  $file = $_FILES['upload_file']['name'];
  $a = mt_rand(100000,999999); 
  $file= $a.$file;
  $file_loc = $_FILES['upload_file']['tmp_name'];
  $file_size = $_FILES['upload_file']['size'];
  $file_type = $_FILES['upload_file']['type'];
  $folder="../images/avatars/";
  
  // new file size in KB
  $new_size = $file_size/1024;  
  // new file size in KB
  
  // make file name in lower case
  $new_file_name = strtolower($file);
  // make file name in lower case
  
  $final_file=str_replace(' ','-',$new_file_name); //remove the spaces
  
  if(move_uploaded_file($file_loc,$folder.$final_file))
  {
// update tbl users
     $update=mysqli_query($con,"UPDATE tbl_users
      SET avatar='$final_file'
      WHERE id='$user_id'");
 if ($update==true) {
$_SESSION['avatar']=$final_file;
?>
<script type="text/javascript">
window.top.location.href='profile.php?info=avatar_changed&t=s';
</script>
<?php
 }
// update tblusers
  }
  else
  {
    echo "problem";
  }
}
?>




