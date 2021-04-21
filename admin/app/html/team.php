<div id="wrapper">
    <div class="main-panel">
        <div class="content-wrapper">
            <div style="padding-right: 0;padding-left: 0;" class="col-12 grid-margin stretch-card">
                <div class="card card_wd">
                    <div class="card-body">
                        <div class="card-heading">
                            <h4 class="card-title ">Team</h4>
                        </div>
                        <form id="team_member" name="team" enctype="multipart/form-data" class="form-inline">
                            <label class="form_label" for="label_1">Member Name</label>
                            <input type="text" class="form-control mb-2 mr-sm-2" id="member_name" name="member_name" placeholder="Member Name" data-toggle="tooltip" data-placement="top" title="Member Name">

                            <label class="form_label" for="label_1">Designation</label>
                            <input type="text" class="form-control mb-2 mr-sm-2" id="designation" name="designation" placeholder="Designation" data-toggle="tooltip" data-placement="top" title="Designation">

                            <label class="form_label" for="label_1">Photo</label>
                            <input type="file" class="form-control mb-2 mr-sm-2" id="photo" name="photo" placeholder="Photo" data-toggle="tooltip" data-placement="top" title="Photo">
                            <label class="form_label" for="mobile_no">Mobile No</label>
                            <input type="text" class="form-control mb-2 mr-sm-2" id="mobile_no" name="mobile_no" placeholder="Mobile No" data-toggle="tooltip" data-placement="top" title="Mobile No">
                            <label class="form_label" for="email_id">Email</label>
                            <input type="text" class="form-control mb-2 mr-sm-2" id="email_id" name="email_id" placeholder="Email Id" data-toggle="tooltip" data-placement="top" title="Email Id">

                            <button type="button" class="btn btn-primary mb-2" onclick="create_achievement();">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <div style=" padding-right: 0;padding-left: 0;" class="col-lg-12 grid-margin stretch-card">
                <div class="card card_wd">
                    <div class="card-body">
                        <div class="card-heading">
                            <h4 class="card-title ">All Team Member</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped" id="myTable">
                                <thead>
                                    <tr>
                                        <th>
                                            Sl. No.
                                        </th>
                                        <th>
                                            Member Name
                                        </th>
                                        <th>
                                            Designation
                                        </th>
                                        
                                        <th>Email</th>
                                        <th>Mobile</th>
                                       <th>
                                            Photo
                                        </th>
                                        <th>
                                            Edit
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
            <h4 class="modal_title">Update Team Member</h4>
        </div>
        <form id="modal_form_update" name="modal_form_update" class="form-inline">
            <input type="hidden" name="hide_id" id="hide_id">
            <label class="form_label" for="label1">Label1</label>
            <input type="text" class="form-control mb-2 mr-sm-2" id="label_1_up" name="label_1_up" placeholder="Label 1">
            <!-- <label class="form_label" for="label2">Label2</label>
            <input type="text" class="form-control mb-2 mr-sm-2" id="label_2_up" name="label_2_up" placeholder="Label 2">
            <label class="form_label" for="label3">Label3</label>
            <input type="text" class="form-control mb-2 mr-sm-2" id="label_3_up" name="label_3_up" placeholder="Label 3"> -->
            <button type="button" class="btn btn-primary mb-2" onclick="upd_achievement();">Update</button>
        </form>
        <a href="#close" title="Close" >Close</a>
    </div>
</aside>
<script>
    $('document').ready(function() {
        // $('[data-toggle="tooltip"]').tooltip();
        get_achievement_details();
    });
</script>
<script>
    $('#md_close').click(function() {
        $('#modal-container').addClass('out');
        $('body').removeClass('modal-active');
        loginContent('achievements');
    });
</script>
<!-- jquery -->