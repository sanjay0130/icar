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
                                                    <h5 style="color:#D35400;">News & Updates</h5>
                                                    <div class="card-body">
                                                        <form id="banner_name_form" name="banner_name_form" enctype="multipart/form-data" class="form-inline">
                                                            <label class="form_label" for="Branch_name">Label1</label>
                                                            <input type="text" class="form-control mb-2 mr-sm-2" id="label_1" name="label_1" placeholder="Label 1" data-toggle="tooltip" data-placement="top" title="Label 1">
                                                            <label class="form_label" for="Branch_name"> Upload File</label>
                                                            <input type="file" class="form-control" id="image" name="image[]" data-toggle="tooltip" data-placement="top" title="tab4"/>

                                                            <button type="button" class="btn btn-primary mb-2" onclick="create_news_updates();">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h5 style="color:#fff;background:#5DADE2 ;padding:8px;">All News & Updates
                            </h5>
                            <div class="table-responsive striped m-t-40">
                                <table class="table table-striped" id="myTable">
                                    <thead>
                                        <tr>
                                        <th>
                                            Sl
                                        </th>
                                        <th>
                                            Text
                                        </th>
                                        <th>
                                            Photos
                                        </th>
                                        
                                        <th>
                                            Delete
                                        </th>
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
                        <h5 class="modal-title text-white" id="exampleModalLabel">Update News & Updates</h5>
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
                                                <label class="form_label" for="label_1_up">Label1</label>
                                                <input type="text" class="form-control mb-2 mr-sm-2" id="label_1_up" name="label_1_up" placeholder="Label 1" data-toggle="tooltip" data-placement="top" title="Label 1">
                                                <label class="form_label" for="Branch_name"> Upload File</label>
                                                <input type="file" class="form-control" id="image_up" name="image_up[]" data-toggle="tooltip" data-placement="top" title="tab4"/>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success" onclick="upd_news_updates()">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    $('document').ready(function() {
        // $('[data-toggle="tooltip"]').tooltip();
        get_news_updates_details();
    });
</script>
