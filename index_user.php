<?php

	$appid = "wxae2c0b15771d8e36";
	$redirect_uri="http%3A%2F%2Fwww.joblife.com.cn%2Fm%2Fliyuqi%2Fmain_user.php";
	$url = 'https://open.weixin.qq.com/connect/oauth2/authorize?appid='.$appid.'&redirect_uri='.$redirect_uri.'&response_type=code&scope=snsapi_base&state=123#wechat_redirect';

	header("Location:".$url);

?>
