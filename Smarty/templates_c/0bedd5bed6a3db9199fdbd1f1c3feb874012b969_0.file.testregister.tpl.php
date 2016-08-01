<?php /* Smarty version 3.1.27, created on 2015-11-19 06:44:22
         compiled from "C:\wamp\www\liyuqi\Smarty\templates\testregister.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10706564d61b6704810_61871383%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bedd5bed6a3db9199fdbd1f1c3feb874012b969' => 
    array (
      0 => 'C:\\wamp\\www\\liyuqi\\Smarty\\templates\\testregister.tpl',
      1 => 1447780333,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10706564d61b6704810_61871383',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_564d61b6773ca6_85775071',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564d61b6773ca6_85775071')) {
function content_564d61b6773ca6_85775071 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10706564d61b6704810_61871383';
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    
 </head>
<body >

<div>

<table  >
 <form >
 	<tr>
    	<td ><h2>用户注册</h2></td>
    </tr>
    <tr>
      <td >手机号：</td>
      <td >
          <input id="Phone" name="Phone" type="text"/></td>    
    </tr>
  
    <tr>
      <td>密码：</td>
      <td >
          <input id="Password" name="Password" type="text" /></td>    
    </tr>
    
    <tr>
      <td >短信验证码：</td>
      <td>
          <input id="messagecode" name="messagecode" type="text" maxLength="6" />
    </tr>
    <tr>
      <td >
          <input type="submit" value="提交"/> 
    </tr>
  </form>
</table>
 
</body><?php }
}
?>