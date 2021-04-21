<div class="page-content-wrapper">

   <div class="page-wrapper">


      <!-- <div class="page-breadcrumb">
         <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
               <h3 class="page-title mb-0 p-0">Brand</h3>
               <div class="d-flex align-items-center">

               </div>
            </div>
            <div class="col-md-6 col-4 align-self-center">

            </div>
         </div>
      </div> -->

      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12">
               <div class="card">
                  <div class="card-body">

                     <div class="tab-content">
                        <div id="Customer" class="container tab-pane active"><br>
                           <div class="container-fluid">

                              <div class="row">


                                 <div class="col-lg-12 col-xlg-9 col-md-12">
                                    <div class="card">
                                        <h5 style="color:#D35400;">Team Member Info</h5>
                                       <div class="card-body">
                                          <form id="team_form" name="team_form" class="form-horizontal form-material">

                                             <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                      <label>Name</label>
                                                      <input type="text" id="name" name="name" class="form-control">
                                                   </div>
                                                   <div class="col-md-3">
                                                      <label>Designation</label>
                                                      <input type="text" id="designation" name="designation" class="form-control">
                                                   </div>
                                                   <div class="col-md-3">
                                                      <label>Photo</label>
                                                      <input type="file" id="image" name="image" class="form-control">
                                                   </div>
                                                  <div class="col-md-3">
                                                   <label class="form_label" for="mobile_no">Mobile No</label>
                                                    <input type="text" class="form-control mb-2 mr-sm-2" id="mobile_no" name="mobile_no" placeholder="Mobile No" data-toggle="tooltip" data-placement="top" title="Mobile No">
                                                  </div>
                                                    <div class="col-md-3">
                                                    <label class="form_label" for="email_id">Email</label>
                                                    <input type="text" class="form-control mb-2 mr-sm-2" id="email_id" name="email_id" placeholder="Email Id" data-toggle="tooltip" data-placement="top" title="Email Id">
                                                   </div>
                                                  
                                                </div>
                                             </div>



                                             <br>
                                             <div class="form-group">
                                                <div class="col-sm-12 d-flex">
                                                   <button type="button" class="btn btn-success mx-auto mx-md-0 text-white"  onclick="create_team()">Submit</button>
                                                </div>
                                             </div>
                                          </form>
                                       </div>
                                    </div>
                                 </div>
                              </div>

                           </div>
                        </div>
                     </div>

                <h5 style="color:#fff;background:#5DADE2 ;padding:8px;">Team Details
                  <!-- <button type="button" class="btn btn-success"  style="padding: 4px; 
                              margin-top: -5px;float:right;color: white;" data-toggle='modal' onclick="excel_download();"><b> EXCEL </b></button>

                  <button type="button" style="padding: 4px; 
                              margin-top: -5px;float:right; margin-right: 5px;color: white;"  class="btn btn-success "   onclick="pdf_download();"><b> PDF </b></button> -->
                </h5>
                     <div class="table-responsive striped m-t-40">
                                    <table id="myTable" class="table stylish-table no-wrap table-striped">
                                        <thead class="table1">
                                            <tr>
                                               
                                                <th class="border-top-0">Sl No</th>
                                                <th class="border-top-0">Name</th>
                                                <th class="border-top-0">Designaion</th>
                                                <th class="border-top-0">Photo</th>
                                                <th class="border-top-0">Mobile No</th>
                                                <th class="border-top-0">Email Id</th>
                                                
                                                <th class="action">Status</th>
                                                <th class="border-top-0">Edit</th>
                                                <th class="border-top-0">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody id="show_data">
                                        </tbody>
                                    </table>
                                </div>


                  </div>
               </div>
            </div>
         </div>

      </div>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-xl">
            <div class="modal-content">
               <div class="modal-header table1">
                  <h5 class="modal-title text-white" id="exampleModalLabel">Update Team Details</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="container-fluid">
                     <div class="row">
                        <div class="col-lg-12 col-xlg-9 col-md-12">
                           <div class="card">
                              <div class="card-body">
                               <form id="team_info_update" name="team_info_update" class="form-horizontal form-material">

                                          <div class="form-group">
                                             <div class="row">
                                                 
                                                <input type="hidden" name="hide_id" id="hide_id">
                                                <div class="col-md-3">
                                                      <label>Name</label>
                                                      <input type="text" id="name_up" name="name_up" class="form-control">
                                                   </div>
                                                   <div class="col-md-3">
                                                      <label>Designation</label>
                                                      <input type="text" id="designation_up" name="designation_up" class="form-control">
                                                   </div>
                                                   <div class="col-md-3">
                                                      <label>Photo</label>
                                                      <input type="file" id="image_up" name="image_up" class="form-control ">
                                                   </div>
                                                <div class="col-md-3">
                                                   <label class="form_label" for="mobile_no_up">Mobile No</label>
                                                    <input type="text" class="form-control mb-2 mr-sm-2" id="mobile_no_up" name="mobile_no_up" placeholder="Mobile No" data-toggle="tooltip" data-placement="top" title="Mobile No">
                                                  </div>
                                                    <div class="col-md-3">
                                                    <label class="form_label" for="email_id_up">Email</label>
                                                    <input type="text" class="form-control mb-2 mr-sm-2" id="email_id_up" name="email_id_up" placeholder="Email Id" data-toggle="tooltip" data-placement="top" title="Email Id">
                                                   </div>
                                               
                                             </div>
                                          </div>


                                          <br>
                                       </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-success" onclick="upd_team()">Save changes</button>
               </div>
            </div>
         </div>
      </div>

   </div>
</div>

<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
        get_team_info();

    });
</script>