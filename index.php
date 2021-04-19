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
<main class="mainBody">
  <section class="sliderArea">
    <div class="container-fluid">
      <div class="row">
        <?php include("sidebar.php"); ?>
        <div class="col-sm-8">
          <div id="siteSlider" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#siteSlider" data-slide-to="0" class="active"></li>
              <li data-target="#siteSlider" data-slide-to="1"></li>
              <li data-target="#siteSlider" data-slide-to="2"></li>
              <li data-target="#siteSlider" data-slide-to="3"></li>
              <li data-target="#siteSlider" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner" id="view_slider_banner">
              <div class="carousel-item active"> <img src="img/slider1.jpg"> </div>
              <div class="carousel-item"> <img src="img/slider2.jpg"> </div>
              <div class="carousel-item"> <img src="img/slider3.jpg" alt="..."> </div>
              <div class="carousel-item"> <img src="img/slider4.jpg" alt="..."> </div>
              <div class="carousel-item"> <img src="img/slider5.jpg" alt="..."> </div>
            </div>
            <a class="carousel-control-prev" href="#siteSlider" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa fa-chevron-left"></i></span> </a> <a class="carousel-control-next" href="#siteSlider" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa fa-chevron-right"></i></span> </a> </div>
        </div>
        <div class="col-sm-2 pl-sm-0">
          <div class="nyBox">
            <div class="nbHeader">
              <h4>Achievements</h4>
            </div>
            <div class="nbBody">
              <marquee behavior="scroll" direction="up">
              <table id="scrolling-table">
                <tbody id="show_achievements_table">
                </tbody>
              </table>
              </marquee>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="aboutArea">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3">
          <div class="smBox">
            <div class="smHeader">
              <h4>News & Updates</h4>
            </div>
            <div class="smBody" id="news_updates_div">
              <figure class="smImg"> <img src="img/growth.png" alt=""> </figure>
              <a href="#" class="moreBtn">More</a> </div>
          </div>
        </div>
        <div class="col-sm-9">
          <div class="row">
            <div class="col-sm-9">
              <div class="bigBox">
                <div class="bbHeader"></div>
                <div class="bbBody">
                  <h3>Welcome to Rice Pest Informatics and DSS.</h3>
                  <div class="bbDesc">
                    <figure class="bbImg"><img src="img/nrri.jpg" alt=""></figure>
                    <p><span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and
                      typesetting industry.Lorem Ipsum is simply dummy text of the  printing and typesetting industry.</span><span> Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and  typesetting industry.</span><span> Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span> </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="imgBox">
                <div class="imBody">
                  <h4>Click on Image</h4>
                  <a href="#"><img src="img/ricepest_icon.png" alt=""></a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="linkArea">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3">
          <div class="miniBox vTicker">
            <div class="mbHeader">
              <h4>Latest News</h4>
            </div>
            <div class="mbBody">
              <div id="vertical-ticker">
                <ul id="xyz">
                  <li>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <a href="#">More...</a> </li>
                  <li>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <a href="#">More...</a> </li>
                  <li>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting  industry.</p>
                    <a href="#">More...</a> </li>
                  <li>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <a href="#">More...</a> </li>
                  <li>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <a href="#">More...</a> </li>
                  <li>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <a href="#">More...</a> </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="miniBox">
            <div class="mbHeader">
              <h4>Quick Suggestion</h4>
            </div>
            <div class="mbBody">
              <form action="" class="suggestForm">
                <div class="form-group">
                  <label for="">Name</label>
                  <input type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Email</label>
                  <input type="email" class="form-control">
                </div>
                <div class="form-group">
                  <label for="">Name</label>
                  <textarea class="form-control"></textarea>
                </div>
                <button class="moreBtn" type="submit">Submit</button>
              </form>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="miniBox">
            <div class="mbHeader">
              <h4>Quick Links</h4>
            </div>
            <div class="mbBody"  id="vertical-ticker1">
              <ul class="qLinks">
                <li><a href="#">Rice Pest Lab</a></li>
                <li><a href="#">ICAR-National Rice Research Institute</a></li>
                <li><a href="#">Indian Council of Agricultural Research (ICAR)</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="miniBox">
            <div class="mbHeader">
              <h4>Important Links</h4>
            </div>
            <div class="mbBody"  id="vertical-ticker2">
              <ul class="impLinks">
                <li><a href="#">...............</a></li>
                <li><a href="#">...............</a></li>
                <li><a href="#">...............</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="galleryArea">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-4">
          <div class="gaBox">
            <div class="gaHeader">
              <h4>Video Gallery</h4>
            </div>
            <div class="gaBody"> <a href="video_gallery.php"><img src="img/vdGallery.png" alt=""></a> </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="gaBox">
            <div class="gaHeader">
              <h4>Photo Gallery</h4>
            </div>
            <div class="gaBody"><a href="photo_gallery.php"><img src="img/phGallery.png" alt=""></a></div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="gaBox">
            <div class="gaHeader">
              <h4>Team</h4>
            </div>
            <div class="gaBody"><a href="our_team.php"><img src="img/team.png" alt=""></a></div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
 <?php include("footer.php"); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
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
        $(document).ready(function(){
            $('#vertical-ticker').vTicker({
                speed: 700,
                pause: 4000,
                showItems: 3,
                mousePause: true,
                animate: true,
                startPaused: false
            });
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
<script>
        $(function () {
            
            view_achievement_details();
            get_banner_details();
            get_latest_news_details();
            get_news_updates_details();
        });
    </script>
</body>
</html>
