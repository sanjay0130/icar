<div id="wrapper">
  <!-- Page content -->
  <div id="page-content-wrapper">
    <div class="page-content">
      <div class="container-fluid">
        <div class="s007">
          <div class="panel panel-default">
            <div class="panel-heading">
              <div>
                <button class="btn btn-sm btn-primary upp" onclick="loginContent('dashboard');"><i class="fa fa-chevron-circle-left  icon_upp" aria-hidden="true"></i>Back</button>
                <b>Services Type</b></div>
            </div>
            <div class="panel-body">
              <form id="services_type_form" name="services_type_form" enctype="multipart/form-data">
                <div class="inner-form">
                  <div class="advance-search">
                    <div class="row">


                      <div class="col-md-4">
                        <div class="input-field">
                          <div class="input-select">
                            <div class="choices__inner">
                              <label>Name</label>
                              <input class="form-control" type="text" id="name" name="name">
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-4 latest-job ">
                        <div class="input-field">
                          <div class="input-select">
                            <div class="choices__inner">
                              <label> Price </label>

                              <input class="form-control" type="number" id="price" name="price">
                            </div>
                          </div>
                        </div>

                      </div>

                    </div>
                    <div class="panel-footer">
                      <button type="button" class="btn btn-sm add-cat" onclick="create_service();">CREATE</button>
                    </div>
                  </div>
                </div>
              </form>

            </div>
          </div>

          <div class="panel panel-default">
            <div class="panel-heading">View Services </div>
            <div class="panel-body">

              <table id='myTable' class='table table-striped'>
                <thead>
                  <tr>
                    <th>Sl</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th class="action">Delete</th>
                    <th class="action">Edit</th>



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


<!-- Modal content-->
<div id="advertisementModal" class="modal fade" role="dialog">
  <div class="modal-dialog form-dark" role="document">
    <div class="modal-content-ru">
      <div class="text-white">
        <!--Header-->
        <div class="modal-header text-center ">
          <h3 class="modal-title green-text font-weight-bold" id="myModalLabel"><strong>Update Service</strong></h3>
          <button type="button" class="close white-text " data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <div id="err"></div>
        </div>
        <!--Body-->

        <div class="modal-body">
          <form id="modal_form_update" name="modal_form_update">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <input type="hidden" name="hide_id" id="hide_id">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name_up" id="name_up" data-toggle="tooltip" data-placement="top" title="User Name">
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Price</label>
                  <input type="number" class="form-control" name="price_up" id="price_up" data-toggle="tooltip" data-placement="top" title="User Password">
                </div>
              </div>
            </div>
          </form>
        </div>
        <!--Body-->
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" onclick="upd_service();">Update</button>
          <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- <script>tinymce.init({ selector:'#description', height: 300 });</script> -->
<script>
  $(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
    get_user_details();
  });
</script>