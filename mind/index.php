<?php

header("content-type:text/html;charset=utf-8");

//输出调试函数
function show_bug($msg){
	echo "<pre style='color:red'>";
	var_dump($msg);
	echo "</pre>";
}
//定义css，img，js路径常量;
define('SITE_URL', '/guanbo/mind/');
//Home模块
define('HOME', SITE_URL.'Public/Home/');
define('CSS_URL', SITE_URL.'Public/Home/css/');
define('IMG_URL', SITE_URL.'Public/Home/img/');
define('JS_URL', SITE_URL.'Public/Home/js/');
//bootstrap插件
define('BS_URL', SITE_URL.'Public/bootstrap/css/');
define('BJS_URL', SITE_URL.'Public/bootstrap/js/');
//awesome字体
define('AWE_URL', SITE_URL.'Public/awesome/css/');
define('AWEJ_URL', SITE_URL.'Public/awesome/js/');
//Admin模块
define('ADMIN_CSS_URL', SITE_URL.'Public/Admin/css/');
define('ADMIN_IMG_URL', SITE_URL.'Public/Admin/img/');
define('ADMIN_JS_URL', SITE_URL.'Public/Admin/js/');
//section
define('S_', SITE_URL.'Public/Admin/section/');
//上传图片路径
define('IMG_UPLOAD', SITE_URL.'Public/');
//ueditor
define('U_', SITE_URL.'Public/Admin/ueditor/');
//调试模式
define('APP_DEBUG',true);
//引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';
?>