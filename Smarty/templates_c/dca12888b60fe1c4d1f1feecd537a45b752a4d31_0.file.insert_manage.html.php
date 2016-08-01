<?php /* Smarty version 3.1.27, created on 2015-11-09 17:04:28
         compiled from "C:\wamp\www\mytest\insert_manage.html" */ ?>
<?php
/*%%SmartyHeaderCode:158725640c40c21ca60_93458567%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dca12888b60fe1c4d1f1feecd537a45b752a4d31' => 
    array (
      0 => 'C:\\wamp\\www\\mytest\\insert_manage.html',
      1 => 1447075026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158725640c40c21ca60_93458567',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5640c40c264b23_71586534',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5640c40c264b23_71586534')) {
function content_5640c40c264b23_71586534 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '158725640c40c21ca60_93458567';
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>添加管理员</title>
</head>

<body>
<table width="580" height="214" border="0" cellpadding="0" cellspacing="0" background="images/dly.gif">
  <tr>
    <td height="54" colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td height="140" colspan="3" align="center" valign="top">
<table width="90%" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#9D4100">
  <tr>
    <td height="25" align="center" bgcolor="#F0F0F0">用户名</td>
    <td align="center" bgcolor="#F0F0F0">密码</td>
    <td align="center" bgcolor="#F0F0F0">&nbsp;</td>
    <td align="center" bgcolor="#F0F0F0">&nbsp;</td>
    <td align="center" bgcolor="#F0F0F0">&nbsp;</td>
  </tr>
<form name="form1" method="post" action="insert_manage_ok.php">
  <tr>
    <td height="25" align="center" bgcolor="#FFFFFF"><input name="name" type="text" id="name" size="10"></td>
    <td align="center" bgcolor="#FFFFFF"><input name="password" type="password" id="password" size="10"></td>
    <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
    <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" colspan="5" align="center" bgcolor="#FFFFFF"><input type="submit" name="Submit" value="提交"></td>
    </tr>
</form>
</table>
</td>
  </tr>
  
  <tr>
    <td height="20" colspan="3">&nbsp;</td>
  </tr>
</table>
</body>
</html>
<?php }
}
?>