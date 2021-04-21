<?php
include('../../common/database.mysqli.php');
$con_obj = new common();
$actions = $con_obj->escapeString($_POST['action']);

//---------- Inset ---------------- 

if ($actions == 'create_latest_news') {

    $latest_news = $con_obj->escapeString($_POST['latest_news']);
    $latest_news_desc = $con_obj->escapeString($_POST['latest_news_desc']);
   

    $insert_res = $con_obj->insert('latest_news', array('news' => $latest_news, 'description' => $latest_news_desc));

    $con_obj->closeConnection();
    echo $insert_res; 
}

//  -------------- fetch --------------------
if ($actions == 'get_latest_news_details') {
    // session_start();
    // $sess_comp_id=$_SESSION['empid'];
    $fetch_res = $con_obj->select('latest_news', '*', NULL, NULL, NULL);
    // $res = $con_obj->getSql();
    $res = $con_obj->numRows();
    if ($res > 0) {
        $res = $con_obj->getResult();
    } else {
        $res = 0;
    }

    echo json_encode($res);
}

//----------- Update --------------- 

if ($actions == 'upd_latest_news') {
    $latest_news = $con_obj->escapeString($_POST['latest_news_up']);
    $latest_news_desc_modal = $con_obj->escapeString($_POST['latest_news_desc_modal']);
    
    $update_id = $con_obj->escapeString($_POST['id']);
    $insert_res = $con_obj->update('latest_news', array('news' => $latest_news, 'description' => $latest_news_desc_modal), "id='$update_id'");

    $con_obj->closeConnection();
    echo $insert_res;
}

// ------------- detete ---------------

if ($actions == 'delete_latest_news') {
    $del_id = $_POST['id'];
    // $del_id='1';

    $delete_res = $con_obj->delete("latest_news", "id='$del_id'");
    $con_obj->closeConnection();
    echo $delete_res;
}


