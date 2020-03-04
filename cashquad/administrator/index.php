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
<?php require '../resources/info.php'; ?>
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
                                    <div class="navbar-item is-nav-link">
                                        <a href="../index.php" class="button k-button k-primary raised has-gradient slanted">
                                            <span class="text">Main Site</span>
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
                                <div class="navbar-item">
                                    <a href="../index.php" class="button k-button k-primary raised has-gradient slanted">
                                        <span class="text">Main Site</span>
                                        <span class="front-gradient"></span>
                                    </a>
                                </div>
                            </div>
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
                            <h1 class="title is-3 is-light is-semibold is-spaced main-title has-text-centered">Administrator Login</h1>
                            <form class="login-form" method="post" action="admin_check.php">
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
                                <!-- Field -->
                                <div class="control-material is-primary">      
                                    <input class="material-input " type="password" name="secret" required>
                                    <span class="material-highlight"></span>
                                    <span class="bar"></span>
                                    <label>Admin Secret Key</label>
                                </div>                                
                                <!-- Submit -->
                                <div>
                                    <button type="submit" class="button is-button k-button k-primary raised has-gradient is-bold">
                                        <span class="text">Login</span>
                                        <span class="front-gradient"></span>
                                    </button>
                                    <br><br>
                                    <a href="../resources/forgot_password.php">Forgot password ?</a>
                                </div>
                            </form>
        
                        </div>
                        <!-- Hero image -->
                        <div class="column is-6 ico-countdown">

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

            </body>  
</html>
