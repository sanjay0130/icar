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

	<?php
    include('admin/common/database.mysqli.php');
    $con_obj = new common();
    $id = $_GET['id'];

    $fetch_res = $con_obj->select('latest_news', '*', NULL, "id=$id");
    $res = $con_obj->numRows();
    if($res <= 0) {

    	echo '<h1>Invalid Access</h1>'; die;
    }
    $res = $con_obj->getResult();

  ?>

  <section class="innerBanner">
    <figure> <img src="img/banner/innerAboutBanner.jpg" alt=""> </figure>
    <div class="bannerInfo">
      <h3><?php echo $res[0]['news']; ?></h3>
 
    </div>
  </section>
  <?php include('red_marque.php') ?>
  <section class="innerContent icarAbout">
    <div class="container">
      <div class="row">
        <div class="col-sm-9">
          <div class="row">
            <div class="col-sm-4">
             
            </div>
            <div class="col-sm-8">
              <div class="aboutInfo">
                <h3><?php echo $res[0]['news']; ?></h3>
                <p id="about_content">
                	<?php echo nl2br($res[0]['description']); ?>
                </p>
              </div>
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

</body>
</html>
