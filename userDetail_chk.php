<?php
	session_start();
	if($_SESSION['MyUserID']!=""){
	    include_once 'config.php';
	    include_once 'system/tb_UserDetail.php';
        $UserID=$_SESSION['MyUserID'];
        $UserName= addslashes(trim($_POST['UserName']));
        $RealName= addslashes(trim($_POST['RealName']));
        $IDCard= addslashes(trim($_POST['IDCard']));
        $QQNum= addslashes(trim($_POST['QQNum']));
        $Sex= addslashes(trim($_POST['Sex']));
        $Height= addslashes(trim($_POST['Height']));
        $Weight= addslashes(trim($_POST['Weight']));
        $School= addslashes(trim($_POST['School']));
        $Major= addslashes(trim($_POST['Major']));
        $Job=$_POST['JobType'][0];
		for($i=1;$i<count($_POST['JobType']);$i++){
			$Job.=','.$_POST['JobType'][$i];
		}
		//$Job=$_POST['Job'];
        $Introduct= addslashes(trim($_POST['Introduct']));
        $AliPay= addslashes(trim($_POST['AliPay']));
        $Health= addslashes(trim($_POST['Health']));
        //$PicName= trim($_POST['PicName']);
        $ModifyTime=date("Y-m-d H:i:s");
        
        if($Major==""){
            $Major='无';
        }
        if($School==""){
            $School='无';
        }
	    $tbuserDetail=new tb_UserDetail();
	    $tbuserDetail->setAliPay($AliPay);
	    $tbuserDetail->setCreateTime($ModifyTime);
	    $tbuserDetail->setHealth($Health);
	    $tbuserDetail->setHeight($Height);
	    $tbuserDetail->setIDCard($IDCard);
	    $tbuserDetail->setIntroduct($Introduct);
	    $tbuserDetail->setJob($Job);
	    $tbuserDetail->setMajor($Major);
	    $tbuserDetail->setModifyTime($ModifyTime);
	    $tbuserDetail->setPicName($PicName);
	    $tbuserDetail->setQQNum($QQNum);
	    $tbuserDetail->setRealName($RealName);
	    $tbuserDetail->setSchool($School);
	    $tbuserDetail->setSex($Sex);
	    $tbuserDetail->setUserID($UserID);
	    $tbuserDetail->setUserName($UserName);
	    $tbuserDetail->setWeight($Weight);
	    
	    $sql=$tbuserDetail->userIDSelect();
	    //echo $sql;
	    $rst1 = $admindb->ExecSQL($sql,$conn);
	    if($rst1==false){
	        $sql = $tbuserDetail->userDetailInsert();
	        //echo $sql;
	        $rst = $admindb->ExecSQL($sql,$conn) or die('execute error');
	    }else{
	        $sql=$tbuserDetail->userDetailUpdate();
	        //echo $sql;
	        $rst = $admindb->ExecSQL($sql,$conn) or die('execute error');
			//echo json_encode($rst);
	    } 
	    if($rst == false){
	        echo '<script>alert(\'添加失败\');history.back;</script>';
	    }else{
	        
	        header("location: main_user.php");
	    }
	}else{
	    header("location:main_user.php");
	}
?>