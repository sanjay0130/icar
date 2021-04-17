
       
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    
                    <a class="navbar-brand justify-content-center" href="index.html">
                        
                        <b class="logo-icon">
                            
                            <img src="assets/images/unnamed.png" alt="homepage" class="dark-logo"style="height:60px;width:60px;" />
							

                        </b>
                       
                        <span class="logo-text">
                            
                            <h3 style="color:black;">RPID</h3>
                             <h6 style="color:#E74C3C;">Admin</h6>
                        </span>
                    </a>
                    
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white"
                                href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                   
                    <ul class="navbar-nav mr-auto mt-md-0 ">
                        

                        <li class="nav-item hidden-sm-down">
                            <form class="app-search pl-3">
                                <input type="text" class="form-control" placeholder="Search for..."> <a
                                    class="srh-btn"><i class="ti-search"></i></a>
                            </form>
                        </li>
                    </ul>

                  
                    <ul class="navbar-nav">
                        
                        <li class="nav-item dropdown dropdown-toggle">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark dropdown-toggle" href="" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><img src="assets/images/admin.png"
                                    alt="user" class="profile-pic mr-2">Admin</a>
									<ul class="dropdown-menu dropdown-menu-right">
                                    <li class="nav-item"> <a class="nav-link active dropdown-toggle dropdown-toggle" style="color:inherit;"href="" onclick="loginContent('profile');"><b>Profile</b></a></li>
                                    <li class="nav-item"> <a class="nav-link active dropdown-toggle dropdown-toggle" style="color:inherit;"href="" data-toggle="modal" data-target="#changepassword"><b>Change Password</b></a></li>
									<li class="nav-item"> <a class="nav-link active dropdown-toggle dropdown-toggle" style="color:inherit;"href="" onclick="session_logout();"><b>Log out</b></a></li>
									
									</ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="modal fade" id="changepassword" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-md">
            <div class="modal-content">
               <div class="modal-header table1">
                  <h5 class="modal-title text-white" id="exampleModalLabel">Update Password</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                <form id="password_update" name="password_update" class="form-horizontal form-material">
                  <div class="container-fluid" style=" margin: auto;
                    width: 100%;">
                     <div class="row">
                     <div class="col-sm-12" >
                            <div class="card-block">
                                <h5 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h5>
                                <div class="row">
                                  <input type="hidden" name="hide_id" id="hide_id">
                                    <div class="col-sm-12">
                                        <p class="m-b-10 f-w-600">New Password</p>
                                        <input type="password" id="new_password" name="new_password" class="form-control" >
                                    </div>
                                   
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p class="m-b-10 f-w-600">Confirm Password</p>
                                        <input type="password" id="confirm_password" name="confirm_password" class="form-control">
                                    </div>
                                   
                                </div>
                              
                            </div>
                        </div>
                     </div>
                  </div>
                 </form>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-success" onclick="upd_password()">Save changes</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>

<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
        //get_admin_details();
        //alert("hii");

    });
    function upd_password() 
    {
      var new_password = $("#new_password").val();
      var confirm_password = $("#confirm_password").val();
      if(new_password.trim() == '')
      {
        alert("cant empty");
        return false;
      }  

      if(new_password != confirm_password)
      {
        alert("new and confirm password are not same");
        return false;
      } 
      var id_admin = document.getElementById("hide_id").value;
      var formData = new FormData(password_update);
      formData.append('id_admin',id_admin);
      formData.append("action", "upd_password");
      // var data={id:id,action:'update_advertisement'};
      $.ajax({
        url: "include/header.php",
        type: "POST",
        contentType: false,
        processData: false,
        data: formData,
        beforeSend: function () {
          $(".loader").show();
        },

        success: function (response) {
          session_logout();
        },
      });
    }
</script> 