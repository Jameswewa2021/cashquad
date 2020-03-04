<?php require 'session_check.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="robots" content="index, follow" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=7">
  <title>Withdraw</title>
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
<h2 class="title is-light is-semibold has-text-centered is-spaced has-space-up">Withdraw funds</h2>
            </div>
          </div>
          <div class="level-right">
            <div class="level-item">
<!-- ............... -->
            </div>
          </div>
        </div>

<div class="has-padding-right">
 <h2 class="subtitle is-6 is-light is-thin">
<?php
// conncet db
require '../database/dbconfig.php';
$sqlbalance=mysqli_query($con,"SELECT * FROM tbl_balance WHERE user_id='$user_id'");
if (mysqli_num_rows($sqlbalance)>0) {
while ($rowbalance=$sqlbalance->fetch_assoc()) {
$balance=$rowbalance['balance'];
}
}else{
$balance="0.00";
}
?>
Your account balance is <i class="fa fa-dollar"></i> <?php echo $balance; ?> 
 </h2>  

<?php
if ($balance<"15.00") {
// notify
?>
<article class="message is-warning">
  <div class="message-body">
Minimum withdrawal amount is <i class="fa fa-dollar"></i> 15.00
  </div>
</article>
<?php
}else{
// withdraw
?>
                            <form class="login-form" method="post" action="submit_withdraw.php">
                                <!-- Field -->
                                <div style="visibility:hidden;position:absolute" class="control-material is-primary hidden">      
                                    <input class="material-input " type="number" min="15.00" step="0.01" name="balance" value="<?php echo $balance; ?>" required>
                                    <span class="material-highlight"></span>
                                    <span class="bar"></span>
                                    <label>Balance</label>
                                </div>
                                <!-- Field -->
                                <div class="control-material is-primary">      
                                    <input class="material-input " type="number" min="15.00" max="<?php echo $balance; ?>" step="0.01" name="amount" required>
                                    <span class="material-highlight"></span>
                                    <span class="bar"></span>
                                    <label>Amount to withdraw in USD</label>
                                </div>
                                <!-- Field -->
                                <div class="control-material is-primary">      
                                    <input class="material-input " type="password" name="password" required>
                                    <span class="material-highlight"></span>
                                    <span class="bar"></span>
                                    <label>Account password</label>
                                </div>
                                
                                <!-- Submit -->
                                <div>
                                    <button class="button is-button k-button k-primary raised has-gradient is-bold">
                                        <span class="text"><i class='fa fa-download'></i> Withdraw</span>
                                        <span class="front-gradient"></span>
                                    </button>
                                </div>
                            </form>
<?php
}
?>
<br><br>
<p class="help is-warning">Withdraw charges apply</p>
</div>



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
