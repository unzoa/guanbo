<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/baoshu/favicon.ico">
	<title>大手印恒力训练系统</title>
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
<style type="text/css">
	.aa{border:1px solid red;}
	.user{line-height: 40px;margin-bottom: 10px;border-bottom: 1px solid #eee;padding-bottom: 10px}
	.users{margin-top:30px;}
	.userscon{border:1px #d8d8d8 solid;border-radius:7px; box-shadow: 0 4px 15px 4px #999;padding-bottom: 20px}
	@media (max-width: 767px){
		.users{margin-top: 0px}
		.userscon{box-shadow: 0 0 0 0;border:0;}
	}
	.name{font-size: 20px;color: #000079;margin-left: 5px;line-height: 30px;}
	.userpic{width: 40px;height:40px;border-radius:25px;border:1px solid #4ed487;margin-top: -5px}
	.badge{background-color: red!important}
</style>
<body>
	<div class="container-fluid">
		<div class="row">
			<nav class="navbar navbar-default bs_nav" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="padding-top: 0;padding-bottom:0 ">
        <span class="sr-only">Toggle navigation</span>
        <span class="username" style="margin-top: 2px">
      		<img src="<?php echo (SITE_URL); ?>Jcrop/<?php echo ($userpic); ?>" style="width: 30px;height: 30px;border-radius: 30px;border:3px #ffe84d solid;margin-right: 3px;margin-left: -2px;">
      		<span style="color: #ffe84d"><?php echo ($username); ?></span>
      	</span>
      </button>
      <a class="navbar-brand" href="<?php echo U('Home/index/index');?>">
      	<!-- Brand -->
      	<img src="<?php echo (HIMG); ?>logo.png" class="logopic" style="width: 30px">
      </a>
    </div>
    <style type="text/css">
    .logopic{margin-top: 5px}
    .username{display: none;}
    @media (max-width: 767px){
    	.username{display: block;}
    	.logo{display: none;}
    	.logopic{margin-top: 0px}
    }
    </style>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse bs_collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo U('Home/index/dongtai');?>">动态</a></li>
        <li><a href="<?php echo U('Home/index/huoban');?>">伙伴</a></li>
        <li><a href="<?php echo U('Home/index/count');?>">报数</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          	<!-- <img src="<?php echo (SITE_URL); echo ($userpic); ?>" style="width: 30px;height: 30px;border-radius: 30px;border:3px #fff solid;margin-right: 3px;margin-left: -2px"> -->
	          	<span class="logo">
	          		<img src="<?php echo (SITE_URL); ?>Jcrop/<?php echo ($userpic); ?>" style="width: 30px;height: 30px;border-radius: 30px;border:3px #fff solid;margin-right: 3px;margin-left: -2px">
			        <?php echo ($username); ?>
			        <span class="caret"></span>
	          	</span>

	          <span class="username">设置<span class="caret"></span></span> 
	          
          </a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="/Jcrop/index.html?id=<?php echo (session('id')); ?>">修改头像</a></li>
            <!-- <?php echo U('Home/Uppic/index');?> -->
            <li><a href="<?php echo U('Home/index/usersetting');?>">账户设置</a></li>
            <li><a href="<?php echo U('Home/index/admin');?>"><?php echo ($admin); ?></a></li>
            <li class="divider"></li>
            <li><a onclick="if (confirm('确定要退出吗？')) return true; else return false;" href="<?php echo U('Home/Manage/logout');?>">退出</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
</nav>
<marquee class="" scrolldelay="300" style="background-color: #ffe84d;line-height: 45px; color: #000079;height: 45px;margin-top: -10px;"><?php echo ($gg); ?></marquee>
		</div>
		<div class="row users">
			<div class="col-sm-6 col-sm-offset-3 userscon">
				<h2 style="margin-bottom: 30px">我的伙伴</h2>
				<?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="user">
					<img src="<?php echo (SITE_URL); ?>Jcrop/<?php echo ($v["img"]); ?>" class="userpic">
					<span class="name"><?php echo ($v["name"]); ?></span>
					<span class="level">[ <?php echo ($v["level"]); ?> ]</span>
					<!-- <span class="pull-right" style="line-height: 50px">次</span>
					<span class="badge pull-right"><?php echo ($v["fullcount"]); ?></span> -->
					<button type="button" class="btn bs_btn_chat pull-right" data-toggle="modal" data-target=".bs-example-modal-sm">聊天</button>
				</div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
	</div>
	<!-- Small modal -->
	<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-sm">
	    <div class="modal-content">
	      <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">提示</h3>
            </div>
            <div class="panel-body">
            <p>“帝洛巴千诺”</p>
              聊天软件开发中，敬请期待！
            </div>
          </div>
	    </div>
	  </div>
	</div>
</body>
</html>