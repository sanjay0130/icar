<?php
include('../admin/common/database.mysqli.php');
$con_obj = new common();
$actions = $con_obj->escapeString($_POST['action']);
/***********************************************************************************************
    Name-Mrutunjay Pani
    Date-16/04/2021
    Details-The below function is for Add video.
 ***********************************************************************************************/

 if ($actions == 'get_photo_gallery_details') {
    // session_start();
    // $sess_comp_id=$_SESSION['empid'];
    $fetch_res = $con_obj->select('photo_gallery', '*', NULL, "1", NULL);
    // $res = $con_obj->getSql();
    $res = $con_obj->numRows();
    if ($res > 0) {
        $res = $con_obj->getResult();
    } else {
        $res = 0;
    }

    echo json_encode($res);
}