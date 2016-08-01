<?php
session_start();
if($_SESSION['UserID']!=""){
   include_once 'config.php';  //调用指定的文件
    include_once 'system/tb_Job.php';
    $tbjob=new tb_Job();
    $sql=$tbjob->JobNoBeginSelect();
    $rst = $admindb->ExecSQL($sql,$conn);
    $smarty->assign('job',$rst);
    $smarty->display("findjob.html");
    //$smarty->display("jobmanage.tpl");			//产品展示
}else{
    header('location: register.php');
}
?>