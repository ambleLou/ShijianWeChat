<?php
require("system.class.inc.php");	//包含数据库连接和操作类



/*  定义服务器的绝对路径  */
define('BASE_PATH',$_SERVER['DOCUMENT_ROOT']);
/*  定义Smarty目录的绝对路径  */
define('SMARTY_PATH','/m/liyuqi/Smarty/');
/*  加载Smarty类库文件    */
require BASE_PATH.SMARTY_PATH.'Smarty.class.php';
/*  实例化一个Smarty对象  */
$smarty = new Smarty;
/*  定义各个目录的路径    */
$smarty->template_dir = BASE_PATH.SMARTY_PATH.'templates/';
$smarty->compile_dir = BASE_PATH.SMARTY_PATH.'templates_c/';
$smarty->config_dir = BASE_PATH.SMARTY_PATH.'configs/';
$smarty->cache_dir = BASE_PATH.SMARTY_PATH.'cache/';
/*  调试控制台  */
//$smarty->debugging = true;
/*  Smarty缓存 */
//$Smarty->caching = true;
/*  定义定界符  */
//$smarty->left_delimiter = '<{';
//$smarty->right_delimiter = '}>';


$connobj=new ConnDB("mysql","119.29.9.219","hlou","l912389750","test2",false);//数据库连接类实例化
$conn=$connobj->GetConnId();		//执行连接操作，返回连接标识

$admindb=new AdminDB();//数据库操作类实例化

$seppage=new SepPage();//分页类实例化

$usefun=new UseFun();//使用常用函数类实例化


/*function unhtml($params){
    extract($params);
    $text=$content;
    global $usefun;
    return $usefun->UnHtml($text);
}
$smarty->registerPlugin('function',"unhtml","unhtml");		//注册模板函数
*/
?>