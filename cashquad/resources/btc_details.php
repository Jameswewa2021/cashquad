<?php require 'session_check.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="robots" content="index, follow" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=7">
  <title>Bitcoin details</title>
        <link rel="shortcut icon" href="../favicon.ico" />
        
        <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="../css/bulma.css">
        <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/core.css">
        <!--Libraries-->
        <link rel="stylesheet" href="../assets/fonts/cryptofont/css/cryptofont.min.css">
        <link rel="stylesheet" href="../assets/js/modalvideo/modal-video.min.css">
        <link rel="stylesheet" href="../assets/js/aos/aos.css">
        <link rel="stylesheet" type="text/css" href="../css/main.css"/>
  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/custom.js"></script>
</head>

<body>
        <div class="pageloader is-theme"></div>
        <div class="infraloader is-active"></div> 


<section class="hero is-fullheight has-big-dark-gradient"> 
  <header class="hero">
    <div class="hero-head">
<!-- HEADER NAV -->
<?php
include 'header.php';
?>
<!-- HEADER NAV -->
    </div>
  </header>

  <div class="wrapper">
    <div class="columns">
      <aside style="padding-top:20px" class="column is-2 aside section is-medium is-dark">
<!-- MENU NAV -->
<?php
include 'menudetails_left.php';
?>
<!-- MENU NAV -->
      </aside>

      <main class="column main">

<!-- BREADCRUMB GOES HERE -->

        <div class="level">
          <div class="level-left">
            <div class="level-item">
<h2 class="title is-light is-semibold has-text-centered is-spaced has-space-up">Bitcoin details</h2>
            </div>
          </div>
          <div class="level-right">
            <div class="level-item">
<!-- ............... -->
            </div>
          </div>
        </div>

<div class="has-padding-right">
<div  class="column is-fullwidth">
<!--  <div class="divider"></div>
 <h4 class="title is-6 is-tight is-light"><i class="fa fa-bitcoin"></i> Bitcoin details</h4> -->

<?php
require '../database/dbconfig.php';

$sqlprof=mysqli_query($con,"SELECT * FROM tbl_users WHERE id='$user_id'");
while ($rowprof=$sqlprof->fetch_assoc()) {
$bitcoin_details=$rowprof['bitcoin_detail'];
if (empty($bitcoin_details)) {
?>
 <div class="">
<form method="post" action="submit_bitcoin_detail.php">
                                <!-- Field -->
                                <div class="control-material is-primary">      
                                    <input class="material-input " type="text" name="btc_detail" required>
                                    <span class="material-highlight"></span>
                                    <span class="bar"></span>
                                    <label>Update your Bitcoin detail</label>
                                </div>
   <button class="button is-info" type="submit">Update</button>
</form>
 </div>
<?php
}else{
?>
<div class="notification">
 <p>Your Bitcoin detail is: <b><?php echo $bitcoin_details; ?></b></p> <br>
<!-- <p onclick="btc()" class="help is-info">Change</p> -->
</div>
 <div class="">
<form method="post" action="submit_bitcoin_detail.php">
                                <!-- Field -->
                                <div class="control-material is-primary">      
                                    <input class="material-input " type="text" name="btc_detail" required>
                                    <span class="material-highlight"></span>
                                    <span class="bar"></span>
                                    <label>Change your Bitcoin detail..?</label>
                                </div>
   <button class="button is-info" type="submit">Save changes</button>
</form>
 </div>

<?php
}
}


?>



</div>
</div>  
</div>
<div class="columns is-ycentered has-padding-right">

      </main>
    </div>
  </div>

<!-- graph -->
</div>

        <!-- Core js -->
        <script src="../assets/js/app.js"></script>
        <!--script src="assets/js/particlesjs/particles.min.js"></script-->
        <script src="../assets/js/aos/aos.js"></script>
        
        
        <script src="../assets/js/timer.js"></script>
        <script src="../assets/js/timeline.js"></script>
        <script src="../assets/js/roadmap.js"></script>
        <script src="../assets/js/main.js" defer="defer"></script>   

</body>
</html>
