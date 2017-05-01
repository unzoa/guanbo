<?php
namespace Home\Controller;
use Think\Controller;
use Component\Category;
use Component\Page;
/**
* 
*/
class WebController extends Controller
{
	function header()
	{
		$nav = M("cate")->order('sort ASC')->select();
		$nav = Category::unlimitedForLayer($nav);
		$this->nav= $nav;

		//top
		$top = M('top')->select();
		$this->assign("top", $top);

		//footer
		$footer = M("footer")->select();
		$this -> assign('footer', $footer);
		
		//友链
		$youlian = M("youlian")->select();
		$this->assign("youlian",$youlian);
	}
	function index()
	{
		$this->header();
		
		//banner
		$banner = M("banner")->select();
		$this->assign('banner',$banner);

		//bnews
		$bnews = M("bnews")->select();
		$this ->assign("bnews",$bnews);
		
		//新闻1
		$hnews = D("news")->order('time desc')->limit(2)->select();
        $this->assign('hnews',$hnews);
		
		//新闻2
		$hnewst = D("newst")->order('time desc')->limit(2)->select();
        $this->assign('hnewst',$hnewst);
		
		$expert = D("expert");
		//豆立宁
		$dln = $expert->where("name='".豆立宁."'")->select();
		$this ->assign('dln', $dln);
		//于爽
		$ys = $expert->where("name='".于爽."'")->select();
		$this ->assign('ys', $ys);
		//王焕
		$wh = $expert->where("name='".王焕."'")->select();
		$this ->assign('wh', $wh);

		//关于我们轮播图
		$aboutus = M("aboutus")->select();
		$this ->assign('aboutus', $aboutus);

		//服务项目
		$service = M("service")->select();
		$this->assign('service', $service);

		//客户反馈
		$judge = M('judge')->select();
		$this->assign('judge', $judge);

		//客户反馈背景
		$judgebg = M('judgebg')->select();
		$this->assign('judgebg', $judgebg);

		//模块信息
		//团队
		$topic1 = M("topic")->where("id=1")->select();
		$this->assign('topic1' ,$topic1);
		//关于我们
		$topic2 = M("topic")->where("id=2")->select();
		$this->assign('topic2' ,$topic2);
		//服务
		$topic3 = M("topic")->where("id=3")->select();
		$this->assign('topic3' ,$topic3);
		//留言
		$topic4 = M("topic")->where("id=4")->select();
		$this->assign('topic4' ,$topic4);
		//客户
		$topic5 = M("topic")->where("id=5")->select();
		$this->assign('topic5' ,$topic5);
		
		$this->display();
	}
	//发送信息
	function sendmess()
	{
		$message = D("message");
		if (!empty($_POST)) {
		$name = I('name');
		$email = I('email');
		$phone =I('phone');
		$content = I('content');
		$time = date('Y-m-d H:i:s');
		$data = array(
			'name'    => $name,
			'email'   => $email,
			'phone'   => $phone,
			'content' => $content,
			'time'    => $time,
			);
		$z = $message -> add($data);
		if($z){
			$this->redirect('Home/Web/index');
		}else{
			$this->redirect('Home/Web/index');
		}
		}
		else
		{}
		$this->display();
	}
	//专家页面
	function expert()
	{
		$this->header();

		//专家
		$experttop = M('expert')->where("id=1")->select();
		$this->assign('experttop',$experttop);
		
		$expert = M('expert')->select();
		$this->assign('expert',$expert);

		$this->display();
	}
	//服务项目
	function service()
	{
		$this->header();
		
		//服务项目
		$servicetop = M('service')->where("id=1")->select();
		$this->assign('servicetop' , $servicetop);

		$service = M('service')->select();
		$this->assign('service' , $service);
		$this->display();
	}
	//服务项目详细
	function servicedetail($id)
	{
		$this->header();

		//服务项目
		$servicetop = M('service')->where("id=1")->select();
		$this->assign('servicetop' , $servicetop);

		$service = D('service');
		$info = D('service')->find($id);
		$this->assign("info",$info);
		$this->display();
	}
	//心理咨询
	function psy()
	{
		$this->header();

		//心理咨询top
		$psytop = M('psy')->where("id=1")->select();
		$this->assign('psytop' , $psytop);

		//心理咨询
		$psy = M('psy')->select();
		$this->assign('psy',$psy);

		$this->display();
	}
	//心理咨询详细
	function psydetail($id)
	{
		$this->header();

		//心理咨询top
		$psytop = M('psy')->where("id=1")->select();
		$this->assign('psytop' , $psytop);

		$psy = D('psy');
		$info = D('psy')->find($id);
		$this->assign("info",$info);
		$this->display();
	}
	//瀚威动态
	function news()
	{
		$this->header();

		$news_one = D('newsbg')->where("id=1")->select();
		$this->assign('news_one' , $news_one);

		$news = M('news');//->order("time desc")->select();
		$news_count = $news->count();// 查询满足要求的总记录数
        $news_Page = new \Think\Page($news_count,16);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $news_show = $news_Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $news_info = $news->order('time desc')->limit($news_Page->firstRow.','.$news_Page->listRows)->select();
        $this->assign('news_info',$news_info);// 赋值数据集
        $this->assign('news_show',$news_show);// 赋值分页输出

		$this->display();
	}
	//瀚威动态详细
	function newsdetail($id)
	{
		$this->header();

		$news_one = M('newsbg')->where("id=1")->select();
		$this->assign('news_one' , $news_one);

		$news = D('news');
		$info = D('news')->find($id);
		$this->assign("info",$info);
		$this->display();
	}
	//行业新闻
	function newst()
	{
		$this->header();

		$news_one = M('newsbg')->where("id=2")->select();
		$this->assign('news_one' , $news_one);

		$news = M('newst');
		$news_count = $news->count();// 查询满足要求的总记录数
        $news_Page = new \Think\Page($news_count,16);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $news_show = $news_Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $news_info = $news->order('time desc')->limit($news_Page->firstRow.','.$news_Page->listRows)->select();
        $this->assign('news_info',$news_info);// 赋值数据集
        $this->assign('news_show',$news_show);// 赋值分页输出
		$this->assign('news',$news);

		$this->display();
	}
	//行业新闻详细
	function newstdetail($id)
	{
		$this->header();

		$news_one = M('newsbg')->where("id=2")->select();
		$this->assign('news_one' , $news_one);

		$news = D('newst');
		$info = D('newst')->find($id);
		$this->assign("info",$info);
		$this->display();
	}
	//mp3教学
	function mpthree()
	{
		$this->header();

		//心理咨询top
		$mpthreetop = M('mpthree')->where("id=1")->select();
		$this->assign('mpthreetop' , $mpthreetop);

		//心理咨询
		$mpthree = M('mpthree')->select();
		$this->assign('mpthree',$mpthree);

		$this->display();
	}
	//mp3教学详细
	function mpthreedetail($id)
	{
		$this->header();

		//mp3教学top
		$mpthreetop = M('mpthree')->where("id=1")->select();
		$this->assign('mpthreetop' , $mpthreetop);

		// $mpthree = D('mpthree');
		$info = D('mpthree')->find($id);
		$this->assign("info",$info);
		$this->display();
	}
	//ipass
	function ipass()
	{
		$this->header();

		//ipasstop
		$ipasstop = M('ipass')->where("id=1")->select();
		$this->assign('ipasstop' , $ipasstop);

		//ipass
		$ipass = M('ipass')->select();
		$this->assign('ipass',$ipass);

		$this->display();
	}
	//ipass详细
	function ipassdetail($id)
	{
		$this->header();

		//ipasstop
		$ipasstop = M('ipass')->where("id=1")->select();
		$this->assign('ipasstop' , $ipasstop);

		$info = D('ipass')->find($id);
		$this->assign("info",$info);
		$this->display();
	}
	//machine
	function machine()
	{
		$this->header();

		//machinetop
		$machinetop = M('machine')->where("id=1")->select();
		$this->assign('machinetop' , $machinetop);

		//machine
		$machine = M('machine')->select();
		$this->assign('machine',$machine);

		$this->display();
	}
	//machine详细
	function machinedetail($id)
	{
		$this->header();

		//machinetop
		$machinetop = M('machine')->where("id=1")->select();
		$this->assign('machinetop' , $machinetop);

		$info = D('machine')->find($id);
		$this->assign("info",$info);
		$this->display();
	}
	//contactus
	function contactus()
	{
		$this->header();
		//contactustop
		$contactustop = M('contactus')->where("id=1")->select();
		$this->assign('contactustop' , $contactustop);

		//us
		$contactus = M('contactus')->select();
		$this->assign('contactus',$contactus);

		$this->display();
	}
	//contactus详细
	function contactusdetail($id)
	{
		$this->header();

		//ustop
		$contactustop = M('contactus')->where("id=1")->select();
		$this->assign('contactustop' , $contactustop);

		$info = D('contactus')->find($id);
		$this->assign("info",$info);
		$this->display();
	}
}
