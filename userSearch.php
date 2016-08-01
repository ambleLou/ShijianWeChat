<?php
session_start();
include_once 'config.php';
include_once 'system/tb_UserDetail.php';
$UserID=$_GET['UserID'];
$tbuserdetail=new tb_UserDetail();
$tbuserdetail->setUserID($UserID);
$sql=$tbuserdetail->userIDSelect();
$rst= $admindb->ExecSQL($sql,$conn);
echo json_encode($rst);