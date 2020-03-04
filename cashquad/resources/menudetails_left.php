<!-- PHP -->
<?php
$file= basename($_SERVER['PHP_SELF'],'.php');
$link=$file."link";
// echo $link;
?>
<!-- PHP -->        



        <nav onload="changeid ()" style="" class="menu">
          <p class="menu-label">
            Menu
          </p>
          <ul class="menu-list">
            <li><a id="dashboardlink" href="dashboard.php"><span class="icon is-small"><i class="fa fa-tachometer"></i></span> Dashboard</a></li>
          </ul>
          <p class="menu-label">
            My account<br>
            MEMBER ID: CQ<?php echo $_SESSION['member_id']; ?>
          </p>
          <ul class="menu-list">

            <li>
              <a ><i class="fa fa-cog"></i> Profile manager</a>
              <ul>
                <li><a id="profilelink" href="profile.php">Personal info</a></li>
                <li><a id="btc_detailslink" href="btc_details.php">Bitcoin details</a></li>
              </ul>
            </li>

            <li><a id="referralslink" href="referrals.php"><span class="icon is-small"><i class="fa fa-bar-chart"></i></span> Referrals</a>
            </li>
            <li><a id="balancelink" href="balance.php"><span class="icon is-small"><i class="fa fa-dollar"></i></span> Balance</a>
            </li>

          </ul>
          <p class="menu-label">
            General
          </p>
          <ul class="menu-list">
            <li><a id="earnlink" href="earn.php"><span class="icon is-small"><i class="fa fa-money"></i></span> Play Games</a></li>
            <li><a id="withdrawlink" href="withdraw.php"><span class="icon is-small"><i class="fa fa-download"></i></span> Withdraw</a></li>
            <li><a id="supportlink" href="support.php"><span class="icon is-small"><i class="fa fa-question-circle"></i></span> Support</a></li>
            <li><a href="logout.php"><span class="icon is-small"><i class="fa fa-sign-out"></i></span> Logout</a></li>
          </ul>
        </nav>


<script type="text/javascript">
var e = document.getElementById("<?php echo $link; ?>");
$(e).attr('class', 'is-active');
</script>