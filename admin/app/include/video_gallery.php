<?php
include('../../common/database.mysqli.php');
$con_obj = new common();
$actions = $con_obj->escapeString($_REQUEST['action']);
/***********************************************************************************************
    Name-Mrutunjay Pani
    Date-16/04/2021
    Details-The below function is for Add video.
 ***********************************************************************************************/
if ($actions == 'create_video') {
    $v_label = $con_obj->escapeString($_POST['v_label']);
    $v_link = $con_obj->escapeString($_POST['v_link']);
    
    $insert_res = $con_obj->insert('video_gallery', array('label1' => $v_label,'v_link' => $v_link));

    $con_obj->closeConnection();
    echo $insert_res;
}


if ($actions == 'get_video_info') {
    session_start();
    $fetch_res = $con_obj->select('video_gallery', '*', NULL, NULL,NULL);
    // $res = $con_obj->getSql();
    $res = $con_obj->numRows();
    if ($res > 0) {
        $res = $con_obj->getResult();
    } else {
        $res = 0;
    }

    echo json_encode($res);
}

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
    $update_res = $con_obj->update('video_gallery', array('status' => $status), "id='$id'");
    $con_obj->closeConnection();
    echo $update_res;
}


if ($actions == 'delete_video') {
    $del_id = $_POST['id'];
    
    $delete_res = $con_obj->delete("video_gallery", "id='$del_id'");
    $con_obj->closeConnection();
    echo $delete_res;
}

if ($actions == 'upd_video') {
    
    $label1 = $con_obj->escapeString($_POST['label1_up']);
    $v_link = $con_obj->escapeString($_POST['v_link_up']);
    
    $update_id = $con_obj->escapeString($_POST['id']);

    $insert_res = $con_obj->update('video_gallery', array('label1' => $label1,'v_link' => $v_link),"id='$update_id'");

    $con_obj->closeConnection();
    echo $insert_res;
}


if ($actions == 'DOWNLOAD_EXCEL')
{
    require_once("../../Classes/PHPExcel.php");
    $objPHPExcel = new PHPExcel(); // Create new PHPExcel object
    $objPHPExcel->getActiveSheet()->setTitle('Video Gallery');//EXCEL SHEET NAME
    $objPHPExcel->getActiveSheet()->getStyle('A1:D1')->getFont()->setBold(true)->setSize(13)->getColor()->applyFromArray(array("rgb" =>'BLACK'));   
    $F=$objPHPExcel->getActiveSheet();
    $excel_row=1;
    $id=$_REQUEST['id'];
    $id=explode(",",$id);
    $str1='';
    foreach($id as $row1)
    {
        $str1 = $str1."'".$row1."',";
    }
    $create=rtrim($str1,",");
    $F->setCellValue('A1',"SL ");
    $F->setCellValue('B1',"label1");
    $F->setCellValue('C1',"v_link");

    // $F->getStyle('A1:AB1')->getFont()->setBold(true)->setSize(14)->getColor()->applyFromArray(array("rgb" =>'cc3300'));
    $query="SELECT * FROM video_gallery ";
    if($create !="''")  
    {
       $query.=" where id IN($create) ";
    }
    $res = $con_obj ->get_query($query);
     $Line = 2;
     $sl_no=1;
     foreach ($res as $row) 
     {
         $F->setCellValue('A'.$Line,$sl_no)
            ->setCellValue('B'.$Line,$row['label1'])
            ->setCellValue('C'.$Line,$row['v_link']);
            
        $Line++;
        $sl_no++;
     }

    // $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    // ob_end_clean();
    // // We'll be outputting an excel file
    // header('Content-type: application/vnd.ms-excel');
    // header('Content-Disposition: attachment; filename="employee.xlsx"');
    // $objWriter->save('php://output');
     header('Content-Encoding: UTF-8');
    // Redirect output to a client’s web browser (Excel5)
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="video_gallery.xls"');//EXCEL FILE NAME
    header('Cache-Control: max-age=0');
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
    $objWriter->save('php://output');
    exit;   

}   
elseif ($actions == 'DOWNLOAD_PDF')
{
    
    include('../../mpdf60/mpdf.php');
    $id=$_REQUEST['id'];
    $id=explode(",",$id);
    $str1='';
    foreach($id as $row1)
    {
        $str1 = $str1."'".$row1."',";
    }
    $create=rtrim($str1,",");
    
     $query="SELECT * FROM video_gallery ";
    if($create !="''")  
    {
       $query.=" where id IN($create) ";
    }
    $res = $con_obj ->get_query($query);
    // $fetch_res = $con_obj->select('user', '*', NULL, "1", NULL);
    // $res = $con_obj->getResult();
    $html='<table border="1" style= "border-collapse: collapse;">
            <thead>
                <tr>
                    <th>Serial No</th>
                    <th>label1</th>
                    <th>Link</th>

                </tr>
            </thead>
 <tbody>';
    foreach ($res as $row)
    {
        $html.= "<tr>";
        $html.= "<td>".$row['id']."</td>";
        $html.= "<td>".$row['label1']."</td>";
        $html.= "<td>".$row['v_link']."</td></tr>";  
    }   
    $html.='</tbody> </table>';  
    $mpdf = new mPDF('c','A4', 0, 'Arial', 10, 10, 10, 10, 0, 0, 'P');
    $mpdf->WriteHTML($html);
    ob_clean();
    $mpdf->Output("Video Gallery Info.pdf","I");  exit;

}
