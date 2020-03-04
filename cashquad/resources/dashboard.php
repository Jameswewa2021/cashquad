<?php require 'session_check.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="robots" content="index, follow" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=7"> -->
  <title>Dashboard</title>
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
<h2 class="title is-light is-semibold has-text-centered is-spaced has-space-up">Dashboard</h2>
            </div>
          </div>
          <div class="level-right">
            <div class="level-item">
<!-- ............... -->
            </div>
          </div>
        </div>

<!-- EARNINGS -->
<?php
// connect database
require '../database/dbconfig.php';
// BONUS POINTS
$sqlbonus=mysqli_query($con,"SELECT SUM(amount_earned) AS bonus_points FROM tbl_earnings WHERE user_id='$user_id'");
if (mysqli_num_rows($sqlbonus)>0) {
while ($rowbonus=$sqlbonus->fetch_assoc()) {
$bonus_points=$rowbonus['bonus_points'];
if ($bonus_points<0.1) {
$bonus_points="0.00";
}
}
}else{
$bonus_points="0.00";
}

// REFERRAL EARNINGS
$sqlrefe=mysqli_query($con,"SELECT SUM(referral_amount) AS refe_points FROM tbl_earnings WHERE referral_id='$user_id'");
if (mysqli_num_rows($sqlrefe)>0) {
while ($rowrefe=$sqlrefe->fetch_assoc()) {
$referral_earnings=$rowrefe['refe_points'];
if ($referral_earnings<0.1) {
$referral_earnings="0.00";
}
}
}else{
$referral_earnings="0.00";
}


// TOTAL EARNINGS
$total_earnings=$bonus_points+$referral_earnings;

?>
<!-- EARNINGS -->
<div class="has-padding-right">
<?php
$sqlreminders=mysqli_query($con,"SELECT * FROM tbl_notifications WHERE id>0 ORDER BY id desc");
if (mysqli_num_rows($sqlreminders)>0) {
?>
 <article class="message is-info">
  <div class="message-body">
<table class="table is-stripped is-fullwidth is-bordered">
<thead>
<i class="fa fa-bell"></i> Reminders<br><br>
</thead> 
<tbody>
  <?php
while ($rowrem=$sqlreminders->fetch_assoc()) {
$message=$rowrem['message'];
?>
<tr>

  <td>* <?php echo $message; ?></td>
</tr>
<?php
}
  ?>
</tbody> 
</table>
</div>
</article>
<?php
}else{
?>
 <article class="message is-info">
  <div class="message-body">
 <i class="fa fa-bell"></i> No new reminders
  </div>
 </article>
<?php
}
?>
 </div><br>

        <div class="columns is-multiline has-margin-right">
          <div class="column">
            <div class="box notification is-primary">
              <div class="heading">Total earnings</div>
              <div class="title">$ <?php echo $total_earnings; ?></div>
            </div>
          </div>
          <div class="column">
            <div class="box notification is-warning">
              <div class="heading">Referral earnings</div>
              <div class="title">$ <?php echo $referral_earnings; ?></div>
            </div>
          </div>
          <div class="column">
            <div class="box notification is-info">
              <div class="heading">Game earnings</div>
              <div class="title">$ <?php echo $bonus_points; ?></div>
            </div>
          </div>
          <div class="column">
            <div class="box notification is-danger">
              <div class="heading">Account level</div>
              <div class="title">
<?php
switch ($account_level) {
  case '1':
   echo "Standard";
    break;
  case '2':
   echo "Silver";
    break; 
  case '3':
   echo "Gold";
    break; 
  case '4':
   echo "Platinum";
    break;
  default:
   echo "Free";
    break;
}
?>
              </div>
            </div>
          </div>
        </div>

        <div class="columns is-multiline has-margin-right">
          <div class="column is-6">
            <article class="message is-dark">
              <div class="message-header">
                <p>Your referral link</p>
              </div>
              <div style="background-color:#209cee;" class="message-body">

                                <!-- Field -->
                                <div class="control-material is-primary">      
                                    <input class="material-input " type="text" value="http://cashquad.com/register.php?ref=CQ<?php echo $_SESSION['member_id']; ?>" id="myInput" readonly>
                                    <span class="material-highlight"></span>
                                    <span class="bar"></span>
