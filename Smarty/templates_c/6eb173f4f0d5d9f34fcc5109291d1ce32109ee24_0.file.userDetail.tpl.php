<?php /* Smarty version 3.1.27, created on 2015-11-26 15:29:26
         compiled from "C:\wamp\www\liyuqi\Smarty\templates\userDetail.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:877556571746556a00_52586339%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6eb173f4f0d5d9f34fcc5109291d1ce32109ee24' => 
    array (
      0 => 'C:\\wamp\\www\\liyuqi\\Smarty\\templates\\userDetail.tpl',
      1 => 1448548162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '877556571746556a00_52586339',
  'variables' => 
  array (
    'title' => 0,
    'UserName' => 0,
    'RealName' => 0,
    'IDCard' => 0,
    'QQNum' => 0,
    'Sex' => 0,
    'Height' => 0,
    'Weight' => 0,
    'School' => 0,
    'Major' => 0,
    'Introduct' => 0,
    'AilPay' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565717465ad960_96679495',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565717465ad960_96679495')) {
function content_565717465ad960_96679495 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '877556571746556a00_52586339';
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

    
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<link rel="stylesheet" href="css/reg.css"/>
<?php echo '<script'; ?>
 language="javascript" src="js/createxmlhttp.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" src="js/userDetail.js"><?php echo '</script'; ?>
>
 </head>
<body onLoad="javascript:userdetailform.UserName.focus()">

 <nav class="navbar navbar-inverse navbar-fixed-top">
     


 <form id="userdetailform" name="userdetailform" action="userDetail_chk.php" method="post" onSubmit="return chkinput(this)">
 	<table width="450" border="0" align="center" cellpadding="0" cellspacing="0">
 	<tr>
    	<td colspan="5" align="center" valign="middle"><h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2></td>
    </tr>
    <tr>
      <td width="81" height="25"><div align="right">用户名：</div></td>
      <td height="25" colspan="3">&nbsp;
          <input id="UserName" name="UserName" type="text" value="<?php echo $_smarty_tpl->tpl_vars['UserName']->value;?>
"  onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'" />
    </tr>
    <tr>
      <td height="25"><div align="right">真实姓名：</div></td>
      <td height="25" colspan="3">&nbsp;
          <input id="RealName" name="RealName"  onBlur="javascript:chkRealName(userdetailform)"  type="text" value="<?php echo $_smarty_tpl->tpl_vars['RealName']->value;?>
" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/>&nbsp;<font color="red">*</font></td>
      <td height="25"><div id="RealName1"><font color="#999999">请填写真实姓名</font></div></td>
    </tr>
    <tr>
    	<td height="25"><div align="right">身份证号：</div></td>
		<td height="25" colspan="3">&nbsp;
        <input id="IDCard" name="IDCard" type="text" value="<?php echo $_smarty_tpl->tpl_vars['IDCard']->value;?>
" maxlength="18" onBlur="javascript:chkIDCard(userdetailform)" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/>&nbsp;<font color="red">*</font></td>
		<td height="25"><div id="IDCard1"><font color="#999999">请输入正确的身份帐号</font></div></td>
    </tr>
    <tr>
      <td height="25"><div align="right">QQ号码：</div></td>
      <td height="25" colspan="3">&nbsp;
          <input id="QQNum" type="text" name="QQNum"  onBlur="javascript:chkQQNum(userdetailform)" value="<?php echo $_smarty_tpl->tpl_vars['QQNum']->value;?>
" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/></td>
      <td height="25"><div id="QQNum1"><font color="#999999">请输入QQ号</font></div></td>
    </tr>
    <tr>
      <td height="25"><div align="right">性别：</div></td>
      <td height="25" colspan="3">&nbsp;
      	  <input name="Sex" type="radio" value="0"  <?php echo '<?php ';?>if(<?php echo $_smarty_tpl->tpl_vars['Sex']->value;?>
==0) echo 'checked';<?php echo '?>';?>/>男
      	  
      	  &nbsp;&nbsp;<input name="Sex" type="radio" value="1" <?php echo '<?php ';?>if(<?php echo $_smarty_tpl->tpl_vars['Sex']->value;?>
==1) echo 'checked';<?php echo '?>';?>/>女</td>
     </tr>
     <tr>
      <td height="25"><div align="right">身高：</div></td>
      <td height="25" colspan="3">&nbsp;
          <input id="Height" name="Height" type="text" value="<?php echo $_smarty_tpl->tpl_vars['Height']->value;?>
" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/></td>
      </tr>
    <tr>
      <td height="25"><div align="right">体重：</div></td>
      <td height="25" colspan="3">&nbsp;
          <input id="Weight" name="Weight" type="text" value="<?php echo $_smarty_tpl->tpl_vars['Weight']->value;?>
" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/></td>
      </tr>
    <tr>
    	<td height="25"><div align="right">学校：</div></td>
		<td height="25" colspan="3">&nbsp;
        <input id="School" name="School" type="text" maxlength="80" value="<?php echo $_smarty_tpl->tpl_vars['School']->value;?>
"  onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/></td>
		</tr>
    <tr>
    	<td height="25"><div align="right">专业：</div></td>
		<td height="25" colspan="3">&nbsp;
        <input id="Major" name="Major" type="text" maxlength="80" value="<?php echo $_smarty_tpl->tpl_vars['Major']->value;?>
"  onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/></td>
		</tr>
    <tr>
      <td height="25"><div align="right">理想职位：</div></td>
    </tr>
    <tr>
      <td height="25"><div align="right">自我介绍：</div></td>
      <td height="25" colspan="3">&nbsp;
          <textarea cols="30" rows="5" id="Introduct" type="text" name="Introduct" value="<?php echo $_smarty_tpl->tpl_vars['Introduct']->value;?>
"/></textarea></td>
      </tr>
     <tr>
      <td height="25"><div align="right">支付宝账号：</div></td>
      <td height="25" colspan="3">&nbsp;
          <input id="AliPay" type="text" name="AliPay" value="<?php echo $_smarty_tpl->tpl_vars['AilPay']->value;?>
" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/></td>
      </tr>
    <tr>
      <td height="25"><div align="right">健康证明：</div></td>
      <td height="25" colspan="3">&nbsp;
      	  <input name="Health" type="radio" value="0"/>没有
      	  &nbsp;&nbsp;<input name="Health" type="radio" value="1"/>有</td>
     </tr>
    <tr>
      <td height="25"><div align="right">PicName：</div></td>
      </tr>
    <tr>
      <td height="25"><div align="right">验证码：</div></td>
      <td width="65" height="25">&nbsp;
        <input id="yzm" type="text" name="yzm" size="8" onBlur="javascript:chkyzm(userdetailform)" onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"/>
      <input name="yzm2" type="hidden" value="" /></td>
      <td width="65" align="center" valign="middle"><?php echo '<script'; ?>
>yzm(userdetailform)<?php echo '</script'; ?>
></td>
      <td width="51"><a href="javascript:code(userdetailform)">看不清</a></td>
      <td height="25"><div id="yzm1"><font color="#999999">输入验证码</font></div></td>
    </tr>
    <tr>
      <td height="25" colspan="2">&nbsp;
          <input type="submit" value="提交"/>
        &nbsp;&nbsp;
        <input type="reset" value="重写" /></td>
      <td height="25" colspan="3"><div style="color:#FF0000">带“*”号的为必填项</div></td>
    </tr>
    </table>
  </form>

 </div><!-- /.container -->

 </body><?php }
}
?>