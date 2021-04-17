<?php

$page = $_REQUEST['page'];
@$mid = $_REQUEST['mid'];
// @$fid = $_REQUEST['fid'];
// @$data = $_REQUEST['data'];

// echo "include/adm_dashboard.php";
if ($mid != ""){
	echo "html/".$page.".php?msgid=".$mid;	
}
else{
	echo "html/".$page.".php";
}