<?php

include_once 'config.php';
include_once 'system/tb_Job.php';
$tbjob=new tb_Job();
$JobID=$_GET['JobID'];
$tbjob->setID($JobID);
$sql=$tbjob->JobSelectByID();
$rst=$admindb->ExecSQL($sql, $conn);
echo json_encode($rst);
//echo $sql;
?>