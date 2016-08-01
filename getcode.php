<?php

$appid = "wxae2c0b15771d8e36";
//      $redirect_uri="http%3A%2F%2F117.78.33.60%2Ftest_oauth_callback.php";
$redirect_uri="http%3A%2F%2F117.78.33.60%2Fliyuqi%2Findex.php";
$url = 'https://open.weixin.qq.com/connect/oauth2/authorize?appid='.$appid.'&redirect_uri='.$redirect_uri.'&response_type=code&scope=snsapi_base&state=123#wechat_redirect';

header("Location:".$url);

?>
