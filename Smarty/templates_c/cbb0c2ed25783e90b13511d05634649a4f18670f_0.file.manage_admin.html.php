<?php /* Smarty version 3.1.27, created on 2015-11-09 17:06:33
         compiled from "C:\wamp\www\mytest\manage_admin.html" */ ?>
<?php
/*%%SmartyHeaderCode:56895640c4895bf472_97258509%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbb0c2ed25783e90b13511d05634649a4f18670f' => 
    array (
      0 => 'C:\\wamp\\www\\mytest\\manage_admin.html',
      1 => 1447085186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56895640c4895bf472_97258509',
  'variables' => 
  array (
    'manager' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5640c489600c53_82663935',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5640c489600c53_82663935')) {
function content_5640c489600c53_82663935 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '56895640c4895bf472_97258509';
?>
<table width="580" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="25" align="center" bgcolor="#F0F0F0">用户名</td>
    <td align="center" bgcolor="#F0F0F0">密码</td>
    <td align="center" bgcolor="#F0F0F0">注册时间</td>
    <td align="center" bgcolor="#F0F0F0">操作</td>
  </tr>
<?php ob_start();
if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['manage_id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['manage_id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['manage_id']['name'] = 'manage_id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['manage_id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['manager']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['manage_id']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['manage_id']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['manage_id']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['manage_id']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['manage_id']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['manage_id']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['manage_id']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['manage_id']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['manage_id']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['manage_id']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['manage_id']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['manage_id']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['manage_id']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['manage_id']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['manage_id']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['manage_id']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['manage_id']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['manage_id']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['manage_id']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['manage_id']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['manage_id']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['manage_id']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['manage_id']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['manage_id']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['manage_id']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['manage_id']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['manage_id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['manage_id']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['manage_id']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['manage_id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['manage_id']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['manage_id']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['manage_id']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['manage_id']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['manage_id']['total']);
$_tmp1=ob_get_clean();
echo $_tmp1;?>

  <tr>
    <td height="20" align="center"><?php echo $_smarty_tpl->tpl_vars['manager']->value[$_smarty_tpl->getVariable('smarty')->value['section']['manage_id']['index']]['name'];?>
</td>
    <td align="center"><?php echo $_smarty_tpl->tpl_vars['manager']->value[$_smarty_tpl->getVariable('smarty')->value['section']['manage_id']['index']]['pwd'];?>
</td>
    <td align="center"><?php echo $_smarty_tpl->tpl_vars['manager']->value[$_smarty_tpl->getVariable('smarty')->value['section']['manage_id']['index']]['time'];?>
</td>
    <td align="center"><a href="insert_manage.php" target="_blank">添加</a>/<a href="update_manage.php?manage_id=<?php echo $_smarty_tpl->tpl_vars['manager']->value[$_smarty_tpl->getVariable('smarty')->value['section']['manage_id']['index']]['id'];?>
" target="_blank">修改</a>/<a href="delete_manage.php?manage_id=<?php echo $_smarty_tpl->tpl_vars['manager']->value[$_smarty_tpl->getVariable('smarty')->value['section']['manage_id']['index']]['id'];?>
">删除</a></td>
  </tr>
<?php ob_start();
endfor; endif;
$_tmp2=ob_get_clean();
echo $_tmp2;?>

</table>
<?php }
}
?>