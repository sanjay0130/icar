<?php
include('../../common/database.mysqli.php');
$con_obj = new common();
$actions = $con_obj->escapeString($_REQUEST['action']);
/***********************************************************************************************
    Name-Mrutunjay Pani
    Date-16/04/2021
    Details-The below function is for Add video.
 ***********************************************************************************************/

if ($actions == 'get_about_info') {
    session_start();
    $fetch_res = $con_obj->select('about_us', '*', NULL, NULL,NULL);
    // $res = $con_obj->getSql();
    $res = $con_obj->numRows();
    if ($res > 0) {
        $res = $con_obj->getResult();
    } else {
        $res = 0;
    }

    echo json_encode($res);
}


if ($actions == 'upd_about') {
    
    $label1 = $con_obj->escapeString($_POST['label1_up']);
    $v_link = $con_obj->escapeString($_POST['v_link_up']);
    
    $update_id = $con_obj->escapeString($_POST['id']);

    $insert_res = $con_obj->update('about_us', array('title' => $label1,'aboutus' => $v_link),"id='$update_id'");

    $con_obj->closeConnection();
    echo $insert_res;
}



