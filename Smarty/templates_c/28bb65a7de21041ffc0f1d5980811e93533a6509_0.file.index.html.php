<?php /* Smarty version 3.1.27, created on 2015-11-12 18:56:14
         compiled from "C:\wamp\www\mytest\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:20785644d2be5387b4_02827538%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28bb65a7de21041ffc0f1d5980811e93533a6509' => 
    array (
      0 => 'C:\\wamp\\www\\mytest\\index.html',
      1 => 1447350967,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20785644d2be5387b4_02827538',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5644d2be5a8c08_09357503',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5644d2be5a8c08_09357503')) {
function content_5644d2be5a8c08_09357503 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20785644d2be5387b4_02827538';
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>实兼后台管理登录</title>
<link rel="stylesheet" href="css/style.css" />
<?php echo '<script'; ?>
 src="js/admin_js.js" language="javascript"><?php echo '</script'; ?>
>
</head>
<body onLoad="document.a_login.manager.focus();">
<center>
<table border="0" cellpadding="0" cellspacing="0">
<tr>
	<td width="266" height="100" colspan="2">&nbsp;</td>
</tr>
<tr>
	<td valign="middle" align="center">
		
	</td>
</tr>
<tr>
	<td colspan="2" height="12">&nbsp;</td>
</tr>
</table>

<table width="500" height="225" border="0" cellpadding="0" cellspacing="0" background="images/bg_03.jpg">
  <tr>
    <td height="100" colspan="5">&nbsp;</td>
  </tr>
<form name="a_login" id="a_login" method="post" action="index_ok.php">
  <tr>
    <td width="84" height="50">&nbsp;</td>
    <td width="68" align="right"><strong>用户名：</strong></td>
    <td width="130"><input name="manager" type="text" onMouseOver="this.style.backgroundColor='#deebef'" onMouseOut="this.style.backgroundColor=''" size="15"/></td>
    <td width="104" rowspan="2"></td>
    <td width="114">&nbsp;</td>
  </tr>
  <tr>
    <td height="50">&nbsp;</td>
    <td height="35" align="right"><strong>密 码：</strong></td>
    <td><input name="pwd" type="password" onMouseOver="this.style.backgroundColor='#deebef'" onMouseOut="this.style.backgroundColor=''" size="15"/></td>
    <td height="35">&nbsp;</td>
  </tr>
  <tr>
    <td height="50">&nbsp;</td>
    <td height="35" align="right"><input type="submit" name="Submit" value="登录"></td>
    <td><a href="Fristinsert.html" id="login">注册</a></td>
    <td height="35">&nbsp;</td>
  </tr>
   <tr>
    <td height="50">&nbsp;</td>
    <td><a href="selectCompany.php" id="login">查询</a></td>
    <td height="35">&nbsp;</td>
  </tr>
</form>
  <tr>
    <td height="25" colspan="5">&nbsp;</td>
  </tr>
</table>
</center>
</body>
</html>
<?php }
}
?>