<?php
namespace Home\Controller;
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
			// $verify=new \Think\Verify();
			// if (!$verify->check($_POST['captcha'])) {
			// 	echo "<script>alert('验证码错误');</script>";
			// }else{
			// 	echo "<script>alert('验证码正确');</script>";
				$user=  new \Model\UserModel();
				$rst = $user->checkNamePwd($_POST['name'],$_POST['pwd']);
				if ($rst===false) {
					echo "<script>alert('用户名或密码错误');</script>";
				}else{
					session('name',$rst['name']);
					session('id',$rst['id']);
					//设置session(name,value，有效时间)  设置session
					//session（name ，null） 删除指定session
					//session(name) 获取session
					//session(null) 清空全部session
					$this->redirect('Home/Index/index');

				}
			// }
		}
			$this->assign('lang',L());
			$this->display();	
		
	}
	function logout(){
		session(null);
		$this->redirect('Home/Manage/login');
	}

	function register(){
    	//判断表单是否提交
    	$user = D("user");

    	$team = M("team")->select();
    	$this->assign("team",$team);

    	$level = M("level")->select();
    	$this->assign("level",$level);
    	
    	if(!empty($_POST)){
    		$verify=new \Think\Verify();
			if (!$verify->check($_POST['captcha'])) {
				echo "<script>alert('验证码错误');</script>";
			}else{
				$inputName = $_POST['name'];
				$f = $user->where("name='".$inputName."'")->select();
				if (empty($f)) {
		    		$user->create();
		    		$rst = $user->add();
		    		if($rst){
		    			echo "成功";
		    			$this->redirect("Home/Manage/login");
		    		}else{
		    			echo "失败";
		    		}
		    	}else{
		    		echo "<script>alert('用户名已存在');</script>";
		    	}
	    	}
    	}
    	else{
    		
    	}
    	$this->display();
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