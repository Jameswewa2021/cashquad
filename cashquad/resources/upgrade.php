<?php require 'session_check.php'; 
require "init.php";

$basicInfo = $coin->GetBasicProfile();
$username = $basicInfo['result']['public_name'];
// var_dump($username);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="robots" content="index, follow" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=7">
  <title>Upgrade account level</title>
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
<h2 class="title is-light is-semibold has-text-centered is-spaced has-space-up">Upgrade account level with CoinPayments.net</h2>
            </div>
          </div>
          <div class="level-right">
            <div class="level-item">
<!-- ............... -->
            </div>
          </div>
        </div>

<?php
$oaccount_level=$account_level;
switch ($oaccount_level) {
  case '1':
   $old_account_level="Standard";
   $old_cost="45";
    break;
  case '2':
   $old_account_level="Silver";
   $old_cost="105";
    break; 
  case '3':
   $old_account_level="Gold";
   $old_cost="205";
    break; 
  case '4':
   $old_account_level="Platinum";
   $old_cost="500";
    break;
  default:
   $old_account_level="Free";
   $old_cost="0";
    break;
}

$naccount_level=$_GET['account_level'];
switch ($naccount_level) {
  case '1':
   $new_account_level="Standard";
   $new_cost="45";
    break;
  case '2':
   $new_account_level="Silver";
   $new_cost="105";
    break; 
  case '3':
   $new_account_level="Gold";
   $new_cost="205";
    break; 
  case '4':
   $new_account_level="Platinum";
   $new_cost="500";
    break;
  default:
   $new_account_level="Free";
   $new_cost="0";
    break;
}

// $_SESSION['new_account_level']=$naccount_level;
$cost=$new_cost-$old_cost;
?>

<div class="has-padding-right">
 <article class="message is-info">
  <div class="message-body">
<p>You are now upgrading from <b><?php echo $old_account_level; ?></b> to <b><?php echo $new_account_level; ?></b> level.</p>
<p>Upgrade Cost (USD): <b><i class="fa fa-dollar"></i> <?php echo $cost; ?></b></p>

                <form action="process.php" method="post" autocomplete="off">
                    <input style="visibility:hidden;position:absolute;height:0px;" type="text" name="amount" value="<?php echo $cost; ?>" required>
                    <input style="visibility:hidden;position:absolute;height:0px;" type="email" name="email" value="<?php echo $user_email; ?>" required>
                    <input style="visibility:hidden;position:absolute;height:0px;" type="text" name="new_level" value="<?php echo $naccount_level; ?>" required><br><br>
                    <button type="submit" class="button is-info">Proceed to upgrade&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i></button>
                </form>

  </div>
</article> 
</div><br><br>






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
