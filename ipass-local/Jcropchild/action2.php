<?php
require_once('crop.php');

//$src = 'upload/2014/06/07/14021146715797.jpg';
$src = $_GET['src'];
$userId = $_GET['userId'];
$rs = explode(".",$src);
$ext = strtolower($rs[count($rs)-1]);
$type = array('jpg', 'jpeg', 'png');
$path = sprintf('%s/%s/%s/', date('Y'), date('m'), date('d'));

$fileName = time() . rand(1000, 9999) . '.' . $ext;
$fullName = $path . $fileName;	
$path = rtrim('upload', DIRECTORY_SEPARATOR) . '/' . $fullName;

$crop = new App_Util_Crop();
$crop->initialize($src, $path, $_GET['x'], $_GET['y'], 200, 200, $_GET['w'], $_GET['h']);
$success = $crop->generate_shot();
//print_r($success);
$msg = $success ? '裁剪成功' : '裁剪失败';

//连接数据库
$con = mysql_connect('127.0.0.1','root','');
if (!$con) {
	die('cant connect'.mysql_error());
}
mysql_select_db('test',$con);
mysql_query("update ot_archive set head='".$path."' where id='".$userId."' ");
mysql_close($con);

echo json_encode(array('result' => $success, 'msg' => $msg));
//print_r($success);