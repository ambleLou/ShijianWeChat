<?php /* Smarty version 3.1.27, created on 2015-11-27 18:27:14
         compiled from "C:\wamp\www\liyuqi\Smarty\templates\findjob.html" */ ?>
<?php
/*%%SmartyHeaderCode:595056589272b6a453_75715665%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02dc4ca99f15163d6e828e0099da46ebecc12910' => 
    array (
      0 => 'C:\\wamp\\www\\liyuqi\\Smarty\\templates\\findjob.html',
      1 => 1448645230,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '595056589272b6a453_75715665',
  'variables' => 
  array (
    'job' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56589272c5b000_04378195',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56589272c5b000_04378195')) {
function content_56589272c5b000_04378195 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '595056589272b6a453_75715665';
?>
<!-- HTML5文件 -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<title>找兼职</title>
		<link rel="stylesheet" href="assets/agile/css/agile.layout.css">
		<link rel="stylesheet" href="assets/agile/css/flat/flat.component.css">
		<link rel="stylesheet" href="assets/agile/css/flat/flat.color.css">
		<link rel="stylesheet" href="assets/agile/css/flat/iconline.css">
		<link rel="stylesheet" href="assets/app/css/app.css">
		<link rel="stylesheet" href="frozen/css/frozen.css">
		<link rel="stylesheet" href="Tanlucss/common.css">
		<link rel="stylesheet" href="Tanlucss/home.css">
		<link rel="stylesheet" href="Tanlucss/style.css">

		<!-- js-->
		<?php echo '<script'; ?>
 src="assets/third/jquery/jquery-2.1.3.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="assets/third/jquery/jquery.mobile.custom.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="assets/third/iscroll/iscroll-probe.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="assets/third/arttemplate/template-native.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="frozen/js/frozen.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="http://i.gtimg.cn/vipstyle/frozenjs/1.0.1/frozen.js?_bid=304"><?php echo '</script'; ?>
>
		<!-- agile -->
		<?php echo '<script'; ?>
 type="text/javascript" src="assets/agile/js/agile.js"><?php echo '</script'; ?>
>
		<!--- bridge --->
		<?php echo '<script'; ?>
 type="text/javascript" src="assets/bridge/exmobi.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="assets/bridge/agile.exmobi.js"><?php echo '</script'; ?>
>
		<!-- app -->
		<?php echo '<script'; ?>
 type="text/javascript" src="assets/app/js/app.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="Tanlujs/job.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="Tanlujs/global.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" name="baidu-tc-cerfication" data-appid="7329846" src="http://apps.bdimg.com/cloudaapi/lightapp.js"><?php echo '</script'; ?>
>

	</head>
	<body>

		<div id="section_container">
			<section id="list_more_section" data-role="section" class="active">
				<header>
					<div class="titlebar">
						<a data-toggle="back" href="#"><i class="iconfont iconline-arrow-left"></i></a>
						<h1>兼职信息</h1>

					</div>
					<?php echo '<script'; ?>
 type="text/javascript">
						$(function(){
							initDownList();
						});
					<?php echo '</script'; ?>
>
				</header>

				<article data-role="article" id="main_article" data-scroll="verticle" class="active" style="top:44px;bottom:0px;">
					<div class="ui-searchbar-wrap ui-border-b">
						<div class="ui-searchbar ui-border-radius">
							<i class="ui-icon-search"></i>
							<div class="ui-searchbar-text">搜索兼职</div>
							<div class="ui-searchbar-input"><input value="" type="text" placeholder="搜索兼职" autocapitalize="off"></div>
							<i class="ui-icon-close"></i>
						</div>
						<button class="ui-searchbar-cancel">取消</button>
					</div>
					<div class="lpFilter">
						<div class="topRe">
							<ul>

								<li id="price" class="" ><span><i id="filter1">分类</i><input type="hidden" id="jobtypeid" value=""></span></li>
								<li id="housetype" class=""><span><i id="filter2">结算</i><input type="hidden" id="settlecircleid" value=""></span></li>
								<li id="rsswitch" class=""><span><i id="filter3">5km</i><input type="hidden" id="distancecope" value=""></span></li>
							</ul>
						</div>
						<div class="optionlist" id="optionlist" style="display: none;">
							<div class="priceinfo" id="priceinfo" style="display: block;">
								<ul class="optionlistCon" id="jobtypeUL">
									<li><a href="javascript:void(0)" onclick="click_jobtype('')">全部</a></li>
									<li><a href="javascript:void(0)" onclick="click_jobtype(29)">演员</a></li>
									<li><a href="javascript:void(0)" onclick="click_jobtype(28)">APP推广/扫码</a></li>
									<li><a href="javascript:void(0)" onclick="click_jobtype(27)">调研</a></li>
									<li><a href="javascript:void(0)" onclick="click_jobtype(26)">司仪/主持人</a></li>
									<li><a href="javascript:void(0)" onclick="click_jobtype(25)">模特/礼仪</a></li>
									<li><a href="javascript:void(0)" onclick="click_jobtype(24)">老师/家教</a></li>
									<li><a href="javascript:void(0)" onclick="click_jobtype(23)">充场</a></li>
									<li><a href="javascript:void(0)" onclick="click_jobtype(22)">保安</a></li>
									<li><a href="javascript:void(0)" onclick="click_jobtype(20)">实习生</a></li>
									<li><a href="javascript:void(0)" onclick="click_jobtype(6)">钟点工</a></li>
									<li><a href="javascript:void(0)" onclick="click_jobtype(18)">快递/物流</a></li>
									<li><a href="javascript:void(0)" onclick="click_jobtype(14)">客服</a></li>
									<li><a href="javascript:void(0)" onclick="click_jobtype(2)">促销/导购</a></li>
									<li><a href="javascript:void(0)" onclick="click_jobtype(1)">单页派发</a></li>
									<li><a href="javascript:void(0)" onclick="click_jobtype(10)">校园代理</a></li>
									<li><a href="javascript:void(0)" onclick="click_jobtype(3)">服务员</a></li>
									<li><a href="javascript:void(0)" onclick="click_jobtype(30)">活动帮工/现场协助</a></li>
									<li><a href="javascript:void(0)" onclick="click_jobtype(31)">引导员</a></li>
									<li><a href="javascript:void(0)" onclick="click_jobtype(32)">拓客</a></li>
									<li><a href="javascript:void(0)" onclick="click_jobtype(33)">举牌</a></li>
									<li><a href="javascript:void(0)" onclick="click_jobtype(34)">文员/助理</a></li>
									<li><a href="javascript:void(0)" onclick="click_jobtype(35)">销售/业务</a></li>
									<li><a href="javascript:void(0)" onclick="click_jobtype(36)">店员/营业员</a></li>
									<li><a href="javascript:void(0)" onclick="click_jobtype(37)">美工/设计</a></li>
									<li><a href="javascript:void(0)" onclick="click_jobtype(38)">翻译/编辑</a></li>
									<li><a href="javascript:void(0)" onclick="click_jobtype(39)">送餐员</a></li>
									<li><a href="javascript:void(0)" onclick="click_jobtype(40)">临时工</a></li>
									<li><a href="javascript:void(0)" onclick="click_jobtype(41)">导游</a></li>
									<li><a href="javascript:void(0)" onclick="click_jobtype(42)">收银员</a></li>
									<li><a href="javascript:void(0)" onclick="click_jobtype(43)">寒假工</a></li>
									<li><a href="javascript:void(0)" onclick="click_jobtype(44)">暑期工</a></li>
									<li><a href="javascript:void(0)" onclick="click_jobtype(21)">其他</a></li>
								</ul>
								<div class="close">收起</div>
							</div>
							<div class="housetypeinfo" id="housetypeinfo" style="display: none;">
								<ul class="optionlistCon" id="settleCirleTypesUL">
									<li><a href="javascript:void(0)" onclick="click_settlecircle('')">不限</a></li>
									<li><a href="javascript:void(0)" onclick="click_settlecircle(1)">日结</a></li>
									<li><a href="javascript:void(0)" onclick="click_settlecircle(2)">周结</a></li>
									<li><a href="javascript:void(0)" onclick="click_settlecircle(3)">月结</a></li>
									<li><a href="javascript:void(0)" onclick="click_settlecircle(4)">完工结算</a></li>
								</ul>
								<div class="close">收起</div>
							</div>

							<div class="rsswitchinfo" id="rsswitchinfo" style="display: none;">
								<ul class="optionlistCon" id="c">
									<li><a href="javascript:void(0)" onclick="click_distance('1km')">1km</a></li>
									<li><a href="javascript:void(0)" onclick="click_distance('2km')">2km</a></li>
									<li><a href="javascript:void(0)" onclick="click_distance('3km')">3km</a></li>
									<li><a href="javascript:void(0)" onclick="click_distance('4km')">4km</a></li>
									<li><a href="javascript:void(0)" onclick="click_distance('5km')">5km</a></li>

								</ul>
								<div class="close">收起</div>
							</div>
						</div>




					<div class="scroller">
						<ul class="listitem">
							<li class="sliver" >兼职列表</li>
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
							<a href="jobdetail.php?JobID=<?php echo $_smarty_tpl->tpl_vars['job']->value[$_smarty_tpl->getVariable('smarty')->value['section']['job_id']['index']]['ID'];?>
">
							<li>
								<!--<i class="ricon iconfont iconline-arrow-right"></i>-->
								<div style="background-image:url(assets/app/img/ca.png);" class="img appimg"></div>
								<div class="text">
									<?php echo $_smarty_tpl->tpl_vars['job']->value[$_smarty_tpl->getVariable('smarty')->value['section']['job_id']['index']]['Title'];?>

									<i class="right iconfont iconline-fav">进行中</i>
									<small><?php echo $_smarty_tpl->tpl_vars['job']->value[$_smarty_tpl->getVariable('smarty')->value['section']['job_id']['index']]['Location'];?>
<font class="right"><?php echo $_smarty_tpl->tpl_vars['job']->value[$_smarty_tpl->getVariable('smarty')->value['section']['job_id']['index']]['TimeFrom'];?>
</font></small>
								</div>
							</li>
							</a>
							<?php endfor; endif; ?>

					    </ul>
					</div>
					</div>
				</article>

			</section>

		</div>
		<footer class="ui-footer ui-footer-btn">
			<ul class="ui-tiled ui-border-t">
				<li data-href="index.html" class="ui-border-r"><div>已完成的</div></li>
				<li data-href="ui.html" class="ui-border-r"><div>进行中</div></li>
				<li data-href="js.html" class="ui-border-r"><div>已报名</div></li>
				<li data-href="js.html"><div>所有兼职</div></li>
			</ul>
		</footer>
		<?php echo '<script'; ?>
 type="text/javascript">
			$('.ui-searchbar').tap(function(){
				$('.ui-searchbar-wrap').addClass('focus');
				$('.ui-searchbar-input input').focus();
			});
			$('.ui-searchbar-cancel').tap(function(){
				$('.ui-searchbar-wrap').removeClass('focus');

			});

		<?php echo '</script'; ?>
>


	</body>
</html><?php }
}
?>