<?php
include('../../common/database.mysqli.php');
$con_obj = new common();
$actions = $con_obj->escapeString($_POST['action']);

//---------- Inset ---------------- 

if ($actions == 'create_achievement') {
    
    $label_1 = $con_obj->escapeString($_POST['label_1']);
    // $label_2 = $con_obj->escapeString($_POST['label_2']);
    // $label_3 = $con_obj->escapeString($_POST['label_3']);

    $insert_res = $con_obj->insert('achievements', array('label1' => $label_1 ));

    $con_obj->closeConnection();
    echo $insert_res; 
}

//  -------------- fetch --------------------
if ($actions == 'get_achievement_details') {
    session_start();
    // $sess_comp_id=$_SESSION['empid'];
    $fetch_res = $con_obj->select('achievements', '*', NULL, NULL, NULL);
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

if ($actions == 'upd_achievement') {
    $label_1 = $con_obj->escapeString($_POST['label_1_up']);
    $label_2 = $con_obj->escapeString($_POST['label_2_up']);
    $label_3 = $con_obj->escapeString($_POST['label_3_up']);
    $update_id = $con_obj->escapeString($_POST['id']);
    $insert_res = $con_obj->update('achievements', array('label1' => $label_1,'label2' => $label_2,'label3' => $label_3 ), "id='$update_id'");

    $con_obj->closeConnection();
    echo $insert_res;
}

// ------------- detete ---------------

if ($actions == 'delete_achievement') {
    $del_id = $_POST['id'];
    // $del_id='1';

    $delete_res = $con_obj->delete("achievements", "id='$del_id'");
    $con_obj->closeConnection();
    echo $delete_res;
}


