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


    <header class="siteHeader">
        <section class="topBar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-3 px-sm-0 my-auto text-center text-sm-left">
                        <h5 id="datetime"></h5>
                        <script>
                            var dt = new Date();
                            document.getElementById("datetime").innerHTML = (("0" + dt.getDate()).slice(-2)) + "." + ((
                                "0" + (dt.getMonth() + 1)).slice(-2)) + "." + (dt.getFullYear()) + " " + (("0" + dt
                                .getHours()).slice(-2)) + ":" + (("0" + dt.getMinutes()).slice(-2));
                        </script>
                    </div>
                    <div class="col-sm-3 my-auto text-center text-sm-left">
                        <div class="fontSize">
                            <a href="#">Skip to main content</a>
                            <ul>
                                <li><a href="#">A-</a></li>
                                <li><a href="#">A</a></li>
                                <li><a href="#">A+</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4 my-auto text-center text-sm-left">
                        <div class="adminArea">
                            <ul>
                                <li><a href="admin/">Admin Login</a></li>
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="#">Translator</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2 my-auto text-center text-sm-left">
                        <div class="searchArea">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Here">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fa fa-search"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mainHeader">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 px-0">
                        <figure class="hdrImg">
                            <img src="img/rpmiHeader.png" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        <section class="siteTopNav">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 px-sm-0">
                        <nav class="navbar navbar-expand-lg">

                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index.php"><i class="fa fa-home"></i> Home <span
                                                class="sr-only">(current)</span></a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="about_us.php">About Us <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="our_team.php">Team <span class="sr-only">(current)</span></a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Decision Support System
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <li class="nav-item"><a class="dropdown-item" href="#">Action</a></li>
                                            <li class="nav-item"><a class="dropdown-item" href="#">Another action</a>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    Decision Support System
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                    <li class="nav-item"><a class="dropdown-item" href="#">Action</a>
                                                    </li>
                                                    <li class="nav-item"><a class="dropdown-item" href="#">Another
                                                            action</a></li>
                                                    <li class="nav-item dropdown">
                                                        <a class="dropdown-item dropdown-toggle" href="#"
                                                            id="navbarDropdownMenuLink" role="button"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            Decision Support System
                                                        </a>
                                                        <ul class="dropdown-menu"
                                                            aria-labelledby="navbarDropdownMenuLink">
                                                            <li class="nav-item"><a class="dropdown-item"
                                                                    href="#">Action</a></li>
                                                            <li class="nav-item"><a class="dropdown-item"
                                                                    href="#">Another action</a></li>
                                                            <li class="nav-item dropdown">
                                                                <a class="dropdown-item dropdown-toggle" href="#"
                                                                    id="navbarDropdownMenuLink" role="button"
                                                                    data-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    Decision Support System
                                                                </a>
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
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Rice Pest Lab <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="help_faq.php">Help & Faq <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Citation <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact_us.php">Contact Us <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
    </header>

    <main class="innerBody">
        <section class="innerBanner">
            <figure>
                <img src="img/banner/innerGalleryBanner1.jpg" alt="">
            </figure>
            <div class="bannerInfo">
                <h3>Video Gallery</h3>
                <p>Lorem Ipsum Doloer sit amet. Lorem Ipsum Doloer sit amet.</p>
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
        <section class="innerContent icarVdGallery">
            <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3">
                    <div class="siteLeftNav">
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarNavDropdown1" aria-controls="navbarNavDropdown"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown1">
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">Rice Insect Pests <span
                                                class="sr-only">(current)</span></a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Rice Diseases <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Team <span class="sr-only">(current)</span></a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                            role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Decision Support System
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                            <li class="nav-item"><a class="dropdown-item" href="#">Action</a></li>
                                            <li class="nav-item"><a class="dropdown-item" href="#">Another
                                                    action</a></li>
                                            <li class="nav-item dropdown">
                                                <a class="dropdown-item dropdown-toggle" href="#"
                                                    id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    Decision Support System
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                    <li class="nav-item"><a class="dropdown-item"
                                                            href="#">Action</a></li>
                                                    <li class="nav-item"><a class="dropdown-item" href="#">Another
                                                            action</a></li>
                                                    <li class="nav-item dropdown">
                                                        <a class="dropdown-item dropdown-toggle" href="#"
                                                            id="navbarDropdownMenuLink" role="button"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            Decision Support System
                                                        </a>
                                                        <ul class="dropdown-menu"
                                                            aria-labelledby="navbarDropdownMenuLink">
                                                            <li class="nav-item"><a class="dropdown-item"
                                                                    href="#">Action</a></li>
                                                            <li class="nav-item"><a class="dropdown-item"
                                                                    href="#">Another action</a></li>
                                                            <li class="nav-item dropdown">
                                                                <a class="dropdown-item dropdown-toggle" href="#"
                                                                    id="navbarDropdownMenuLink" role="button"
                                                                    data-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    Decision Support System
                                                                </a>
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
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Rice Pest Lab <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Help & Faq <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Citation <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Contact Us <span
                                                class="sr-only">(current)</span></a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="row" id="icarVideos">
                        <!-- <div class="col-sm-4">
                            <a class="vidBox" href="https://www.youtube.com/embed/3R1njaCHG6c">
                                <iframe width="100%" height="236" src="https://www.youtube.com/embed/3R1njaCHG6c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </a>
                        </div> -->
                        <!-- <div class="col-sm-4">
                            <div class="vidBox">
                                <iframe width="100%" height="236" src="https://www.youtube.com/embed/PQpqdl7SBgk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div> -->
                        <!-- <div class="col-sm-4">
                            <div class="vidBox">
                                <iframe width="100%" height="236" src="https://www.youtube.com/embed/_vMdyrLxEig" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div> -->
                        <!-- <div class="col-sm-6">
                            <div class="vidBox">
                                <iframe width="420" height="236" src="https://www.youtube.com/embed/QAJN4BqMwVk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div> -->
                       <!--  <div class="col-sm-6">
                            <div class="vidBox">
                                <iframe width="420" height="236" src="https://www.youtube.com/embed/MrnbtISC4po" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div> -->
                    </div>
                </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="siteFooter">
        <section class="footerInfo">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-5">
                        <ul class="fLinks">
                            <li><a href="#">Legal Disclaimer</a></li>
                            <li><a href="#">Privacy Statement</a></li>
                            <li><a href="#">Linking Policies</a></li>
                            <li><a href="#">Website Policies</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <div class="lastModify">
                            <p>
                                <script language="Javascript">
                                    document.write("This page was last modified on: " + document.lastModified + "");
                                </SCRIPT>
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="totalVisit">
                            <p>Total Visitor <a href="https://www.hitwebcounter.com" target="_blank">
                                    <img src="https://hitwebcounter.com/counter/counter.php?page=7790714&style=0006&nbdigits=5&type=page&initCount=0"
                                        title="Free Counter" Alt="web counter" border="0" /></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="copyRight">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <p>&copy; ICAR- National Rice Research Institute. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </section>
    </footer>
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