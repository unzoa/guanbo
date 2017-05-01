<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://psy-ipass.com/favicon.ico">
	<title>i.P.A.S.S</title>
	<link rel="stylesheet" href="<?php echo (HCSS); ?>style.css">
	<script src="<?php echo (HJS); ?>jquery-2.1.1.min.js"></script>
	<script src="<?php echo (HJS); ?>ipass.ver03.js"></script>
	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?php echo (BCSS); ?>bootstrap.css">
	<script type="text/javascript" src="<?php echo (BJS); ?>bootstrap.min.js"></script>
    <!-- awesome -->
	<!--link rel='stylesheet' href="//cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css"-->
    <link rel='stylesheet' href='<?php echo (HCSS); ?>font-awesome.min.css'>
    <link rel='stylesheet' href='<?php echo (HCSS); ?>font-awesome-ie7.min.css'>

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="<?php echo (HJS); ?>ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo (HJS); ?>ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<div id="wx_pic" style="margin:0 auto;display:none;">
		<img src="<?php echo (HIMG); ?>wx_logo.jpg">
	</div>
</head>
<script type="text/javascript">
	function formsubmit1(){
		var title = $('#title').val();
		var img = $('#img').val();
		var intro = $('#intro').val();
		var content = $('#content').val();
		var type = $('#type').val();
		if (title==''||img==''||intro==''||content==''||type=='') {
			$('#myModal').modal('show');
		}else{
			$('#my_form1').submit();
		}
	}
	function formsubmit11(){
		var title = $('#title').val();
		var intro = $('#intro').val();
		var content = $('#content').val();
		var type = $('#type').val();
		if (title==''||intro==''||content==''||type=='') {
			$('#myModal').modal('show');
		}else{
			$('#my_form11').submit();
		}
	}
	function loginsubmit(){
		var name = $('#name').val();
		var pwd = $('#pwd').val();
		if (name==''||pwd=='') {
			$('#myModal').modal('show');
		}else{
			$('#loginorm').submit();
		}
	}
	function formsubmit12(){
		var img = $('#img').val();
		var intro = $('#intro').val();
		if (img==''||intro=='') {
			$('#myModal').modal('show');
		}else{
			$('#my_banner').submit();
		}
	}
</script>
<style type="text/css">
html,body{
	height: 100%;
	margin: 0;
	padding: 0
}
a:link,a:visited{
 	text-decoration:none;  /*超链接无下划线*/
}
.my_nav_padding{
	padding-left: 6%!important;
	padding-right: 6%!important
}
@media (max-width: 767px){
	.my_nav_padding{
		padding-left: 15px!important;
		padding-right: 15px!important
	}
}
.my_nav{
	background-color: #3399f3;
	padding-top: 20px;
	padding-bottom: 20px;
	color: #fff
}
.my_nav a{
	color: #fff;
}
.my_story_con{
	margin-bottom: 10px;
}
</style>
<style type="text/css">
.my_footer{
	position: fixed;
	bottom: 0;
	width: 100%
}
@media (max-width: 767px){
	.my_footer{
		position: relative;
	}
</style>
<body>
<section class="my_nav">
	<div class="container my_nav_padding">
		<div class="row">
			<div class="col-xs-6">心·故事</div>
			<div class="col-xs-6 text-right">
				<span><a href="<?php echo U('Admin/index');?>">公益行走</a></span> |
				<span><a href="<?php echo U('Admin/qzql');?>">亲子桥梁</a></span> |
				<span><a href="<?php echo U('Admin/jyrd');?>">教育热点</a></span> |
				<span>me:<?php echo (session('myname')); ?></span> |
				<span><a href="<?php echo U('Admin/logout');?>">退出</a></span>
			</div>
		</div>
	</div>
</section>
<section class="container my_nav_padding">
	<div class="col-sm-4 col-sm-offset-4">
	<form action="<?php echo U('Home/Admin/updbanner',array('id'=>$banner[0][id]));?>" method="post" id="my_banner" enctype="multipart/form-data">
		<br/><br/>
		<img src="<?php echo (UIMG); echo ($banner[0][img]); ?>" alt="" style="width: 100%">
		<br/><br/>
		<input type="file" id="img" class="" name="img"></input>
		<br/>
		<input type="text" id="intro" class="form-control" name="intro" value="<?php echo ($banner[0][intro]); ?>"></input>
		<br/>
		<input type="button" class="btn btn-primary btn-block" value="保存" onclick="formsubmit12()"></input>
	</form>
		
	</div>
</section>
<!-- 提示框 -->
<div class="modal fade bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">提示</h4>
      </div>
      <div class="modal-body">
        不能漏填哦!
      </div>
    </div>
  </div>
</div>
</body>
</html>