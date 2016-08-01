<?php /* Smarty version 3.1.27, created on 2015-11-26 13:33:20
         compiled from "C:\wamp\www\liyuqi\Smarty\templates\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:96595656fc1062a4c2_94908906%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dea8acbc814b738f7d075c5385e4bf61492a5787' => 
    array (
      0 => 'C:\\wamp\\www\\liyuqi\\Smarty\\templates\\index.tpl',
      1 => 1448523837,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96595656fc1062a4c2_94908906',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5656fc106c8cf5_58389751',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5656fc106c8cf5_58389751')) {
function content_5656fc106c8cf5_58389751 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '96595656fc1062a4c2_94908906';
echo '<?php 
';?>session_start();
<?php echo '?>';?>
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

    <title>Starter Template for Bootstrap</title>

   
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
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
            <li class="active"><a href="#">Home</a></li>
            <li><a href="getcode.php">getcode</a></li>
            <li><a href="register.php">注册</a></li>
            <li><a href="userDetail.php">填写详细信息</a></li>
            <li><a href="jobmanage.php">兼职报名</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="starter-template">
        <h1>Bootstrap starter template</h1>
        <p class="lead">
        </p>
      </div>

<?php echo '<?php
';?>echo $_SESSION['UserID'];
<?php echo '?>';?>

   
  </body>
</html><?php }
}
?>