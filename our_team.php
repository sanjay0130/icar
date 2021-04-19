<!DOCTYPE html>
<html lang="en">
<!--Doctype Start Here-->
<head>
<!-- Meta Tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
<meta name="author" content="Lalatendu Sarangi" />
<!-- Site Title -->
<title>RPID</title>
<!-- Favicon -->
<!-- CSS Plugins -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Custom Css -->
<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<!--Doctype Ends Here-->
<body>
<?php include("header.php"); ?>
<main class="innerBody">
  <section class="innerBanner">
    <figure> <img src="img/banner/innerAboutBanner.jpg" alt=""> </figure>
    <div class="bannerInfo">
      <h3>Our Team</h3>
      <p>ICAR - National Rice Reaserch Institute</p>
    </div>
  </section>
  <section class="headLines">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 px-0">
          <h3 class="newsHd">Recent Events</h3>
          <div class="rollNews my-auto">
            <marquee behavior="scroll" direction="left" onMouseOver="this.stop();" onMouseOut="this.start();">
            <p><a href="#">ICAR - National Rice Reaserch Institute</a></p>
            <p><a href="#">ICAR - National Rice Reaserch Institute</a></p>
            <p><a href="#">ICAR - National Rice Reaserch Institute</a></p>
            <p><a href="#">ICAR - National Rice Reaserch Institute</a></p>
            <p><a href="#">ICAR - National Rice Reaserch Institute</a></p>
            </marquee>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="innerContent icarTeam">
    <div class="container">
      <div class="row">
        <div class="col-sm-9">
          <h2>Developed by</h2>
          <p><span>Dr. VDS Das Rao</span><span>Dr. VDS Das Rao</span><span>Dr. VDS Das Rao</span><span>Dr. VDS Das Rao</span><span>Dr. VDS Das Rao</span><span>Dr. VDS Das Rao</span><span>Dr. VDS Das Rao</span><span>Dr. VDS Das Rao</span><span>Dr. VDS Das Rao</span><span>Dr. VDS Das Rao</span><span>Dr. VDS Das Rao</span><span>Dr. VDS Das Rao</span></p>
        </div>
        <div class="col-sm-3">
          <div class="miniBox">
            <div class="mbHeader">
              <h4>Quick Links</h4>
            </div>
            <div class="mbBody" id="vertical-ticker2">
              <ul class="qLinks">
                <li><a href="#">Rice Pest Lab</a></li>
                <li><a href="#">ICAR-National Rice Research Institute</a></li>
                <li><a href="#">Indian Council of Agricultural Research (ICAR)</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="teamAll">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2>Our Team Mates</h2>
        </div>
      </div>
      <div class="row" id="team_member_id">
       
      </div>
    </div>
  </section>
</main>
<?php include("footer.php"); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js/jquery.vticker.min.js"></script>
<script type="text/javascript" src="js/common.js"></script>
<script>
        (function ($) {

            $('.dropdown-menu a.dropdown-toggle').on('click', function (e) {
                if (!$(this).next().hasClass('show')) {
                    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
                }
                var $subMenu = $(this).next(".dropdown-menu");
                $subMenu.toggleClass('show');

                $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
                    $('.dropdown-submenu .show').removeClass("show");
                });

                return false;
            });
        })(jQuery)
    </script>
<script>
        $(function () {
            get_team_info();
        });
    </script>
<script>
        
    </script>
</body>
</html>
