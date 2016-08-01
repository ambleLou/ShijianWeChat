<?php
/**
 * Created by PhpStorm.
 * User: lee123jay
 * Date: 2015-12-10
 * Time: 2:34
 */
session_start();
include_once 'config.php';
include_once 'system/tb_Apply.php';
include_once 'system/tb_UserDetail.php';
include_once 'system/tb_Job.php';
$ans='';
$UserID=$_GET['UserID'];
//$UserID=13;
$ApplyType=$_GET['ApplyType'];
$JobID=$_GET['JobID'];
$tbapply=new tb_Apply();
$tbapply->setUserID($UserID);
$tbapply->setJobID($JobID);
$CreateTime=date("Y-m-d H:i:s");
$tbapply->setCreateTime($CreateTime);

if(''!=$UserID) {
    $tbuserdetail = new tb_UserDetail();
    $tbuserdetail->setUserID($UserID);
    $sql = $tbuserdetail->userIDSelect();
    $rst = $admindb->ExecSQL($sql, $conn);
    $ReturnTime='true';
    if ($rst == false) {
        $ans['login'] = false;
    } else {
        $Sex = $rst[0]['Sex'];
        $sql = $tbapply->applySelect();
        $rst = $admindb->ExecSQL($sql, $conn);
        if (5 == $ApplyType) {         //查询状态

        } else if (0 == $ApplyType) {      //报名
            if (false == $rst) {
                $tbjob = new tb_Job();
                $tbjob->setID($JobID);
                $sql = $tbjob->JobSelectByID();
                $rst = $admindb->ExecSQL($sql, $conn);
                if ($rst != false) {
                    $AvailQty = $rst[0]['AvailQty'];
                    $NeedQty = $rst[0]['NeedQty'];
                    $NeedSex = $rst[0]['NeedSex'];
                    $TimeFrom = $rst[0]['TimeFrom'];
                    $TimeTo = $rst[0]['TimeTo'];
                    $JobTypeID=$rst[0]['JobTypeID'];
                }
                $ans['ApplyNumber']='false';
                if ($rst != false && $NeedQty > $AvailQty) {
                    $ans['ApplyNumber']='true';
                    if ('2' != $NeedSex && $NeedSex != $Sex) {
                        $ans['Sex']='false';
                        $ReturnTime = 'true';
                    } else{
                        $ans['Sex']='true';
                        $rst = $tbapply->userApplySearch($admindb, $conn, '', $UserID, 1);
                        $flag = 'true';
                        if(9!=$JobTypeID){                                          //如果不为试玩就要进行时间验证
                            for ($temp = 0; $temp < count($rst, 2); $temp++) {
                                if(9==$rst[$temp]['JobTypeID']){                         //如果为试玩就不用进行时间判断
                                    continue;
                                }
                                if ($rst[$temp]['TimeFrom'] == $TimeFrom || $rst[$temp]['TimeFrom'] == $TimeTo) {
                                    $flag = 'false';
                                    break;
                                }
                                if ($rst[$temp]['TimeFrom'] < $TimeFrom) {
                                    if ($rst[$temp]['TimeTo'] < $TimeFrom) {
                                        continue;
                                    } else {
                                        $flag = 'false';
                                        break;
                                    }
                                } else {
                                    if ($rst[$temp]['TimeFrom'] > $TimeTo) {
                                        continue;
                                    } else {
                                        $flag = 'false';
                                        break;
                                    }
                                }
                            }
                        }

                        if ('true' == $flag) {
                            $ReturnTime = 'true';
                            $tbapply->userApplyInsert($admindb, $conn);
                        } else {
                            $ReturnTime = 'false';
                        }
                    }
                }
            }
        } else if (1 == $ApplyType) {      //取消报名
            if ('0' == $rst['0']['StatusID']) {
                $rst = $tbapply->applyDelete($admindb, $conn);
            }
        } else if (2 == $ApplyType) {  //爽约
            if ('1' == $rst['0']['StatusID']) {
                //$tempTime = date('Y-m-d H:i:s', time() + 3600 * 24);
                $TimeFrom = $rst[0]['TimeFrom'];
                if ($tempTime < $TimeFrom) {                   //判断时间
                    $rst = $tbapply->deteleApplyUpdate($admindb, $conn);
                    $ReturnTime = 'true';
                } else {
                    $ReturnTime = 'false';
                }


            }
        }
        $ans['login'] = true;
        $ans['ReturnTime']=$ReturnTime;
        $sql = $tbapply->applySelect();
        $rst = $admindb->ExecSQL($sql, $conn);
        if (false == $rst) {
            $ans['StatusID'] = "false";
        } else {
            $ans['StatusID'] = $rst['0']['StatusID'];
            if(3==$ans['StatusID']){                            //判断用户能否进行评价
                if(''==$rst['0']['AssessToType']){
                    $ans['AssessTo']='fales';
                }else{
                    $ans['AssessTo']='true';
                }
            }
        }
    }
}else{
    $ans['login']=false;
}

echo json_encode($ans);