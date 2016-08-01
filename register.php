<?php
session_start();
include_once 'config.php';
$code = $_GET["code"];
$userinfo = getUserInfo($code);
$_SESSION['WeiID']=getopenId();
/*if($_SESSION['UserID']==""){
    include_once 'system/tb_User.php';
    $tbuser =new tb_User();
    $WeiID=$_SESSION['WeiID'];
    $tbuser->setWeiID($WeiID);
    $sql =$tbuser->weiIDSelect();
    $rst = $admindb->ExecSQL($sql,$conn);
    if($rst!=false){     
        $_SESSION['UserID']=$rst[0]['ID'];
        header("location: main_user.php?code=".+$code);
        exit;
    }
}else{
    header("location: main_user.php?code=".+$code);
    exit;
}
*/
function getopenId(){
    /*$appid = "wxae2c0b15771d8e36";
    $appsecret = "d4624c36b6795d1d99dcf0547af5443d";
    
    //oauth2的方式获得openid
    $access_token_url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=$appid&secret=$appsecret&code=$code&grant_type=authorization_code";
    $access_token_json = https_request($access_token_url);
    $access_token_array = json_decode($access_token_json, true);
    $openid = $access_token_array['openid'];
    return $openid;
    */
    return "hahahaahahahahaah";
}

function getUserInfo($code)
{
    /*
	$appid = "wxae2c0b15771d8e36";
	$appsecret = "d4624c36b6795d1d99dcf0547af5443d";

    $openid=getopenId();

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
    */
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
<!--    <link rel="stylesheet" href="assets/agile/css/flat/iconline.css">-->
    <link rel="stylesheet" href="assets/agile/css/flat/iconform.css">
    <link rel="stylesheet" href="assets/agile/css/fa/css/fa.css">
    <link rel="stylesheet" href="assets/component/timepicker/timepicker.css">
    <link rel="stylesheet" href="assets/app/css/app.css">
    <script language="javascript" src="js/createxmlhttp.js"></script>
    <script language="javascript" src="js/registerCheck.js"></script>
</head>
<body>

        <form autocomplete="off" oninput="range_output.value=parseInt(range.value)" class="form-common"
              action="reg_chk.php" name="register" onSubmit="return chkinput(this)">
            <label class="label-left ">
                <i class="fa fa-phone fa-1-5x"></i>
                &nbsp;&nbsp;&nbsp;电话号码<span style="color: red">*</span>
               
            </label>
            <label class="label-right">
                <input id="Phone" name="Phone" type="text" placeholder="请输入电话号码" onBlur="javascript:chkPhone(register)"  />
                 <input id="c_Phone" name="c_Phone" type="hidden" value="not" ></td>
      			<div id="Phone1"><font color="#999999">请输入电话</font></div>
            </label>
            <hr/>
            <label class="label-left">
                <i class="fa fa-shield fa-1-5x"></i>
                &nbsp;&nbsp;&nbsp;&nbsp;验证码<span style="color: red">*</span>
            </label>
            <label class="label-right">
                <input name="Verification " type="text" placeholder="请输入收到的短信验证码" autocomplete="on"/>
            </label>
            <hr/>
            <label class="label-left">
                <i class="fa fa-lock fa-1-5x"></i>
                &nbsp;&nbsp;&nbsp;&nbsp;密码<span style="color: red">*</span>
            </label>
            <label class="label-right">
                <input name="Password" type="password" placeholder="请输入密码" autocomplete="on"/>
            </label>
            <hr/>
            <label class="label-left">
                <i class="fa fa-gift fa-1-5x"></i>
                &nbsp;&nbsp;&nbsp;邀请码
            </label>
            <label class="label-right">
                <input name="Invitation" type="text" placeholder="请输入邀请码"/>
            </label>
            <hr/>
            <div class="card noborder">
                <a id="submit" class="button submit width-full text-center" style="background-color: #1abc9c">
                    <i class="fa fa-send fa-adjust" style="color: #FFFFFF"></i>
                    提交
                </a>
            </div>
        </form>


<script>
    function ValidateRequired(field, alerttxt) {
        with (field) {
            if (value == null || value == "") {
                alert(alerttxt);
                return false;
            }
            else {
                return true;
            }
        }
    }
    function PhoneVerification(field, alerttxt) {
        var reg = /^(0|86|17951)?(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/g;
        with (field) {
            if (!reg.test(value)) {
                alert(alerttxt);
                return false;
            }
            else {
                return true;
            }
        }
    }

    $('#submit').on(A.options.clickEvent, function Verification() {
        if (!ValidateRequired(document.RegisterForm.Phone, "请输入手机号码!"))
            return false;
        else if (!ValidateRequired(document.RegisterForm.Password, "请输入密码!"))
            return false;
        else if (!PhoneVerification(document.RegisterForm.Phone, "请输入正确的手机号码!"))
            return false;
        document.form.submit();
    });
</script>
</div>

<!--- third --->
<script src="assets/third/zepto/zepto.min.js"></script>
<script src="assets/third/iscroll/iscroll-probe.js"></script>
<script src="assets/third/arttemplate/template-native.js"></script>
<!-- agile -->
<script type="text/javascript" src="assets/agile/js/agile.js"></script>
<!--- bridge --->
<script type="text/javascript" src="assets/bridge/exmobi.js"></script>
<script type="text/javascript" src="assets/bridge/agile.exmobi.js"></script>
<!-- app -->
<script src="assets/component/timepicker/agile.timepicker.js"></script>
<script type="text/javascript" src="assets/component/extend.js"></script>
<script type="text/javascript" src="assets/app/js/app.js"></script>


</body>
</html>

