<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .sidebar-wrapper,
.sidebar-wrapper .sidebar-dropdown > a:after,
.sidebar-wrapper ul li a i,
.page-wrapper .page-content {
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  -o-transition: all 0.3s;
  -ms-transition: all 0.3s;
  transition: all 0.3s;
}

@keyframes swing {
  0% {
    transform: rotate(0deg);
  }
  10% {
    transform: rotate(10deg);
  }
  30% {
    transform: rotate(0deg);
  }
  40% {
    transform: rotate(-10deg);
  }
  50% {
    transform: rotate(0deg);
  }
  60% {
    transform: rotate(5deg);
  }
  70% {
    transform: rotate(0deg);
  }
  80% {
    transform: rotate(-5deg);
  }
  100% {
    transform: rotate(0deg);
  }
}
/*----------------page-wrapper----------------*/
/* .page-wrapper {
  height: 100vh;
} */

/*----------------toggeled sidebar----------------*/
.page-wrapper.toggled .sidebar-wrapper {
  left: 0px;
}
@media screen and (min-width: 768px) {
  .page-wrapper.toggled .page-content {
    padding-left: 300px;
  }
}

.page-wrapper.toggled #toggle-sidebar {
  position: absolute;
  color: #cacaca;
}

/*----------------sidebar-wrapper----------------*/
.sidebar-wrapper {
  width: 240px;
  background: #05727D ;
  height: 100%;
  max-height: 100%;
  /* position:fixed; */
  /* top: 72px;
  left: -300px; */
}

.sidebar-wrapper ul li:hover a i,
.sidebar-wrapper .sidebar-dropdown .sidebar-submenu li a:hover:before,
.sidebar-wrapper .sidebar-search input.search-menu:focus + span,
.sidebar-wrapper .sidebar-menu .sidebar-dropdown.active a i {
  color: #fb5edf;
}

.sidebar-wrapper ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}
.sidebar-wrapper a {
  text-decoration: none;
}
/*----------------sidebar-content----------------*/
.sidebar-content {
  max-height: calc(100% - 30px);
  height: calc(100% - 30px);
  overflow-y: auto;
  position: relative;
}
.sidebar-content.desktop {
  overflow-y: hidden;
}
/*--------------------sidebar-brand----------------------*/
.sidebar-wrapper .sidebar-brand {
  padding: 15px 20px;
  text-align: center;
}

.sidebar-wrapper .sidebar-brand > a {
  color: #fff;
  text-transform: uppercase;
  font-weight: bold;
}

/*--------------------sidebar-header----------------------*/
.sidebar-wrapper .sidebar-header {
  padding: 20px;
  overflow: hidden;
  border-top: 1px solid #2b2b2b;
}
.sidebar-wrapper .sidebar-header .user-pic {
  float: left;
  width: 60px;
  padding: 2px;
  border: 1px solid #585858;
  border-radius: 8px;
  margin-right: 15px;
}
.sidebar-wrapper .sidebar-header .user-info {
  float: left;
  color: black;
}
.sidebar-wrapper .sidebar-header .user-info span {
  display: block;
}
.sidebar-wrapper .sidebar-header .user-info .user-role {
  font-size: 12px;
  color: #7c818a;
}
.sidebar-wrapper .sidebar-header .user-info .user-status * {
  display: inline-block;
  color: #7c818a;
  font-size: 12px;
}
.sidebar-wrapper .sidebar-header .user-info .user-status i{
  font-size: 8px;
  color:#21e80b;  
}

/*-----------------------sidebar-search------------------------*/

.sidebar-wrapper .sidebar-search {
  border-top: 1px solid #2b2b2b;
}
.sidebar-wrapper .sidebar-search > div {
  padding: 10px 20px;
}
.sidebar-wrapper .sidebar-search input.search-menu,
.sidebar-wrapper .sidebar-search .input-group-addon {
  background: #2b2b2b;
  box-shadow: none;
  color: #7c818a;
  border-color: #2b2b2b;
  transition: color 0.5s;
}
/*----------------------sidebar-menu-------------------------*/
.sidebar-wrapper .sidebar-menu {
  border-top: 1px solid #2b2b2b;
  padding-bottom: 10px;
}

