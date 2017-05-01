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
            <li><a href="/guanbo/baoshu/Jcrop/index.html?id=<?php echo (session('id')); ?>">修改头像</a></li>
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
		<div class="row">
			<div class="col-sm-4">
				<form action="<?php echo ($think["const"]["/guanbo/baoshu/index.php/Home/Index/admin/p/1.html"]); ?>" method="post">
					<h2>设置公告</h2>
					<textarea class="btn-block" name="content" placeholder="请输入公告..." style="min-height: 100px;padding:10px 7px;"></textarea>
					<input type="submit" class="btn btn-lg btn-primary btn-block" value="确认"></input>
				</form>
				<div>
					<h2>密咒
						<a href="<?php echo U('Home/index/addjing');?>">
							<button class="btn btn-md btn-warning "> + 增加</button>
						</a>
					</h2>
					
					<table class="table table-condensed">
						<thead>
							<tr>
								<td>图标</td>
								<th>密咒</th>
								<th>操作</th>
							</tr>
						</thead>
						<tbody>
							<?php if(is_array($jing)): $i = 0; $__LIST__ = $jing;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
								<td><img src="<?php echo (UIMG); echo ($v["big_img"]); ?>" class="bs_jing_bigimg"></td>
								<td><?php echo ($v["name"]); ?></td>
								<td>
									[<a href='<?php echo U("Home/index/editjing",array("id"=>$v["id"]));?>'>更新</a>]
					  				[<a href='<?php echo U("Home/index/deljing",array("id"=>$v["id"]));?>'>删除</a>]
								</td>
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						</tbody>
					</table>
				</div>
				

				</div>
			<div class="col-sm-8">
				<h2>用户管理</h2>
				<table class="table table-condensed">
				  <thead>
				  	<tr>
				  		<th>昵称</th>
				  		<th>级别</th>
				  		<th>团队</th>
				  		<th>操作</th>
				  	</tr>
				  </thead>
				  <tbody>
				  	<?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
					  	<td><?php echo ($v["name"]); ?></td>
					  	<td><?php echo ($v["level"]); ?></td>
					  	<td><?php echo ($v["team"]); ?></td>
					  	<td>
					  		[<a href='<?php echo U("Home/index/edituser",array("id"=>$v["id"]));?>'>管理</a>]
					  		[<a href='<?php echo U("Home/index/deluser",array("id"=>$v["id"]));?>'>删除</a>]
					  	</td>
				  	</tr><?php endforeach; endif; else: echo "" ;endif; ?>
					<tr>
				  		<td colspan="4" class="bs_page" style="padding-top: 20px!important;">
				  			<?php echo ($show); ?>
				  		</td>
				  	</tr>
				  </tbody>
				</table>
				<div>
					<h2>团队
						<a href="<?php echo U('Home/index/addteam');?>">
							<button class="btn btn-md btn-warning "> + 增加</button>
						</a>
					</h2>
					
					<table class="table table-condensed">
						<thead>
							<tr>
								<th>团队</th>
								<th>操作</th>
							</tr>
						</thead>
						<tbody>
							<?php if(is_array($team)): $i = 0; $__LIST__ = $team;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
								<td><?php echo ($v["name"]); ?></td>
								<td>
									[<a href='<?php echo U("Home/index/editteam",array("id"=>$v["id"]));?>'>更新</a>]
					  				[<a href='<?php echo U("Home/index/delteam",array("id"=>$v["id"]));?>'>删除</a>]
								</td>
							</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>