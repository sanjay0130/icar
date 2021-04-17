<?php
include('../../common/database.mysqli.php');
$con_obj = new common();
$actions = $con_obj->escapeString($_REQUEST['action']);
/***********************************************************************************************
    Name-Mrutunjay Pani
    Date-16/04/2021
    Details-The below function is for Add team.
 ***********************************************************************************************/
if ($actions == 'create_team') {
// print_r($_FILES);exit();
    $name = $con_obj->escapeString($_POST['name']);
    $designation = $con_obj->escapeString($_POST['designation']);
    $photo = $_FILES['image']['name'];
    $imagee = $_FILES['image']['tmp_name'];
    $image = "../../../uploads/" . basename($photo);
    move_uploaded_file($imagee,$image);
    

    $insert_res = $con_obj->insert('team', array('team_member_name' => $name,'member_designation' => $designation ,'member_photo' =>$photo));
    // echo $con_obj->getSql();
    $con_obj->closeConnection();
    echo $insert_res;
}

/***********************************************************************************************
    Name-Mrutunjay Pani
    Date-16/04/2021
    Details-The below function is for view team.
 ***********************************************************************************************/
if ($actions == 'get_team_info') {
    session_start();
    $fetch_res = $con_obj->select('team', '*', NULL, NULL,NULL);
    // $res = $con_obj->getSql();
    $res = $con_obj->numRows();
    if ($res > 0) {
        $res = $con_obj->getResult();
    } else {
        $res = 0;
    }

    echo json_encode($res);
}
/***********************************************************************************************
    Name-Mrutunjay Pani
    Date-16/04/2021
    Details-The below function is for Status change team.
 ***********************************************************************************************/
if ($actions == 'change_status') 
{
    $id = $_POST['id'];
    $status=$_POST['status'];
    // echo($id);
    // echo($status);exit;
    if($status==1)
    {
        $status=0;
    }
    else
    {
        $status=1;
    }    
    // echo($id);
    // echo($status); exit;
    $update_res = $con_obj->update('team', array('status' => $status), "id='$id'");
    $con_obj->closeConnection();
    echo $update_res;
}

/***********************************************************************************************
    Name-Mrutunjay Pani
    Date-16/04/2021
    Details-The below function is for Delete team.
 ***********************************************************************************************/
if ($actions == 'delete_team') {
    $del_id = $_POST['id'];
    
    $delete_res = $con_obj->delete("team", "id='$del_id'");
    $con_obj->closeConnection();
    echo $delete_res;
}
/***********************************************************************************************
    Name-Mrutunjay Pani
    Date-16/04/2021
    Details-The below function is for Update team.
 ***********************************************************************************************/
if ($actions == 'upd_team') {
    
    $name_up = $con_obj->escapeString($_POST['name_up']);
    $designation_up = $con_obj->escapeString($_POST['designation_up']);
    $image = $_FILES['image_up']['name'];
    $imagee = $_FILES['image_up']['tmp_name'];
    $image_up = "../../../uploads/" . basename($image);
    move_uploaded_file($imagee,$image_up);
    $update_id = $con_obj->escapeString($_POST['id']);

    $insert_res = $con_obj->update('team', array('team_member_name' => $name_up,'member_designation' => $designation_up ,'member_photo' =>$image),"id='$update_id'");

    $con_obj->closeConnection();
    echo $insert_res;
}

// /***********************************************************************************************
//     Name-Mrutunjay Pani
//     Date-16/04/2021
//     Details-The below function is for Add brand.
//  ***********************************************************************************************/
// if ($actions == 'DOWNLOAD_EXCEL')
// {
//     require_once("../../Classes/PHPExcel.php");
//     $objPHPExcel = new PHPExcel(); // Create new PHPExcel object
//     $objPHPExcel->getActiveSheet()->setTitle('Student Session Assign');//EXCEL SHEET NAME
//     $objPHPExcel->getActiveSheet()->getStyle('A1:D1')->getFont()->setBold(true)->setSize(13)->getColor()->applyFromArray(array("rgb" =>'BLACK'));   
//     $F=$objPHPExcel->getActiveSheet();
//     $excel_row=1;
//     $id=$_REQUEST['id'];
//     $id=explode(",",$id);
//     $str1='';
//     foreach($id as $row1)
//     {
//         $str1 = $str1."'".$row1."',";
//     }
//     $create=rtrim($str1,",");
//     $F->setCellValue('A1',"SL ");
//     $F->setCellValue('B1',"Brand Name");
//     $F->setCellValue('C1',"Description");
//     $F->setCellValue('D1',"Image");

//     // $F->getStyle('A1:AB1')->getFont()->setBold(true)->setSize(14)->getColor()->applyFromArray(array("rgb" =>'cc3300'));
//     $query="SELECT * FROM brand ";
//     if($create !="''")  
//     {
//        $query.=" where id IN($create) ";
//     }
//     $res = $con_obj ->get_query($query);
//      $Line = 2;
//      $sl_no=1;
//      foreach ($res as $row) 
//      {
//          $F->setCellValue('A'.$Line,$sl_no)
//             ->setCellValue('B'.$Line,$row['brand'])
//             ->setCellValue('C'.$Line,$row['description'])
//             ->setCellValue('D'.$Line,$row['image']);
            
//         $Line++;
//         $sl_no++;
//      }

//     // $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
//     // ob_end_clean();
//     // // We'll be outputting an excel file
//     // header('Content-type: application/vnd.ms-excel');
//     // header('Content-Disposition: attachment; filename="employee.xlsx"');
//     // $objWriter->save('php://output');
//      header('Content-Encoding: UTF-8');
//     // Redirect output to a client’s web browser (Excel5)
//     header('Content-Type: application/vnd.ms-excel');
//     header('Content-Disposition: attachment;filename="Brand.xls"');//EXCEL FILE NAME
//     header('Cache-Control: max-age=0');
//     $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
//     $objWriter->save('php://output');
//     exit;   

// }   
// elseif ($actions == 'DOWNLOAD_PDF')
// {
    
//     include('../../mpdf60/mpdf.php');
//     $id=$_REQUEST['id'];
//     $id=explode(",",$id);
//     $str1='';
//     foreach($id as $row1)
//     {
//         $str1 = $str1."'".$row1."',";
//     }
//     $create=rtrim($str1,",");
    
//      $query="SELECT * FROM brand ";
//     if($create !="''")  
//     {
//        $query.=" where id IN($create) ";
//     }
//     $res = $con_obj ->get_query($query);
//     // $fetch_res = $con_obj->select('user', '*', NULL, "1", NULL);
//     // $res = $con_obj->getResult();
//     $html='<table border="1" style= "border-collapse: collapse;">
//             <thead>
//                 <tr>
//                     <th>Serial No</th>
//                     <th>Brand Name</th>
//                     <th>Description</th>
//                     <th>Image</th>

//                 </tr>
//             </thead>
//  <tbody>';
//     foreach ($res as $row)
//     {
//         $html.= "<tr>";
//         $html.= "<td>".$row['id']."</td>";
//         $html.= "<td>".$row['brand']."</td>";
//         $html.= "<td>".$row['description']."</td>";
//         $html.= "<td>".$row['image']."</td>";
//         $html.= "<td>".$row['cust_mob']."</td></tr>";  
//     }   
//     $html.='</tbody> </table>';  
//     $mpdf = new mPDF('c','A4', 0, 'Arial', 10, 10, 10, 10, 0, 0, 'P');
//     $mpdf->WriteHTML($html);
//     ob_clean();
//     $mpdf->Output("Brand Info.pdf","I");  exit;

// }
