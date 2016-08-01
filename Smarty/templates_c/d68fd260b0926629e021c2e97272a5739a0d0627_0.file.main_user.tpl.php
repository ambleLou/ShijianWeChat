<?php /* Smarty version 3.1.27, created on 2015-12-03 12:38:39
         compiled from "C:\wamp\www\liyuqi\Smarty\templates\main_user.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:25199566029bfb45c02_35782527%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd68fd260b0926629e021c2e97272a5739a0d0627' => 
    array (
      0 => 'C:\\wamp\\www\\liyuqi\\Smarty\\templates\\main_user.tpl',
      1 => 1449142309,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25199566029bfb45c02_35782527',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_566029bfbcaa65_59585042',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_566029bfbcaa65_59585042')) {
function content_566029bfbcaa65_59585042 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '25199566029bfb45c02_35782527';
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
</head>
<body>
<div id="section_container">
    <section id="main_section" data-role="section" class="active">
        <article data-role="article" id="article_user" class="active" data-scroll="verticle" style="bottom:60px;">
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
                    <li>
                        <div class="img square" style="background-color: #0DB3F0;">
                            <i class="square-icon fa fa-paw" style="margin: 0px 0px 0px 1px;"></i>
                            <div class="tip">1</div>
                        </div>
                        <div class="text nowrap" style="padding:8px">已报名兼职</div>
                        <i class="ricon fa fa-angle-right fa-2x" ></i>
                    </li>
                    <li>
                        <div class="img square" style="background-color: #F35845;">
                            <i class="square-icon fa fa-bicycle" style="margin: 0px 0px 0px -3px;"></i>
                            <div class="tip">2</div>
                        </div>
                        <div class="text nowrap" style="padding:8px">进行中兼职</div>
                        <i class="ricon fa fa-angle-right fa-2x" ></i>
                    </li>
                    <li>
                        <div class="img square" style="background-color: #1FC378;">
                            <i class="square-icon fa fa-smile-o" style="margin: 0px 0px 0px 2px;"></i>
                            <div class="tip">3</div>
                        </div>
                        <div class="text nowrap" style="padding:8px">已完成兼职</div>
                        <i class="ricon fa fa-angle-right fa-2x" ></i>
                    </li>
                </ul>
            </div>
        </article>
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

<!--- third --->
<?php echo '<script'; ?>
 src="assets/third/zepto/zepto.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/third/iscroll/iscroll-probe.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="assets/third/arttemplate/template-native.js"><?php echo '</script'; ?>
>
<!-- agile -->
<?php echo '<script'; ?>
 type="text/javascript" src="assets/agile/js/agile.js"><?php echo '</script'; ?>
>
<!--- bridge --->
<?php echo '<script'; ?>
 type="text/javascript" src="assets/bridge/exmobi.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="assets/bridge/agile.exmobi.js"><?php echo '</script'; ?>
>
<!-- app -->
<?php echo '<script'; ?>
 src="assets/component/timepicker/agile.timepicker.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="assets/component/extend.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="assets/app/js/app.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $(document).ready(function(){
        $('#u_icon').attr('src',"<?php echo '<?php ';?>echo $userinfo["headimgurl"];<?php echo '?>';?>");
        $('#toggle_register').on(A.options.clickEvent, function jump(){
            A.Controller.article('#article_register');
        });
        $('#toggle_PersonInfo').on(A.options.clickEvent, function jump(){
            A.Controller.article('#article_user');
        });
        $('#li_PersonInfo').on(A.options.clickEvent, function jump(){
            A.Controller.article('#article_PersonInfo');
        });
    });
<?php echo '</script'; ?>
>

</body>
</html><?php }
}
?>