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
    <figure> <img src="img/banner/innerFaqBanner.jpg" alt=""> </figure>
    <div class="bannerInfo">
      <h3>Help & Faq</h3>
      <p>ICAR - National Rice Reaserch Institute</p>
    </div>
  </section>
  <?php include('red_marque.php') ?>
  <section class="innerContent icarFaq">
    <div class="container">
      <div class="row">
        <div class="col-sm-9">
          <div class="row">
           
            <div class="col-sm-12">
              <h3>Freaquently Asked Questions</h3>

              <?php
              include('admin/common/database.mysqli.php');
              $con_obj   = new common();
              $fetch_res = $con_obj->select('faq', '*', NULL, NULL, NULL);
              
              ?>

              <div id="accordion">

                <?php
                  if($con_obj->numRows() > 0) {
                    $ctr = 0;
                    foreach ($con_obj->getResult() as $key => $value) {

                      $header = $value['title'];
                      $rand   = rand(1,1000000);
                ?>
                      <div class="card">
                        <div class="card-header" id="heading<?php echo $rand; ?>">
                          <h5>
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse<?php echo $rand; ?>" aria-expanded="true" aria-controls="collapse<?php echo $rand; ?>">
                              <?php echo $header; ?>
                            </button>
                          </h5>
                        </div>

                        <div id="collapse<?php echo $rand; ?>" class="collapse show" aria-labelledby="heading<?php echo $rand; ?>" data-parent="#accordion">
                          <div class="card-body">
                            <?php echo $value['description']; ?>
                          </div>
                        </div>
                      </div>

                <?php 
                    }
                }
                ?>
 
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
        get_faq_details();    
        });
    </script>
<script>
        $(document).ready(function(){
            
           
          
        });
    </script>
</body>
</html>
