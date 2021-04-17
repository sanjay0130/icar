<?php
include('../admin/common/database.mysqli.php');
$con_obj = new common();
$actions = $con_obj->escapeString($_POST['action']);
/***********************************************************************************************
	Name: Mrutunjay Pani
	Date-8/04/21
	Details-The below function is for get Banner Details .
 ***********************************************************************************************/

	if ($actions == 'create_contact') {
// print_r($_FILES);exit();
    $name = $con_obj->escapeString($_POST['name']);
    $email = $con_obj->escapeString($_POST['email']);
    $mobile = $con_obj->escapeString($_POST['mobile']);
    $message = $con_obj->escapeString($_POST['message']);
    

    $insert_res = $con_obj->insert('contact_us', array('name' => $name,'emailid' => $email ,'mobile' =>$mobile,'message' =>$message));
    // echo $con_obj->getSql();
    $con_obj->closeConnection();
    echo $insert_res;
}