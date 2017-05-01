<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	function login(){
		if (session('name')=='' ){
			$this->redirect('Home/Manage/login');
		}
        //用户名字
        $username = D("user")->getFieldByid(session('id'),'name');
        $this->assign('username',$username);
        //用户头像
        $userpic = D("user")->getFieldByid(session('id'),'img');
        if (!empty($userpic)) {
            $this->assign('userpic',$userpic);
        }else{
            $this->assign('userpic','uploadfiles/expert.png');
        }
        //管理员
        if (session('name')==='象鼻王'||session('name')==='大乐海'||session('name')==='管理员') {
            $this->assign('admin',"管理员");
        }else{
            $this->assign('admin','');
        }
        //公告
        $haha = D('gonggao')->max('id');
        $gg = D('gonggao')->getFieldByid($haha,'content');
        $this->assign('gg',$gg);

	}
    function index(){
    	$this->login();
        $this->redirect('Index/dongtai');
    	$this->display();
    }
    function dongtai(){
        $this->login();
        $teamid = M('user')->getFieldByid(session('id'),"team_id");
        $where4 = array(
            'daytime'=>date('Y-m-d'),
            'teamid' =>$teamid,
            );
    	$dongtai = M("dongtai")->order('did desc')->where($where4)->select();
        $this->assign('dongtai',$dongtai);

    	$this->display();
    }
    function huoban(){
        $this->login();
        $teamid = D('user')->getFieldByid(session('id'),"team_id");
        $user =  M('user')->where('team_id="'.$teamid.'"')->select();
        for ($i=0; $i < count($user); $i++) {
            $fullcount=D('dongtai')->where('userid="'.$user[$i]['id'].'"')->sum('count');
            if (empty($fullcount)) {
                $user[$i]['fullcount']= "0";
            }else{
            $user[$i]['fullcount']=$fullcount;
            }
            $level = D('level')->getFieldByid($user[$i]['level_id'],'name');
            $user[$i]['level']=$level;
            if (empty($user[$i]['img'])) {
                $user[$i]['img']='expert.png';
            }
        }
        $this->assign("user",$user);
    	$this->display();
    }
    function count(){
        $this->login();
		$jing = M('jing')->select();
        //myteam
        $myteam = D('user')->getFieldByid(session('id'),'team_id');
		$myteamname = M('team')->getFieldByid($myteam,'name');
        $this->assign('myteamname',$myteamname);
        //teamjing
        $teamjing = M('jing')->where('id<9')->select();
        for ($i=0; $i <count($teamjing) ; $i++) { 
            $jingcount=D('dongtai')->where('jid="'.$teamjing[$i]['name'].'" and teamid="'.$myteam.'"')->sum('count');
            if ($jingcount!==null) {
                // if ($jingcount>'1000') {
                //     if($jingcount>'1000000'){
                //         $teamjing[$i]['jingcount']=
                //         floor($jingcount/'1000000').'m+'.($jingcount%'1000000').'k+'.($jingcount%'1000');
                //     }else{
                //         $teamjing[$i]['jingcount']=floor($jingcount/'1000').'k+'.($jingcount%1000);
                //     }
                    
                // }else{
                // $teamjing[$i]['jingcount']=$jingcount;
                // }
                $teamjing[$i]['jingcount']=number_format($jingcount);
            }else{
                $teamjing[$i]['jingcount']='0';
            }
        }
        $this->assign('teamjing',$teamjing);
        //myjing
        $level_id = M('user')->getFieldByid(session('id'),'level_id');
		//$level_id = count($teamjing) - $level_id + '1';
        $haha = D('jing')->max('id');
        $myjing = M('jing')->where('id<="'.$haha.'"')->select();
        for ($i=0; $i <count($myjing) ; $i++) { 
            $jingcount=D('dongtai')->where('jid="'.$myjing[$i]['name'].'" and userid="'.session('id').'"')->sum('count');
            if ($jingcount!==null) {
                // if ($jingcount>'1000') {
                //     $myjing[$i]['jingcount']=floor($jingcount/'1000').'k';
                // }else{
                // $myjing[$i]['jingcount']=$jingcount;
                // }
                $myjing[$i]['jingcount']=number_format($jingcount); 
            }else{
                $myjing[$i]['jingcount']='0';
            }
        }
        $this->assign('myjing',$myjing);
        //经咒权限
        $level_id = D('user')->getFieldByid(session('id'),'level_id');
        if ($level_id==='6') {
            $jing = M("jing")->limit(count($jing))->select();
        }else if($level_id==='5'){
            $jing = M("jing")->limit(count($jing))->select();
        }else if($level_id==='4'){
            $jing = M("jing")->limit(count($jing))->select();
        }else if($level_id==='3'){
            $jing = M("jing")->limit(count($jing))->select();
        }else if($level_id==='2'){
            $jing = M("jing")->limit(count($jing))->select();
        }else if($level_id==='1'){
            $jing = M("jing")->limit(count($jing))->select();
        }
    	$this->assign("jing",$jing);

    	$dongtai = D("dongtai");
        //teamSum
        $teamid = D('user')->getFieldByid(session('id'),"team_id");
        $sumCount = $dongtai->where('teamid="'.$teamid.'"')->sum('count');
        $this->assign('sumCount',$sumCount);
        //teamname
        $teamname = D("team")->getFieldByid($teamid,"name");
        $this->assign('teamname',$teamname);
        //userSum
        $sumCount2 = $dongtai->where("uid='".session('name')."'")->sum('count');
        if (empty($sumCount2)) {
            $this->assign('sumCount2','0');
        }else{
            $this->assign('sumCount2',$sumCount2);
        }
        //userDaySum
        $where3 = array(
            'uid'      => session('name'),
            'daytime'  => date('Y-m-d'),
            );
        $sumCount3 = $dongtai->where($where3)->sum('count');
        if (empty($sumCount3)) {
            $this->assign('sumCount3','0');
        }else{
            $this->assign('sumCount3',$sumCount3);
        }
        //个人当日报数
        $myDay = M('dongtai')->where($where3)->select();
        $this->assign('myDay',$myDay);
        /*
         *取到lasttime
         *取到lastmore
         *取到$now
        */
        $lastdaytime = D('user')->getFieldByid(session('id'),'lastDayTime');
        $newdaytime = D('user')->getFieldByid(session('id'),'newDayTime');
        $nowtime = date("Y-m-d");
        if (empty($lastdaytime)) {
            $jianduan='0';
        }else{
            $now = date('Y-m-d 00:00:00');
            $last = $lastdaytime." 00:00:00";
            $jianduan1=(strtotime($now)- strtotime($last))/ 86400;
            $yuanjianduan = D('user')->getFieldByid(session('id'),'jianduan');
            $jianduan = $yuanjianduan+$jianduan1-'1';
        }
        $yuanjianduan = D('user')->getFieldByid(session('id'),'jianduan');
        $this->assign("jianduan",$yuanjianduan);
        if(!empty($_POST)){
            $user_id=session('name');
            $jing_id=I('jid');
            $count=I('count');
            $daytime = date('Y-m-d');
            $teamid = M('user')->getFieldByid(session('id'),"team_id");
            $data  = array(
                'uid'     =>$user_id,
                'jid'     =>$jing_id,
                'count'   =>$count,
                'daytime' =>$daytime,
                'userid'  =>session('id'),
                'teamid'  =>$teamid,
            );
            $rst = $dongtai -> add($data);
            if($rst){
                /*
                 *新用户注册时  jianduan  lastDaytime lastNewtime  都是空
                 *1，判断last是否相等   
                        相等，(新用户，或者上一次报数报了两次以上)，
                            *（2），判断最近时间和当日时间是否相等
                                相等，none
                                不相等，存入间隔时间，存入当日时间到lastDaytime   
                        不相等，表示是上一次只报了一次，当日第二次以上的次数报数了，已经有间断了（0,1..）
                            *（2），判断现在时间和最近时间是否相等，（是否是当日报数）
                                相等（当日），把最近时间跟到最老时间
                                不相等，存入间隔时间，并存入新的时间nowtime到最近时间，并把最近时间跟到最老时间
                */
                if ($lastdaytime!==$newdaytime) {
                    if ($lastdaytime!==$nowtime) {
                        $userdata = array(
                            'jianduan'    =>$jianduan,
                            'lastDaytime' =>$nowtime,
                            'newDaytime'  =>$lastdaytime,
                            );
                        D("user")->where("id='".session('id')."'")->create($userdata);
                        D("user")->save();
                    }else{
                        $userdata = array(
                            'newDaytime'  =>$lastdaytime,
                            );
                        D("user")->where("id='".session('id')."'")->create($userdata);
                        D("user")->save();
                    }
                }else{
                    if ($lastdaytime!==$nowtime) {
                        $userdata = array(
                            'jianduan'    =>$jianduan,
                            'lastDaytime' =>$nowtime,
                            );
                        D("user")->where("id='".session('id')."'")->create($userdata);
                        D("user")->save();
                    }else{}
                }
                $this->redirect("Index/count", '',0.01,'<script>alert("上传成功");</script>');
            }else{
                $this->redirect("Index/count", '',0.01,'<script>alert("上传失败");</script>');
            }
            
        }//post end
        $this->display();
    }
    function delbaoshu($did){
        $dongtai = D('dongtai');
        $del = $dongtai->where("did=$did")->delete();
        if($del){
            $this->redirect("Index/count", '',0.01,'<script>alert("删除成功");</script>');
        }else{
            $this->redirect('Index/count','',0.01,'<script>alert("删除失败");</script>');
        }
    }
    function usersetting(){
        $this->login();
        $me = M('user')->where('id="'.session('id').'"')->select();
        $this->assign('me',$me);
        $user = D('user');
        if (!empty($_POST)) {
            $inputName = $_POST['name'];
            $f = $user->where("name='".$inputName."'")->select();
            if (empty($f)) {
                $user->where('id="'.session('id').'"')->create();
                $rst = $user->save();
                if($rst){
                    $this->redirect("Home/index/index",'','0.01','<script>alert("修改成功");</script>');
                }else{
                    $this->redirect("Home/index/usersetting",'','0.01','<script>alert("修改失败");</script>');
                }
            }else{
                echo "<script>alert('用户名已存在');</script>";
            }
        }
        $this->display();
    }
    function admin(){
        $this->login();
		if (session('name')==='象鼻王'||session('name')==='大乐海'||session('name')==='管理员') {
        }else{
			$this->redirect('Home/Index/index');
		}
        //密咒
        $jing = M('jing')->select();
        $this->assign('jing',$jing);
        //团队
        $team = M('team')->select();
        $this->assign('team',$team);
        //用户
        //$user = M('user')->select();
        //for ($i=0; $i < count($user); $i++) { 
        //    $level = D('level')->getFieldByid( $user[$i]['level_id'],'name');
        //    $user[$i]['level']=$level; 
        //    $team = D('team')->getFieldByid( $user[$i]['team_id'],'name');
        //    $user[$i]['team']=$team;
        //}
        //$this->assign('user',$user);
		$user=self::page('user');
        //$show=self::page('show');
        for ($i=0; $i < count($user); $i++) { 
            $level = D('level')->getFieldByid( $user[$i]['level_id'],'name');
            $user[$i]['level']=$level; 
            $team = D('team')->getFieldByid( $user[$i]['team_id'],'name');
            $user[$i]['team']=$team;
        }
        // $this->assign('user',$user);
        // $user = D("user");
        
        $this->assign('user',$user['user']);// 赋值数据集
        $this->assign('show',$user['show']);// 赋值分页输出
		//公告
        if (!empty($_POST)) {
            $array = array(
                'content'=>I('content'),
                );
            $z = D('gonggao')->add($array);
            if ($z) {
               $this->redirect("Index/admin", '',0.01,'<script>alert("上传成功");</script>');
            }else{
                $this->redirect("Index/admin", '',0.01,'<script>alert("上传失败");</script>');
            }
        }
        $this->display();
    }
    function page($user){
        $users =D($user);
        $count = $users->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count,4);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $user = $users->limit($Page->firstRow.','.$Page->listRows)->select();
        return array('show'=>$show,'user'=>$user);
    }
    function deluser($id){
        $user = D('user');
        $del = $user->where("id=$id")->delete();
        if($del){
            $this->redirect("Index/admin", '',0.01,'<script>alert("删除成功");</script>');
        }else{
            $this->redirect('Index/admin','',0.01,'<script>alert("删除失败");</script>');
        }
    }
    function edituser($id){
        $this->login();
        //用户
        $user = D('user')->where('id="'.$id.'"')->select();
        $this->assign('user',$user);
        //级别
        $level = M('level')->select();
        $this -> assign('level',$level);
        //团队
        $team = M('team')->select();
        $this->assign('team',$team);
		if(!empty($_POST)){
			D('user')->where('id="'.$id.'"')->create();
			$z = D('user')->save();
			if($z){
				$this->redirect("Index/admin", '',0.01,'<script>alert("更新成功");</script>');
			}else{
				$this->redirect('Index/admin','',0.01,'<script>alert("更新失败");</script>');
			}
		}
        
        $this->display();
    }
    function addjing(){
        $this->login();
        if (!empty($_POST)) {
            if(!empty($_FILES)){
                $config= array(
                    'rootPath'=>'./Public/', //保存根路径
                    'savePath'=>'Upload/', //保存路径
                    );
                    $upload = new \Think\Upload($config);
                    $z = $upload->uploadOne($_FILES['big_img']);
                    if (!$z) {
                        show_bug($upload->getError());
                    }else{
                        $bigimg=$z['savepath'].$z['savename'];
                    }
            }
            $array = array(
                'name'   =>I('name'),
                'big_img'=>$bigimg,
                );
            $z = D('jing')->add($array);
            if ($z) {
               $this->redirect("Index/admin", '',0.01,'<script>alert("上传成功");</script>');
            }else{
                $this->redirect("Index/admin", '',0.01,'<script>alert("上传失败");</script>');
            }
        }
        $this->display();
    }
    function editjing($id){
        $this->login();
        $jing = M('jing')->where('id="'.$id.'"')->select();
        $this->assign('jing',$jing);
        if (!empty($_POST)) {
            if(!empty($_FILES)){
                $config= array(
                    'rootPath'=>'./Public/', //保存根路径
                    'savePath'=>'Upload/', //保存路径
                    );
                    $upload = new \Think\Upload($config);
                    $z = $upload->uploadOne($_FILES['big_img']);
                    if (!$z) {
                        show_bug($upload->getError());
                    }else{
                        $bigimg=$z['savepath'].$z['savename'];
                    }
            }
            $array = array(
                'name'   =>I('name'),
                'big_img'=>$bigimg,
                );
            $z = D('jing')->where('id="'.$id.'"')->save($array);
            if ($z) {
               $this->redirect("Index/admin", '',0.01,'<script>alert("上传成功");</script>');
            }else{
                $this->redirect("Index/admin", '',0.01,'<script>alert("上传失败");</script>');
            }
        }
        $this->display();
    }
    function deljing($id){
        $jing = D('jing');
        $del = $jing->where("id=$id")->delete();
        if($del){
            $this->redirect("Index/admin", '',0.01,'<script>alert("删除成功");</script>');
        }else{
            $this->redirect('Index/admin','',0.01,'<script>alert("删除失败");</script>');
        }
    }
    function addteam(){
        $this->login();
        if (!empty($_POST)) {
            $array = array(
                'name'   =>I('name'),
                );
            $z = D('team')->add($array);
            if ($z) {
               $this->redirect("Index/admin", '',0.01,'<script>alert("上传成功");</script>');
            }else{
                $this->redirect("Index/admin", '',0.01,'<script>alert("上传失败");</script>');
            }
        }
        $this->display();
    }
    function editteam($id){
        $this->login();
        $team = M('team')->where('id="'.$id.'"')->select();
        $this->assign('team',$team);
        if (!empty($_POST)) {
            $array = array(
                'name'   =>I('name'),
                );
            $z = D('team')->where('id="'.$id.'"')->save($array);
            if ($z) {
               $this->redirect("Index/admin", '',0.01,'<script>alert("上传成功");</script>');
            }else{
                $this->redirect("Index/admin", '',0.01,'<script>alert("上传失败");</script>');
            }
        }
        $this->display();
    }
    function delteam($id){
        $team = D('team');
        $del = $team->where("id=$id")->delete();
        if($del){
            $this->redirect("Index/admin", '',0.01,'<script>alert("删除成功");</script>');
        }else{
            $this->redirect('Index/admin','',0.01,'<script>alert("删除失败");</script>');
        }
    }
    function ceshi(){
        $this->login();
        $user = D('user');
        if (!empty($_POST)) {
            $user->create();
            $user->add();
            $this->redirect("Home/Index/ceshi",'','0.01','<script>alert("上传成功");</script>');
        }else{
            echo "w";
        }
        // show_bug($_POST);
        
        $this->display();
    }
}