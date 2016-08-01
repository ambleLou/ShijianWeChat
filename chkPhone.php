<?php
include_once "config.php";
include_once 'system/tb_User.php';
$reback = '0';
$Phone=$_GET['Phone'];
$tbuser=new tb_User();
$tbuser->setPhone($Phone);
$sql=$tbuser->registerSelect();
$rst = $admindb->ExecSQL($sql,$conn);
$ans='';
if($rst==false){
    $ans['reback']='true';
}else{
    $ans['reback']='false';
}

echo json_encode($ans);


?>
	
