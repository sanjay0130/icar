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
<link rel="stylesheet" type="text/css" href="css/lightgallery.css">
</head>
<!--Doctype Ends Here-->
<body>
<?php include("header.php"); ?>
<main class="innerBody">
  <section class="innerBanner">
    <figure> <img src="img/banner/innerGalleryBanner1.jpg" alt=""> </figure>
    <div class="bannerInfo">
      <h3>Video Gallery</h3>
      <p>Lorem Ipsum Doloer sit amet. Lorem Ipsum Doloer sit amet.</p>
    </div>
  </section>
 <?php include('red_marque.php') ?>
  <section class="innerContent icarVdGallery">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3">
          <div class="siteLeftNav">
            <nav class="navbar navbar-expand-lg">
              <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarNavDropdown1" aria-controls="navbarNavDropdown"
                                aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span> </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown1">
                <ul class="navbar-nav">
                  <li class="nav-item active"> <a class="nav-link" href="#">Rice Insect Pests <span
                                                class="sr-only">(current)</span></a> </li>
                  <li class="nav-item"> <a class="nav-link" href="#">Rice Diseases <span
                                                class="sr-only">(current)</span></a> </li>
                  <li class="nav-item"> <a class="nav-link" href="our_team.php">Team <span class="sr-only">(current)</span></a> </li>
                  <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"> Decision Support System </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li class="nav-item"><a class="dropdown-item" href="#">Action</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="#">Another
                        action</a></li>
                      <li class="nav-item dropdown"> <a class="dropdown-item dropdown-toggle" href="#"
                                                    id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false"> Decision Support System </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li class="nav-item"><a class="dropdown-item"
                                                            href="#">Action</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="#">Another
                            action</a></li>
                          <li class="nav-item dropdown"> <a class="dropdown-item dropdown-toggle" href="#"
                                                            id="navbarDropdownMenuLink" role="button"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false"> Decision Support System </a>
                            <ul class="dropdown-menu"
                                                            aria-labelledby="navbarDropdownMenuLink">
                              <li class="nav-item"><a class="dropdown-item"
                                                                    href="#">Action</a></li>
                              <li class="nav-item"><a class="dropdown-item"
                                                                    href="#">Another action</a></li>
                              <li class="nav-item dropdown"> <a class="dropdown-item dropdown-toggle" href="#"
                                                                    id="navbarDropdownMenuLink" role="button"
                                                                    data-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false"> Decision Support System </a>
                                <ul class="dropdown-menu"
                                                                    aria-labelledby="navbarDropdownMenuLink">
                                  <li class="nav-item"><a class="dropdown-item"
                                                                            href="#">Action</a></li>
                                  <li class="nav-item"><a class="dropdown-item"
                                                                            href="#">Another action</a></li>
                                </ul>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item"> <a class="nav-link" href="#">Rice Pest Lab <span
                                                class="sr-only">(current)</span></a> </li>
                  <li class="nav-item"> <a class="nav-link" href="help_faq.php">Help & Faq <span
                                                class="sr-only">(current)</span></a> </li>
                  <li class="nav-item"> <a class="nav-link" href="#">Citation <span
                                                class="sr-only">(current)</span></a> </li>
                  <li class="nav-item"> <a class="nav-link" href="contact_us.php">Contact Us <span
                                                class="sr-only">(current)</span></a> </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
        <div class="col-sm-9">
          <div class="row" id="icarVideos">
           
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
<script src="js/lightgallery-all.min.js"></script>
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
            get_video_info();
        });
    </script>
<script>
        $(document).ready(function(){
            
            
        });
    </script>
</body>
</html>
