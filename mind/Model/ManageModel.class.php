<?php
namespace Model;
use Think\Model;
/**
* 
*/
class ManageModel extends Model
{
	
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