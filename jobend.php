<?php
include_once 'config.php';
include_once 'system/tb_Job.php';
$tbjob=new tb_Job();
$sql=$tbjob->JobEndSelect();
$rst = $admindb->ExecSQL($sql,$conn);
$smarty->assign("job",$rst);
