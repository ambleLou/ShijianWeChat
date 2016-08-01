<?php
session_start();
include_once 'config.php';
include_once 'system/tb_User.php';
include_once 'sms/TopSdk.php';
$UserID='';
if($_SESSION['MyUserID']==""){

    $code = $_GET["code"];
    $hasRegister=false;
    $WeiID=getopenId($code);
    $_SESSION['OpenID']=$WeiID;
    $userinfo = getUserInfo($WeiID);
    $tbuser =new tb_User();
    $_SESSION['userinfo']=$userinfo;
    $tbuser->setWeiID($WeiID);
    $sql =$tbuser->weiIDSelect();
    $rst = $admindb->ExecSQL($sql,$conn);
    if($rst==false){
        $hasRegister= true;
    }else{
        $_SESSION['MyUserID']=$rst[0]['ID'];
        $UserID=$_SESSION['MyUserID'];
        //echo $_SESSION['UserID'];
        $hasRegister=false;
    }

}else{
    $userinfo=$_SESSION['userinfo'];
    $UserID=$_SESSION['MyUserID'];
    $hasRegister=false;

}


function getopenId($code){
    $appid = "wxae2c0b15771d8e36";
    $appsecret = "d4624c36b6795d1d99dcf0547af5443d";

    //oauth2的方式获得openid
    $access_token_url = "https://api.weixin.qq.com/sns/oauth2/access_token?appid=$appid&secret=$appsecret&code=$code&grant_type=authorization_code";
    $access_token_json = https_request($access_token_url);
    $access_token_array = json_decode($access_token_json, true);
    $openid = $access_token_array['openid'];
    return $openid;


}

