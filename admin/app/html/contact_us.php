<div class="page-content-wrapper">

   <div class="page-wrapper">


      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12">
               <div class="card">
                  <div class="card-body">

                    <h5 style="color:#fff;background:#5DADE2 ;padding:8px;">Contact Person Details</h5>
                    <div class="table-responsive striped m-t-40">
                      <table id="myTable" class="table stylish-table no-wrap table-striped">
                          <thead class="table1">
                              <tr>
                                 
                                  <th class="border-top-0">Sl No</th>
                                  <th class="border-top-0">Name</th>
                                  <th class="border-top-0">Mobile</th>
                                  <th class="border-top-0">Email</th>
                                  <th class="border-top-0">Message</th>
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


   </div>
</div>

<script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
        get_contact_info();

    });
</script>