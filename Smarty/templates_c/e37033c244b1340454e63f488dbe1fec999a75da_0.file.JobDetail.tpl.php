<?php /* Smarty version 3.1.27, created on 2015-11-26 14:09:57
         compiled from "C:\wamp\www\liyuqi\Smarty\templates\JobDetail.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14490565704a56236a0_96653397%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e37033c244b1340454e63f488dbe1fec999a75da' => 
    array (
      0 => 'C:\\wamp\\www\\liyuqi\\Smarty\\templates\\JobDetail.tpl',
      1 => 1448543381,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14490565704a56236a0_96653397',
  'variables' => 
  array (
    'title' => 0,
    'job' => 0,
    'jobdetail' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_565704a57144c7_72090453',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565704a57144c7_72090453')) {
function content_565704a57144c7_72090453 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14490565704a56236a0_96653397';
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php echo '<script'; ?>
 language="javascript" src="js/createxmlhttp.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" src="js/userDetail.js"><?php echo '</script'; ?>
>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>

<body>
 <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="companyindex.php">首页</a></li>
            <li><a href="jobinsert.php">录入兼职信息</a></li>
            <li><a href="jobDetail.php">查看已发布的兼职</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>



<table width="580" border="0" cellspacing="0" cellpadding="0">
  <tr>
  <td align="center" bgcolor="#F0F0F0">发布公司</td>
  	<td align="center" bgcolor="#F0F0F0">兼职标题</td>
    <td align="center" bgcolor="#F0F0F0">兼职类型</td>
    <td align="center" bgcolor="#F0F0F0">兼职开始时间</td>
    <td align="center" bgcolor="#F0F0F0">兼职结束时间</td>
    <td align="center" bgcolor="#F0F0F0">每日工资</td>
     <td align="center" bgcolor="#F0F0F0">兼职地点</td>
     <td align="center" bgcolor="#F0F0F0">要求性别</td>
     <td align="center" bgcolor="#F0F0F0">需求人数</td>
     <td align="center" bgcolor="#F0F0F0">已报名人数</td>
     <td align="center" bgcolor="#F0F0F0">是否包吃</td>
     <td align="center" bgcolor="#F0F0F0">是否包住</td>
     <td align="center" bgcolor="#F0F0F0">预定目标</td>
     <td align="center" bgcolor="#F0F0F0">其他信息</td>
  </tr>

  <tr>
 <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['job_id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['job_id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['job_id']['name'] = 'job_id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['job_id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['job']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['job_id']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['job_id']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['job_id']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['job_id']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['job_id']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['job_id']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['job_id']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['job_id']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['job_id']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['job_id']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['job_id']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['job_id']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['job_id']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['job_id']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['job_id']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['job_id']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['job_id']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['job_id']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['job_id']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['job_id']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['job_id']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['job_id']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['job_id']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['job_id']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['job_id']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['job_id']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['job_id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['job_id']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['job_id']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['job_id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['job_id']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['job_id']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['job_id']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['job_id']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['job_id']['total']);
?>
    <td align="center"><?php echo $_smarty_tpl->tpl_vars['job']->value[$_smarty_tpl->getVariable('smarty')->value['section']['job_id']['index']]['CompanyName'];?>
</td>
<td align="center"><?php echo $_smarty_tpl->tpl_vars['job']->value[$_smarty_tpl->getVariable('smarty')->value['section']['job_id']['index']]['Title'];?>
</td>
<td align="center"><?php echo $_smarty_tpl->tpl_vars['job']->value[$_smarty_tpl->getVariable('smarty')->value['section']['job_id']['index']]['TypeName'];?>
</td>
<td align="center"><?php echo $_smarty_tpl->tpl_vars['job']->value[$_smarty_tpl->getVariable('smarty')->value['section']['job_id']['index']]['TimeFrom'];?>
</td>
<td align="center"><?php echo $_smarty_tpl->tpl_vars['job']->value[$_smarty_tpl->getVariable('smarty')->value['section']['job_id']['index']]['TimeTo'];?>
</td>
<td align="center"><?php echo $_smarty_tpl->tpl_vars['job']->value[$_smarty_tpl->getVariable('smarty')->value['section']['job_id']['index']]['Price'];?>
</td>
<td align="center"><?php echo $_smarty_tpl->tpl_vars['job']->value[$_smarty_tpl->getVariable('smarty')->value['section']['job_id']['index']]['Location'];?>
</td>
<?php endfor; endif; ?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['jobdetail_id'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['jobdetail_id']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['jobdetail_id']['name'] = 'jobdetail_id';
$_smarty_tpl->tpl_vars['smarty']->value['section']['jobdetail_id']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['jobdetail']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['jobdetail_id']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['jobdetail_id']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jobdetail_id']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['jobdetail_id']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['jobdetail_id']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jobdetail_id']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['jobdetail_id']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['jobdetail_id']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['jobdetail_id']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jobdetail_id']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['jobdetail_id']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['jobdetail_id']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['jobdetail_id']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['jobdetail_id']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['jobdetail_id']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jobdetail_id']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['jobdetail_id']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['jobdetail_id']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['jobdetail_id']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['jobdetail_id']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['jobdetail_id']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['jobdetail_id']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['jobdetail_id']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jobdetail_id']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['jobdetail_id']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jobdetail_id']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['jobdetail_id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['jobdetail_id']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['jobdetail_id']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['jobdetail_id']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['jobdetail_id']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['jobdetail_id']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['jobdetail_id']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['jobdetail_id']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['jobdetail_id']['total']);
?>
    <td align="center"><?php echo $_smarty_tpl->tpl_vars['jobdetail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jobdetail_id']['index']]['NeedSex'];?>
</td>
<td align="center"><?php echo $_smarty_tpl->tpl_vars['jobdetail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jobdetail_id']['index']]['NeedQty'];?>
</td>
<td align="center"><?php echo $_smarty_tpl->tpl_vars['jobdetail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jobdetail_id']['index']]['AvailQty'];?>
</td>
<td align="center"><?php echo $_smarty_tpl->tpl_vars['jobdetail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jobdetail_id']['index']]['GatherTime'];?>
</td>
<td align="center"><?php echo $_smarty_tpl->tpl_vars['jobdetail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jobdetail_id']['index']]['GatherLoc'];?>
</td>
<td align="center"><?php echo $_smarty_tpl->tpl_vars['jobdetail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jobdetail_id']['index']]['Description'];?>
</td>
<td align="center"><?php echo $_smarty_tpl->tpl_vars['jobdetail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jobdetail_id']['index']]['HasInterView'];?>
</td>
<td align="center"><?php echo $_smarty_tpl->tpl_vars['jobdetail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jobdetail_id']['index']]['HasEatting'];?>
</td>
<td align="center"><?php echo $_smarty_tpl->tpl_vars['jobdetail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jobdetail_id']['index']]['HasSleepping'];?>
</td>
<td align="center"><?php echo $_smarty_tpl->tpl_vars['jobdetail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jobdetail_id']['index']]['Others'];?>
</td>
<td align="center"><a href="jobapply.php?JobID=<?php echo $_smarty_tpl->tpl_vars['jobdetail']->value[$_smarty_tpl->getVariable('smarty')->value['section']['jobdetail_id']['index']]['JobID'];?>
" >我要报名</a></td>
 <?php endfor; endif; ?>
  </tr>

</table>

<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php echo '<script'; ?>
 src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <?php echo '<script'; ?>
 src="../../assets/js/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>
</body>
</html>



<?php }
}
?>