<!-- The button used to copy the text --><br>
<button class="button k-button k-primary raised has-gradient slanted" onclick="myFunction()"><span class="text">Copy link</span></button>

                                </div>
              </div>
            </article>
          </div>
          <div class="column is-6">
<div class="feature">
                                    <h4 class="title is-6 is-tight is-light">Expiry date</h4>
                                    <p>Your account is active until <b>
                                  <?php
                                  // connect db
require '../database/dbconfig.php';
$sqlprof=mysqli_query($con,"SELECT * FROM tbl_users WHERE id='$user_id'");
while ($rowprof=$sqlprof->fetch_assoc()) {
$period=$rowprof['expiry_date'];
if ($period>0) {
$utcdate=$period;
$timezone='UTC';
$utcdate = new DateTime("@".$utcdate); // snap to UTC
$utcdate->setTimezone(new DateTimeZone($timezone)); //set timezone
$utcdate=$utcdate->format('d F Y'); //disaplay time according to timezome
echo $utcdate;
}else{
echo "Infinite";
}
}
                                  ?>
                                    </b></p> 
                                    <br>

                        <a class="button k-button k-secondary raised has-gradient is-fat is-bold rounded" href="default.php">
                            <span class="text">Upgrade now</span>
                            <span class="front-gradient"></span>
                        </a>             

</div>

          </div>
        </div>

<div class="divider"></div>
<h4 class="title is-6 is-tight is-light">Earnings chart for the last 5 playing days</h4>
  <!-- graph -->

    <!-- css bar graph -->
    <div class="css_bar_graph">
      
      <!-- y_axis labels -->
      <ul class="y_axis">
    <li>> $ 1.00</li><li>$ 0.90</li><li>$ 0.60</li><li>$ 0.30</li><li>$ 0.0</li>
      </ul>
      
      <!-- x_axis labels -->
      <ul class="x_axis">
<?php
$last = date('Y-m-d', mktime(0, 0, 0, date('m'), date('d'), date('Y')));
$secondlast= date('Y-m-d', mktime(0, 0, 0, date('m'), date('d') - 1, date('Y')));
$thirdlast= date('Y-m-d', mktime(0, 0, 0, date('m'), date('d') - 2, date('Y')));
$fourthlast= date('Y-m-d', mktime(0, 0, 0, date('m'), date('d') - 3, date('Y')));
$fifthlast= date('Y-m-d', mktime(0, 0, 0, date('m'), date('d') - 4, date('Y')));
?>
        <li><?php echo $fifthlast; ?><li><?php echo $fourthlast; ?></li><li><?php echo $thirdlast; ?></li><li><?php echo $secondlast; ?></li><li><?php echo $last; ?></li>
      </ul>
      
      <!-- graph -->
      <div class="graph">
        <!-- grid -->
        <ul class="grid">
          <li><!-- 100 --></li>
          <li><!-- 80 --></li>
          <li><!-- 60 --></li>
          <li><!-- 40 --></li>
          <li><!-- 20 --></li>
          <li class="bottom"><!-- 0 --></li>
        </ul>
        
        <!-- bars -->
        <!-- 250px = 100% -->
        <ul>
<?php
include 'populate_graph.php';
?>
        </ul> 
      </div>
      
      <!-- graph label -->

    
    </div>
<!-- graph -->
<br><br>
<!-- alert -->
<!-- <div style="width:100%;">
<div class="divider"></div>
<h4 class="title is-6 is-tight is-light">A.O.B</h4>
<div class="notification has-padding-right">
  Nothing new!
</div>
</div><br> -->
<!-- alert -->

</section>


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
