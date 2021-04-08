<!-- partial:partials/_horizontal-navbar.html -->
<div class="horizontal-menu">
    <nav class="navbar top-navbar col-lg-12 col-12 p-0">
        <div class="container-fluid">
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
                
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo" href="#">
                        <h2><b><u style="color:#0b10bf;"><span style="color: #ff0101;">RPID</span></u></b></h2>
                    </a>
                    
                </div>
                <ul class="navbar-nav navbar-nav-right">
                    
                    <li class="nav-item nav-profile dropdown" id="profile">
                        <a class="nav-link dropdown-toggle" onclick="div_toggl()">
                            <span class="nav-profile-name">Admin</span>
                            <span class="online-status"></span>
                            <img src="image/face29.png" alt="profile" />
                        </a>
                        <div id="prof_drop" class="log_out_div">
                            <!-- <a class="dropdown-item">
                                <i class="mdi mdi-settings text-primary"></i>
                                Settings
                            </a> -->
                            <a href="#" onclick="session_logout();" class="">
                                <i class="mdi mdi-logout text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" id="nav_togl">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </div>
    </nav>
    <nav class="bottom-navbar">
        <div class="container">
            <ul class="nav page-navigation">
                <li class="nav-item">
                    <a class="nav-link" onclick="loginContent('dashboard');">
                        <i class="mdi mdi-view-dashboard menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
              
                <li class="nav-item">
                    <a class="nav-link" onclick="loginContent('achievements');">
                        <i class="mdi mdi-cart-plus menu-icon"></i>
                        <span class="menu-title">Achievements</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="loginContent('banner');">
                        <i class="mdi mdi-cart-plus menu-icon"></i>
                        <span class="menu-title">Banner</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="loginContent('latest_news');">
                        <i class="mdi mdi-cart-plus menu-icon"></i>
                        <span class="menu-title">Lattest News</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="loginContent('news_updates');">
                        <i class="mdi mdi-cart-plus menu-icon"></i>
                        <span class="menu-title">News & updates</span>
                        <i class="menu-arrow"></i>
                    </a>
                </li>

            </ul>
        </div>
    </nav>
</div>

<script>
    function div_toggl() {
        var element = document.getElementById("prof_drop");
        element.classList.toggle("div_non");
    }
</script>