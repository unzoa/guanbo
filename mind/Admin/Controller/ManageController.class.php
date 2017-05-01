<?php
namespace Admin\Controller;
use Think\Controller;

/**
* 
*/
class ManageController extends Controller
{
	
	function login()
	{
		//获取语言变量信息；L()获得全部语言；L（‘username’）获得制定语言
		//.show_bug(L());
		if(!empty($_POST)){
			//print_r($_POST);
			//$verify=new \Think\Verify();
			//if (!$verify->check($_POST['captcha'])) {
				//echo "验证码错误";
			//}else{
				//echo "验证码正确";
				$user=  new \Model\ManageModel();
				$rst = $user->checkNamePwd($_POST['name'],$_POST['pwd']);
				if ($rst===false) {
					echo "username or pwd error";
				}else{
					session('name',$rst['name']);
					session('id',$rst['id']);
					//设置session(name,value，有效时间)  设置session
					//session（name ，null） 删除指定session
					//session(name) 获取session
					//session(null) 清空全部session
					$this->redirect('Admin/Admin/index');

				}
			//}
		}
			$this->assign('lang',L());
			$this->display();	
		
	}
	function logout(){
		session(null);
		$this->redirect('Admin/Manage/login');
	}
	//制作专门方法实现验证码
	function verifyImg(){
		$config=array(
			'imageH' =>40,
			'imageW' =>130,
			'fontSize' =>18,
			'length' =>4,
			'useCurve'  =>  false,
			);
		$verify=new \Think\Verify($config);
		//show_bug($verify);
		$verify->entry();
	}
}
?>