.sidebar-wrapper .sidebar-menu .header-menu span {
  font-weight: bold;
  font-size: 14px;
  color: #4e5767;
  padding: 15px 20px 5px 20px;
  display: inline-block;
}

.sidebar-wrapper .sidebar-menu ul li a {
  display: inline-block;
  width: 100%;
  color: #ffffff;
  text-decoration: none;
  transition: color 0.3s;
  position: relative;
  padding: 8px 30px 8px 20px;
  font-weight:200px;
}

.sidebar-wrapper .sidebar-menu ul li:hover > a,
.sidebar-wrapper .sidebar-menu .sidebar-dropdown.active > a {
  color: white;
  font-weight:bold;
}

.sidebar-wrapper .sidebar-menu ul li a i {
  margin-right: 10px;
  font-size: 14px;
  background:#26dae3f2;
  width: 30px;
  height: 30px;
  line-height: 30px;
  text-align: center;
  border-radius: 4px;
}

.sidebar-wrapper .sidebar-menu ul li a:hover > i::before {
  display: inline-block;
  animation: swing ease-in-out 0.5s 1 alternate;
}

.sidebar-wrapper .sidebar-menu .sidebar-dropdown div {
  background: #05727D ;

}
.sidebar-wrapper .sidebar-menu .sidebar-dropdown > a:after {
  content: "\f063";
  font-family: FontAwesome;
  font-weight: 400;
  font-style: normal;
  display: inline-block;
  text-align: center;
  text-decoration: none;
  background: 0 0;
  speak: none;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  position: absolute;
  right: 15px;
  top: 14px;
}
.sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu ul {
  padding: 5px 0;
}

.sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li {
  padding-left: 25px;
  font-size: 13px;
}

.sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a:before {
  content: "\f1ce";
  font-family: FontAwesome;
  font-weight: 400;
  font-style: normal;
  display: inline-block;
  text-align: center;
  text-decoration: none;
  speak: none;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  margin-right: 10px;
  font-size: 10px;
}

.sidebar-wrapper .sidebar-menu ul li a span.label,
.sidebar-wrapper .sidebar-menu ul li a span.badge {
  float: right;
  margin-top: 8px;
  margin-left: 5px;
}

.sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a .badge,
.sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a .label {
  float: right;
  margin-top: 0px;
}

.sidebar-wrapper .sidebar-menu .badge {
  background: #384558;
}
.sidebar-wrapper .sidebar-menu .sidebar-submenu {
  display: none;
}
.sidebar-wrapper .sidebar-menu .sidebar-dropdown.active > a:after {
  transform: rotate(90deg);
  right: 17px;
}
/*--------------------------side-footer------------------------------*/

.sidebar-footer {
  position: absolute;
  width: 100%;
  bottom: 0;
  display: flex;
  background: #2b2b2b;
}
.sidebar-footer > a {
  flex-grow: 1;
  text-align: center;

  height: 30px;
  line-height: 30px;
  color: #7c818a;
  position: relative;
}
.sidebar-footer > a:hover {
  color: black;
}
.sidebar-footer > a .notification {
  position: absolute;
  top: 0;
}

/*--------------------------page-content-----------------------------*/
.page-wrapper .page-content {
  display: inline-block;
  width: 100%;
  padding-left: 0px;
}
.page-wrapper .page-content > div {
  padding: 20px 40px;
}
.page-wrapper .page-content {
  overflow-x: hidden;
}
/*---------------------toggle-sidebar button-------------------------*/
#toggle-sidebar {
  position: fixed;
  top: 13px;
  left: 25px;
  color: #0f151f;
  font-size: 18px;
}

