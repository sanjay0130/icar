<div id="wrapper">
    <div class="main-panel">
        <div class="content-wrapper">
            <div style="padding-right: 0;padding-left: 0;" class="col-12 grid-margin stretch-card">
                <div class="card card_wd">
                    <div class="card-body">
                        <div class="card-heading">
                            <h4 class="card-title ">News & Updates</h4>
                        </div>
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
            <div style=" padding-right: 0;padding-left: 0;" class="col-lg-12 grid-margin stretch-card">
                <div class="card card_wd">
                    <div class="card-body">
                        <div class="card-heading">
                            <h4 class="card-title ">All News & Updates</h4>
                        </div>
                        <div class="table-responsive">
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
</div>

<!-- modal -->
<aside id="example" class="modal">
    <div id="md_div">
        <div class="modal_heading">
            <h4 class="modal_title">Update News & Updates</h4>
        </div>
        <form id="modal_form_update" name="modal_form_update" class="form-inline">
            <input type="hidden" name="hide_id" id="hide_id">
            <label class="form_label" for="label_1_up">Label1</label>
            <input type="text" class="form-control mb-2 mr-sm-2" id="label_1_up" name="label_1_up" placeholder="Label 1" data-toggle="tooltip" data-placement="top" title="Label 1">
            <label class="form_label" for="Branch_name"> Upload File</label>
            <input type="file" class="form-control" id="image_up" name="image_up[]" data-toggle="tooltip" data-placement="top" title="tab4"/>
            <button type="button" class="btn btn-primary mb-2" onclick="upd_news_updates();">Update</button>
        </form>
        <a href="#close" title="Close" >Close</a>
    </div>
</aside>
<script>
    $('document').ready(function() {
        // $('[data-toggle="tooltip"]').tooltip();
        get_news_updates_details();
    });
</script>
<script>
    $('#md_close').click(function() {
        $('#modal-container').addClass('out');
        $('body').removeClass('modal-active');
        loginContent('news_updates');
    });
</script>
<!-- jquery -->