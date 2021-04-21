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
  <?php include('red_marque.php') ?>
  <section class="innerContent icarContact">
    <div class="container">
      
          <div class="row">
           
            <div class="col-sm-6">
              <div class="contactForm">
                <h3>User Information</h3>
                 <div class="mbBody">
              <form action="" class="suggestForm" id="contact_us_form" name="contact_us_form"> 
                <div class="form-group">
                  <label for="">Name</label>
                  <input type="text" class="form-control" name="name" id="name" required="required">
                </div>
				<div class="form-group">
                  <label for="">Mobile No</label>
                  <input type="text" class="form-control" name="mobile" id="mobile" required="required">
                </div>
                <div class="form-group">
                  <label for="">Email</label>
                  <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                  <label for="">Message</label>
                  <textarea class="form-control" name="message" id="message" required="required"></textarea>
                </div>
                <button class="btn btn-success" type="button" onClick="create_contact();">Submit</button>
              </form>
            </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="contDetails">
                <h3>Contact Us</h3>
                <article>
                  <h4>Dr S D Mohapatra</h4>
                  <p>ICAR - National Rice Research Institute
<br>Cuttack - 753 006, Odisha, India
<br>E-mail - S.DasMohapatra@icar.gov.in
Mob No. - 8280249204</p>
                </article>
                <p>Or</p>
                <article>
                  <h4>Director</h4><p>
ICAR - National Rice Research Institute
<br>Cuttack - 753 006, Odisha, India
<br>E-mail - director.nrri@icar.gov.in
<br>Ph No. - 0671-2367757
<br>EPBX: +91-671-2367768-783
Fax: +91-671-2367663</p>
                </article>
              </div>
            </div>
          </div>
        
      
    </div>
  </section>
  <section class="mapSection">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 px-0">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3738.2794230433115!2d85.931581114398!3d20.453713512536922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1973ebcec4bfbb%3A0x874fb9e2cac50b4f!2sICAR-NATIONAL%20RICE%20RESEARCH%20INSTITUTE%20(NRRI%2CCRRI)!5e0!3m2!1sen!2sin!4v1618995245977!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

          
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
<script type="text/javascript" src="admin/common_js/validate.js"></script>

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

</body>
</html>
