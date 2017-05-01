<?php
namespace Home\Controller;
use Think\Controller;
/**
* 
*/
class StoryController extends Controller
{
	
	function index()
	{
		$this->banner = M('ipass_storybanner')->select();
		$this->story =M('ipass_story')->where('type=1')->order('time desc')->select();
		$this->display();
	}
	function qzql()
	{
		$this->banner = M('ipass_storybanner')->select();
		$this->story =M('ipass_story')->where('type=2')->order('time desc')->select();
		$this->display();
	}
	function jyrd()
	{
		$this->banner = M('ipass_storybanner')->select();
		$this->story =M('ipass_story')->where('type=3')->order('time desc')->select();
		$this->display();
	}
	function readstory($id){
		$this->story =M('ipass_story')->where('id="'.$id.'"')->select();
		$view = D('ipass_story')->getFieldByid($id,'view');
		// echo $view+1;
		$array = array(
			'view' =>$view+1
			);
		D('ipass_story')->where('id="'.$id.'"')->save($array);
		$this->display();
	}
}
?>