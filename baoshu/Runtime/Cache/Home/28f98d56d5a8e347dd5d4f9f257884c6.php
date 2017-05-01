<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
	<title>恒力训练报数系统</title>
	<link rel="stylesheet" href="<?php echo (HCSS); ?>style.css">
	<script src="<?php echo (HJS); ?>jquery-2.1.1.min.js"></script>
	<script src="<?php echo (HJS); ?>web.js"></script>
	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?php echo (BCSS); ?>bootstrap.css">
	<script type="text/javascript" src="<?php echo (BJS); ?>bootstrap.min.js"></script>

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo (HJS); ?>ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<div class="container-fluid">
	<div class="row">
		<nav class="navbar navbar-default bs_nav" role="navigation">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="<?php echo U('Home/index/index');?>">Brand</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse bs_collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="<?php echo U('Home/index/dongtai');?>">动态</a></li>
		        <li><a href="<?php echo U('Home/index/huoban');?>">伙伴</a></li>
		        <li><a href="<?php echo U('Home/index/count');?>">报数</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		          	<img src="<?php echo (SITE_URL); echo ($userpic); ?>" style="width: 30px;height: 30px;border-radius: 30px;border:2px #fff solid;margin-right: 3px;margin-left: -2px">
			          <span><?php echo (session('name')); ?></span> 
			          <span class="caret"></span>
		          </a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="<?php echo U('Home/Uppic/index');?>">修改头像</a></li>
		            <li><a href="#">账户设置</a></li>
		            <li><a href="#"><?php echo ($admin); ?></a></li>
		            <li class="divider"></li>
		            <li><a onclick="if (confirm('确定要退出吗？')) return true; else return false;" href="<?php echo U('Home/Manage/logout');?>">退出</a></li>
		          </ul>
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		</nav>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<form action="<?php echo ($think["const"]["/baoshu/index.php/Home/Index/ceshi"]); ?>" method="post" enctype="multipart/form-data">
				<input type="checkbox" name="team_id[]" value="1" />
				<input type="checkbox" name="team_id[]" value="2"/>
				<input type="checkbox" name="team_id[]" value="3"/>
				<input type="checkbox" name="team_id[]" value="4"/>
				<input type="submit" class="btn btn-lg btn-info" value="submit"></input>
			</form>
		</div>
	</div>
	</div>
</body>