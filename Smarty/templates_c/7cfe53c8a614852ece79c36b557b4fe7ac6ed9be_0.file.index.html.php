<?php /* Smarty version 3.1.27, created on 2015-11-09 13:04:43
         compiled from "C:\wamp\www\test\Smarty\templates\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:2563856408bdb547cb1_78084506%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7cfe53c8a614852ece79c36b557b4fe7ac6ed9be' => 
    array (
      0 => 'C:\\wamp\\www\\test\\Smarty\\templates\\index.html',
      1 => 1447070681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2563856408bdb547cb1_78084506',
  'variables' => 
  array (
    'arr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56408bdb57f2a7_34373438',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56408bdb57f2a7_34373438')) {
function content_56408bdb57f2a7_34373438 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2563856408bdb547cb1_78084506';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>{ $title }</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
购书信息：<br>
图书类别：<?php echo $_smarty_tpl->tpl_vars['arr']->value[0];?>
<br />
图书名称：<?php echo $_smarty_tpl->tpl_vars['arr']->value['name'];?>
<br />
图书单价：<?php echo $_smarty_tpl->tpl_vars['arr']->value['unit_price']['price'];?>
/<?php echo $_smarty_tpl->tpl_vars['arr']->value['unit_price']['unit'];?>

</body>
</html>
<?php }
}
?>