<?php
header("content-type:text/html;charset=utf-8");
//输出调试函数
function show_bug($msg){
	echo "<pre style='color:red'>";
	var_dump($msg);
	echo "</pre>";
}
//常量
define('SITE_URL', '/guanbo/baoshu/');
//Home模块
define('HOME', SITE_URL.'Public/Home/');
define('HCSS', SITE_URL.'Public/Home/css/');
define('HIMG', SITE_URL.'Public/Home/img/');
define('HJS', SITE_URL.'Public/Home/js/');
//bootstrap
define('BCSS', SITE_URL.'Public/bootstrap/css/');
define('BJS', SITE_URL.'Public/bootstrap/js/');
//调试模式
define('APP_DEBUG',true);
//上传图片路径
define('UIMG', SITE_URL.'Public/');
//上传截图文件路径
define('SITE_PATH', dirname(__FILE__));
//入口文件
include"./ThinkPHP/ThinkPHP.php";
?>