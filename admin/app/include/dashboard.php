<?php
include('../../common/database.mysqli.php');
$con_obj = new common();
$actions = $con_obj->escapeString($_POST['action']);

if($actions== 'get_total_stock'){
    $fetchres= $con_obj->select('stock_view', 'sum(quantity)',NULL,NULL,NULL);
    $res = $con_obj->numRows();
    if($res >0){
        $res = $con_obj->getResult();
    }else{
        $es = 0;
    }
    echo json_encode($res);
}

if($actions== 'get_total_purchase'){
    $fetchres= $con_obj->select('purchase', 'sum(DISTINCT total)',NULL,NULL,NULL);
    $res = $con_obj->numRows();
    if($res >0){
        $res = $con_obj->getResult();
    }else{
        $es = 0;
    }
    echo json_encode($res);
}

if($actions== 'get_total_sale'){
    $fetchres= $con_obj->select('sales', 'sum(DISTINCT received_amount)',NULL, "status  = '1'",NULL);
     $res = $con_obj->numRows();
    if($res >0){
        $res = $con_obj->getResult();
    }else{
        $es = 0;
    }
    echo json_encode($res);
}



if($actions== 'get_today_sale'){
    $today = date("Y-m-d") ;
    $fetchres= $con_obj->select('sales', 'sum(DISTINCT received_amount)',NULL,"date = '$today' and status  = '1'",NULL);
    // $res = $con_obj->getSql();
    // echo $res;
    // exit();
    $res = $con_obj->numRows();
    if($res >0){
        $res = $con_obj->getResult();
    }else{
        $es = 0;
    }
    echo json_encode($res);
}