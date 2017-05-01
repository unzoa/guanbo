<?php

header("content-type:text/html;charset=utf-8");

//输出调试函数
function show_bug($msg){
	echo "<pre style='color:red'>";
	var_dump($msg);
	echo "</pre>";
}
//定义css，img，js路径常量;
define('SITE_URL', '/guanbo/maxlb/');
//Home模块
define('HOME', SITE_URL.'Public/Home/');
define('HCSS', SITE_URL.'Public/Home/css/');
define('HIMG', SITE_URL.'Public/Home/img/');
define('HJS', SITE_URL.'Public/Home/js/');
define('HAUDIO', SITE_URL.'Public/Home/audio/');
//bootstrap
define('BCSS', SITE_URL.'Public/bootstrap/css/');
define('BJS', SITE_URL.'Public/bootstrap/js/');
// upload
define('UIMG', SITE_URL.'Public/');
//调试模式
define('APP_DEBUG',true);
//引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';
?>