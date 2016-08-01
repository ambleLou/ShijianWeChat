<?php
session_start();
include_once 'config.php';
include_once 'system/tb_Job.php';
$tbjob=new tb_Job();
$SearchTimeType=$_GET['SearchTimeType'];
$SearchName=addslashes($_GET['SearchName']);
$JobType=$_GET['JobType'];
$UserID=$_GET['UserID'];
$JobID=$_GET['JobID'];
$StatusID=$_GET['StatusID'];
$notInJobType=$_GET['notInJobType'];


$ans="";
$CurPage=$_GET['CurPage'];
$PageSize=$_GET['PageSize'];
$startCount=($CurPage-1)*$PageSize;
$CompanyID=$_GET['CompanyID'];

$sql=$tbjob->JobSelect($startCount,$PageSize,$SearchTimeType,$SearchName,$CompanyID,$JobType,$UserID,$JobID,$StatusID,$notInJobType);

$rst = $admindb->ExecSQL($sql,$conn);
$ans['Data']=$rst;
$ans['RecordCount']=$tbjob->JobSelectCount($admindb,$conn,$SearchTimeType,$SearchName,$CompanyID,$JobType,$UserID,$JobID,$StatusID,$notInJobType);
$ans['login']=true;
echo json_encode($ans);


?>