<?php require 'session_check.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="robots" content="index, follow" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=7"> -->
  <title>Earn</title>
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

<div class="has-padding-right">
         <div class="level">
          <div class="level-left">
            <div class="level-item">
<h2 class="title is-light is-semibold has-text-centered is-spaced has-space-up">Earn</h2>
            </div>
          </div>
          <div class="level-right">
            <div class="level-item">
<!-- ............... -->
            </div>
          </div>
        </div>




<div class="has-padding-right">
<!-- .................... -->
<!-- connect db -->
<?php
require  '../database/dbconfig.php';

// game date
$hoursseen="0";
$dateseen = date("d-m-Y  H:i:s", strtotime(sprintf("+%d hours", $hoursseen))); //USER SEEN TIME
$seentimestamp= strtotime($dateseen); //USER SEEN TIMESTAMP
$dateseen = new DateTime("@".$seentimestamp);  //SNAP TO UTC
$utctimeseen=$dateseen->format('d-m-Y  H:i:s'); // UTC TIME
$utctimestampseen=strtotime($utctimeseen); // UTC TIMESTAMP
$seen=$utctimestampseen;
$new_game_date=$seen;
// game_date
?>

<!-- check level -->
<?php
switch ($account_level) {
  case '1':
   $number_of_games="4";
    break;
  case '2':
   $number_of_games="9";
    break; 
  case '3':
   $number_of_games="18";
    break; 
  case '4':
   $number_of_games="45";
    break;
  default:
   $number_of_games="2";
    break;
}

// check my record
$myrec=mysqli_query($con,"SELECT * FROM tbl_number_of_games WHERE user_id='$user_id'");

if (mysqli_num_rows($myrec)>0) {
// my record exists
while ($rowmyrec=$myrec->fetch_assoc()) {
$old_game_date=$rowmyrec['game_date'];

// if today
$fdate = $new_game_date;
$sdate = $old_game_date;

$timezone='UTC';

$fdate = new DateTime("@".$fdate); // snap to UTC
$fdate->setTimezone(new DateTimeZone($timezone)); //set timezone
$fdate=$fdate->format('d F Y'); //disaplay time according to timezome
// echo $fdate;

$sdate = new DateTime("@".$sdate); // snap to UTC
$sdate->setTimezone(new DateTimeZone($timezone)); //set timezone
$sdate=$sdate->format('d F Y'); //disaplay time according to timezome
// echo $sdate;



if ($fdate != $sdate) {
// record not today-> update my record to today date
$sqlupdatetoday=mysqli_query($con,"UPDATE tbl_number_of_games
      SET remaining_times='$number_of_games',game_date='$new_game_date'
      WHERE user_id='$user_id'");
}else{
// echo "Today";
}

}
}else{
// my record not exist ->insert
$insertrec=mysqli_query($con,"INSERT INTO tbl_number_of_games(user_id,remaining_times,game_date)
  VALUES('$user_id','$number_of_games','$new_game_date')");
}

// check remaining times
$myremaining=mysqli_query($con,"SELECT * FROM tbl_number_of_games WHERE user_id='$user_id'");
while ($rowrem=$myremaining->fetch_assoc()) {
$count_remaining=$rowrem['remaining_times'];
}
if ($count_remaining<1) {
// upgrade plan
?>
<!-- ....................................... -->
<article class="message is-warning">
<div class="message-body">
<p>Please upgrade plan to access more games. Thank you!</p><br>
<button onclick="seeplans()" class="button k-button k-primary raised has-gradient slanted"><span class="text">SEE PLANS</span></button>
</div>
</article>
<!-- ........................................... -->
<?php
}else{
//show games
?>
<!-- .................................. -->
<!-- GAMING -->
<!-- randomize game -->
<?php
$game = '';
for ($i = 0; $i < 1; $i++)
   $game .= mt_rand(1, 2);
if ($game==2) {
?>
<!-- randomize category -->
<?php
$category = '';
for ($i = 0; $i < 1; $i++)
   $category .= mt_rand(1, 5);
 switch ($category) {
   case '1':
$cat="Addition";
     break;
    case '2':
$cat="Subtraction";
     break;
   case '3':
$cat="Multiplication";
     break;
   case '4':
$cat="Division";
     break;  
   case '5':
$cat="All";
     break; 
   default:
     # code...
     break;
 }
?>
<!-- randomize category -->
<!-- randomize level -->
<?php
$level = '';
for ($i = 0; $i < 1; $i++)
   $level .= mt_rand(1, 4);
 switch ($level) {
   case '1':
$lev="Beginner";
     break;
    case '2':
$lev="Intermediate";
     break;
   case '3':
$lev="Advanced";
     break;
   case '4':
$lev="Impossible";
     break;  
   default:
     # code...
     break;
 }
?>
<article class="message is-warning">
  <div class="message-body">
Choose <b><?php echo $cat; ?></b> and then <b><?php echo $lev; ?></b> level to play
  </div>
  </article>
<!-- randomize level -->

<div class="notification is-info">
<b><?php echo $count_remaining; ?></b> of <b><?php echo $number_of_games; ?></b> games remaining
</div>

<iframe id="ifr" src='https://www.embed.com/app/math-game/' style='width: 105%; height: 600px;' scrolling='no' frameBorder='0'></iframe> 
<?php
}else{
?>

<article class="message is-warning">
  <div class="message-body">
Choose
<b>
<!-- randomize level -->
<?php
$level = '';
for ($i = 0; $i < 1; $i++)
   $level .= mt_rand(1, 4);
 switch ($level) {
   case '1':
echo "Beginner";
     break;
    case '2':
echo "Intermediate";
     break;
   case '3':
echo "Advanced";
     break;
   case '4':
echo "Impossible";
     break;  
   default:
     # code...
     break;
 }
?>
<!-- randomize level -->
</b>
 level to play
  </div>
</article>
<div class="notification is-info">
<b><?php echo $count_remaining; ?></b> of <b><?php echo $number_of_games; ?></b> games remaining
</div>

<iframe id="ifr" src='https://www.embed.com/app/typing-game/' style='width: 105%; height: 600px;' scrolling='no' frameBorder='0'></iframe> 
<?php
}
?>
<!-- randomize game -->
<!-- GAMING   -->
<!-- ........................................ -->
<?php
// show games
}


?>
<!-- .................... -->




     
    
</div>
<br>
<?php
// include 'keyboard.php';
?>



<br><br> 
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

<script type="text/javascript">
// var clickIframe = window.setInterval(checkFocus, 100);
// var i = 1;
// function checkFocus() {
//   if(document.activeElement == document.getElementById("ifr")) {
// i++;
// if (i>2) {
// // timeout function
// window.blur();
// setTimeout( function(){ 
// // window.location.href='default.php';
//   }  , 10000 );
// // timeout function
// };
//    }
// }
</script>

<script type="text/javascript">
window.focus();
window.addEventListener('blur', function(e){
  if(document.activeElement == document.getElementById('ifr'))
   {

$("#inp").trigger("click");
setTimeout( function(){ 
alert("Game Over!");
window.location.href='submit_earnings.php';
  }  , 15000 );
   }
});

function seeplans(){
window.location.href='default.php';
}
</script>


</body>
</html>
