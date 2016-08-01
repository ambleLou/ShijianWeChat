<?php /* Smarty version 3.1.27, created on 2015-11-26 13:52:38
         compiled from "C:\wamp\www\liyuqi\Smarty\templates\jobmanage.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:449456570096dbd5d7_38876309%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1828b68f82c1dbb50db7f56a33397e935ef6221' => 
    array (
      0 => 'C:\\wamp\\www\\liyuqi\\Smarty\\templates\\jobmanage.tpl',
      1 => 1448542205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '449456570096dbd5d7_38876309',
  'variables' => 
  array (
    'job' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56570096e15fa2_36003686',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56570096e15fa2_36003686')) {
function content_56570096e15fa2_36003686 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '449456570096dbd5d7_38876309';
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


    <!-- Bootstrap core CSS -->
   

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
    
    
    <title>{ $title }</title>
<?php echo '<script'; ?>
 language="javascript" src="js/createxmlhttp.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" src="js/userDetail.js"><?php echo '</script'; ?>
>
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
            <li><a href="">查询还未开始兼职</a></li>
            <li><a href="jobmanage.php">我要找兼职</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">我的兼职 <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">还未开始兼职</a></li>
                <li><a href="#">正在进行兼职</a></li>
                <li><a href="#">已完成兼职</a></li>
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
  </tr>
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
  <tr>
    <td align="center"><?php echo $_smarty_tpl->tpl_vars['job']->value[$_smarty_tpl->getVariable('smarty')->value['section']['job_id']['index']]['Name'];?>
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
    <td align="center"><a href="jobDetail.php?JobID=<?php echo $_smarty_tpl->tpl_vars['job']->value[$_smarty_tpl->getVariable('smarty')->value['section']['job_id']['index']]['ID'];?>
" >详细信息</a></td>
  </tr>
<?php endfor; endif; ?>
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
</html><?php }
}
?>