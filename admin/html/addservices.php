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
                                <b>Add Services</b></div>
                        </div>
                        <div class="panel-body">
                            <form id="vehicle_entry_form" name="vehicle_entry_form" enctype="multipart/form-data">
                                <div class="inner-form">
                                    <div class="advance-search">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="input-field">
                                                    <div class="input-select">
                                                        <div class="choices__inner  col-md-6">
                                                            <label>Customer Name</label>
                                                            <select class=" form-control report-sel" id="customerName" name="customerName" onchange="get_vehicle_no();">
                                                                <!-- <option value="ashutos">Ashutos</option>
                                                                <option value="binayak">Binayak</option> -->
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 latest-job ">
                                                <div class="input-field">
                                                    <div class="input-select">
                                                        <div class="choices__inner  col-md-6">
                                                            <label>Vehicle No</label>
                                                            <select class=" form-control report-sel" id="vehicleno" name="vehicleno">
                                                                <!-- <option value="twoWheeler">OD-05-1234</option>
                                                                <option value="fourWheeler">OD-06-7865</option> -->
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <!-- <div class="panel-footer">
                                            <button type="button" class="btn btn-sm add-cat" onclick="create_vehicle_entry();">CREATE</button>
                                        </div> -->
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="row">
                        <div style="border-color: transparent;" class="panel panel-default col-md-6">
                            <div class="panel-heading">Customer Details</div>
                            <div class="panel-body">
                                <form style="padding-left: 4px;padding-right: 4px;">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="hidden" name="hide_id" id="hide_id">
                                                <label> Name</label>
                                                <input type="text" class="form-control" name="uname" id="uname" data-toggle="tooltip" data-placement="top" title="Name to be Display">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control" name="email" id="email" data-toggle="tooltip" data-placement="top" title="Email">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Mobile</label>
                                                <input type="text" class="form-control" name="mobile" id="mobile" data-toggle="tooltip" data-placement="top" title="Mobile">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" name="address" id="address" data-toggle="tooltip" data-placement="top" title="Address">
                                            </div>
                                        </div>
                                    </div>


                                </form>

                                <!-- <table id='myTable' class='table table-striped'>
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Address</th> -->
                                <!-- <th class="action">Delete</th>
                                        <th class="action">Edit</th> -->

                                <!-- 

                                        </tr>
                                    </thead>
                                    <tbody id="show_data">

                                    </tbody>
                                </table> -->
                            </div>
                        </div>

                        <div style="border-color: transparent;" class="panel panel-default col-md-6">
                            <div class="panel-heading">Vehicle Details</div>
                            <div class="panel-body">

                                <form style="padding-left: 4px;padding-right: 4px;">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Vehicle Name</label>
                                                <input type="text" class="form-control" name="vname_up" id="vname_up" data-toggle="tooltip" data-placement="top" title="Vehicle Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Vehicle Type</label>
                                                <input type="text" class="form-control" name="vtype_up" id="vtype_up" data-toggle="tooltip" data-placement="top" title="Vehicle Type">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Vehicle No</label>
                                                <input type="text" class="form-control" name="vno_up" id="vno_up" data-toggle="tooltip" data-placement="top" title="Vehicle No">
                                            </div>
                                        </div>

                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div style="border-color: transparent;" class="panel panel-default col-md-6">
                            <div class="panel-heading">Add Service</div>
                            <div class="panel-body">
                                <form id="add_service_form" name="add_service_form" enctype="multipart/form-data">    
                                    <table id='servicesTypeTable' class='table table-striped'>
                                        <tbody id="show_data">
                                            <tr>
                                                <td>
                                                    <select class="form-control report-sel" id="serviceName" name="serviceName"onchange="get_service_price_detail()">
                                                    </select>
                                                </td>
                                                <td>
                                                    <label class="form-control report-sel" id="price" name="price">
                                                    </label>
                                                </td>
                                                <td>
                                                    <button type="button" onclick="create_service_array()">Add</button>
                                                </td>

                                            </tr>     
                                        </tbody>
                                    </table>
                                </form>    
                            </div>
                        </div>
                        <div style="border-color: transparent;" class="panel panel-default col-md-6">
                            <div class="panel-heading">Service Details</div>
                            <div class="panel-body">

                                <table id='servicesTable' class='table table-striped'>
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Name</th>
                                            <th>price</th>
                                            <th>Action</th>
                                            <!-- <th class="action">Total</th> -->
                                            <!-- <th class="action">Edit</th> -->
                                        </tr>
                                    </thead>

                                    <tbody id="show_data">
                                        <tr>
                                        </tr>    
                                    </tbody>


                                </table>
                            </div>
                            <div class=" posn">
                                <div class="bills">
                                    <div>
                                        <label class="labels" for="">Sub Total</label><input class="bill" type="text" readonly id="subTotal">
                                    </div>
                                    <div>
                                        <label class="labels" for="">Discount</label><input class="bill" type="text" onkeyup="calculateNet();"  id="discount">
                                    </div>
                                    <div>
                                        <label class="labels" for=""> Total</label><input class="bill" type="text" readonly id="net">
                                    </div>

                                    <br>
                                    <br>

                                    <button type="button" onclick="create_services()">Submit</button>

                                </div>
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
    get_service_names();
    get_customer_names();
  });
</script>