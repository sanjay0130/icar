<?php
include('../admin/common/database.mysqli.php');
$con_obj = new common();
$actions = $con_obj->escapeString($_POST['action']);

/***********************************************************************************************
    Name: Mrutunjay Pani
    Date-8/04/21
    Details-The below function is for Add Banner Details .
 ***********************************************************************************************/
if ($actions == 'get_news_updates_details') {
   
    $fetch_res = $con_obj->select('news_updates', '*', NULL, NULL,"id DESC","1");
    // $res = $con_obj->getSql();
    $res = $con_obj->numRows();
    if ($res > 0) {
        $res = $con_obj->getResult();
    } else {
        $res = 0;
    }

    echo json_encode($res);
}
