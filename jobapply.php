<?php
session_start();
if($_SESSION['UserID']!=""){
    include_once 'config.php';  //调用指定的文件
    include_once 'system/tb_Apply.php';
    $UserID=$_SESSION['UserID'];
    $JobID=$_GET['JobID'];
    $CreateTime=date("Y-m-d H:i:s");
    
    $tbapply=new tb_Apply();
    $tbapply->setJobID($JobID);
    $tbapply->setUserID($UserID);
    $tbapply->setCreateTime($CreateTime);
    $rst=$tbapply->applyInsert($admindb, $conn);
    if($rst==false){
        echo "添加失败";
    }else{
        echo '<script language="JavaScript">;alert("报名成功";location.href="index.htm";</script>;';
    }
}else{
    header('location: register.php');
}
?>