function getUserInfo($openid)
{

    $appid = "wxae2c0b15771d8e36";
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
    return $userinfo_array;

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
        <article data-role="article" id="article_user" data-scroll="verticle" style="bottom:60px;">
            <div class="scroller">
                <div class="titlebar">
                    <h1>个人中心</h1>
                </div>
                <div class="scroller">
                    <img id="u_icon" style="position:absolute;z-index: 2;
            width: 80px;height: 80px;left: 50%;margin-left: -40px;text-align: center;margin-top: 30px;border-radius:50%;"/>
                    <img src="user-bg.png"/>
                </div>
                <ul class="listitem">
                    <hr/>
                    <li id="li_PersonInfo">
                        <div class="img square" style="background-color: #F7B000;">
                            <i class="square-icon fa fa-file-text-o" style="margin: 0px 0px 0px 2px;"></i>
                        </div>
                        <div class="text nowrap" style="padding:8px">我的简历</div>
                        <i class="ricon fa fa-angle-double-right fa-2x" ></i>
                    </li>
                    <li><a href="userJobList.php?SearchTimeType=1&StatusID=0">
                        <div class="img square" style="background-color: #0DB3F0;">
                            <i class="square-icon fa fa-paw" style="margin: 0px 0px 0px 1px;"></i>
                            <div class="tip" id="baoming"> </div>
                        </div>
                        <div class="text nowrap" style="padding:8px" >已报名兼职</div>
                        <i class="ricon fa fa-angle-right fa-2x" ></i>
                        </a>
                    </li>
                    <li><a href="userJobList.php?SearchTimeType=1&StatusID=1">
                            <div class="img square" style="background-color: #9440ED;">
                                <i class="square-icon fa fa-calendar-check-o" style="margin: 0px 0px 0px 1px;"></i>
                                <div class="tip" id="luyong"> </div>
                            </div>
                            <div class="text nowrap" style="padding:8px" >被录用的兼职</div>
                            <i class="ricon fa fa-angle-right fa-2x" ></i>
                        </a>
                    </li>
                    <li><a href="userJobList.php?SearchTimeType=2">
                        <div class="img square" style="background-color: #F35845;">
                            <i class="square-icon fa fa-bicycle" style="margin: 0px 0px 0px -3px;"></i>
                            <div class="tip" id="jinxing"> </div>
                        </div>
                        <div class="text nowrap" style="padding:8px">进行中兼职</div>
                        <i class="ricon fa fa-angle-right fa-2x" ></i>
                    </li></a>
                    <li><a href="userJobList.php?SearchTimeType=3">
                        <div class="img square" style="background-color: #1FC378;">
                            <i class="square-icon fa fa-smile-o" style="margin: 0px 0px 0px 2px;"></i>
                            <div class="tip" id="wancheng" style="display: none"> </div>
                        </div>
                        <div class="text nowrap" style="padding:8px">已完成兼职</div>
                        <i class="ricon fa fa-angle-right fa-2x" ></i>
                    </li></a>
                </ul>
            </div>
        </article>
        <script>
            $('#article_user').on('articleload', function(){
                var params = A.Component.params(this);
                $('#u_icon').attr('src',decodeURIComponent(params.u_icon));
            });
        </script>
        <div class="menubar" style="bottom:0px;background-color: #FFFFFF">
            <a id="toggle_register" class="menu" data-role="tab"  href="jobList.php"
               style="color: #1b1b1b;border-top:1px solid #1abc9c;">
                <i class="fa fa-th fa-2x"></i>
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
        studentApplyCountAjax();
    });

    function studentApplyCountAjax(){
        var userID='<?php  echo  $UserID;?>';
        var CurPage=1;
        var PageSize=10;
        if(userID!=''){
            $.ajax({                                            //显示已经报名数目的ajax
                type:'GET',
                url: "jobSearch.php" ,
                dataType: 'json',
                data: {SearchTimeType:('1'),UserID:(userID),StatusID:(0),CurPage:(CurPage),PageSize:(PageSize),CompanyID:(''),JobType:(''),SearchName:(''),JobID:(''),notInJobType:('')},//后面这些为空的可以不用 只是防止测试的时候php弹出提示
                success:function(data) {
                    if (data != null) {
                        if(0!=parseInt(data['RecordCount'])){
                            $('#baoming').html(data['RecordCount']);
                        }else{
                            $('#baoming').css('display','none');
                        }
                    }else{
                        $('#baoming').css('display','none');
                    }
                }
            });
            $.ajax({                                            //显示已经录用数目的ajax
                type:'GET',
                url: "jobSearch.php" ,
                dataType: 'json',
                data: {SearchTimeType:('1'),UserID:(userID),StatusID:(1),CurPage:(CurPage),PageSize:(PageSize),CompanyID:(''),JobType:(''),SearchName:(''),JobID:(''),notInJobType:('')},//后面这些为空的可以不用 只是防止测试的时候php弹出提示
                success:function(data) {
                    if (data != null) {
                        if(0!=parseInt(data['RecordCount'])){
                            $('#luyong').html(data['RecordCount']);
                        }else{
                            $('#luyong').css('display','none');
                        }
                    }
                    else{
                        $('#luyong').css('display','none');
                    }
                }
            });
            $.ajax({                                            //显示正在进行中数目的ajax
                type:'GET',
                url: "jobSearch.php" ,
                dataType: 'json',
                data: {SearchTimeType:('2'),UserID:(userID),StatusID:(''),CurPage:(CurPage),PageSize:(PageSize),CompanyID:(''),JobType:(''),SearchName:(''),JobID:(''),notInJobType:('')},//后面这些为空的可以不用 只是防止测试的时候php弹出提示
                success:function(data) {
                    if (data != null) {
                        if(0!=parseInt(data['RecordCount'])){
                            $('#jinxing').html(data['RecordCount']);
                        }else{
                            $('#jinxing').css('display','none');
                        }
                    }else{
                        $('#jinxing').css('display','none');
                    }
                }
            });
            $.ajax({                                            //显示已经报名数目的ajax
                type:'GET',
                url: "jobSearch.php" ,
                dataType: 'json',
                data: {SearchTimeType:('3'),UserID:(userID),StatusID:(''),CurPage:(CurPage),PageSize:(PageSize),CompanyID:(''),JobType:(''),SearchName:(''),JobID:(''),notInJobType:('')},//后面这些为空的可以不用 只是防止测试的时候php弹出提示
                success:function(data) {
                    if (data != null) {
                        if(0!=parseInt(data['RecordCount'])){
                            $('#wancheng').html(data['RecordCount']);
                        }else{
                            $('#wancheng').css('display','none');
                        }
                    }else{
                        $('#wancheng').css('display','none');
                    }
                }
            });
        }else{
            $('#baoming').css('display','none');
            $('#luyong').css('display','none');
            $('#jinxing').css('display','none');
            $('#wancheng').css('display','none');
        }

    }

</script>

</body>
</html>