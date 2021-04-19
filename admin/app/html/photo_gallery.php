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
                                                    <h5 style="color:#D35400;">Photo Gallery Info</h5>
                                                    <div class="card-body">
                                                        <form id="photo_gallery_name_form" name="photo_gallery_name_form" enctype="multipart/form-data" class="form-inline">
                                                            <label class="form_label" for="Branch_name"> Upload File</label>
                                                            <input type="file" class="form-control" id="image" name="image[]" data-toggle="tooltip" data-placement="top" title="tab4" multiple/>

                                                            <button type="button" class="btn btn-primary mb-2" onclick="create_photo_gallery();">Submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h5 style="color:#fff;background:#5DADE2 ;padding:8px;">All Photos
                            </h5>
                            <div class="table-responsive striped m-t-40">
                                <table class="table table-striped" id="myTable">
                                    <thead>
                                    <tr>
                                        <th>
                                            Sl
                                        </th>
                                        <th>
                                            Photo
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
</div>

<script>
    $('document').ready(function() {
        // $('[data-toggle="tooltip"]').tooltip();
        get_photo_gallery_details();
    });
</script>
