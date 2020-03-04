<?php
// .................................
// NTH RECORD
$sql=mysqli_query($con,"SELECT * FROM tbl_earnings WHERE user_id='$user_id' ORDER BY id DESC LIMIT 1 OFFSET 0");
if (mysqli_num_rows($sql)>0) {
while ($row=$sql->fetch_assoc()) {
$amount= $row['amount_earned'];
if ($amount>0) {
$amount=$amount;
}else{
$amount="0.00";
}
}
// PIXELS
            if($amount <= 0.1){
            $pixels = '0';
            }else if($amount > 0.1 && $amount <= 0.3){
                $pixels = '50';
            }else if($amount > 0.3 && $amount <= 0.6){
                $pixels = '110';
            }else if($amount > 0.6 && $amount <= 0.9){
                $pixels = '160';
            }else if($amount > 0.9 && $amount <= 1){
                $pixels = '200';
            }
 // PIXELS 
?>
<li class="bar nr_5 blue" style="height: <?php echo $pixels; ?>px;"><div class="top"></div><div class="bottom"></div><span><?php echo $amount; ?></span></li>
<?php
}else{
$amount="0.00";
// PIXELS
            if($amount <= 0.1){
            $pixels = '0';
            }else if($amount > 0.1 && $amount <= 0.3){
                $pixels = '50';
            }else if($amount > 0.3 && $amount <= 0.6){
                $pixels = '110';
            }else if($amount > 0.6 && $amount <= 0.9){
                $pixels = '160';
            }else if($amount > 0.9 && $amount <= 1){
                $pixels = '200';
            }
 // PIXELS
?>
<li class="bar nr_5 blue" style="height: <?php echo $pixels; ?>px;"><div class="top"></div><div class="bottom"></div><span><?php echo $amount; ?></span></li>
<?php
}

// NTH RECORD
// .................................



// .................................
// NTH RECORD
$sql=mysqli_query($con,"SELECT * FROM tbl_earnings WHERE user_id='$user_id' ORDER BY id DESC LIMIT 2 OFFSET 1");
if (mysqli_num_rows($sql)>0) {
while ($row=$sql->fetch_assoc()) {
$amount= $row['amount_earned'];
if ($amount>0) {
$amount=$amount;
}else{
$amount="0.00";
}
}
// PIXELS
            if($amount <= 0.1){
            $pixels = '0';
            }else if($amount > 0.1 && $amount <= 0.3){
                $pixels = '50';
            }else if($amount > 0.3 && $amount <= 0.6){
                $pixels = '110';
            }else if($amount > 0.6 && $amount <= 0.9){
                $pixels = '160';
            }else if($amount > 0.9 && $amount <= 1){
                $pixels = '200';
            }
 // PIXELS 
?>
<li class="bar nr_4 blue" style="height: <?php echo $pixels; ?>px;"><div class="top"></div><div class="bottom"></div><span><?php echo $amount; ?></span></li>
<?php
}else{
$amount="0.00";
// PIXELS
            if($amount <= 0.1){
            $pixels = '0';
            }else if($amount > 0.1 && $amount <= 0.3){
                $pixels = '50';
            }else if($amount > 0.3 && $amount <= 0.6){
                $pixels = '110';
            }else if($amount > 0.6 && $amount <= 0.9){
                $pixels = '160';
            }else if($amount > 0.9 && $amount <= 1){
                $pixels = '200';
            }
 // PIXELS
?>
<li class="bar nr_4 blue" style="height: <?php echo $pixels; ?>px;"><div class="top"></div><div class="bottom"></div><span><?php echo $amount; ?></span></li>
<?php
}

// NTH RECORD
// .................................


// .................................
// NTH RECORD
$sql=mysqli_query($con,"SELECT * FROM tbl_earnings WHERE user_id='$user_id' ORDER BY id DESC LIMIT 3 OFFSET 2");
if (mysqli_num_rows($sql)>0) {
while ($row=$sql->fetch_assoc()) {
$amount= $row['amount_earned'];
if ($amount>0) {
$amount=$amount;
}else{
$amount="0.00";
}
}
// PIXELS
            if($amount <= 0.1){
            $pixels = '0';
            }else if($amount > 0.1 && $amount <= 0.3){
                $pixels = '50';
            }else if($amount > 0.3 && $amount <= 0.6){
                $pixels = '110';
            }else if($amount > 0.6 && $amount <= 0.9){
                $pixels = '160';
            }else if($amount > 0.9 && $amount <= 1){
                $pixels = '200';
            }
 // PIXELS 
?>
<li class="bar nr_3 blue" style="height: <?php echo $pixels; ?>px;"><div class="top"></div><div class="bottom"></div><span><?php echo $amount; ?></span></li>
<?php
}else{
$amount="0.00";
// PIXELS
            if($amount <= 0.1){
            $pixels = '0';
            }else if($amount > 0.1 && $amount <= 0.3){
                $pixels = '50';
            }else if($amount > 0.3 && $amount <= 0.6){
                $pixels = '110';
            }else if($amount > 0.6 && $amount <= 0.9){
                $pixels = '160';
            }else if($amount > 0.9 && $amount <= 1){
                $pixels = '200';
            }
 // PIXELS
?>
<li class="bar nr_3 blue" style="height: <?php echo $pixels; ?>px;"><div class="top"></div><div class="bottom"></div><span><?php echo $amount; ?></span></li>
<?php
}

