<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
    public function index(){
    	if (session('stid')=='') {
    		$this->display();
    	}else{
    		$this->redirect('Home/Index/lb');
    	}
    }

    function login(){
        $user = D('student');
        $date = date('Y-m-d');
    	if (!empty($_POST)) {
    		$number = I('number');
    		$pwd = md5(I('pwd'));
            if (!empty($number)) {
                $info = $user->getBynumber($number,'number');
                if($info=='' || $info['type']==''){
                    $this->redirect('Home/Index/index','',0.01,"<script>alert('账户不存在！');</script>");
                }else{
                    if($info['password']!=$pwd){
                        $this->redirect('Home/Index/index','',0.01,"<script>alert('密码不正确！');</script>");
                    }else{
                        // 增加时间限制
                        if (strtotime($date)<strtotime($info['timeout'])) {
                            // 现在时间小于限制时间时，可以通过限制
                            session('number',$info['number']);
                            session('stid',$info['id']);
                            session('nickname',$info['nickname']);

                            echo "<iframe src='http://127.0.0.1/index.asp?name=".session('number')."&pwd".$pwd."' style='display:none'></iframe>";

                            $this->redirect('Home/Index/lb');
                        }else{
                            // 不能通过限制，提示续费
                            $this->redirect('Home/Index/index','',0.01,"<script>alert('非常感谢您的信任，套餐时效结束，请续费后再使用！');</script>");
                        }
                        
                    }
                }
            }else{
                $this->redirect('Home/Index/index','',0.01,"<script>alert('账号不能为空');</script>");
            }
    	}
    }

    function logout(){
        session(null);
        $this->redirect('Home/Index/index');
    }

    function validateLogin(){
    	if (session('stid')=='') {
    		$this->redirect('Home/Index/index');
    	}
    }

    // 头像
    function head(){
        $userpic = D("student")->getFieldByid(session('stid'),'max_head');
        if (!empty($userpic)) {
            # code...
            $this->userpic = $userpic;
        }else{
            $this->userpic = "headDefault.png";
        }
        $this-> username = session('nickname');
    }

    // 修改账户
    function edit_user(){
        $this->validateLogin();
        $this->head();
        $student = D('student');
        $this->student = M('student')->where('id="'.session('stid').'"')->select();

        if (!empty($_POST)) {
            $nickname = I('nickname');
            $pwd = I('new_pwd');

                $array = array(
                    'password'  => md5($pwd),
                    'nickname'  => $nickname
                    );
                $z = $student-> where('id="'.session('stid').'"')->save($array);
                if ($z) {
                    echo "<script>alert('更新成功');</script>";
                    $this->logout();
                }else{
                    $this->redirect('Home/Index/lb','',0.01,"<script>alert('更新失败');</script>");
                }
        }
        $this->display();
    }
    
    //量表-1
    function lb(){
        $this->validateLogin();
        $this->head();
        $lblist1 = M('max_lblist')->where('new_type=1')->select();
        for ($i=0; $i < count($lblist1); $i++) { 
            $lblist1[$i]['new_intro'] = mb_substr($lblist1[$i]['new_intro'],0,30,'utf-8').'...';
        }
        $this->assign('lblist1',$lblist1);

        $lblist2 = M('max_lblist')->where('new_type=2')->select();
        for ($i=0; $i < count($lblist2); $i++) { 
            $lblist2[$i]['new_intro'] = mb_substr($lblist2[$i]['new_intro'],0,30,'utf-8').'...';
        }
        $this->assign('lblist2',$lblist2);

        $lblist3 = M('max_lblist')->where('new_type=3')->select();
        for ($i=0; $i < count($lblist3); $i++) { 
            $lblist3[$i]['new_intro'] = mb_substr($lblist3[$i]['new_intro'],0,30,'utf-8').'...';
        }
        $this->assign('lblist3',$lblist3);

        $lblist4 = M('max_lblist')->where('new_type=4')->select();
        for ($i=0; $i < count($lblist4); $i++) { 
            $lblist4[$i]['new_intro'] = mb_substr($lblist4[$i]['new_intro'],0,30,'utf-8').'...';
        }
        $this->assign('lblist4',$lblist4);

        $lblist5 = M('max_lblist')->where('new_type=5')->select();
        for ($i=0; $i < count($lblist5); $i++) { 
            $lblist5[$i]['new_intro'] = mb_substr($lblist5[$i]['new_intro'],0,30,'utf-8').'...';
        }
        $this->assign('lblist5',$lblist5);

        $lblist6 = M('max_lblist')->where('new_type=6')->select();
        for ($i=0; $i < count($lblist6); $i++) { 
            $lblist6[$i]['new_intro'] = mb_substr($lblist6[$i]['new_intro'],0,30,'utf-8').'...';
        }
        $this->assign('lblist6',$lblist6);

        $lblist7 = M('max_lblist')->where('new_type=7')->select();
        for ($i=0; $i < count($lblist7); $i++) { 
            $lblist7[$i]['new_intro'] = mb_substr($lblist7[$i]['new_intro'],0,30,'utf-8').'...';
        }
        $this->assign('lblist7',$lblist7);

        $lblist8 = M('max_lblist')->where('new_type=8')->select();
        for ($i=0; $i < count($lblist8); $i++) { 
            $lblist8[$i]['new_intro'] = mb_substr($lblist8[$i]['new_intro'],0,30,'utf-8').'...';
        }
        $this->assign('lblist8',$lblist8);

        $lblist9 = M('max_lblist')->where('new_type=9')->select();
        for ($i=0; $i < count($lblist9); $i++) { 
            $lblist9[$i]['new_intro'] = mb_substr($lblist9[$i]['new_intro'],0,30,'utf-8').'...';
        }
        $this->assign('lblist9',$lblist9);

        $lblist10 = M('max_lblist')->where('new_type=10')->select();
        for ($i=0; $i < count($lblist10); $i++) { 
            $lblist10[$i]['new_intro'] = mb_substr($lblist10[$i]['new_intro'],0,30,'utf-8').'...';
        }
        $this->assign('lblist10',$lblist10);

        $lblist11 = M('max_lblist')->where('new_type=11')->select();
        for ($i=0; $i < count($lblist11); $i++) { 
            $lblist11[$i]['new_intro'] = mb_substr($lblist11[$i]['new_intro'],0,30,'utf-8').'...';
        }
        $this->assign('lblist11',$lblist11);

        $this->display();
    }
    //量表测试-2
    function lbtest($id){
        $this->validateLogin();
        $this->head();
        $this->stenid = session('stid');
        $this->id = $id;
        $this->display();
    }
    //我的测试-2
    function mytest(){
        $this->validateLogin();
        $this->head();
        $this->number = session('number');
        $this->display();
    }

    // music
    function music(){
        $this->validateLogin();
        $this->head();
        $this->number = session('number');
        $this->display();
    }
    function listen($name,$name2){
        $this->validateLogin();
        $this->head();
        $this->name = $name;
        // $name2 = mb_convert_encoding($name2, "UTF-8","gb2312")
        $this->name2 = $name2;

        $this->music_count = $music_count = D("music_count")->getFieldByname($name2,'count');
        $array= array(
            'count'=> $music_count+1
            );
        D('music_count')->where('name="'.$name2.'"')->save($array);

        $this->display();
    }

}