<?php
session_start();
include_once 'config.php';
include_once 'system/tb_Apply.php';

$tbapply=new tb_Apply();
$JobID=$_GET['JobID'];                          //给工作的id
$UserID=$_GET['UserID'];                        //给用户的id

$ans="";

$ans['StatusID_0']=$tbapply->userApplyCount($admindb, $conn,$JobID,$UserID,0);         //表示报名的 一般不用  这个是做预备的
$ans['StatusID_1']=$tbapply->userApplyCount($admindb, $conn,$JobID,$UserID,1);      //表示被录用的
$ans['StatusID_2']=$tbapply->userApplyCount($admindb, $conn,$JobID,$UserID,2);        //表示爽约的
$ans['StatusID_3']=$tbapply->userApplyCount($admindb, $conn,$JobID,$UserID,3);      //表示完成的

echo json_encode($ans);                     //返回的时候通过 data['StatusID_1'] 这样读取


