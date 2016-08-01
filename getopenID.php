<?php
session_start();
$appid = "wxae2c0b15771d8e36";
$secret = "d4624c36b6795d1d99dcf0547af5443d";
$code = $_GET["code"];
//echo "<p>hello----------------------</p>";
$get_token_url = 'https://api.weixin.qq.com/sns/oauth2/access_token?appid='.$appid.'&secret='.$secret.'&code='.$code.'&grant_type=authorization_code';
function http_urlopen($url){
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_HEADER,0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
    $res = curl_exec($ch);
    return $res;
    curl_close($ch);
}
$res=http_urlopen($get_token_url);
$json_obj = json_decode($res,true);
//根据openid和access_token查询用户信息
$access_token = $json_obj['access_token'];
$openid = $json_obj['openid'];
$_SESSION['openID']=$openid;


$_SESSION['WeiID']='hahahah';

header("location: index.php");
?>