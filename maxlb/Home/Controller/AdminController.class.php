<?php
namespace Home\Controller;
use Think\Controller;
class AdminController extends Controller {
    public function index(){
        if (session('bnumber')=='') {
            $this->redirect('Home/Admin/maxlblogin');
        }else{
            $this->countFull();

            // 分页用户
            $news = D('student');
            $count = $news->count();// 查询满足要求的总记录数
            $Page = new \Think\Page($count,12);// 实例化分页类 传入总记录数和每页显示的记录数(4)
            $this->show = $Page->show();// 分页显示输出

            // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
            $this->info = $news->order('regtime desc')->limit($Page->firstRow.','.$Page->listRows)->select();

            $this->display();
        }
    }
    // 计算数量
    function countFull(){
        // 计算付费用户
        $payusers = M('student')->where('type=1')->select();
        $this->payusers = count($payusers);

        // 计算用户总数
        $fullusers = M('student')->select();
        $this->fullusers = count($fullusers);

        // 计算档案数量
        $fullarchive = M('ot_archive')->select();
        $this->fullarchive = count($fullarchive);
    }
    //login
    function maxlblogin(){
        if (!empty($_POST)) {
            $number = I('number');
            $pwd = I('pwd');
            if ($number=='gbwinneradmin') {
                if ($pwd=='gbwinner1314') {
                    session('bnumber',$number);
                    $this->redirect('Home/Admin/index');
                }else{
                    $this->redirect('Home/Admin/maxlblogin','',0.01,'<script>alert("密码不正确");</script>');
                }
            }else{
                $this->redirect('Home/Admin/maxlblogin','',0.01,'<script>alert("账号不正确");</script>');
            }
        }
        $this->display();
    }
    function search(){
        $this->countFull();

        $something = I('something');
        if (!empty($_POST)) {
            $this->user = M('student')->where('(number like "%'.$something.'%" OR nickname like "%'.$something.'%") OR archive like "%'.$something.'%"')->select();
        }
        $this->display();
    }

    function upd_pwd($id){
        if (!empty($_POST)) {
            $array = array(
                'password' => md5(I('password'))
                );
            $z = D('student')->where('id="'.$id.'"')->save($array);
            if ($z) {
               $this->redirect("Admin/index", '',0.01,'<script>alert("更新成功");</script>');
            }else{
                $this->redirect("Admin/index", '',0.01,'<script>alert("更新失败");</script>');
            }
        }
    }

    function upd_type($id){
        $array = array(
            'type' => '1'
            );
        $z = D('student')->where('id="'.$id.'"')->save($array);
        if ($z) {
           $this->redirect("Admin/index", '',0.01,'<script>alert("更新成功");</script>');
        }else{
            $this->redirect("Admin/index", '',0.01,'<script>alert("更新失败");</script>');
        }
    }

    function upd_timeout($id){
        if (!empty($_POST)) {
            if (I('timeout')==1) {
                $timeout = date('Y-m-d',strtotime(date('Y-m-d').'+1 day'));
                $array = array(
                    'timeout' => $timeout
                    );
                $z = D('student')->where('id="'.$id.'"')->save($array);
                if ($z) {
                   $this->redirect("Admin/index", '',0.01,'<script>alert("更新成功");</script>');
                }else{
                    $this->redirect("Admin/index", '',0.01,'<script>alert("更新失败");</script>');
                }
            }else{
                if (I('timeout')==30) {
                    $timeout = date('Y-m-d',strtotime(date('Y-m-d').'+30 day'));
                    $array = array(
                        'timeout' => $timeout
                        );
                    $z = D('student')->where('id="'.$id.'"')->save($array);
                    if ($z) {
                       $this->redirect("Admin/index", '',0.01,'<script>alert("更新成功");</script>');
                    }else{
                        $this->redirect("Admin/index", '',0.01,'<script>alert("更新失败");</script>');
                    }
                }else{
                    if (I('timeout')==180) {
                        $timeout = date('Y-m-d',strtotime(date('Y-m-d').'+3 month'));
                        $array = array(
                            'timeout' => $timeout
                            );
                        $z = D('student')->where('id="'.$id.'"')->save($array);
                        if ($z) {
                           $this->redirect("Admin/index", '',0.01,'<script>alert("更新成功");</script>');
                        }else{
                            $this->redirect("Admin/index", '',0.01,'<script>alert("更新失败");</script>');
                        }
                    }else{
                        if (I('timeout')==365) {
                            $timeout = date('Y-m-d',strtotime(date('Y-m-d').'+1 year'));
                            $array = array(
                                'timeout' => $timeout
                                );
                            $z = D('student')->where('id="'.$id.'"')->save($array);
                            if ($z) {
                               $this->redirect("Admin/index", '',0.01,'<script>alert("更新成功");</script>');
                            }else{
                                $this->redirect("Admin/index", '',0.01,'<script>alert("更新失败");</script>');
                            }
                        }
                    }
                }
            }
            
        }
    }

    function add_user(){
        $today_user = count(M('student')->where('regtime="'.date('Y-m-d').'"')->select());
        if (strlen($today_user)==1) {
            $new_user = substr(date('Ymd'),2,6).'0000'.$today_user;
        }else{
            if (strlen($today_user)==2) {
                $new_user = substr(date('Ymd'),2,6).'000'.$today_user;
            }else{
                if (strlen($today_user)==3) {
                    $new_user = substr(date('Ymd'),2,6).'00'.$today_user;
                }else{
                    if (strlen($today_user)==4) {
                        $new_user = substr(date('Ymd'),2,6).'0'.$today_user;
                    }else{
                        if (strlen($today_user)==5) {
                            $new_user = substr(date('Ymd'),2,6).$today_user;
                        }else{
                            
                        }
                    }
                }
            }
        }
		
        $array = array(
            'number'    => $new_user,
            'password'  => md5('111111'),
            'nickname'  => '昵称',
            'type'      => '1',
            'regtime'   => date('Y-m-d')
            );
        $rst = D('student') -> add($array);
        // 添加mysql后，在添加access
        if ($rst) {
            echo "<iframe src='http://127.0.0.1/addme.asp?u=".$new_user."&pwd=".md5('111111')."' style='display:none'></iframe>";
            $this->redirect('Home/Admin/index','',0.01,"<script>alert('成功添加用户！');</script>");
        }else{
            $this->redirect('Home/Admin/index','',0.01,"<script>alert('添加用户失败！');</script>"); 
        }
    }

    // 档案
    function archive(){
        $this->countFull();

        // 分页用户
        $news = D('ot_archive');
        $count = $news->count();// 查询满足要求的总记录数
        $Page = new \Think\Page($count,12);// 实例化分页类 传入总记录数和每页显示的记录数(4)
        $this->show = $Page->show();// 分页显示输出

        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $this->info = $news->limit($Page->firstRow.','.$Page->listRows)->select();

        $this->display();
    }

    function search_archive(){
        $this->countFull();

        $something = I('something');
        if (!empty($something)) {
            $this->user = M('ot_archive')->where('(child_id like "%'.$something.'%" OR name like "%'.$something.'%")')->select();
        }

        $this->display();
    }

}
 		
