<?php
session_start();
include_once 'config.php';
include_once 'system/tb_User.php';
$code = $_GET["code"];

$WeiID=getopenId($code);
$_SESSION['OpenID']=$WeiID;
$userinfo = getUserInfo($WeiID);

$tbuser =new tb_User();
$hasRegister=false;

/*if($_SESSION['UserID']==""){

    $tbuser->setWeiID($WeiID);
    $sql =$tbuser->weiIDSelect();
    $rst = $admindb->ExecSQL($sql,$conn);
    if($rst==false){
        $hasRegister= true;
    }else{
        $_SESSION['UserID']=$rst[0]['ID'];
        echo $_SESSION['UserID'];
        $hasRegister=false;
    }

}else{

    $hasRegister=false;

}*/


function getopenId($code){
    return "hahah";


}

function getUserInfo($openid)
{

    /*$appid = "wxae2c0b15771d8e36";
    $appsecret = "d4624c36b6795d1d99dcf0547af5443d";

    //非oauth2的方式获得全局access token
    $new_access_token_url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$appsecret";
    $new_access_token_json = https_request($new_access_token_url);
    $new_access_token_array = json_decode($new_access_token_json, true);
    $new_access_token = $new_access_token_array['access_token'];

    //全局access token获得用户基本信息
    $userinfo_url = "https://api.weixin.qq.com/cgi-bin/user/info?access_token=$new_access_token&openid=$openid";
    $userinfo_json = https_request($userinfo_url);
    $userinfo_array = json_decode($userinfo_json, true);
    return $userinfo_array;*/
    return '';

}


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

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <title>实兼-放心兼职</title>
    <link rel="stylesheet" href="assets/agile/css/agile.layout.css">
    <link rel="stylesheet" href="assets/agile/css/flat/flat.component.css">
    <link rel="stylesheet" href="assets/agile/css/flat/flat.color.css">
    <link rel="stylesheet" href="assets/agile/css/flat/iconline.css">
    <link rel="stylesheet" href="assets/agile/css/flat/iconform.css">
    <link rel="stylesheet" href="assets/agile/css/fa/css/fa.css">
    <link rel="stylesheet" href="assets/component/timepicker/timepicker.css">
    <link rel="stylesheet" href="assets/app/css/app.css">
</head>
<body>
<div id="section_container">
    <section id="main_section" data-role="section" class="active">

        <div class="menubar" style="bottom:0px;background-color: #FFFFFF">
            <a id="toggle_register" class="menu" data-role="tab"
               style="color: #1b1b1b;border-top:1px solid #1abc9c;">
                <i class="fa fa-user fa-2x"></i>
                <span class="menu-text">所有兼职</span>
            </a>
            <a id="toggle_PersonInfo" class="menu" data-role="tab"
               style="color: #1b1b1b;border-top:1px solid #1abc9c;">
                <i class="fa fa-user fa-2x"></i>
                <span class="menu-text">个人中心</span>
            </a>
        </div>
    </section>
</div>


<script src="assets/third/zepto/zepto.min.js"></script>
<script src="assets/third/iscroll/iscroll-probe.js"></script>
<script src="assets/third/arttemplate/template-native.js"></script>

<script type="text/javascript" src="assets/agile/js/agile.js"></script>

<script type="text/javascript" src="assets/bridge/exmobi.js"></script>
<script type="text/javascript" src="assets/bridge/agile.exmobi.js"></script>

<script src="assets/component/timepicker/agile.timepicker.js"></script>
<script type="text/javascript" src="assets/component/extend.js"></script>
<script type="text/javascript" src="assets/app/js/app.js"></script>


<script>
    $(document).ready(function(){

        if("<?php echo $hasRegister;?>"==true)
            A.Controller.article('#article_register');
        else
            A.Controller.article('#article_user');

        $('#u_icon').attr('src',"<?php echo $userinfo["headimgurl"];?>");
        $('#toggle_PersonInfo').on(A.options.clickEvent, function jump(){
            if("<?php echo $hasRegister;?>"==true)
                A.Controller.article('#article_register');
            else
                A.Controller.article('#article_user');
        });

        $('#li_PersonInfo').on(A.options.clickEvent, function jump(){
            A.Controller.article('#article_PersonInfo');
        });

    });

</script>

</body>
</html>