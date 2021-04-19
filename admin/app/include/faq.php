<?php
include('../../common/database.mysqli.php');
$con_obj = new common();
$actions = $con_obj->escapeString($_POST['action']);

//---------- Inset ---------------- 

if ($actions == 'create_faq') {
    
    $label_1 = $con_obj->escapeString($_POST['label_1']);
    $desc = $con_obj->escapeString($_POST['desc']);
    // $label_2 = $con_obj->escapeString($_POST['label_2']);
    // $label_3 = $con_obj->escapeString($_POST['label_3']);

    $insert_res = $con_obj->insert('faq', array('title' => $label_1,'description' => $desc ));

    $con_obj->closeConnection();
    echo $insert_res; 
}

//  -------------- fetch --------------------
if ($actions == 'get_faq_details') {
    session_start();
    // $sess_comp_id=$_SESSION['empid'];
    $fetch_res = $con_obj->select('faq', '*', NULL, NULL, NULL);
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

if ($actions == 'upd_faq') {
    $label_1 = $con_obj->escapeString($_POST['label_1_up']);
    $desc = $con_obj->escapeString($_POST['desc_up']);
    $update_id = $con_obj->escapeString($_POST['id']);
    $insert_res = $con_obj->update('faq', array('title' => $label_1,'description' => $desc ), "id='$update_id'");

    $con_obj->closeConnection();
    echo $insert_res;
}

// ------------- detete ---------------

if ($actions == 'delete_faq') {
    $del_id = $_POST['id'];
    // $del_id='1';

    $delete_res = $con_obj->delete("faq", "id='$del_id'");
    $con_obj->closeConnection();
    echo $delete_res;
}


