<?php
/**
 * Created by PhpStorm.
 * User: 昱麒
 * Date: 2015/12/24
 * Time: 0:31
 */
session_start();
include_once 'config.php';
include_once 'system/tb_Apply.php';

if(''!=$_SESSION['MyUserID']){
    $JobID=addslashes($_POST['JobID']);
    $UserID=addslashes($_POST['UserID']);
    $AssessToType=addslashes($_POST['AssessToType']);
    $AssessTo=addslashes($_POST['AssessTo']);
    $tbapply=new tb_Apply();
    $ans['reBack']=$tbapply->applyAssessToInsert($admindb,$conn,$JobID,$UserID,$AssessToType,$AssessTo);
    echo json_encode($ans);
}


?>