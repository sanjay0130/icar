<div id="wrapper">
  <div class="main-panel">
    <div class="content-wrapper">
      <div style="padding-right: 0;padding-left: 0;" class="col-12 grid-margin stretch-card">
        <div class="card card_wd">
          <div class="card-body">
            <div class="card-heading">
              <h4 class="card-title ">Latest News</h4>
            </div>
            <form id="latest_news_form" name="latest_news_form" enctype="multipart/form-data" class="form-inline">
              <label class="form_label" for="label_1">Latest News</label>
              <input type="text" class="form-control mb-2 mr-sm-2" id="latest_news" name="latest_news" placeholder="Latest News" data-toggle="tooltip" data-placement="top" title="Latest News">
              
              <button type="button" class="btn btn-primary mb-2" onclick="create_latest_news();">Submit</button>
            </form>
          </div>
        </div>
      </div>
      <div style=" padding-right: 0;padding-left: 0;" class="col-lg-12 grid-margin stretch-card">
        <div class="card card_wd">
          <div class="card-body">
            <div class="card-heading">
              <h4 class="card-title ">All Latest News</h4>
            </div>
            <div class="table-responsive">
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
</div>
<!-- modal -->
<aside id="example" class="modal">
  <div id="md_div">
    <div class="modal_heading">
      <h4 class="modal_title">Update Latest News</h4>
    </div>
    <form id="modal_form_update" name="modal_form_update" class="form-inline">
      <input type="hidden" name="hide_id" id="hide_id">
      <label class="form_label" for="label1">Latest News</label>
      <input type="text" class="form-control mb-2 mr-sm-2" id="latest_news_up" name="latest_news_up" placeholder="Latest News">
      <button type="button" class="btn btn-primary mb-2" onclick="upd_latest_news();">Update</button>
    </form>
    <a href="#close" title="Close" >Close</a> </div>
</aside>
<script>
    $('document').ready(function() {
        // $('[data-toggle="tooltip"]').tooltip();
       get_latest_news_details();
    });
</script>
<script>
    $('#md_close').click(function() {
        $('#modal-container').addClass('out');
        $('body').removeClass('modal-active');
        loginContent('latest_news');
    });
</script>
<!-- jquery -->
