<!-- PHP -->
<?php
$file= basename($_SERVER['PHP_SELF'],'.php');
$link=$file."link";
// echo $link;
?>
<!-- PHP -->        



        <nav onload="changeid ()" class="menu">
          <p class="menu-label">
            Menu
          </p>
          <ul class="menu-list">
            <li><a id="dashboardlink" href="dashboard.php"><span class="icon is-small"><i class="fa fa-tachometer"></i></span> Dashboard</a></li>
          </ul>
          <p class="menu-label">
            Administrator<br>
            ADMIN ID: CQ<?php echo $user_id; ?>
          </p>
          <ul class="menu-list">

            <li>
              <a id="userslink" href="users.php"><i class="fa fa-user"></i> Users</a>
              <ul>
                <li><a href="users.php">User list</a></li>
                <li><a href="users.php">User details</a></li>
              </ul>
            </li>

            <li><a id="notificationslink" href="notifications.php"><span class="icon is-small"><i class="fa fa-bell"></i></span> Send notifications</a>
            </li>
            <li><a id="balancelink" href="balance.php"><span class="icon is-small"><i class="fa fa-dollar"></i></span> Balance</a>
            </li>

          </ul>
          <p class="menu-label">
            General
          </p>
          <ul class="menu-list">
            <li><a id="withdrawlink" href="withdraw.php"><span class="icon is-small"><i class="fa fa-download"></i></span> Withdraw requests</a></li>
            <li><a id="supportlink" href="support.php"><span class="icon is-small"><i class="fa fa-question-circle"></i></span> Support</a></li>
            <li><a href="../resources/logout.php"><span class="icon is-small"><i class="fa fa-sign-out"></i></span> Logout</a></li>
          </ul>
        </nav>


<script type="text/javascript">
var e = document.getElementById("<?php echo $link; ?>");
$(e).attr('class', 'is-active');
</script>