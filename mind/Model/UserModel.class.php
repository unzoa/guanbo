<?php
namespace Model;
use Think\Model;
/**
* 
*/
class UserModel extends Model
{
	//一次全部验证
	protected $patchValidate    =   true;
	//实现表单验证
	protected $_validate        =   array(
		array('username','reuqire','用户名必须填'),
		array('password','require','密码必须填'),
		array('password2','require','确认密码必须填写'),
//        //与密码的值得是一致的
        array('password2','password','与密码的信息必须一致',0,'confirm'),
	);  // 自动验证定义
	
}

?>