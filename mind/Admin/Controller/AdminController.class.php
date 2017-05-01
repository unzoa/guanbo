<?php
namespace Admin\Controller;
use Think\Controller; 
use Component\Category;
use Component\Page;
/**
* 
*/
class AdminController extends Controller
{
	function login()
	{
		if (session('name')=='' ){
			$this->redirect('Admin/Manage/login');
		}
	}
	//view
	function index()
	{
		$this->login();
		//top
		$top = M('top')->select();
		$this->assign("top", $top);
		//footer
		$footer = M("footer")->select();
		$this -> assign('footer', $footer);
		//youlian
		$youlian = M("youlian")->select();
		$this->assign('youlian',$youlian);

		$nav = M("cate")->order('sort ASC')->select();
		$nav = Category::unlimitedForLevel($nav,'&nbsp&nbsp++');
		//$nav = Category::unlimitedForLayer($nav);
		//show_bug($nav);
		$this->nav= $nav;
		//Banner
		$banner = M('banner')->select();
		$this -> assign('banner' ,$banner);
		//bnews
		$bnews = M('bnews')->select();
		$this->assign('bnews',$bnews);

		//专家
		$expert = M("expert")->select();
		$this -> assign('expert',$expert);

		//关于我们轮播图
		$aboutus = M("aboutus")->select();
		$this->assign("aboutus", $aboutus);

		//服务项目
		$service = M('service')->select();
		$this->assign('service', $service);

		//客户反馈
		$judge = M('judge')->select();
		$this->assign('judge', $judge);

		//反馈背景
		$judgebg = M("judgebg")->select();
		$this->assign('judgebg', $judgebg);

		//客户留言
		$message = D("message");
		$count = $message->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $info = $message->order('time desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('info',$info);// 赋值数据集
        $this->assign('show',$show);// 赋值分页输出
		
		//模块话题
		$topic = M("topic")->select();
		$this->assign("topic" ,$topic);

		//心理咨询
		$psy = M('psy')->select();
		$this->assign('psy',$psy);

		//mp3
		$mpthree = M('mpthree')->select();
		$this->assign('mpthree', $mpthree);

		//ipass
		$ipass = M('ipass')->select();
		$this->assign('ipass', $ipass);

		//machine
		$machine = M('machine')->select();
		$this->assign('machine', $machine);

		//us
		$contactus = M('contactus')->select();
		$this->assign('contactus', $contactus);

		$this->display();
	}
	
	//news
	function news(){
		$newsbg1 = M("newsbg")->where("id=1")->select();
		$this->assign("newsbg1", $newsbg1);
		//新闻1
		$news = D("news");
		$news_count = $news->count();// 查询满足要求的总记录数
        $news_Page = new \Think\Page($news_count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $news_show = $news_Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $news_info = $news->order('time desc')->limit($news_Page->firstRow.','.$news_Page->listRows)->select();
        $this->assign('news_info',$news_info);// 赋值数据集
        $this->assign('news_show',$news_show);// 赋值分页输出
		$this->display();
	}
	//newst
	function newst(){
		$newsbg2 = M("newsbg")->where("id=2")->select();
		$this->assign("newsbg2", $newsbg2);
		//新闻2
		$newst = D("newst");
		$news_count = $newst->count();// 查询满足要求的总记录数
        $news_Paget = new \Think\Page($news_count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $news_showt = $news_Paget->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $news_infot = $newst->order('time desc')->limit($news_Paget->firstRow.','.$news_Paget->listRows)->select();
        $this->assign('news_infot',$news_infot);// 赋值数据集
        $this->assign('news_showt',$news_showt);// 赋值分页输出
        $this->display();
	}
	//top
	function updtop($id)
	{
		$this->login();
		$top = D('top');
		if (!empty($_POST)) {
			$top->where("id=$id")->create();
			$z = $top->save();
			if($z){
				$this->redirect('Admin/Admin/index');
			}
		}else{
		$info = D('top')->find($id);
		$this->assign("info",$info);
		$this->display();
		}
	}
	//footer
	function updfooter($id)
	{
		$this->login();
		$footer = D('footer');
		if (!empty($_POST)) {
			$footer->where("id=$id")->create();
			$z = $footer->save();
			if($z){
				$this->redirect('Admin/Admin/index');
			}
		}else{
		$info = D('footer')->find($id);
		$this->assign("info",$info);
		$this->display();
		}
	}
	//addyoulian
	function addyoulian()
	{
		$this->login();
		$youlian = M("youlian");
		if (!empty($_POST)) {
			$name = I('name');
			$url = I('url');
			$data = array(
				'name'   => $name,
				'url'    => $url,
				);
			$z = $youlian -> add($data);
			if($z){
				$this->redirect('Admin/Admin/index');
			}else{
				$this->redirect('Admin/Admin/index');
			}
		}
		else
		{}
		$this->display();
	}
	//delyoulian
	function delyoulian($id)
	{
		$this->login();
		$youlian= D('youlian');
		$del=$youlian->where("id=$id")->delete();
		if($del){
			$this->redirect('Admin/Admin/index');
		}else{
			$this->redirect('Admin/Admin/index');
		}
	}
	//updyoulian
	function updyoulian($id)
	{
		$this->login();
		$youlian = M("youlian");
		if(!empty($_POST))
		{
			$youlian->where("id=$id")->create();
			$rst=$youlian->save();	
			if($rst){
				$this->redirect('Admin/Admin/index');
			}else{
				$this->redirect('Admin/Admin/index');
			}
		}else{
		$info = D('youlian')->find($id);
		$this->assign("info",$info);
		$this->display();
		}
	}
	//addcate
	function addcate()
	{
		$this->login();
		$this->cid = I('cid',0,'intval');//isset($_GET['cid'])?$_GET['cid']:0;
		$this->display();
	}
	//runaddcate
	function runaddcate()
	{
		$this->login();
		if (M('cate')->add($_POST)) {
			$this->redirect('Admin/Admin/index');
		}else{
			$this->redirect('Admin/Admin/index');
		}
	}
	//updcate
	function updcate($id)
	{
		$this->login();
		$cate = D('cate');
		if (!empty($_POST)) {
			$cate->where("id=$id")->create();
			$z = $cate->save();
			if($z){
				$this->redirect('Admin/Admin/index');
			}
		}else{
		$info = D('cate')->find($id);
		$this->assign("info",$info);
		$this->display();
		}
	}
	//delcate
	function delcate($id)
	{
		$this->login();
		$cate= D('cate');
		$del=$cate->where("id=$id")->delete();
		if($del){
			$this->redirect('Admin/admin/index');
		}else{
			$this->redirect('Admin/Admin/index');
		}
	}
	//sortcate
	function sortcate()
	{
		$this->login();
		$db = M('cate');
		foreach ($_POST as $id => $sort) {
			$db->where(array('id'=>$id))->setField("sort",$sort);
		}
		$this->redirect("Admin/Admin/index");
	}
	
	//增加banner
	function addbanner()
	{
		$this->login();
		$banner = M("banner");
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
			$alt=I('alt');
			$data  = array(
				'img'    =>$bigimg,
				'alt'	 =>$alt,
			);
			$z = $banner -> add($data);
			if($z){
				$this->redirect('Admin/Admin/index');
			}else{
				$this->redirect('Admin/Admin/index');
			}
		}else{
			
		}
		$this->display();
	}
	//更新banner
	function updbanner($id)
	{
		$this->login();
		$banner = D('banner');
		if (!empty($_POST)) {

			if(!empty($_FILES))
			{
				$config= array(
					'rootPath'=>'./Public/', //保存根路径
					'savePath'=>'Upload/', //保存路径
					);
			$upload = new \Think\Upload($config);
			$z = $upload->uploadOne($_FILES['img']);
			if (!$z) {
			}else{
				$bigimg=$z['savepath'].$z['savename'];
				$_POST['img']= $bigimg;
			}
			}
			
			$banner->where("id=$id")->create();
			$banner->save();
			if($z){
				$this->redirect('Admin/Admin/index');
			}else{
				$this->redirect('Admin/Admin/index');
			}
		}else{
		$info = D('banner')->find($id);
		$this->assign("info",$info);
		$this->display();
		}
	}
	//删除banner
	function delbanner($id)
	{
		$this->login();
		$banner= D('banner');
		$del=$banner->where("id=$id")->delete();
		if($del){
			$this->redirect('Admin/Admin/index');
		}else{
			$this->redirect('Admin/Admin/index');
		}
	}
	
	//增加新闻
	function addhnews(){
		$this->login();
		$news = M("news");
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
			$title=I('title');
			$intro=I('intro');
			$content=I('content');
			$time = date('Y-m-d H:i:s');
			$data  = array(
				'title'   =>$title, 
				'intro'   =>$intro,
				'content' =>$content,
				'cover'   =>$bigimg,
				'time'	  =>$time,
			);
			$z = $news -> add($data);
			if($z){
				$this->redirect('Admin/index');
			}else{
				$this->redirect('Admin/index');
			}
		}else{
			
		}
		$this->display();
	}
	//更新新闻
	function updhnews($id){
		$this->login();
		$news=D('news');
		if (!empty($_POST)) {

			if(!empty($_FILES))
			{
				$config= array(
					'rootPath'=>'./Public/', //保存根路径
					'savePath'=>'Upload/', //保存路径
					);
			$upload = new \Think\Upload($config);
			$z = $upload->uploadOne($_FILES['cover']);
			if (!$z) {
			}else{
				$bigimg=$z['savepath'].$z['savename'];
				$_POST['cover']= $bigimg;
			}
			}
			$news->where("id=$id")->create();
			$rst=$news->save();	
			if($rst){
				$this->redirect('Admin/index');
			}else{
				$this->redirect('Admin/index');
			}
		}else{
		$info = D('news')->find($id);
		$this->assign("info",$info);
		$this->display();
		}
	}
	//删除新闻
	function delhnews($id){
		$this->login();
		$news= D('news');
		$del=$news->where("id=$id")->delete();
		//show_bug($del);
		if($del){
			$this->redirect('Admin/index');
		}else{
			$this->redirect('Admin/index');
		}
	}
	//增加新闻2
	function addhnewst(){
		$this->login();
		$newst = M("newst");
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
			$title=I('title');
			$intro=I('intro');
			$content=I('content');
			$time = date('Y-m-d H:i:s');
			$data  = array(
				'title'   =>$title, 
				'intro'  =>$intro,
				'content'=>$content,
				'cover'    =>$bigimg,
				'time'     =>$time,
			);
			$z = $newst -> add($data);
			if($z){
				$this->redirect('Admin/index');
			}else{
				$this->redirect('Admin/index');
			}
		}else{
			
		}
		$this->display();
	}
	//更新新闻2
	function updhnewst($id){
		$this->login();
		$news=D('newst');
		if (!empty($_POST)) {

			if(!empty($_FILES))
			{
				$config= array(
					'rootPath'=>'./Public/', //保存根路径
					'savePath'=>'Upload/', //保存路径
					);
			$upload = new \Think\Upload($config);
			$z = $upload->uploadOne($_FILES['cover']);
			if (!$z) {
			}else{
				$bigimg=$z['savepath'].$z['savename'];
				$_POST['cover']= $bigimg;
			}
			}
			$news->where("id=$id")->create();
			$rst=$news->save();	
			if($rst){
				$this->redirect('Admin/index');
			}else{
				$this->redirect('Admin/index');
			}
		}else{
		$info = D('newst')->find($id);
		$this->assign("info",$info);
		$this->display();
		}
	}
	//删除新闻2
	function delhnewst($id){
		$this->login();
		$newst= D('newst');
		$del=$newst->where("id=$id")->delete();
		//show_bug($del);
		if($del){
			$this->redirect('Admin/index');
		}else{
			$this->redirect('Admin/index');
		}
	}
	//新闻背景
	function updnewsbg($id){
		$this->login();
		//新闻bg
		$newsbg=D('newsbg');
		if (!empty($_POST)) {

			if(!empty($_FILES))
			{
				$config= array(
					'rootPath'=>'./Public/', //保存根路径
					'savePath'=>'Upload/', //保存路径
					);
			$upload = new \Think\Upload($config);
			$z = $upload->uploadOne($_FILES['img']);
			if (!$z) {
			}else{
				$bigimg=$z['savepath'].$z['savename'];
				$_POST['img']= $bigimg;
			}
			}
			$newsbg->where("id=$id")->create();
			$rst=$newsbg->save();	
			if($rst){
				$this->redirect('Admin/index');
			}else{
				$this->redirect('Admin/index');
			}
		}else{
		$info = D('newsbg')->find($id);
		$this->assign("info",$info);
		$this->display();
		}
	}
	
