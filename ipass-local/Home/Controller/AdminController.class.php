<?php
namespace Home\Controller;
use Think\Controller;
/**
* 
*/
class AdminController extends Controller
{
	function login(){
		if (!empty($_POST)) {
			$name = I('name');
			$pwd  = I('pwd');
			if ($name!=='zoaun') {
				$this->redirect("Admin/login", '',0.01,'<script>alert("用户不存在");</script>');
			}else{
				if ($pwd!=='111111') {
					$this->redirect("Admin/login", '',0.01,'<script>alert("密码错误");</script>');
				}else{
					session('myname',$name);
					$this->redirect("Admin/index");				
				}
			}
		}
		$this->display();
	}
    function validatelogin(){
        if (session('myname')=='') {
            $this->redirect("Admin/login");
        }
    }
	function logout(){
		session(null);
		$this->redirect('Admin/login');
	}
	function index(){
        $this->validatelogin();
		$storybanner = M('ipass_storybanner')->select();
		$this->banner=$storybanner;
		$this->story1=M('ipass_story')->where('type=1')->select();
		$this->display();
	}
	function updbanner($id){
        $this->validatelogin();
		$this->banner = M('ipass_storybanner')->where('id="'.$id.'"')->select();
		if (!empty($_POST)) {
            if(!empty($_FILES)){
                $config= array(
                    'rootPath'=>'./Public/', //保存根路径
                    'savePath'=>'Upload/', //保存路径
                    );
                    $upload = new \Think\Upload($config);
                    $z = $upload->uploadOne($_FILES['img']);
                    if (!$z) {
                        show_bug($upload->getError());
                    }else{
                        $bigimg=$z['savepath'].$z['savename'];
                    }
            }
            $array = array(
                'img'		=>$bigimg,
                'intro'   	=>I('intro')
                );
            $z = D('ipass_storybanner')->where('id="'.$id.'"')->save($array);
            if ($z) {
               $this->redirect("Admin/index", '',0.01,'<script>alert("上传成功");</script>');
            }else{
                $this->redirect("Admin/index", '',0.01,'<script>alert("上传失败");</script>');
            }
        }
        $this->display();
	}
	function addstory(){
        $this->validatelogin();
		if (!empty($_POST)) {
            if(!empty($_FILES)){
                $config= array(
                    'rootPath'=>'./Public/', //保存根路径
                    'savePath'=>'Upload/', //保存路径
                    );
                    $upload = new \Think\Upload($config);
                    $z = $upload->uploadOne($_FILES['img']);
                    if (!$z) {
                        show_bug($upload->getError());
                    }else{
                        $bigimg=$z['savepath'].$z['savename'];
                    }
            }
            $array = array(
                'title'   	=>I('title'),
                'img'		=>$bigimg,
                'content'	=>I('content'),
                'intro'   	=>I('intro'),
                'time'   	=>date('Y-m-d'),	
                'type'		=>I('type')
                );
            $z = D('ipass_story')->add($array);
            if ($z) {
               $this->redirect("Admin/index", '',0.01,'<script>alert("上传成功");</script>');
            }else{
                $this->redirect("Admin/index", '',0.01,'<script>alert("上传失败");</script>');
            }
        }
        $this->display();
	}
	function delstory($id){
        $this->validatelogin();
		$del = D('ipass_story')->where("id=$id")->delete();
        if($del){
            $this->redirect("Admin/index", '',0.01,'<script>alert("删除成功");</script>');
        }else{
            $this->redirect('Admin/index','',0.01,'<script>alert("删除失败");</script>');
        }
	}
	function updstory($id){
        $this->validatelogin();
		if (!empty($_POST)) {
            $array = array(
                'title'   	=>I('title'),
                'intro'   	=>I('intro'),
                'content'	=>I('content'),	
                'type'		=>I('type')
                );
            $z = D('ipass_story')->where('id="'.$id.'"')->save($array);
            if ($z) {
               $this->redirect("Admin/index", '',0.01,'<script>alert("上传成功");</script>');
            }else{
                $this->redirect("Admin/index", '',0.01,'<script>alert("上传失败");</script>');
            }
        }
        $this->story1=M('ipass_story')->where('id="'.$id.'"')->select();
		$this->display();
	}
	function qzql(){
        $this->validatelogin();
		$this->story1=M('ipass_story')->where('type=2')->select();
		$this->display();
	}
	function jyrd(){
        $this->validatelogin();
		$this->story1=M('ipass_story')->where('type=3')->select();
		$this->display();
	}
}
?>