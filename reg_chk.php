<?php
	session_start();
	    include_once 'config.php';
	    include_once 'system/tb_User.php';
	    $Phone = addslashes(trim($_POST['Phone']));
	    $Password = md5(addslashes(trim($_POST['Password'])));
	    $Invitation = addslashes(trim($_POST['Invitation']));
	    $WeiID = $_SESSION['OpenID'];
	    $CreateTime=date("Y-m-d H:i:s");
	if(''==$Phone||''==$Password||''==$WeiID){
		header("location: index_user.php");
	}else{
		$tbuser=new tb_User();
		$tbuser->setPhone($Phone);
		$tbuser->setWeiID($WeiID);

		$tbuser->setInvitation($Invitation);
		$tbuser->setPassword($Password);
		$tbuser->setCreateTime($CreateTime);

		$sql = $tbuser->userInsert();

		$rst = $admindb->ExecSQL($sql,$conn) or die('execute error');
		if($rst == false){
			echo '添加失败';
		}else{
			$sql=$tbuser->weiIDSelect();
			$rst = $admindb->ExecSQL($sql,$conn);
			echo json_encode($rst);
			$_SESSION['MyUserID'] = $rst[0]['ID'];
			//echo $_SESSION['UserID'];
			header("location: index_user.php");
		}
	}


?>