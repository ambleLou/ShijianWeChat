<?php
include_once 'sms/TopSdk.php';
$phone =$_GET['Phone'];
$rand = $_GET['rand'];
$appkey = "23285038";
$secret = "a1260c390b287399b8e5c52142d17583";

//判断此openid是否已经注册

$c = new TopClient;
$c->appkey = $appkey;
$c->secretKey = $secret;

$req = new AlibabaAliqinFcSmsNumSendRequest;

$req->setSmsType("normal");
$req->setSmsFreeSignName("注册验证");
$req->setSmsParam("{'code':'".$rand."','product':'实兼'}");
$req->setRecNum($phone);
$req->setSmsTemplateCode("SMS_3525121");
$resp = $c->execute($req);
$ans=json_encode($resp);
echo $ans;
?>
