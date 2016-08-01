<?php 
session_start();
if($_SESSION['MyUserID']!=""){
    include_once 'config.php';
    include_once 'system/tb_UserDetail.php';
    $tbuserdetail=new tb_UserDetail();
    $UserID=$_SESSION['MyUserID'];
//$UserID=13;
    $tbuserdetail->setUserID($UserID);
    $sql=$tbuserdetail->userIDSelect();
    $rst = $admindb->ExecSQL($sql,$conn);
    echo json_encode($rst);

}



?>