	//增加专家
	function addexpert()
	{
		$this->login();
		$expert = M("expert");
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
			$name=I('name');
			$intro=I('intro');
			$content=I('content');
			$data  = array(
				'name'   =>$name, 
				'intro'  =>$intro,
				'img'    =>$bigimg,
				'content'=>$content,
			);
			$z = $expert -> add($data);
			if($z){
				$this->redirect('Admin/Admin/index');
			}else{
				$this->redirect('Admin/Admin/index');
			}
		}else{
			
		}
		$this->display();
	}
	//更新专家
	function updexpert($id)
	{
		$this->login();
		$expert=D('expert');
		if (!empty($_POST)) {

			if(!empty($_FILES))
			{
				$config= array(
					'rootPath'=>'./Public/', //保存根路径
					'savePath'=>'Upload/', //保存路径
					);
			$upload = new \Think\Upload($config);
			$z = $upload->uploadOne($_FILES['img']);
			if (!$z) {
			}else{
				$bigimg=$z['savepath'].$z['savename'];
				$_POST['img']= $bigimg;
			}
			}
			$expert->where("id=$id")->create();
			$rst=$expert->save();	
			if($rst){
				$this->redirect('Admin/Admin/index');
			}else{
				$this->redirect('Admin/Admin/index');
			}
		}else{
		$info = D('expert')->find($id);
		$this->assign("info",$info);
		$this->display();
		}
	}
	//删除专家
	function delexpert($id)
	{
		$this->login();
		$expert= D('expert');
		$del=$expert->where("id=$id")->delete();
		//show_bug($del);
		if($del){
			$this->redirect('Admin/Admin/index');
		}else{
			$this->redirect('Admin/Admin/index');
		}
	}
	//增加关于我们轮播图
	function addus()
	{
		$this->login();
		$aboutus = M("aboutus");
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
			$alt=I('alt');
			$data  = array(
				'img'    =>$bigimg,
				'alt'    =>$alt,
			);
			$z = $aboutus -> add($data);
			if($z){
				$this->redirect('Admin/Admin/index');
			}else{
				$this->redirect('Admin/Admin/index');
			}
		}else{
			
		}
		$this->display();
	}
	//更新关于我们轮播图
	function updus($id)
	{
		$this->login();
		$aboutus=D('aboutus');
		if (!empty($_POST)) {

			if(!empty($_FILES))
			{
				$config= array(
					'rootPath'=>'./Public/', //保存根路径
					'savePath'=>'Upload/', //保存路径
					);
			$upload = new \Think\Upload($config);
			$z = $upload->uploadOne($_FILES['img']);
			if (!$z) {
			}else{
				$bigimg=$z['savepath'].$z['savename'];
				$_POST['img']= $bigimg;
			}
			}
			$aboutus->where("id=$id")->create();
			$rst=$aboutus->save();	
			if($rst){
				$this->redirect('Admin/Admin/index');
			}else{
				$this->redirect('Admin/Admin/index');
			}
		}else{
		$info = D('aboutus')->find($id);
		$this->assign("info",$info);
		$this->display();
		}
	}
	//删除关于我们轮播图
	function delus($id)
	{
		$this->login();
		$aboutus= D('aboutus');
		$del=$aboutus->where("id=$id")->delete();
		if($del){
			$this->redirect('Admin/Admin/index');
		}else{
			$this->redirect('Admin/Admin/index');
		}
	}
	//增加服务项目
	function addservice()
	{
		$this->login();
		$service = M("service");
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
			$engalt = I("engalt");
			$chalt=I('chalt');
			$content=I('content');
			$url=I('url');
			$data  = array(
				'engalt' =>$engalt,
				'chalt'  =>$chalt,
				'img'    =>$bigimg,
				'content'=>$content,
				'url'    =>$url,
			);
			$z = $service -> add($data);
			if($z){
				$this->redirect('Admin/Admin/index');
			}else{
				$this->redirect('Admin/Admin/index');
			}
		}else{
			
		}
		$this->display();
	}
	//删除服务项目
	function delservice($id)
	{
		$this->login();
		$service= D('service');
		$del=$service->where("id=$id")->delete();
		if($del){
			$this->redirect('Admin/Admin/index');
		}else{
			$this->redirect('Admin/Admin/index');
		}
	}
	//更新服务项目
	function updservice($id)
	{
		$this->login();
		$service=D('service');
		if (!empty($_POST)) {

			if(!empty($_FILES))
			{
				$config= array(
					'rootPath'=>'./Public/', //保存根路径
					'savePath'=>'Upload/', //保存路径
					);
			$upload = new \Think\Upload($config);
			$z = $upload->uploadOne($_FILES['img']);
			if (!$z) {
			}else{
				$bigimg=$z['savepath'].$z['savename'];
				$_POST['img']= $bigimg;
			}
			}

			$service->where("id=$id")->create();
			$rst = $service->save();	
			if($rst){
				$this->redirect('Admin/admin/index');
			}else{
				$this->redirect('Admin/admin/index');
			}
		}else{
		$info = D('service')->find($id);
		$this->assign("info",$info);
		$this->display();
		}
	}
	//增加客户反馈
	function addjudge()
	{
		$this->login();
		$judge = D("judge");
		if (!empty($_POST)) {
		$judgefield = I('judge');
		$name = I('name');
		$data = array(
			'judge'   => $judgefield,
			'name'    => $name,
			);
		$z = $judge -> add($data);
		if($z){
			$this->redirect('Admin/Admin/index');
		}else{
			$this->redirect('Admin/Admin/index');
		}
		}
		else
		{}
		$this->display();
	}
	//删除客户反馈
	function deljudge($id)
	{
		$this->login();
		$judge= D('judge');
		$del=$judge->where("id=$id")->delete();
		if($del){
			$this->redirect('Admin/Admin/index');
		}else{
			$this->redirect('Admin/Admin/index');
		}
	}
	//更新客户反馈
	function updjudge($id)
	{
		$this->login();
		$judge = M("judge");
		if(!empty($_POST))
		{
			$judge->where("id=$id")->create();
			$rst=$judge->save();	
			if($rst){
				$this->redirect('Admin/Admin/index');
			}else{
				$this->redirect('Admin/Admin/index');
			}
		}else{
		$info = D('judge')->find($id);
		$this->assign("info",$info);
		$this->display();
		}
	}
	//更新客户反馈bg
	function updjudgebg($id)
	{
		$this->login();
		$judgebg = D('judgebg');
		if (!empty($_POST)) {

			if(!empty($_FILES))
			{
				$config= array(
					'rootPath'=>'./Public/', //保存根路径
					'savePath'=>'Upload/', //保存路径
					);
			$upload = new \Think\Upload($config);
			$z = $upload->uploadOne($_FILES['img']);
			if (!$z) {
			}else{
				$bigimg=$z['savepath'].$z['savename'];
				$_POST['img']= $bigimg;
			}
			}
			
			$judgebg->where("id=$id")->create();
			$judgebg->save();
			if($z){
				$this->redirect('Admin/Admin/index');
			}else{
				$this->redirect('Admin/Admin/index');
			}
		}else{
		$info = D('judgebg')->find($id);
		$this->assign("info",$info);
		$this->display();
		}
	}
	//更新模块话题
	function updtopic($id)
	{
		$this->login();
		$topic=D('topic');
		if (!empty($_POST)) {
			$topic->where("id=$id")->create();
			$rst=$topic->save();	
			if($rst){
				$this->redirect('Admin/Admin/index');
			}else{
				$this->redirect('Admin/Admin/index');
			}
		}else{
		$info = D('topic')->find($id);
		$this->assign("info",$info);
		$this->display();
		}
	}
	//增加心理咨询
	function addpsy()
	{
		$this->login();
		$psy = M("psy");
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
			$engtitle = I("engtitle");
			$chtitle=I('chtitle');
			$content=I('content');
			$intro=I('intro');
			$data  = array(
				'engtitle' =>$engtitle,
				'chtitle'  =>$chtitle,
				'content'  =>$content,
				'img'      =>$bigimg,
				'intro'	   =>$intro,
			);
			$z = $psy -> add($data);
			if($z){
				$this->redirect('Admin/Admin/index');
			}else{
				$this->redirect('Admin/Admin/index');
			}
		}else{
			
		}
		$this->display();
	}
	//更新心理咨询
	function updpsy($id)
	{
		$this->login();
		$psy=D('psy');
		if (!empty($_POST)) {

			if(!empty($_FILES))
			{
				$config= array(
					'rootPath'=>'./Public/', //保存根路径
					'savePath'=>'Upload/', //保存路径
					);
			$upload = new \Think\Upload($config);
			$z = $upload->uploadOne($_FILES['img']);
			if (!$z) {
			}else{
				$bigimg=$z['savepath'].$z['savename'];
				$_POST['img']= $bigimg;
			}
			}

			$psy->where("id=$id")->create();
			$rst = $psy->save();	
			if($rst){
				$this->redirect('Admin/Admin/index');
			}else{
				$this->redirect('Admin/Admin/index');
			}
		}else{
		$info = D('psy')->find($id);
		$this->assign("info",$info);
		$this->display();
		}
	}
	//删除心理咨询
	function delpsy($id)
	{
		$this->login();
		$psy= D('psy');
		$del=$psy->where("id=$id")->delete();
		if($del){
			$this->redirect('Admin/Admin/index');
		}else{
			$this->redirect('Admin/Admin/index');
		}
	}
	//增加mp3
	function addmpthree()
	{
		$this->login();
		$mpthree = M("mpthree");
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
			$engtitle = I("engtitle");
			$chtitle=I('chtitle');
			$content=I('content');
			$intro=I('intro');
			$data  = array(
				'engtitle' =>$engtitle,
				'chtitle'  =>$chtitle,
				'content'  =>$content,
				'img'      =>$bigimg,
				'intro'	   =>$intro,
			);
			$z = $mpthree -> add($data);
			if($z){
				$this->redirect('Admin/Admin/index');
			}else{
				$this->redirect('Admin/Admin/index');
			}
		}else{
			
		}
		$this->display();
	}
	//更新mp3
	function updmpthree($id)
	{
		$this->login();
		$mpthree=D('mpthree');
		if (!empty($_POST)) {

			if(!empty($_FILES))
			{
				$config= array(
					'rootPath'=>'./Public/', //保存根路径
					'savePath'=>'Upload/', //保存路径
					);
			$upload = new \Think\Upload($config);
			$z = $upload->uploadOne($_FILES['img']);
			if (!$z) {
			}else{
				$bigimg=$z['savepath'].$z['savename'];
				$_POST['img']= $bigimg;
			}
			}

			$mpthree->where("id=$id")->create();
			$rst = $mpthree->save();	
			if($rst){
				$this->redirect('Admin/Admin/index');
			}else{
				$this->redirect('Admin/Admin/index');
			}
		}else{
		$info = D('mpthree')->find($id);
		$this->assign("info",$info);
		$this->display();
		}
	}
	//删除mp3
	function delmpthree($id)
	{
		$this->login();
		$mpthree= D('mpthree');
		$del=$mpthree->where("id=$id")->delete();
		if($del){
			$this->redirect('Admin/Admin/index');
		}else{
			$this->redirect('Admin/Admin/index');
		}
	}
	//增加ipass
	function addipass()
	{
		$this->login();
		$ipass = M("ipass");
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
			$engtitle = I("engtitle");
			$chtitle=I('chtitle');
			$content=I('content');
			$intro=I('intro');
			$data  = array(
				'engtitle' =>$engtitle,
				'chtitle'  =>$chtitle,
				'content'  =>$content,
				'img'      =>$bigimg,
				'intro'	   =>$intro,
			);
			$z = $ipass -> add($data);
			if($z){
				$this->redirect('Admin/Admin/index');
			}else{
				$this->redirect('Admin/Admin/index');
			}
		}else{
			
		}
		$this->display();
	}
	//更新ipass
	function updipass($id)
	{
		$this->login();
		$ipass=D('ipass');
		if (!empty($_POST)) {

			if(!empty($_FILES))
			{
				$config= array(
					'rootPath'=>'./Public/', //保存根路径
					'savePath'=>'Upload/', //保存路径
					);
			$upload = new \Think\Upload($config);
			$z = $upload->uploadOne($_FILES['img']);
			if (!$z) {
			}else{
				$bigimg=$z['savepath'].$z['savename'];
				$_POST['img']= $bigimg;
			}
			}

			$ipass->where("id=$id")->create();
			$rst = $ipass->save();	
			if($rst){
				$this->redirect('Admin/Admin/index');
			}else{
				$this->redirect('Admin/Admin/index');
			}
		}else{
		$info = D('ipass')->find($id);
		$this->assign("info",$info);
		$this->display();
		}
	}
	//删除ipass
	function delipass($id)
	{
		$this->login();
		$ipass= D('ipass');
		$del=$ipass->where("id=$id")->delete();
		if($del){
			$this->redirect('Admin/Admin/index');
		}else{
			$this->redirect('Admin/Admin/index');
		}
	}
	//增加machine
	function addmachine()
	{
		$this->login();
		$machine = M("machine");
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
			$engtitle = I("engtitle");
			$chtitle=I('chtitle');
			$content=I('content');
			$intro=I('intro');
			$data  = array(
				'engtitle' =>$engtitle,
				'chtitle'  =>$chtitle,
				'content'  =>$content,
				'img'      =>$bigimg,
				'intro'	   =>$intro,
			);
			$z = $machine -> add($data);
			if($z){
				$this->redirect('Admin/Admin/index');
			}else{
				$this->redirect('Admin/Admin/index');
			}
		}else{
			
		}
		$this->display();
	}
	//更新machine
	function updmachine($id)
	{
		$this->login();
		$machine=D('machine');
		if (!empty($_POST)) {

			if(!empty($_FILES))
			{
				$config= array(
					'rootPath'=>'./Public/', //保存根路径
					'savePath'=>'Upload/', //保存路径
					);
			$upload = new \Think\Upload($config);
			$z = $upload->uploadOne($_FILES['img']);
			if (!$z) {
			}else{
				$bigimg=$z['savepath'].$z['savename'];
				$_POST['img']= $bigimg;
			}
			}

			$machine->where("id=$id")->create();
			$rst = $machine->save();	
			if($rst){
				$this->redirect('Admin/Admin/index');
			}else{
				$this->redirect('Admin/Admin/index');
			}
		}else{
		$info = D('machine')->find($id);
		$this->assign("info",$info);
		$this->display();
		}
	}
	//删除ipass
	function delmachine($id)
	{
		$this->login();
		$machine= D('machine');
		$del=$machine->where("id=$id")->delete();
		if($del){
			$this->redirect('Admin/Admin/index');
		}else{
			$this->redirect('Admin/Admin/index');
		}
	}
	//增加contactus
	function addcontactus()
	{
		$this->login();
		$contactus = M("contactus");
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
			$engtitle = I("engtitle");
			$chtitle=I('chtitle');
			$content=I('content');
			$intro=I('intro');
			$data  = array(
				'engtitle' =>$engtitle,
				'chtitle'  =>$chtitle,
				'content'  =>$content,
				'img'      =>$bigimg,
				'intro'	   =>$intro,
			);
			$z = $contactus -> add($data);
			if($z){
				$this->redirect('Admin/Admin/index');
			}else{
				$this->redirect('Admin/Admin/index');
			}
		}else{
			
		}
		$this->display();
	}
	//更新contactus
	function updcontactus($id)
	{
		$this->login();
		$contactus=D('contactus');
		if (!empty($_POST)) {

			if(!empty($_FILES))
			{
				$config= array(
					'rootPath'=>'./Public/', //保存根路径
					'savePath'=>'Upload/', //保存路径
					);
			$upload = new \Think\Upload($config);
			$z = $upload->uploadOne($_FILES['img']);
			if (!$z) {
			}else{
				$bigimg=$z['savepath'].$z['savename'];
				$_POST['img']= $bigimg;
			}
			}

			$contactus->where("id=$id")->create();
			$rst = $contactus->save();	
			if($rst){
				$this->redirect('Admin/Admin/index');
			}else{
				$this->redirect('Admin/Admin/index');
			}
		}else{
		$info = D('contactus')->find($id);
		$this->assign("info",$info);
		$this->display();
		}
	}
	//删除contactus
	function delcontactus($id)
	{
		$this->login();
		$contactus= D('contactus');
		$del=$contactus->where("id=$id")->delete();
		if($del){
			$this->redirect('Admin/Admin/index');
		}else{
			$this->redirect('Admin/Admin/index');
		}
	}
}
?>