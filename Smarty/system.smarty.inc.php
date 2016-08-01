<?php
require('C:\wamp\www\mytest\Smarty\Smarty.class.php');			//包含模板文件

class SmartyProject extends  Smarty{		//定义类，继承模板类
	
	function SmartyProject(){				//定义方法
		$this->template_dir = '\\';			//指定模板文件存储位置
		$this->compile_dir = 'C:\wamp\www\mytest\Smarty\templates_c/';//指定编译文件存储位置
		$this->config_dir = 'C:\wamp\www\mytest\Smarty\configs/';			//指定配置文件存储位置
		$this->cache_dir = 'C:\wamp\www\mytest\Smarty\cache/'; 			//指定缓存文件存储位置
		$this->left_delimiter = '{';							//设置Smarty的定界符
		$this->right_delimiter = '}';//设置Smarty的定界符
    }
} 

?>