<?php
include('../../common/database.mysqli.php');
$con_obj = new common();
$actions = $con_obj->escapeString($_POST['action']);
/***********************************************************************************************
	Name: Mrutunjay Pani
	Date-8/04/21
	Details-The below function is for Add Banner Details .
 ***********************************************************************************************/

if ($actions == 'create_banner')
 {
    
    for($i=0;$i<count($_FILES["image"]["name"]);$i++)
    {
        $image = $_FILES["image"]["name"][$i]; 
        $tempname = $_FILES["image"]["tmp_name"][$i];  
        $title = $_POST['title'];  

             
        //$tempname='img.jpg'; 
        $d = new DateTime();//20201130170200295
        $image_name= $d->format("YmdHisv"); // v : Milliseconds 
        $image_path =$image_name.".jpg";
        $folder ="../../../img/banner/".$image_name.".jpg";
        $insert_res = $con_obj->insert('banner', array('title'=>$title,'image' => $image_path));
        if (move_uploaded_file($tempname, $folder)) 
        { 
            $msg = "images uploaded successfully"; 
        }else
        { 
            $msg = "Failed to upload image"; 
        }

    }  
    $con_obj->closeConnection();
    echo $insert_res;
}

// fetch query

if ($actions == 'get_banner_details') {
    // session_start();
    // $sess_comp_id=$_SESSION['empid'];
    $fetch_res = $con_obj->select('banner', '*', NULL, "1", NULL);
    // $res = $con_obj->getSql();
    $res = $con_obj->numRows();
    if ($res > 0) {
        $res = $con_obj->getResult();
    } else {
        $res = 0;
    }

    echo json_encode($res);
}

if ($actions == 'delete_banner') 
{
    $del_id = $_POST['id'];
    $image_name='';
    $fetch_res = $con_obj->select('banner', 'image', NULL, "id='$del_id'", NULL);
    $res = $con_obj->numRows();
    if ($res > 0) {
        $res = $con_obj->getResult();
    } else {
        $res = 0;
    }
    $str=$res[0]['image'];
    
    $filename ="../../../img/banner/".$str;
    if (file_exists($filename)) 
    {
       unlink($filename);
    echo 'File '.$filename.' has been deleted';
  } 
  else 
  {
    echo 'Could not delete '.$filename.', file does not exist';
  }
    // exit; 
    $delete_res = $con_obj->delete("banner", "id='$del_id'");
    $con_obj->closeConnection();
    echo $delete_res;
}