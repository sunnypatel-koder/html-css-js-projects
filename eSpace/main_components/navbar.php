<div class="header">
    <span style="font-size:16px;">&#128214;&nbsp;<b>eSpace</b></span>
    <span id="branchYearSem"><?php echo $_SESSION['branch'] . " - " . $_SESSION['year']; ?> - <span id="current_sem"><?php echo $_SESSION['semester']; ?></span></span>
    <span id="branch"><?php echo $_SESSION['branch']; ?> </span>
        <i id="profile" style="font-size:20px;" class="far fa-user"></i>

  
    
</div>

<div id="navbar">
    <ul>
        <li id="menu"><a href="javascript:void(0)"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
        <li><a href="javascript:void(0)"><i class="fa fa-home"></i></a></li>
        <li><a class="active" href="dashboard.php">Dashboard</a></li>
        <li class="shift_dot"><a href="javascript:void(0)">Blog</a></li>
        <li class="shift_dot"><a href="javascript:void(0)">Discord</a></li>
    </ul>
    <ul>
        <!-- <li><a href="loginsystem/user-logout.php"><i class="fa fa-sign" aria-hidden="true"></i></a></li> -->
        <li class="shift_dot"><a href="loginsystem/user-logout.php">Logout</a></li>
        <li id="search"><a id="click_Search"><i class="fa fa-search" aria-hidden="true"></i></a></li>
        <li id="setting"><a id="click_Setting"><i class="fas fa-user-cog"></i></i></a></li>
        <li id="dot_menu">
            <a><i class="fas fa-ellipsis-v"></i></i></a>
            <ul>
                <!-- <li><a href="">Dashboard</a></li> -->
                <li><a href="">Blog</a></li>
                <li><a href="">Discord</a></li>
                <li><a href="mobileResponsivePages/setting.php">Setting</a></li>
                <li><a href="loginsystem/user-logout.php">Logout</a></li>
            </ul>
        </li>
    </ul>
</div>

<!-- --------works-for-Responsive----------- -->
<script>
    $(document).ready(function() {
        $("#navbar ul #menu").click(function() {
            $("#sidenav").slideToggle();
        })
        $('#navbar ul #dot_menu a').click(function() {
            $('#navbar ul #dot_menu ul').slideToggle();
            $("html, body").animate({
                scrollTop: 0
            }, "slow");
        })
    })
</script>