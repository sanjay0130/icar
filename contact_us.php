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
      <h3>Contact Us</h3>
     
    </div>
  </section>
  <section class="headLines">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 px-0">
          <h3 class="newsHd">Recent Events</h3>
          <div class="rollNews my-auto">
            <marquee behavior="scroll" direction="left" onMouseOver="this.stop();" onMouseOut="this.start();">
            <p><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry..</a></p>
            <p><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></p>
            <p><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></p>
            <p><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></p>
            <p><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></p>
            </marquee>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="innerContent icarAbout">
    <div class="container">
      <div class="row">
        <div class="col-sm-9">
          <div class="row">
            <div class="col-sm-4">
              <figure class="aboutImg"> <img src="img/nrri.jpg" alt="">
                
              </figure>
            </div>
            <div class="col-sm-8">
              <div class="aboutInfo">
                <h3>Contact Us</h3>
                 <div class="mbBody">
              <form action="" class="suggestForm" id="contact_us_form" name="contact_us_form"> 
                <div class="form-group">
                  <label for="">Name</label>
                  <input type="text" class="form-control" name="name">
                </div>
				<div class="form-group">
                  <label for="">Mobile No</label>
                  <input type="text" class="form-control" name="mobile">
                </div>
                <div class="form-group">
                  <label for="">Email</label>
                  <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                  <label for="">Message</label>
                  <textarea class="form-control" name="message"></textarea>
                </div>
                <button class="moreBtn" type="button" onClick="create_contact();">Submit</button>
              </form>
            </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="miniBox">
            <div class="mbHeader">
              <h4>Quick Links</h4>
            </div>
            <div class="mbBody" id="vertical-ticker1">
              <ul class="qLinks">
                <li><a href="#">Rice Pest Lab</a></li>
                <li><a href="#">ICAR-National Rice Research Institute</a></li>
                <li><a href="#">Indian Council of Agricultural Research (ICAR)</a></li>
              </ul>
            </div>
          </div>
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
            
            // view_achievement_details();
            // get_banner_details();
            // get_latest_news_details();
            // get_news_updates_details();
        });
    </script>
<script>
        $(document).ready(function(){
            
            $('#vertical-ticker1').vTicker({
              speed: 700,
              pause: 4000,
              showItems: 4,
              mousePause: true,
              animate: true,
              startPaused: false
          });
          $('#vertical-ticker2').vTicker({
            speed: 700,
            pause: 4000,
            showItems: 4,
            mousePause: true,
            animate: true,
            startPaused: false
        });
        });
    </script>
</body>
</html>
