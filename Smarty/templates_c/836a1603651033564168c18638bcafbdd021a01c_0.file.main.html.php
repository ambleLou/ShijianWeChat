<?php /* Smarty version 3.1.27, created on 2015-11-09 16:35:40
         compiled from "C:\wamp\www\mytest\main.html" */ ?>
<?php
/*%%SmartyHeaderCode:221645640bd4c8b1931_72707595%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '836a1603651033564168c18638bcafbdd021a01c' => 
    array (
      0 => 'C:\\wamp\\www\\mytest\\main.html',
      1 => 1447083333,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '221645640bd4c8b1931_72707595',
  'variables' => 
  array (
    'title' => 0,
    'admin_phtml' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5640bd4c90c134_59167794',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5640bd4c90c134_59167794')) {
function content_5640bd4c90c134_59167794 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '221645640bd4c8b1931_72707595';
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>实兼后台管理系统</title>
</head>
<link href="css/style.css" rel="stylesheet"/>
<?php echo '<script'; ?>
 src="js/admin_js.js" language="javascript"><?php echo '</script'; ?>
>
<body>
<center>
<table width="890" height="84" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#EAEAEA">
<tr>
	<td height="84" background="images/bg-(2)_01.jpg">&nbsp;</td>
</tr>

</table>

<table width="890" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="237" height="500" align="center" valign="top">
		<table width="230" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#999999">
		
			<tr>
			  <td height="296" align="center" valign="top" bgcolor="#FFFFFF">
			  <table width="220" height="459" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="40" colspan="2"><img src="images/bg_06.jpg" width="220" height="40"></td>
  </tr>
   <tr>
    <td height="25" align="center" valign="middle" ><img src="images/bg-(2)_10-12.jpg" width="15" height="15"></td>
    <td height="25" ><a href='main.php?caption=Section_type'>产品类别添加</a></td>
  </tr>
   <tr>
    <td height="36" align="center" valign="middle" ><img src="images/bg-(2)_10-12.jpg" width="15" height="15"></td>
    <td height="36" ><a href='main.php?caption=Section_type_manage'>产品类别管理</a></td>
  </tr>
   <tr>
    <td height="35" align="center" valign="middle" ><img src="images/bg-(2)_10-12.jpg" width="15" height="15"></td>
    <td height="25" ><a href='main.php?caption=insert_type'>网站数据添加</a></td>
  </tr>
   <tr>
    <td height="25" align="center" valign="middle" ><img src="images/bg-(2)_10-12.jpg" width="15" height="15"></td>
    <td height="25" ><a href='main.php?caption=manage_type'>网站数据管理</a></td>
  </tr>
    <tr>
    <td height="25" align="center" valign="middle" ><img src="images/bg-(2)_10-12.jpg" width="15" height="15"></td>
    <td height="25" ><a href='main.php?caption=manage_news'>新闻数据管理</a></td>
  </tr>
    <tr>
    <td height="25" align="center" valign="middle" ><img src="images/bg-(2)_10-12.jpg" width="15" height="15"></td>
    <td height="25" ><a href='main.php?caption=manage_recruitment'>招聘数据管理</a></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" ><img src="images/bg-(2)_10-12.jpg" width="15" height="15"></td>
    <td height="25" ><a href='main.php?caption=manage_admin'>管理员管理</a></td>
  </tr>
  <tr>
    <td width="39" height="25" align="center" valign="middle"><img src="images/bg-(2)_10-12.jpg" width="15" height="15"></td>
    <td width="181" height="25" ><a href='main.php?caption=manage_leave_word'>留言信息管理</a></td>
  </tr>
  <tr>
    <td height="35" >&nbsp;</td>
    <td height="25" >&nbsp;</td>
  </tr>
  <tr>
  	<td colspan="2" height="20"><img src="images/bg-15.jpg" width="220" height="5"></td>
  </tr>
</table>
			  </td>
			</tr>
		</table>
	</td>
    <td width="653" align="center" valign="top" bgcolor="#f0f0f0">
	<table width="645" border="0" cellpadding="0" cellspacing="0">
	
		<tr>
			<td width="42" height="34" align="right" valign="middle" background="images/line.jpg">&nbsp;</td>
		    <td width="190" class="STYLE2" align="left" valign="middle" background="images/line.jpg"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</td>
		    <td width="413" align="right" valign="middle" background="images/line.jpg"><a href="logout.php" onClick="return MM_popupMsg('是否要退出登录');">退出登录</a>&nbsp;&nbsp;&nbsp;&nbsp;</td>
		</tr>
		<tr>
			<td height="15" colspan="3" bgcolor="#f0f0f0">&nbsp;</td>
		</tr>
		<tr>
			<td height="427" colspan="3" align="center" valign="top"><?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['admin_phtml']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
</td>
		</tr>
		<tr>
			<td height="15" colspan="3" bgcolor="#f0f0f0">&nbsp;</td>
		</tr>
	</table>
	
	</td>
   </tr>
</table>
<img src="images/bg-18.jpg" width="890" height="90">
</center>
</body>
</html><?php }
}
?>