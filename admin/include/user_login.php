<?php
include('../common/database.mysqli.php');

$con_obj = new common();
$actions = $_POST['action'];


if ($actions == 'admin_login') {
//print_r($_REQUEST);
$username = $con_obj->escapeString($_POST['username']);
$password = $con_obj->escapeString($_POST['password']);
if ($username && $password != '') {
$fetch_res = $con_obj->select('admin', '*', NULL, "username='$username'", NULL);
$no_rows = $con_obj->numResults;

$res = $con_obj->getResult();
// print_r($res);


if ($no_rows == 1) {
if($con_obj->mrutunjay_dec($res[0]['password'])===$password)
{
session_start();
$_SESSION['staff_username'] = $res[0]['username'];
$_SESSION['empid'] = $res[0]['id_admin'];
$_SESSION['user_type'] = 'admin';
//$_SESSION['empid']=$adm_data['employee_id'];
$cur_date = date('d-m-Y');
$cur_time = date('h:i A');
file_write($res[0]['id_admin'],$cur_date,$cur_time);
echo 'admin';
}
else{
echo "fail";
}

} else {
echo "fail";
}
}
// else
// {
// echo "ha ha ha. Smart";
// }
} else if ($actions == 'session_out') {

//managing the seesion onlogout
session_start();

unset($_SESSION['staff_username']);
unset($_SESSION['user_type']);
$cur_date = date('d-m-Y');
$cur_time = date('h:i A');
file_write1($_SESSION['empid'],$cur_date,$cur_time);
session_destroy();

echo 'loged_out';
}
//Below part is to check the session is on or not
else if ($actions == 'check_session') {
session_start();
echo $_SESSION['user_type'];
}





function file_write($empid, $cur_date, $cur_time)
{
$my_file = '../log.txt';
$handle = fopen($my_file, 'a') or die('Cannot open file:  ' . $my_file);
$new_data = "\n" . 'Date: ' . $cur_date . ' Time: ' . $cur_time . ' Employee Id: ' . $empid . ' Logged In To The System';
fwrite($handle, $new_data);
// fclose($my_file);
}

function file_write1($empid, $cur_date, $cur_time)
{
$my_file = '../log.txt';
$handle = fopen($my_file, 'a') or die('Cannot open file:  ' . $my_file);
$new_data = "\n" . 'Date: ' . $cur_date . ' Time: ' . $cur_time . ' Employee Id: ' . $empid . ' Logged Out From The System';
fwrite($handle, $new_data);
// fclose($my_file);
}