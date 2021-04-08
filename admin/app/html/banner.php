<div id="wrapper">
    <div class="main-panel">
        <div class="content-wrapper">
            <div style="padding-right: 0;padding-left: 0;" class="col-12 grid-margin stretch-card">
                <div class="card card_wd">
                    <div class="card-body">
                        <div class="card-heading">
                            <h4 class="card-title ">Banner</h4>
                        </div>
                        <form id="banner_name_form" name="banner_name_form" enctype="multipart/form-data" class="form-inline">
                            <label class="form_label" for="Branch_name"> Upload File</label>
                            <input type="file" class="form-control" id="image" name="image[]" data-toggle="tooltip" data-placement="top" title="tab4" multiple/>

                            <button type="button" class="btn btn-primary mb-2" onclick="create_banner();">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div style=" padding-right: 0;padding-left: 0;" class="col-lg-12 grid-margin stretch-card">
                <div class="card card_wd">
                    <div class="card-body">
                        <div class="card-heading">
                            <h4 class="card-title ">All Banner</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped" id="myTable">
                                <thead>
                                    <tr>
                                        <th>
                                            Sl
                                        </th>
                                        <th>
                                            Banner
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

<script>
    $('document').ready(function() {
        // $('[data-toggle="tooltip"]').tooltip();
        get_banner_details();
    });
</script>
<script>
    $('#md_close').click(function() {
        $('#modal-container').addClass('out');
        $('body').removeClass('modal-active');
        loginContent('banner');
    });
</script>
<!-- jquery -->