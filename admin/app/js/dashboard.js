
function get_total_stock(){
    var data = {action:'get_total_stock'};
    $.ajax({
        url:"include/dashboard.php",
        type:"POST",
        data:data,
        beforeSend: function(){
            $('.loader').show();
        },
        success:function(response)
        {
            $('.loader').hide();
            var jsonobj=JSON.parse(response)
            $('#all_stock').html(jsonobj[0]['sum(quantity)']);
            // return false;
        }
    });
}

function stock_window(){
    loginContent('stock_view');
}

function get_total_purchase(){
    var data = {action:'get_total_purchase'};
    $.ajax({
        url:"include/dashboard.php",
        type:"POST",
        data:data,
        beforeSend: function(){
            $('.loader').show();
        },
        success:function(response)
        {
            $('.loader').hide();
            var jsonobj=JSON.parse(response)
            // console.log(jsonobj);
            $('#t_purchase_amnt').html("₹"+parseFloat(jsonobj[0]['sum(DISTINCT total)']).toFixed(2));
            // return false;
        }
    });
}

function purchase_window(){
    loginContent('purchase_report');
}


function get_total_sale(){
    var data = {action:'get_total_sale'};
    $.ajax({
        url:"include/dashboard.php",
        type:"POST",
        data:data,
        beforeSend: function(){
            $('.loader').show();
        },
        success:function(response)
        {
            $('.loader').hide();
            var jsonobj=JSON.parse(response)
            // console.log(jsonobj);
            $('#t_sales_amnt').html("₹"+parseFloat(jsonobj[0]['sum(DISTINCT received_amount)']).toFixed(2));
            // return false;
        }
    });
}


function get_today_sale(){
    var data = {action:'get_today_sale'};
    $.ajax({
        url:"include/dashboard.php",
        type:"POST",
        data:data,
        beforeSend: function(){
            $('.loader').show();
        },
        success:function(response)
        {
            $('.loader').hide();
            var jsonobj=JSON.parse(response)
           var amnt = jsonobj[0]['sum(DISTINCT received_amount)'];
           if(amnt == null){
               amnt =0;
           }
            // return false;
            $('#today_sales_amnt').html("₹"+parseFloat(amnt).toFixed(2));
            // return false;
        }
    });
}

function sales_window(){
    loginContent('sales_report');
}