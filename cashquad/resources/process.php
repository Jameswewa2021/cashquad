<?php require 'session_check.php'; 

require "init.php";

$basicInfo = $coin->GetBasicProfile();
$username = $basicInfo['result']['public_name'];

$amount = $_POST['amount'];
$email = $_POST['email'];
$new_level =$_POST['new_level'];

$scurrency = "USD";
$rcurrency = "BTC";

$request = [
    'amount' => $amount,
    'currency1' => $scurrency,
    'currency2' => $rcurrency,
    'buyer_email' => $email,
    'item' => "CashQuad - Upgrade",
    'address' => "",
    'ipn_url' => "https://edusava.com/cashquad/resources/webhook.php"
];

$result = $coin->CreateTransaction($request);
// var_dump($result);
if ($result['error'] == "ok") {
    $payment = new Payment;
    $payment->email = $email;
    $payment->new_level= $new_level;
    $payment->entered_amount = $amount;
    $payment->amount = $result['result']['amount'];
    $payment->from_currency = $scurrency;
    $payment->to_currency = $rcurrency;
    $payment->status = "initialized";
    $payment->gateway_id = $result['result']['txn_id'];
    $payment->gateway_url = $result['result']['status_url'];
    $payment->save();
} else {
    print 'Error: ' . $result['error'] . "\n";
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="robots" content="index, follow" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=7">
  <title>Process payment</title>
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


<div class="has-padding-right">
 <article class="message is-success">
  <div class="message-body">
<p>Pay with cryptocurrency</p>
<p style="font-style: italic;">to <strong><?php echo $username; ?></strong></p>
                <form>
                    <label for="amount">Amount (<?php echo $rcurrency; ?>)</label>
                    <h1><b><?php echo $result['result']['amount'] ?> <?php echo $rcurrency ?></b></h1><br>
                    <a target="_blank" href="<?php echo $result['result']['status_url'] ?>" class="button is-success">Pay Now&nbsp;&nbsp;<i class="fa fa-angle-double-right"></i></a>
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
