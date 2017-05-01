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
	
	function checkNamePwd($name,$pwd)
	{
		//check name
		//selelct * from hw_manage  where name =$name
		//select (); find ();
		//根据制定的字段查询getByxxx();返回以为数据  getByName($name);父类model  __call()方法
		$info=$this->getByname($name);
		//$info null 错误
		//$info 一维数组 正确
		if($info!=null){
			//验证密码(查询出来的密码与输入的密码节能型比叫)
			if ($info['pwd']!=$pwd) {
				return false;
			}else{
				return $info;
			}
		}else{
			return false;
		}
		//show_bug($info);
	}
}

?>