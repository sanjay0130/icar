<!DOCTYPE html>
<html>

<head>
    <title>RPID</title>
    <!-- base:css -->
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css" />
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- endinject -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="css/family=Inconsolata.css"> -->
    <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
    <!-- <link rel="stylesheet" href="css/style_master.css"> -->
    <link rel="stylesheet" type="text/css" href="../css/jquery.dataTables.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.css"> -->
    <link rel="stylesheet" href="vendors/select2/select2.min.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="animate.min.css"> -->
    <!-- <link rel="stylesheet" href="css/animate.min.css"> -->
    <!-- <link href="css/select2.min.css" rel="stylesheet" /> -->

    <!-- <link href="css/aos.css" rel="stylesheet"> -->
    <!-- <script src="js/aos.js"></script> -->
    <link rel="shortcut icon" href="../images/s.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- <div id="err_msg"></div> -->
        <div data-include="header"></div>
        <!-- <div data-include="sidebar"></div> -->

        <div class=" myErrorAlrt1 fade" role="alert">
            <strong><span id="success_msg"></span></strong>
        </div>
        <div class=" myErrorAlrt2 fade" role="alert">
            <strong><span id="error_insertion"></span></strong>
        </div>
        <!-- dashboard content -->
        <!-- <div class="container-fluid" id="page-content-wrapper"> </div> -->
        <div class="container-fluid page-body-wrapper" id="page-content-wrapper"></div>

        <div class="loader"><img src="../images/loader1.gif" alt="loader"></div>
        <!-- add footer -->
        <div data-include="footer"></div>

        <!-- load same page name js file -->
        <div id="load_js"></div>
        <!-- <p id="prod_json_data" style="display: none;"></p> -->

        <!-- <div class="loader" ><img src="../../image/loader.gif"></div> -->
    </div>

</body>
<script src="js/jquery-3.4.0.min.js"></script>
<!-- <script src="js/bootstrap.min.js"></script> -->
<script type="text/javascript" src="js/ajax.js"></script>
<!-- <script src="vendors/base/vendor.bundle.base.js"></script> -->
<script src="vendors/select2/select2.min.js"></script>
<script type="text/javascript" src="../common_js/validate.js"></script>
<script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
<!-- <script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script> -->
<script src="js/date.min.js"></script>
<!-- template js -->

<script src="js/template.js"></script>
<script>
    $(function() {
        var includes = $('[data-include]');
        jQuery.each(includes, function() {
            var file = 'html/' + $(this).data('include') + '.php';
            $(this).load(file);
        });
    });
    (function() {
        chk_sess();
        // product_details();
        loginContent('dashboard');
    })();
    $("#button_cancel").click(function() {
        confirm_box(0);
    });
    $("#button_delete").click(function() {
        confirm_box(1);
    });
</script>
<script type="text/javascript">
</script>
<script>
    $('#nav_togl').click(function() {
        console.log("click");
        $(".horizontal-menu .bottom-navbar").toggleClass("header-toggled");
    });
</script>

</html>