<?php require 'session_check.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="robots" content="index, follow" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=7">
  <title>Balance</title>
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
<h2 class="title is-light is-semibold has-text-centered is-spaced has-space-up">My Balance</h2>
            </div>
          </div>
          <div class="level-right">
            <div class="level-item">
<!-- ............... -->
            </div>
          </div>
        </div>

<div class="has-padding-right">
 <div class="notification is-primary has-padding-right">
  <h1 class="title"><i class="fa fa-dollar"></i> 
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
echo $balance;
?>
  </h1>
</div>
<!-- <div class="level">
<div class="level-left">
&nbsp;  
</div>
 <div class="level-right">
                                         <a style="margin-right:20px;" href="withdraw.php" class="button k-button k-primary raised has-gradient slanted">
                                            <span class="text"><i class="fa fa-download"></i> WITHDRAW</span>
                                            <span class="front-gradient"></span>
                                        </a>   
 </div> 
</div>  -->

 <div class="divider"></div>
 <h4 class="title is-6 is-tight is-light"><i class="fa fa-history"></i> Transaction history</h4>


<?php
require '../database/dbconfig.php';
$sqltransact=mysqli_query($con,"SELECT * FROM tbl_transaction WHERE user_id='$user_id' ORDER BY id desc");
if (mysqli_num_rows($sqltransact)>0) {

?>
 <table class="table is-stripped is-fullwidth is-bordered">
<thead>
<tr>
  <th>&nbsp;</th>
  <th>Transaction ID</th>
  <th>Details</th>
  <th>Date</th>
  <th>Status</th>
</tr>
</thead>   
<tbody>
<?php
while ($rowtransact=$sqltransact->fetch_assoc()) {
$transaction_type=$rowtransact['transaction_type'];
$transaction_status=$rowtransact['transaction_status'];
$transaction_id=$rowtransact['id'];
$transaction_amount=$rowtransact['transaction_amount'];

$tdate=$rowtransact['transaction_date'];
$utcdate=$tdate;
$timezone='UTC';
$utcdate = new DateTime("@".$utcdate); // snap to UTC
$utcdate->setTimezone(new DateTimeZone($timezone)); //set timezone
$utcdate=$utcdate->format('d F Y'); //disaplay time according to timezome
$transaction_date=$utcdate;
?>
<tr>
  <?php
switch ($transaction_type) {
  case '1':
?>
  <td class="rarr">&rarr;</td>
<?php
    break;
  
  default:
?>
  <td class="larr">&larr;</td>
<?php
    break;
}
   ?>
  <td><?php echo $transaction_id; ?></td>
  <td><?php 
switch ($transaction_type) {
  case '1':
echo "Deposit of $ ".$transaction_amount;
    break;
  
  default:
echo "Withdrawal of $ ".$transaction_amount;
    break;
}
   ?></td>
  <td><?php echo $transaction_date ?></td>
  <td><?php
switch ($transaction_status) {
  case '1':
echo "Processing";
    break;
  case '2':
echo "Completed";
    break;
  case '3':
echo "Cancelled";
    break;

  default:
    # code...
    break;
}
   ?></td> 
</tr>
<?php

}

?>
</tbody>
</table>
<?php




}else{
?>
<article class="message is-success">
  <div class="message-body">
You have not made any deposit or withdraw transactions yet
  </div>
</article>
<?php
}
?>



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