/*----------------  Scroll bar style   --------------- */
::-webkit-scrollbar {
  width: 6px;
  height: 6px;
  color: #9c9c9c;
}
::-webkit-scrollbar-button {
  width: 0px;
  height: 0px;
}
::-webkit-scrollbar-thumb {
  background: #657692;
  border: 0px none #ffffff;
  border-radius: 50px;
}
::-webkit-scrollbar-thumb:hover {
  background: #657692;
}
::-webkit-scrollbar-thumb:active {
  background: #657692;
}
::-webkit-scrollbar-track {
  background: #0c1119;
  border: 0px none #ffffff;
  border-radius: 71px;
}
::-webkit-scrollbar-track:hover {
  background: #0c1119;
}
::-webkit-scrollbar-track:active {
  background: #0c1119;
}
::-webkit-scrollbar-corner {
  background: transparent;
}
</style>
<aside class="left-sidebar" data-sidebarbg="skin6" style="background-color:#05727D;">
<div class="toggled">
  <nav id="sidebar" class="sidebar-wrapper ">
    <div class="sidebar-content">
      
      
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu"><span></span></li>
         
          <li class="sidebar-dropdown">
            <a href="#" onclick="loginContent('dashboard');"><i class="mr-3 fa fa-home"></i><span>Home</span></a>
          </li>
          
          <li class="sidebar-dropdown">
            <a href="#" onclick="loginContent('video_gallery');"><i class="mr-3 far fa-clock fa-fw"></i><span>Video</span></a>
          </li>
          <li class="sidebar-dropdown">
            <a href="#" onclick="loginContent('team_member');"><i class="mr-3 far fa-clock fa-fw"></i><span>Team Member</span></a>
          </li>
          <li class="sidebar-dropdown">
            <a href="#" onclick="loginContent('banner');"><i class="mr-3 far fa-clock fa-fw"></i><span>Banner</span></a>
          </li>
          <li class="sidebar-dropdown">
            <a href="#" onclick="loginContent('latest_news');"><i class="mr-3 far fa-clock fa-fw"></i><span>Lattest News</span></a>
          </li>
          <li class="sidebar-dropdown">
            <a href="#" onclick="loginContent('news_updates');"><i class="mr-3 far fa-clock fa-fw"></i><span>News Updates</span></a>
          </li>
          <li class="sidebar-dropdown">
            <a href="#" onclick="loginContent('achievements');"><i class="mr-3 far fa-clock fa-fw"></i><span>Achievements</span></a>
          </li>
          <li class="sidebar-dropdown">
            <a href="#" onclick="loginContent('about_us');"><i class="mr-3 far fa-clock fa-fw"></i><span>About Us</span></a>
          </li>
          <li class="sidebar-dropdown">
            <a href="#" onclick="loginContent('faq');"><i class="mr-3 far fa-clock fa-fw"></i><span>FAQ</span></a>
          </li>
          <li class="sidebar-dropdown">
            <a href="#" onclick="loginContent('photo_gallery');"><i class="mr-3 far fa-clock fa-fw"></i><span>Photo Gallery</span></a>
          </li>
          <li class="sidebar-dropdown">
            <a href="#" onclick="loginContent('contact_us');"><i class="mr-3 far fa-clock fa-fw"></i><span>Contact Person</span></a>
          </li>

          
          <li class="sidebar-dropdown">
            <a href="#" onclick="session_logout();"><i class="mr-3 fa fa-power-off "></i><span>Log Out</span></a>
          </li>
          
          
        </ul>
      </div>
      <!-- sidebar-menu  -->
      <!-- sidebar-menu  -->
    </div>
    <!-- sidebar-content  -->

    
  </nav>
  <!-- sidebar-wrapper  -->

  <!-- page-content" -->
</div>
</div>
</aside>
<script>
$(".sidebar-dropdown > a").click(function() {
  $(".sidebar-submenu").slideUp(250);
  if (
    $(this)
      .parent()
      .hasClass("active")
  ) {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .parent()
      .removeClass("active");
  } else {
    $(".sidebar-dropdown").removeClass("active");
    $(this)
      .next(".sidebar-submenu")
      .slideDown(250);
    $(this)
      .parent()
      .addClass("active");
  }
});

$("#toggle-sidebar").click(function() {
  $(".page-wrapper").toggleClass("toggled");
});
</script>