<?php
include('../admin/common/database.mysqli.php');
$con_obj = new common();
$actions = $con_obj->escapeString($_REQUEST['action']);

/***********************************************************************************************
    Name-Mrutunjay Pani
    Date-16/04/2021
    Details-The below function is for view team.
 ***********************************************************************************************/
if ($actions == 'get_team_info') {
    session_start();
    $fetch_res = $con_obj->select('team', '*', NULL,"status='1'",NULL);
    // $res = $con_obj->getSql();
    $res = $con_obj->numRows();
    if ($res > 0) {
        $res = $con_obj->getResult();
    } else {
        $res = 0;
    }

    echo json_encode($res);
}



