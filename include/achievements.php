<?php
include('../admin/common/database.mysqli.php');
$con_obj = new common();
$actions = $con_obj->escapeString($_POST['action']);

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




