<?php require 'session_check.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="robots" content="index, follow" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=7"> -->
  <title>Account levels</title>
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

      <main class="column main menu">

<!-- BREADCRUMB GOES HERE -->

        <div class="level">
          <div class="level-left">
            <div class="level-item">
<h2 class="title is-light is-semibold has-text-centered is-spaced has-space-up">Account levels</h2>
            </div>
          </div>
          <div class="level-right">
            <div class="level-item">
<!-- ............... -->
            </div>
          </div>
        </div>

<!-- TABLE -->
 <div class="has-padding-right">
<div class="notification is-primary">
 <p><i class="fa fa-info-circle"></i> Note that the currency is US Dollar</p>  
</div>
   <table style="overflow-x:scroll;" class="table is-bordered is-striped is-fullwidth">
     <thead>
       <tr>
         <th class="has-big-dark-gradient"></th>
         <th class="warning">Standard</th>
         <th class="success">Silver</th>
         <th class="danger">Gold</th>
         <th class="info">Platinum</th>
         <th class="dark">Free</th>
       </tr>
     </thead>
     <tbody>
      <tr>
 <th>Package cost</th> 
 <td>$45</td>
 <td>$105</td>
 <td>$205</td> 
 <td>$500</td>
 <td>-</td>        
      </tr>
     <tr>
 <th>Earning per game</th> 
 <td>$0.30</td>
 <td>$0.30</td>
 <td>$0.30</td> 
 <td>$0.30</td>
 <td>$0.30</td>        
      </tr>
     <tr>
 <th>No of games</th> 
 <td>4</td>
 <td>9</td>
 <td>18</td> 
 <td>45</td>
 <td>2</td>        
      </tr>
     <tr>
 <th>Daily return</th> 
 <td>$1.2</td>
 <td>$2.7</td>
 <td>$5.4</td> 
 <td>$13.5</td>
 <td>$0.60</td>        
      </tr>
     <tr>
 <th>Monthly return</th> 
 <td>$36</td>
 <td>$81</td>
 <td>$162</td> 
 <td>$405</td>
 <td>-</td>        
      </tr>
     <tr>
 <th>Earning from referral</th> 
 <td>$0.10 per game</td>
 <td>$0.10 per game</td>
 <td>$0.10 per game</td> 
 <td>$0.10 per game</td>
 <td>$0 per game</td>        
      </tr>
<tr>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
     <tr>
 <td></td> 
 <td class="cent bold">UPGRADE</td>
 <td class="cent bold">UPGRADE</td>
 <td class="cent bold">UPGRADE</td> 
 <td class="cent bold">UPGRADE</td>
 <td class="cent bold">ACCESS TRIAL</td>        
      </tr>
     <tr>
 <td class="has-big-dark-gradient"></td> 
 <td class="darr">&darr;</td>
 <td class="darr">&darr;</td>
 <td class="darr">&darr;</td> 
 <td class="darr">&darr;</td>
 <td class="darr">&darr;</td>        
      </tr>
     <tr>
 <td class="has-big-dark-gradient"></td> 
 <td>
 <?php
 if ($account_level=="1") {
 ?>
                                        <a href="dashboard.php" class="button k-button k-primary raised has-gradient slanted">
                                            <span class="text">Dashboard</span>
                                            <span class="front-gradient"></span>
                                        </a> 
 <?php
 }else{
  ?>
                                        <a href="upgrade.php?account_level=1" class="button is-warning raised slanted">
                                            <span class="">Upgrade</span>
                                            <span class="front-gradient"></span>
                                        </a> 
  <?php
 }
 ?>
 </td>
 <td>
 <?php
 if ($account_level=="2") {
 ?>
                                        <a href="dashboard.php" class="button k-button k-primary raised has-gradient slanted">
                                            <span class="text">Dashboard</span>
                                            <span class="front-gradient"></span>
                                        </a> 
 <?php
 }else{
  ?>
                                        <a href="upgrade.php?account_level=2" class="button is-success raised slanted">
                                            <span class="text">Upgrade</span>
                                            <span class="front-gradient"></span>
                                        </a> 
  <?php
 }
 ?>
 </td>
 <td>
  <?php
 if ($account_level=="3") {
 ?>
                                        <a href="dashboard.php" class="button k-button k-primary raised has-gradient slanted">
                                            <span class="text">Dashboard</span>
                                            <span class="front-gradient"></span>
                                        </a> 
 <?php
 }else{
  ?>
                                        <a href="upgrade.php?account_level=3" class="button is-danger raised slanted">
                                            <span class="text">Upgrade</span>
                                            <span class="front-gradient"></span>
                                        </a> 
  <?php
 }
 ?>
 </td> 
 <td>
 <?php
 if ($account_level=="4") {
 ?>
                                        <a href="dashboard.php" class="button k-button k-primary raised has-gradient slanted">
                                            <span class="text">Dashboard</span>
                                            <span class="front-gradient"></span>
                                        </a> 
 <?php
 }else{
  ?>
                                        <a href="upgrade.php?account_level=4" class="button is-info raised slanted">
                                            <span class="text">Upgrade</span>
                                            <span class="front-gradient"></span>
                                        </a> 
  <?php
 }
 ?>
 </td>
 <td class="dark"> 

 <?php
 if ($account_level=="5") {
?>
                                        <a href="dashboard.php" class="button k-button k-primary raised has-gradient slanted">
                                            <span class="text">Dashboard</span>
                                            <span class="front-gradient"></span>
                                        </a> 
<?php
 }else{
?>

<?php
 }    
 ?>                   
</td>        
      </tr>
     </tbody>
     </table><br>

<!-- TABLE -->


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
