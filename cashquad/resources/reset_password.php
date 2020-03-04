 <!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>Change your password</title>
        <link rel="shortcut icon" href="../favicon.ico" />
        
        <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../css/bulma.css">
        <!--Core CSS -->
        <link rel="stylesheet" href="../assets/css/bulma.css">
        <link rel="stylesheet" href="../assets/css/core.css">
        <!--Libraries-->
        <link rel="stylesheet" href="../assets/fonts/cryptofont/css/cryptofont.min.css">
        <link rel="stylesheet" href="../assets/js/modalvideo/modal-video.min.css">
        <link rel="stylesheet" href="../assets/js/aos/aos.css">
<link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">

    </head>
    <body>
<?php include 'info.php'; ?>
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
                            <div class="navbar-end">
 <!-- Menu item -->
                                    <div class="navbar-item is-nav-link">
                                        <a class="is-centered-responsive" href="../resources/login.php">Login</a>
                                    </div>
                                    <!-- Menu item -->
                                    <div class="navbar-item is-nav-link">
                                        <a class="is-centered-responsive" href="../resources/referral.php">Referral program</a>
                                    </div>
                                    <!-- Menu item -->
                     <!--                <div class="navbar-item is-nav-link">
                                        <a class="is-centered-responsive" href="../resources/about.php">About us</a>
                                    </div>
                                    Menu item
                                    <div class="navbar-item is-nav-link">
                                        <a class="is-centered-responsive" href="../resources/terms.php">Terms</a>
                                    </div> -->
                                    <!-- Sign up -->
                                    <div class="navbar-item is-nav-link">
                                        <a href="register.php" class="button k-button k-primary raised has-gradient slanted">
                                            <span class="text">Register</span>
                                            <span class="front-gradient"></span>
                                        </a>
                                    </div>
                            </div>
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
                            <div class="navbar-end">
 <!-- Menu item -->
                                    <div class="navbar-item is-nav-link">
                                        <a class="is-centered-responsive" href="../resources/login.php">Login</a>
                                    </div>
                                    <!-- Menu item -->
                                    <div class="navbar-item is-nav-link">
                                        <a class="is-centered-responsive" href="../resources/referral.php">Referral program</a>
                                    </div>
                                    <!-- Menu item -->
                            <!--         <div class="navbar-item is-nav-link">
                                        <a class="is-centered-responsive" href="../resources/about.php">About us</a>
                                    </div>
                                    Menu item
                                    <div class="navbar-item is-nav-link">
                                        <a class="is-centered-responsive" href="../resources/terms.php">Terms</a>
                                    </div> -->
                                <!-- Sign up -->
                                <div class="navbar-item">
                                    <a href="register.php" class="button k-button k-primary raised has-gradient slanted">
                                        <span class="text">Register</span>
                                        <span class="front-gradient"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- /Static navbar -->
            </div>
        
        <!-- hero body -->
            <div class="hero-body">
                <div class="container">
                    <div class="divider is-centered"></div>
                    <!-- Title & subtitle -->
                    <h2 class="title is-light is-semibold has-text-centered is-spaced">Change your password</h2>
                    <form method="post" action="submit_reset_password.php" onsubmit="return checkpass()">

                                 <!-- Field -->
                                <div class="control-material is-primary">      
                                    <input class="material-input " type="email" name="email" value="<?php echo $_GET['email']; ?>" required>
                                    <span class="material-highlight"></span>
                                    <span class="bar"></span>
                                    <label>Email</label>
                                </div>                  

                                <!-- Field -->
                                <div class="control-material is-primary">      
                                    <input class="material-input " type="text" name="reset_code" required>
                                    <span class="material-highlight"></span>
                                    <span class="bar"></span>
                                    <label>Enter reset code that was sent to your email</label>
                                </div>
                                <!-- Field -->
                                <div class="control-material is-primary">      
                                    <input class="material-input " type="password" name="password" id="pass1" required>
                                    <span class="material-highlight"></span>
                                    <span class="bar"></span>
                                    <label>New Password</label>
                                </div>
                                <!-- Field -->
                                <div class="control-material is-primary">      
                                    <input class="material-input " type="password" name="confirm_password" id="pass2" required>
                                    <span class="material-highlight"></span>
                                    <span class="bar"></span>
                                    <label>Confirm new Password</label>
<div class="nmatch" style="display:none;color:red"><i class="fa fa-exclamation-triangle"></i> Passwords do not match !</div>
                                </div>
                               
                            <!-- Submit -->
                                <div>
                                    <button type="submit" class="button is-button k-button k-primary raised has-gradient is-bold">
                                        <span class="text">Reset password</span>
                                        <span class="front-gradient"></span>
                                    </button>
                                </div>


 
                    </form>
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
        <script src="../assets/js/main.js" defer="defer"></script>    </body>  
</html>

<?php include 'targetframe.php'; ?>