// NTH RECORD
// .................................



// .................................
// NTH RECORD
$sql=mysqli_query($con,"SELECT * FROM tbl_earnings WHERE user_id='$user_id' ORDER BY id DESC LIMIT 5 OFFSET 4");
if (mysqli_num_rows($sql)>0) {
while ($row=$sql->fetch_assoc()) {
$amount= $row['amount_earned'];
if ($amount>0) {
$amount=$amount;
}else{
$amount="0.00";
}
}
// PIXELS
            if($amount <= 0.1){
            $pixels = '0';
            }else if($amount > 0.1 && $amount <= 0.3){
                $pixels = '50';
            }else if($amount > 0.3 && $amount <= 0.6){
                $pixels = '110';
            }else if($amount > 0.6 && $amount <= 0.9){
                $pixels = '160';
            }else if($amount > 0.9 && $amount <= 1){
                $pixels = '200';
            }
 // PIXELS 
?>
<li class="bar nr_1 blue" style="height: <?php echo $pixels; ?>px;"><div class="top"></div><div class="bottom"></div><span><?php echo $amount; ?></span></li>
<?php
}else{
$amount="0.00";
// PIXELS
            if($amount <= 0.1){
            $pixels = '0';
            }else if($amount > 0.1 && $amount <= 0.3){
                $pixels = '50';
            }else if($amount > 0.3 && $amount <= 0.6){
                $pixels = '110';
            }else if($amount > 0.6 && $amount <= 0.9){
                $pixels = '160';
            }else if($amount > 0.9 && $amount <= 1){
                $pixels = '200';
            }
 // PIXELS
?>
<li class="bar nr_1 blue" style="height: <?php echo $pixels; ?>px;"><div class="top"></div><div class="bottom"></div><span><?php echo $amount; ?></span></li>
<?php
}

// NTH RECORD
// .................................




// .................................
// NTH RECORD
$sql=mysqli_query($con,"SELECT * FROM tbl_earnings WHERE user_id='$user_id' ORDER BY id DESC LIMIT 4 OFFSET 3");
if (mysqli_num_rows($sql)>0) {
while ($row=$sql->fetch_assoc()) {
$amount= $row['amount_earned'];
if ($amount>0) {
$amount=$amount;
}else{
$amount="0.00";
}
}
// PIXELS
            if($amount <= 0.1){
            $pixels = '0';
            }else if($amount > 0.1 && $amount <= 0.3){
                $pixels = '50';
            }else if($amount > 0.3 && $amount <= 0.6){
                $pixels = '110';
            }else if($amount > 0.6 && $amount <= 0.9){
                $pixels = '160';
            }else if($amount > 0.9 && $amount <= 1){
                $pixels = '200';
            }
 // PIXELS 
?>
<li class="bar nr_2 blue" style="height: <?php echo $pixels; ?>px;"><div class="top"></div><div class="bottom"></div><span><?php echo $amount; ?></span></li>
<?php
}else{
$amount="0.00";
// PIXELS
            if($amount <= 0.1){
            $pixels = '0';
            }else if($amount > 0.1 && $amount <= 0.3){
                $pixels = '50';
            }else if($amount > 0.3 && $amount <= 0.6){
                $pixels = '110';
            }else if($amount > 0.6 && $amount <= 0.9){
                $pixels = '160';
            }else if($amount > 0.9 && $amount <= 1){
                $pixels = '200';
            }
 // PIXELS
?>
<li class="bar nr_2 blue" style="height: <?php echo $pixels; ?>px;"><div class="top"></div><div class="bottom"></div><span><?php echo $amount; ?></span></li>
<?php
}

// NTH RECORD
// .................................



?>