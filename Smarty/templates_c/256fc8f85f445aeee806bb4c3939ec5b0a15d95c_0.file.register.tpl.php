<?php /* Smarty version 3.1.27, created on 2015-11-22 13:14:32
         compiled from "C:\wamp\www\liyuqi\Smarty\templates\register.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19785651b1a899fff0_15436071%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '256fc8f85f445aeee806bb4c3939ec5b0a15d95c' => 
    array (
      0 => 'C:\\wamp\\www\\liyuqi\\Smarty\\templates\\register.tpl',
      1 => 1448194355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19785651b1a899fff0_15436071',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5651b1a8a34254_96632538',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5651b1a8a34254_96632538')) {
function content_5651b1a8a34254_96632538 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19785651b1a899fff0_15436071';
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="">


    <!-- Bootstrap core CSS -->
   

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
    
    
    <title>{ $title }</title>
<?php echo '<script'; ?>
 language="javascript" src="js/createxmlhttp.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" src="js/registerCheck.js"><?php echo '</script'; ?>
>
 </head>
<body onLoad="javascript:register.Phone.focus()">

 

 <form id="register" name="register" action="reg_chk.php" method="post" onSubmit="return chkinput(this)">
 	<table >
 	<tr>
    	<td colspan="5" align="center" valign="middle"><h2>新用户注册</h2></td>
    </tr>
    <tr>
      <td width="81" height="25"><div align="right">电话：</div></td>
      <td height="25" colspan="3">&nbsp;
          <input id="Phone" name="Phone" type="text" onBlur="javascript:chkPhone(register)"  onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'" /><input id="c_Phone" name="c_Phone" type="hidden" value="not" >&nbsp;<font color="red">*</font></td>
      <td height="25"><div id="Phone1"><font color="#999999">请输入电话</font></div></td>
    </tr>
    <tr>
      <td height="25"><div align="right">注册密码：</div></td>
      <td height="25" colspan="3">&nbsp;
          <input id="Password" name="Password" type="password"  onBlur="javascript:chkPassword1(register)" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/>&nbsp;<font color="red">*</font></td>
      <td width="152"><div id="Password11"><font color="#999999">请输入密码</font></div></td>
    </tr>
    <tr>
      <td height="25"><div align="right">确认密码：</div></td>
      <td height="25" colspan="3">&nbsp;
          <input id="Password2" name="Password2" type="password" onBlur="javascript:chkPassword2(register)" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/>&nbsp;<font color="red">*</font></td>
      <td height="25"><div id="Password21"><font color="#999999">确认密码</font></div></td>
    </tr>
    
    <tr>
      <td height="25"><div align="right">短信验证码：</div></td>
      <td width="65" height="25">&nbsp;
        <input id="yzm" type="text" name="yzm" size="8"  onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/>
      <td height="25"><div id="yzm1"><font color="#999999">输入验证码</font></div></td>
    </tr>
    <tr>
    <tr>
      <td height="25"><div align="right">邀请码：</div></td>
      <td width="65" height="25">&nbsp;
        <input id="Invitation" type="text" name="Invitation" size="8" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/>
      <td height="25"><div id="Invitation1"><font color="#999999">没有则忽略</font></div></td>
    </tr>
    <tr>
   
    <tr>
      <td height="25" colspan="2">&nbsp;
          <input type="submit" value="提交"/>
        &nbsp;&nbsp;
        <input type="reset" value="重写" /></td>
      <td height="25" colspan="3"><div style="color:#FF0000">带“*”号的为必填项</div></td>
    </tr>
    </table>
  </form>

 </div>


</body><?php }
}
?>