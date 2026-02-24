<?php
$usertype = '';
if ($_SESSION['username']) {
    $usertype = $_SESSION['username'];
} else {
    echo "<script>window.location.href='login.php';</script>";
}

?>

<!-- Sidebar  -->
<nav id="sidebar">
    <div class="sidebar_blog_1">
        <div class="sidebar-header">
            <div class="logo_section">
                <a href="#"><img class="logo_icon img-responsive" src="assets/images/logo.svg" alt="#" /></a>
            </div>
        </div>
        <div class="sidebar_user_info">
            <div class="icon_setting"></div>
            <div class="user_profle_side">
                <div class="user_img"><img class="img-responsive" src="assets/images/logo.svg" alt="#" /></div>
                <div class="user_info">
                    <h6>Welcome</h6>
                    <p><span class="online_animation"></span> Online</p>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar_blog_2">
        <h4>General</h4>
        <ul class="list-unstyled components">
            <li class=""><a href="dashboard.php"><i class="fa fa-map purple_color2"></i> <span>Dashboard</span></a></li>
            <li class=""><a href="events.php"><i class="fa fa-files-o yellow_color"></i> <span>Events</span></a></li>
            <li class=""><a href="blogs.php"><i class="fa fa-files-o yellow_color"></i> <span>Blogs</span></a></li>
            
        </ul>
    </div>
</nav>
<!-- end sidebar -->
<!-- right content -->
<div id="content">
    <!-- topbar -->
    <div class="topbar">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="full">
                <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                <div class="right_topbar">
                    <div class="icon_info">
                        <ul class="user_profile_dd">
                            <li>
                                <a class="dropdown-toggle" data-toggle="dropdown"><span class="name_user">Welcome </span></a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="logout.php"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- end topbar -->