<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>Login</title>
        <link rel="shortcut icon" href="../favicon.ico" />
        
        <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">

        <!--Core CSS -->
        <link rel="stylesheet" href="../css/bulma.css">
        <link rel="stylesheet" href="../assets/css/bulma.css">
        <link rel="stylesheet" href="../assets/css/core.css">
        <!--Libraries-->
        <link rel="stylesheet" href="../assets/fonts/cryptofont/css/cryptofont.min.css">
        <link rel="stylesheet" href="../assets/js/modalvideo/modal-video.min.css">
        <link rel="stylesheet" href="../assets/js/aos/aos.css">

    </head>
    <body>
<?php require 'info.php'; ?>
        <!-- Pageloader -->
        <div class="pageloader is-theme"></div>
        <div class="infraloader is-active"></div>        
        <!-- Landing page Hero -->
        <section class="hero is-fullheight has-big-dark-gradient">
            <div class="hero-head">
        
                <!-- Cloned navbar -->
                <!-- Cloned navbar that comes in on scroll -->
                <nav id="navbar-clone" class="navbar is-fixed is-dark">
                    <div class="container">
                        <!-- Brand -->
                        <div class="navbar-brand">
                            <a href="../index.php" class="navbar-item">
                                    <img class="rotating" src="../images/gradientlogoresized.png" alt="">
                                    <span class="brand-name">CashQuad</span>
                            </a>
                            <!-- Responsive toggle -->
                            <span class="navbar-burger burger" data-target="cloneNavbarMenu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </div>
                        <!-- Menu -->
                        <div id="cloneNavbarMenu" class="navbar-menu">
<?php require 'menudetails_top_resources.php'; ?>
                        </div>
                    </div>
                </nav>
                <!-- /Cloned navbar -->
                <!-- Static navbar -->
                <!-- Static navbar -->
                <nav class="navbar is-light">
                    <div class="container">
                        <!-- Brand -->
                        <div class="navbar-brand">
                                <a href="../index.php" class="navbar-item">
                                    <img class="rotating" src="../images/whitelogoresized.png" alt="">
                                    <span class="brand-name">CashQuad</span>
                            </a>
                            <!-- Responsive toggle -->
                            <span class="navbar-burger burger" data-target="navbarMenu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </div>
                        <!-- Menu -->
                        <div id="navbarMenu" class="navbar-menu light-menu">
<?php require 'menudetails_top_resources.php'; ?>
                        </div>
                    </div>
                </nav>
                <!-- /Static navbar -->
            </div>
        
            <!-- Hero Image and Title -->
            <div class="hero-body">
                <div class="container">
                    <div class="columns is-vcentered">
        
                        <!-- Landing page Title -->
                        <div class="column is-6 landing-caption">
                            <h1 class="title is-3 is-light is-semibold is-spaced main-title has-text-centered">Login to CashQuad</h1>
                            <form class="login-form" method="post" action="login_check.php">
                                <!-- Field -->
                                <div class="control-material is-primary">      
                                    <input class="material-input " type="email" name="email" required>
                                    <span class="material-highlight"></span>
                                    <span class="bar"></span>
                                    <label>Email</label>
                                </div>
                                <!-- Field -->
                                <div class="control-material is-primary">      
                                    <input class="material-input " type="password" name="password" required>
                                    <span class="material-highlight"></span>
                                    <span class="bar"></span>
                                    <label>Password</label>
                                </div>
                                
                                <!-- Submit -->
                                <div>
                                    <button type="submit" class="button is-button k-button k-primary raised has-gradient is-bold">
                                        <span class="text">Login</span>
                                        <span class="front-gradient"></span>
                                    </button>
                                    <br><br>
                                    <a href="forgot_password.php">Forgot password ?</a>
                                </div>
                            </form>
        
                        </div>
                        <!-- Hero image -->
                        <div class="column is-6 ico-countdown">
                            <div class="ico-card animated preFadeInUp fadeInUp">
                                            <h1 align="center" style="color:#fff;" class="title is-3">Time is ticking !</h1>
                                                <!-- Countdown -->
                                                <ul>
                                                    <li>
                                                        <div id="MyClockDisplay" style="text-align:center;font-size:1.5em;color:#fff;font-weight:bold;" onload="showTime()"></div>
                                                    </li>
                                                </ul>
                                                <!-- Progress bar -->
                                <div class="progress-block">
                                    <!-- Tags -->
                                                    <div class="progress-tags">
                                                        <div>Sign Up</div>
                                                        <div>Select Plan</div>
                                                        <div>Earn</div>
                                                    </div>
                                    <progress class="progress ico-progress" value="65" max="100">65%</progress>
                                </div>
        
                                <!-- Button -->
                                <div class="button-block">
                                    <a href="register.php" class="button k-button k-secondary raised has-gradient is-bold is-fullwidth rounded">
                                                        <span class="text">Join CashQuad Now</span>
                                        <span class="front-gradient"></span>
                                    </a>
                                </div>
        
                                <!-- Icons -->
                                <div class="icon-block">
                                    <i class="cf cf-btc"></i>
                                    <i class="cf cf-eth"></i>
                                    <i class="cf cf-ltc"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Hero footer -->
            <div class="hero-foot">
                <div class="container">
                    <div class="tabs is-centered">
                        <!-- Client / partner list -->
                        <ul>
                                <li><a><img class="hero-logo" src="../images/coinpayments.png" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Landing page Hero -->
        <!-- Core js -->
        <script src="../assets/js/app.js"></script>
        <!--script src="assets/js/particlesjs/particles.min.js"></script-->
        <script src="../assets/js/aos/aos.js"></script>
        
        
        <script src="../assets/js/timer.js"></script>
        <script src="../assets/js/timeline.js"></script>
        <script src="../assets/js/roadmap.js"></script>
        <script src="../assets/js/main.js" defer="defer"></script>
                                                    <script type="text/javascript">
function showTime(){
    var date = new Date();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var session = "AM";
    
    if(h == 0){
        h = 12;
    }
    
    if(h > 12){
        h = h - 12;
        session = "PM";
    }
    
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    
    var time = h + " : " + m + " : " + s + " " + session;
    document.getElementById("MyClockDisplay").innerText = time;
    document.getElementById("MyClockDisplay").textContent = time;
    
    setTimeout(showTime, 1000);
    
}

showTime();

                                            </script>
            </body>  
</html>
