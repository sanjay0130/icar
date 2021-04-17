<?php
session_start();
include('../../common/database.mysqli.php');
$con_obj = new common();
$enc_password = new encrypt_class();
$actions = $con_obj->escapeString($_REQUEST['action']);
/***********************************************************************************************
	Name-Jyotirmayee Khatua
	Date-06/11/2020
	Details-The below function is for Add brand.
 ***********************************************************************************************/

if ($actions == 'get_admin_details') {
    session_start();
    $fetch_res = $con_obj->select('admin', '*', NULL, NULL,NULL);
    // $res = $con_obj->getSql();
    $res = $con_obj->numRows();
    if ($res > 0) {
        $res = $con_obj->getResult();
    } else {
        $res = 0;
    }

    echo json_encode($res);
}


if ($actions == 'upd_password') 
{
    $id = $_SESSION['empid'];
    $user_name = $_SESSION['user_type'];
    $password = $con_obj->escapeString($_POST['new_password']);
    $enc_password1 = $enc_password->mrutunjay_enc($password);

    $insert_res = $con_obj->update('admin', array('password' => $enc_password1),"id_admin='$id'");

    $con_obj->closeConnection();
    echo $insert_res;
}

