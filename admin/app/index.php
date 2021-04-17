<!DOCTYPE html>
<html>
<head>
<title>RPID</title>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- <link href="css/aos.css" rel="stylesheet"> -->

<!-- Title Page-->
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="assets/plugins/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="../css/dataTables.bootstrap4.min.css"> -->
    <link rel="stylesheet" type="text/css" href="../css/jquery.dataTables.min.css">

    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <link href="css/newcss.css" rel="stylesheet">
 <!--    <link href="css/select2.min.css" rel="stylesheet"> -->
 <!--   <style type="text/css">
       .select2-container{
    z-index:1000 !important;
}
   </style> -->

</head>
<body  class="animsition">
    
<div class="page-wrapper">
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <!-- <div id="err_msg"></div> -->
    <div data-include="header"></div>
    <div data-include="sidebar"></div> 
	
    
   <!--  <div class="alert alert-success alert-dismissible myErrorAlrt1 fade" role="alert">
      <strong><span  id="success_msg"></span></strong>
    </div>
    <div class="alert alert-success alert-dismissible myErrorAlrt2 fade" role="alert">
      <strong><span  id="error_insertion"></span></strong>
    </div>
 -->    <div class="container-fluid" id="page-content-wrapper"> </div>
    
<!--     <div data-include="footer"></div>  -->
<!--  <div class="loader" ><img src="../images/loader1.gif" alt="loader"></div> 
 -->    
    <div id="load_js"></div>
    <!-- <p id="prod_json_data" style="display: none;"></p> -->
   
    <!-- <div class="loader" ><img src="../../image/loader.gif"></div> -->
<!-- modal for delete -->
<div id="deletemod" class="modal fade">
  <div class="modal-dialog modal-confirm">
    <div class="modal-content-delete">
      <div class="modal-header">
        <div class="icon-box">
          <i class="material-icons fa fa-times"></i>
        </div>        
        <h4 class="modal-title">Are you sure?</h4>  
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <p>Do you really want to delete these records? This process cannot be undone.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" id="button_cancel">Cancel</button>
        <button type="button" class="btn btn-danger" id="button_delete">Delete</button>
      </div>
    </div>
  </div>
</div> 
</div>
</div>
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
   <!--  <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script> -->
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js"> </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <!-- <script src="vendor/select2/select2.min.js"></script> -->

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script src="js/ajax.js"></script>

    <script src="assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/plugins/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Me nu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <!--This page JavaScript -->
    <!--flot chart-->
    <script type="text/javascript" src="../common_js/validate.js"></script>
    <script src="assets/plugins/flot/jquery.flot.js"></script>
    <script src="assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="js/pages/dashboards/dashboard1.js"></script>
    <!-- <script src="js/select2.min.js"></script> -->
    <!-- <script type="text/javascript" src="../js/datatables/dataTables.bootstrap4.min.js"></script> -->
    <script type="text/javascript" src="../js/datatables/jquery.dataTables.min.js"></script>
    <!-- <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script> -->
    
<script type="text/javascript">
    // $(function () {
    //     $('.datetime').datetimepicker();
    //   });
    $(function(){      
        var includes = $('[data-include]');
        jQuery.each(includes, function(){
        var file = 'html/' + $(this).data('include') + '.php';
        $(this).load(file);
        });
    });
    (function(){
        //chk_sess();
        // product_details();
    loginContent('dashboard'); 
    })();
    $("#button_cancel").click(function(){
  confirm_box(0);
});
    $("#button_delete").click(function(){
  confirm_box(1);
});
</script>
<script type="text/javascript"></script>
</body>



</html>
