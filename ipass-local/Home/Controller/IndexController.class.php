<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        if (session('stid')=='' ){
            # code...
            $this->display();
        }else{
            $this->redirect('Home/Index/lb');
        }
        
    }
    function validateLogin(){
        if (session('stid')=='') {
            $this->redirect('Home/Index/index');
        }
    }
    function login(){
        $user = D('student');
    	if (!empty($_POST)) {
    		$name = I('name');
    		$pwd = md5(I('pwd'));
            if (!empty($name)) {
                $info = $user->getBynumber($name,'number');
                if($info==''){
                    $this->redirect('Home/Index/index','',0.01,"<script>alert('账户不存在！');</script>");
                }else{
                    if($info['password']!=$pwd){
                        $this->redirect('Home/Index/index','',0.01,"<script>alert('用户密码不正确！');</script>");
                    }else{
                        session('name',$info['number']);
                        session('stid',$info['id']);
                        session('nickname',$info['nickname']);
                        session('archive',$info['archive']);

                        echo "<iframe src='http://127.0.0.1/index.asp?name=".session('name')."&pwd".$pwd."' style='display:none'></iframe>";

                        $this->redirect('Home/Index/index');
                    }
                }
            }else{
                $this->redirect('Home/Index/index','',0.01,"<script>alert('手机号不能为空');</script>");
            }
    	}
    }
    function logout(){
        session(null);
        $this->redirect('Home/Index/index');
    }
    function forgetpassword(){
        $this->head();
        $student = D('student');

        if (!empty($_POST)) {
            $number = I('number');
            $archive = I('archive');
            $pwd = I('new_pwd');
            $pre_archive = $student->getFieldBynumber($number,'archive');
            if ($archive!==$pre_archive) {
                $this->redirect('Home/Index/forgetpassword','',0.01,"<script>alert('更新失败,孩子的身份证号不对！');</script>");
            }else{
                $array = array(
                    'password'  => md5($pwd),
                    );
                $z = $student-> where('number="'.$number.'"')->save($array);
                if ($z) {
                    $this->redirect('Home/Index/index','',0.01,"<script>alert('更新成功');</script>");
                }else{
                    $this->redirect('Home/Index/forgetpassword','',0.01,"<script>alert('更新失败');</script>");
                }
            }
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
    function reg(){
        if (!empty($_POST)) {
            $verify=new \Think\Verify();
            if (!$verify->check($_POST['captcha'])) {
                echo "<script>alert('验证码错误');</script>";
            }else{
        		$number = I('number');
        		$pwd = md5(I('password'));
                $nickname = I('nickname');
				if(is_numeric($number)==1){
					//将数据插入student和access数据库
					$student = D('student');
					$info = $student ->getBynumber($number,'number');
					if ($info=='') {
						$data = array(
						'number'   => $number,
						'password' => $pwd,
						'nickname' => $nickname
						);
						$rst = $student -> add($data);
						echo "<iframe src='http://127.0.0.1/addme.asp?u=".$number."&pwd=".$pwd."' style='display:none'></iframe>";
						if ($rst) {
							$this->redirect('Home/Index/index','',0.01,"<script>alert('现在登录吧！');</script>");
						}
					}else{
						$this->redirect('Home/Index/reg','',0.01,"<script>alert('aOh!您的手机号已经注册了！');</script>");
					}
				}else{
					$this->redirect('Home/Index/reg','',0.01,"<script>alert('帐号只能是数字');</script>");
				}
                
            }
            
        }
    	$this->display();
    }
    // 档案注册入口
    function get_in_archive(){
        $this->validateLogin();
        $child_id = I('child_id');
        $relation = I('relation');
        if (!empty($_POST)) {
            # code...
            # 存孩子id到student表中
            # 判断child_id重复  -X
            $array = array(
                'archive' => $child_id,
                //'relation'=> $relation
                );
            $student = D('student');
            $info = $student ->getByarchive($child_id,'archive');
            if ($info=='') {
                $updateStudent = $student->where('id="'.session('stid').'"')->save($array);
                if ($updateStudent) {
                    session('archive',$child_id);
                    $array2 = array(
                        'relation' => $relation,
                        'child_id' => $child_id
                        );
                    $z = D('ot_archive') ->add($array2);
                    if ($z) {
                        echo '<script>alert("创建成功");</script>';
                    }else{
                        echo '<script>alert("创建失败");</script>';
                    }
                    $this->redirect("Home/Index/archive", '',0.01,'<script>alert("请编辑档案资料！");</script>');
                }
            }else{
                $this->redirect('Home/Index/get_in_archive','',0.01,"<script>alert('aOh!很抱歉，ID已存在了');</script>");
            }
            

        }
        $this->head();
        $this->display();
    }
    // 编辑档案
    function edit_archive(){
        $this->validateLogin();
        $this->archive = M('ot_archive')->where('child_id="'.session('archive').'"')->select();
        $this->head();
        $this->display();
    }
    // 保存基本信息
    function archive_basic(){
        if (!empty($_POST) ){
            $array = array(
                'name' => I('name'),
                'sex' => I('sex'),
                'minzu' => I('minzu'),
                'birthday' => I('birthday'),

                'birthday_place' => I('b_province').'/'.I('b_city').'/'.I('b_county'),
                'xuexing' => I('xue_xing'),
                'shengao' => I('shen_gao'),
                'tizhong' => I('weight'),
                'fenwan' => I('fen_wan'),
                'manyue' => I('full_month'),
                'birth_tizhong' => I('birth_weight'),
                'duzi' => I('only_child'),
                'brother' => I('brother_sister'),

                'paihang' => I('home_place'),
                'home' => I('now_live'),
                'fuyangren' => I('child_mother'),
                'dadnianling' => I('father_age'),
                'momnianling' => I('mother_age'),
                'rutuo' => I('baby_farm_age'),

                'walknianling' => I('walk_age'),
                'talknianling' => I('talk_age'),
                );
            $updateArchive = D('ot_archive')->where('child_id="'.session('archive').'"')->save($array);
            if ($updateArchive) {
                # code...
                $this->redirect("Home/Index/edit_archive", '',0.01,'<script>alert ("保存成功");</script>');
            }else{
                $this->redirect("Home/Index/edit_archive");
            }
        }
    }
    // 保存家庭信息
    function archive_family(){
        if (!empty($_POST)) {
            # code...
            $live_with = I('live_with');
            $haha = '';
            for ($i=0; $i <count($live_with) ; $i++) { 
                if ($live_with[$i]=='') {

                }else{
                    $haha = $haha.$live_with[$i].',';
                }
            }
            $child_live_with = substr($haha,0,strlen($haha)-1);
            $array = array(
                'tongjuren'         =>$child_live_with,
                'homewell'          =>I('family_relation'),
                'dadmom'            =>I('dadmom_relation'),
                'jiaoyufangshi'     =>I('teach_way'),
                'guanjiaoyijian'    =>I('guanjiao'),
                'fuqinxueli'        =>I('dad_record'),
                'muqinxueli'        =>I('mom_record'),
                'fuqinzhiye'        =>I('dad_job'),
                'muqinzhiye'        =>I('mom_job')
                );
            $updateArchive = D('ot_archive')->where('child_id="'.session('archive').'"')->save($array);
            if ($updateArchive) {
                # code...
                $this->redirect("Home/Index/edit_archive", '',0.01,'<script>alert ("保存成功");</script>');
            }else{
                $this->redirect("Home/Index/edit_archive");
            }
        }
    }
    // 保存學校信息
    function archive_school(){
        if (!empty($_POST)) {
           $array = array(
            'banji'             =>I('myschool'),
            'xuexiaolocation'   =>I('c_province').'/'.I('c_city').'/'.I('c_county'),
            'xuexiaoleixing'    =>I('school_style'),
            'laoshiguanxi'      =>I('teacher_relation'),
            'tongxueguanxi'     =>I('mates_relation')
            ); 
           $updateArchive = D('ot_archive')->where('child_id="'.session('archive').'"')->save($array);
            if ($updateArchive) {
                # code...
                $this->redirect("Home/Index/edit_archive", '',0.01,'<script>alert ("保存成功");</script>');
            }else{
                $this->redirect("Home/Index/edit_archive");
            }
        }
    }
    // 修改账户
    function edit_user(){
        $this->validateLogin();
        $this->head();
        $student = D('student');
        $this->student = M('student')->where('id="'.session('stid').'"')->select();

        // $pre_pwd = $student->getFieldByid(session('stid'),'password');

        if (!empty($_POST)) {
            $nickname = I('nickname');
            $pwd = I('new_pwd');

            // $html_pre_pwd = md5(I('pre_pwd')); 

            // if ($pre_pwd!==$html_pre_pwd) {
            //     echo "<script>alert('原密码不正确');</script>";
            // }else{

                $array = array(
                    'password'  => md5($pwd),
                    'nickname'  => $nickname
                    );
                $z = $student-> where('id="'.session('stid').'"')->save($array);
                if ($z) {
                    echo "<script>alert('更新成功');</script>";
                    $this->logout();
                    // $this->redirect('Home/Index/lb','',0.01,"<script>alert('更新成功');</script>");
                }else{
                    $this->redirect('Home/Index/lb','',0.01,"<script>alert('更新失败');</script>");
                }
                // echo "<script>alert('可以');</script>";
            // }
        }
        $this->display();
    }
    // 头像
    function head(){
        $userpic = D("student")->getFieldByid(session('stid'),'head');
        if (!empty($userpic)) {
            # code...
            $this->userpic = $userpic;
        }else{
            $this->userpic = "headDefault.png";
        }
        $this-> username = session('nickname');
    }
    // 孩子头像
    function head2(){
        $userpic2 = D("ot_archive")->getFieldBychild_id(session('archive'),'head');
        if (!empty($userpic2)) {
            # code...
            $this->userpic2 = $userpic2;
        }else{
            $this->userpic2 = "headDefault.png";
        }
    }
    // 验证档案是否填写完整
    function validateArchive(){
        $name = M('ot_archive')->getFieldBychild_id(session('archive'),'name');
        $tongjuren = M('ot_archive')->getFieldBychild_id(session('archive'),'tongjuren');
        $banji = M('ot_archive')->getFieldBychild_id(session('archive'),'banji');
        if($name==''||$tongjuren==''||$banji==''){
            $this->redirect('Home/Index/edit_archive','',0.01,"<script>alert('档案不完整！');</script>");
        }
    }
    //量表-1
    function lb(){
        $this->validateLogin();
        if (session('archive')=='') {
            $this->redirect('Home/Index/get_in_archive','',0.01,"<script>alert('还未建立档案！');</script>");
        }
        $this->head();
        $lblist = M('ipass_lblist')->select();
        $this->assign('lblist',$lblist);
        $this->display();
    }
    //量表测试-2
    function lbtest($id){
        $this->validateArchive();
        $this->head();
        $this->stenid = session('stid');
        $this->id = $id;
        $this->display();
    }
    //我的测试-2
    function mytest(){
        if (session('archive')=='') {
            $this->redirect('Home/Index/get_in_archive','',0.01,"<script>alert('还未建立档案！');</script>");
        }
        $this->validateLogin();
        $this->validateArchive();
        $this->head();
        $this->number = session('name');
        $this->display();
    }
    // 档案-2
    function archive(){
        $this->validateLogin();
        $name = M('ot_archive')->getFieldBychild_id(session('archive'),'name');
        $tongjuren = M('ot_archive')->getFieldBychild_id(session('archive'),'tongjuren');
        $banji = M('ot_archive')->getFieldBychild_id(session('archive'),'banji');
        if (session('archive')=='') {
            $this->redirect('Home/Index/get_in_archive');
        }else if($name==''||$tongjuren==''||$banji==''){
            $this->redirect('Home/Index/edit_archive');
        }
        $this->archive = M('ot_archive')->where('child_id="'.session('archive').'"')->select();
        $this->head();
        $this->head2();
        $this->display();
    }
}