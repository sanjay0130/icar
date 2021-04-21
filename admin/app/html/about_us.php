<div class="page-content-wrapper">

   <div class="page-wrapper">



      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12">
               <div class="card">
                  <div class="card-body">
                <h5 style="color:#fff;background:#5DADE2 ;padding:8px;">About Us
                  
                </h5>
                     <div class="table-responsive striped m-t-40">
                                    <table id="myTable" class="table stylish-table no-wrap table-striped">
                                        <thead class="table1">
                                            <tr>
                                               
                                                <th class="border-top-0">Sl No</th>
                                                <th class="border-top-0">Label1</th>
                                                <th class="border-top-0">Link</th>
                                                
                                                
                                                <th class="border-top-0">Edit</th>
                                                
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
                  <h5 class="modal-title text-white" id="exampleModalLabel">Update About Us Content</h5>
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
                               <form id="about_info_update" name="about_info_update" class="form-horizontal form-material">

                                          <div class="form-group">
                                             <div class="row">
                                                 <div class="col-md-3">
                                                   <input type="hidden" name="hide_id" id="hide_id">
                                                   <label>Label1</label>
                                                   <input type="text" id="label1_up" name="label1_up" class="form-control">
                                                </div>
                                                <div class="col-md-9">
                                                   <label>Content*</label>
                                                   
                                                   <textarea id="v_link_up" name="v_link_up" class="form-control" rows="6"></textarea>
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
                  <button type="button" class="btn btn-success" onclick="upd_about()">Save changes</button>
               </div>
            </div>
         </div>
      </div>

   </div>
</div>

<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
        get_about_info();

    });
</script>