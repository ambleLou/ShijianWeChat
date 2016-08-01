<?php /* Smarty version 3.1.27, created on 2015-11-09 15:08:11
         compiled from "C:\wamp\www\mytest\Smarty\templates\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:21625640a8cbc05d14_13999247%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4e1072ef09acab8c9ff0d4a2712ef72504ce8d7' => 
    array (
      0 => 'C:\\wamp\\www\\mytest\\Smarty\\templates\\index.html',
      1 => 1447070687,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21625640a8cbc05d14_13999247',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5640a8cbc25b91_48291827',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5640a8cbc25b91_48291827')) {
function content_5640a8cbc25b91_48291827 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21625640a8cbc05d14_13999247';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>{ $title }</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
购书信息：<br>
图书类别：{$arr[0]}<br />
图书名称：{$arr.name}<br />
图书单价：{$arr.unit_price.price}/{$arr.unit_price.unit}
</body>
</html>
<?php }
}
?>