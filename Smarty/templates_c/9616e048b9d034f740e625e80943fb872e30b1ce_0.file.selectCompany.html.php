<?php /* Smarty version 3.1.27, created on 2015-11-12 18:56:22
         compiled from "C:\wamp\www\mytest\selectCompany.html" */ ?>
<?php
/*%%SmartyHeaderCode:27925644d2c64db071_90634211%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9616e048b9d034f740e625e80943fb872e30b1ce' => 
    array (
      0 => 'C:\\wamp\\www\\mytest\\selectCompany.html',
      1 => 1447350928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27925644d2c64db071_90634211',
  'variables' => 
  array (
    'company' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5644d2c6581438_87305553',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5644d2c6581438_87305553')) {
function content_5644d2c6581438_87305553 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '27925644d2c64db071_90634211';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<table width="580" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="25" align="center" bgcolor="#F0F0F0">用户名</td>
    <td align="center" bgcolor="#F0F0F0">密码</td>
    <td align="center" bgcolor="#F0F0F0">注册时间</td>
    <td align="center" bgcolor="#F0F0F0">操作</td>
  </tr>
<?php ob_start();
if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['company_id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['company_id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['company_id']['name'] = 'company_id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['company_id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['company']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['company_id']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['company_id']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['company_id']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['company_id']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['company_id']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['company_id']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['company_id']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['company_id']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['company_id']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['company_id']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['company_id']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['company_id']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['company_id']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['company_id']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['company_id']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['company_id']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['company_id']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['company_id']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['company_id']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['company_id']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['company_id']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['company_id']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['company_id']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['company_id']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['company_id']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['company_id']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['company_id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['company_id']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['company_id']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['company_id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['company_id']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['company_id']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['company_id']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['company_id']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['company_id']['total']);
$_tmp1=ob_get_clean();
echo $_tmp1;?>

  <tr>
    <td height="20" align="center"><?php echo $_smarty_tpl->tpl_vars['company']->value[$_smarty_tpl->getVariable('smarty')->value['section']['company_id']['index']]['Name'];?>
</td>
  </tr>
<?php ob_start();
endfor; endif;
$_tmp2=ob_get_clean();
echo $_tmp2;?>

</table>
</body>
</html><?php }
}
?>