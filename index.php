<?php 
session_start();
include_once 'config.php';
function https_request($url)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $data = curl_exec($curl);
    if (curl_errno($curl)) {return 'ERROR '.curl_error($curl);}
    curl_close($curl);
    return $data;
}
if($_SESSION['UserID']==""){
    include_once 'system/tb_User.php';
    $tbuser =new tb_User();
    $WeiID=$_SESSION['WeiID'];
    $tbuser->setWeiID($WeiID);
    $sql =$tbuser->weiIDSelect();
    $rst = $admindb->ExecSQL($sql,$conn);
    if($rst!=false){
       
        $_SESSION['UserID']=$rst[0]['ID'];
    }
}
/*$code = $_GET["code"];
 $userinfo = getUserInfo($code);
 //echo "var userinfo='$userinfo'";

 function getUserInfo($code)
 {
 $appid = "wxae2c0b15771d8e36";
 $appsecret = "d4624c36b6795d1d99dcf0547af5443d";

 //oauth2的方式获得openid
 $access_token_url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=$appid&secret=$appsecret&code=$code&grant_type=authorization_code";
 $access_token_json = https_request($access_token_url);
 $access_token_array = json_decode($access_token_json, true);
 $openid = $access_token_array['openid'];

 //非oauth2的方式获得全局access token
 $new_access_token_url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$appsecret";
 $new_access_token_json = https_request($new_access_token_url);
 $new_access_token_array = json_decode($new_access_token_json, true);
 $new_access_token = $new_access_token_array['access_token'];

 //全局access token获得用户基本信息
 $userinfo_url = "https://api.weixin.qq.com/cgi-bin/user/info?access_token=$new_access_token&openid=$openid";
 $userinfo_json = https_request($userinfo_url);
 $userinfo_array = json_decode($userinfo_json, true);
 return $userinfo_array;
 }
 */


$smarty->display('main_user.html');
?>

