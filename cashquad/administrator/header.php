    <?php include '../resources/info.php'; ?>  
      <nav class="navbar has-shadow is-fixed is-dark" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">

          <a class="navbar-item is--brand">
                                    <img class="rotating" src="../images/gradientlogoresized.png" alt="">
                                    <span class="brand-name">CashQuad</span>
          </a>
                            <!-- Responsive toggle -->
                            <span class="navbar-burger burger" data-target="navMenu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>

        </div>


        <div class="navbar-menu navbar-end" id="navMenu">
          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">
              <figure  class="image is-32x32" style="margin-right:.5em;">
                <img style="border-radius:50%;" src="../images/avatars/<?php echo $_SESSION["avatar"]; ?>">
              </figure>
              <?php echo $first_name; ?>
            </a>

            <div class="navbar-dropdown is-right">
                <a href="../resources/logout.php" style="color:#000;" class="navbar-item">
                  <span class="icon is-small">
                    <i class="fa fa-power-off"></i>
                  </span>
                  &nbsp; Logout
                </a>
            </div>
          </div>
        </div>
      </nav>