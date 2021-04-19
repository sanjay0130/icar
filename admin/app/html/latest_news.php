<div class="page-content-wrapper">

    <div class="page-wrapper">
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
                                                    <h5 style="color:#D35400;">Latest News Info</h5>
                                                    <div class="card-body">
                                                        <form id="latest_news_form" name="latest_news_form" enctype="multipart/form-data" class="form-inline">
                                                          <label class="form_label" for="label_1">Latest News</label>
                                                          <input type="text" class="form-control mb-2 mr-sm-2" id="latest_news" name="latest_news" placeholder="Latest News" data-toggle="tooltip" data-placement="top" title="Latest News">
                                                          
                                                          <button type="button" class="btn btn-primary mb-2" onclick="create_latest_news();">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h5 style="color:#fff;background:#5DADE2 ;padding:8px;">All Latest News
                            </h5>
                            <div class="table-responsive striped m-t-40">
                                <table class="table table-striped" id="myTable">
                                    <thead>
                                    <tr>
                                      <th> Sl No.</th>
                                      <th> Latest News </th>
                                      <th> Edit </th>
                                      <th> Delete </th>
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
                        <h5 class="modal-title text-white" id="exampleModalLabel">Update Latest News</h5>
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
                                            <form id="modal_form_update" name="modal_form_update" class="form-inline">
                                              <input type="hidden" name="hide_id" id="hide_id">
                                              <label class="form_label" for="label1">Latest News</label>
                                              <input type="text" class="form-control mb-2 mr-sm-2" id="latest_news_up" name="latest_news_up" placeholder="Latest News">
                                              
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success" onclick="upd_latest_news()">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script>
    $('document').ready(function() {
        // $('[data-toggle="tooltip"]').tooltip();
       get_latest_news_details();
    });
</script>
