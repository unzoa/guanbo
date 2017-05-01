<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://hxtbaby.com/favicon.ico">
	<title>量表测评系统</title>
	<link rel="stylesheet" href="<?php echo (HCSS); ?>style.css">
	<script src="<?php echo (HJS); ?>jquery-2.1.1.min.js"></script>
	<script src="<?php echo (HJS); ?>index.js"></script>
	
	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?php echo (BCSS); ?>bootstrap.css">
	<script type="text/javascript" src="<?php echo (BJS); ?>bootstrap.min.js"></script>

    <!-- awesome -->
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
    window.document.title = '量表 - i.P.A.S.S';
</script>
<style type="text/css">
	.lb-con{box-shadow: 0 0 15px 5px #999;border-radius: 5px;padding-top: 20px;margin-top: 20px;margin-bottom: 20px}
	.dropdown-menu > ul > li > a {
	    color: #fff;
	    padding-left: 15px;
	    padding-top: 5px
	}
	.dropdown-menu > ul > li > a:hover, .dropdown-menu > li > a:focus {
	    color: #fff!important;
	}
	.lblist-menu li a{
		display: block;
		padding-top: 5px;
		padding-bottom: 5px;
	}
	@media (max-width: 767px){
		body{background-color: #f5f5f5}
		.lb-con{box-shadow: none;margin-bottom: 10px;margin-top: 10px;padding-top: 0px}
	}
</style>
<body>
<div class="row" style="margin:0;background-color: #333;color: #faf1ce;padding: 5px 20px;text-align: center;">
<i class="icon-phone-sign">
	<a href="tel:02467755317" class="cfff"> 联系我们:024-67755317</a>
</i>
<i class="glyphicon glyphicon-hand-left teleclick"></i>
</div>
<style type="text/css">
	.teleclick{
		-webkit-animation:fadeout 2s infinite ease-in-out;
		-moz-animation:fadeout 2s infinite ease-in-out;
		-ms-animation:fadeout 2s infinite ease-in-out;
		animation:fadeout 2s infinite ease-in-out;
	}
	@-webkit-keyframes fadeout{
		from{opacity: 0}
		to{opacity: 1}
	}
	@-moz-keyframes fadeout{
		from{opacity: 0}
		to{opacity: 1}
	}
	@keyframes fadeout{
		from{opacity: 0}
		to{opacity: 1}
	}
</style>
<div class="container-fluid">
	<div class="row navconbg">
  <div class="col-sm-10 col-sm-offset-1 nav_con" style="padding-left: 0px;padding-right: 0px">
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
          	<img src="<?php echo (HIMG); ?>logo.png" class="logopic">
          </a>
        </div>
        <style type="text/css">
          .logopic{width: 70px;margin-top: -3px}
          .username{display: none;}
          @media (max-width: 767px){
          	.username{display: block;}
          	.logo{display: none;}
          	.logopic{margin-top: -7px;margin-left:-5px;width: 60px}
          }
        </style>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse bs_collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo U('Home/Index/lb');?>">测评系统</a></li>
            <li><a href="<?php echo U('Home/Index/mytest');?>">我的测评</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
    	          	<span class="logo">
    	          		<img src="<?php echo (SITE_URL); ?>Jcrop/<?php echo ($userpic); ?>" style="width: 30px;height: 30px;border-radius: 30px;border:3px #fff solid;margin-right: 3px;margin-left: -2px">
    			        <?php echo ($username); ?>
    			        <span class="caret"></span>
    	          	</span>
    	          <span class="username">设置<span class="caret"></span></span> 
              </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="http://hxtbaby.com/Jcrop/index.html?id=<?php echo (session('stid')); ?>">修改头像</a></li>
                <li><a href="<?php echo U('Home/index/edit_user');?>">账户设置</a></li>
                <li class="divider"></li>
                <li><a onclick="if (confirm('确定要退出吗？')) return true; else return false;" href="<?php echo U('Home/Index/logout');?>">退出</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
  </div>
</div>
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1 lb-con tab-content">
			<div role="tabpanel" class="tab-pane active" id="home">
				<div class="row">
					<?php if(is_array($lblist1)): $i = 0; $__LIST__ = $lblist1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-md-3 col-sm-4 lblist_item">
							<div class="col-xs-3 col-sm-12 xsp0">
								<div class="lb_cover" style="background-image: url(<?php echo (UIMG); echo ($vo["img"]); ?>);background-position: center;background-size: cover;"></div>
							</div>
							<div class="col-xs-9 col-sm-12 lblist_item_bottom">
								<p class="lb_title">
									<a href="<?php echo U('Home/Index/lbtest',array('id'=>$vo['id']));?>">
									<?php echo ($vo["name_ch"]); ?></a>
								</p>
								<p class="lb_new_intro"><i><?php echo ($vo["new_intro"]); ?></i></p>
							</div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane" id="home2">
				<div class="row">
					<?php if(is_array($lblist2)): $i = 0; $__LIST__ = $lblist2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-md-3 col-sm-4 lblist_item">
							<div class="col-xs-3 col-sm-12 xsp0">
								<div class="lb_cover" style="background-image: url(<?php echo (UIMG); echo ($vo["img"]); ?>);background-position: center;background-size: cover;"></div>
							</div>
							<div class="col-xs-9 col-sm-12 lblist_item_bottom">
								<p class="lb_title">
									<a href="<?php echo U('Home/Index/lbtest',array('id'=>$vo['id']));?>">
									<?php echo ($vo["name_ch"]); ?></a>
								</p>
								<p class="lb_new_intro"><i><?php echo ($vo["new_intro"]); ?></i></p>
							</div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane" id="home3">
				<div class="row">
					<?php if(is_array($lblist3)): $i = 0; $__LIST__ = $lblist3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-md-3 col-sm-4 lblist_item">
							<div class="col-xs-3 col-sm-12 xsp0">
								<div class="lb_cover" style="background-image: url(<?php echo (UIMG); echo ($vo["img"]); ?>);background-position: center;background-size: cover;"></div>
							</div>
							<div class="col-xs-9 col-sm-12 lblist_item_bottom">
								<p class="lb_title">
									<a href="<?php echo U('Home/Index/lbtest',array('id'=>$vo['id']));?>">
									<?php echo ($vo["name_ch"]); ?></a>
								</p>
								<p class="lb_new_intro"><i><?php echo ($vo["new_intro"]); ?></i></p>
							</div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane" id="home4">
				<div class="row">
					<?php if(is_array($lblist4)): $i = 0; $__LIST__ = $lblist4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-md-3 col-sm-4 lblist_item">
							<div class="col-xs-3 col-sm-12 xsp0">
								<div class="lb_cover" style="background-image: url(<?php echo (UIMG); echo ($vo["img"]); ?>);background-position: center;background-size: cover;"></div>
							</div>
							<div class="col-xs-9 col-sm-12 lblist_item_bottom">
								<p class="lb_title">
									<a href="<?php echo U('Home/Index/lbtest',array('id'=>$vo['id']));?>">
									<?php echo ($vo["name_ch"]); ?></a>
								</p>
								<p class="lb_new_intro"><i><?php echo ($vo["new_intro"]); ?></i></p>
							</div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane" id="home5">
				<div class="row">
					<?php if(is_array($lblist5)): $i = 0; $__LIST__ = $lblist5;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-md-3 col-sm-4 lblist_item">
							<div class="col-xs-3 col-sm-12 xsp0">
								<div class="lb_cover" style="background-image: url(<?php echo (UIMG); echo ($vo["img"]); ?>);background-position: center;background-size: cover;"></div>
							</div>
							<div class="col-xs-9 col-sm-12 lblist_item_bottom">
								<p class="lb_title">
									<a href="<?php echo U('Home/Index/lbtest',array('id'=>$vo['id']));?>">
									<?php echo ($vo["name_ch"]); ?></a>
								</p>
								<p class="lb_new_intro"><i><?php echo ($vo["new_intro"]); ?></i></p>
							</div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane" id="home6">
				<div class="row">
					<?php if(is_array($lblist6)): $i = 0; $__LIST__ = $lblist6;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-md-3 col-sm-4 lblist_item">
							<div class="col-xs-3 col-sm-12 xsp0">
								<div class="lb_cover" style="background-image: url(<?php echo (UIMG); echo ($vo["img"]); ?>);background-position: center;background-size: cover;"></div>
							</div>
							<div class="col-xs-9 col-sm-12 lblist_item_bottom">
								<p class="lb_title">
									<a href="<?php echo U('Home/Index/lbtest',array('id'=>$vo['id']));?>">
									<?php echo ($vo["name_ch"]); ?></a>
								</p>
								<p class="lb_new_intro"><i><?php echo ($vo["new_intro"]); ?></i></p>
							</div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane" id="home7">
				<div class="row">
					<?php if(is_array($lblist7)): $i = 0; $__LIST__ = $lblist7;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-md-3 col-sm-4 lblist_item">
							<div class="col-xs-3 col-sm-12 xsp0">
								<div class="lb_cover" style="background-image: url(<?php echo (UIMG); echo ($vo["img"]); ?>);background-position: center;background-size: cover;"></div>
							</div>
							<div class="col-xs-9 col-sm-12 lblist_item_bottom">
								<p class="lb_title">
									<a href="<?php echo U('Home/Index/lbtest',array('id'=>$vo['id']));?>">
									<?php echo ($vo["name_ch"]); ?></a>
								</p>
								<p class="lb_new_intro"><i><?php echo ($vo["new_intro"]); ?></i></p>
							</div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane" id="home8">
				<div class="row">
					<?php if(is_array($lblist8)): $i = 0; $__LIST__ = $lblist8;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-md-3 col-sm-4 lblist_item">
							<div class="col-xs-3 col-sm-12 xsp0">
								<div class="lb_cover" style="background-image: url(<?php echo (UIMG); echo ($vo["img"]); ?>);background-position: center;background-size: cover;"></div>
							</div>
							<div class="col-xs-9 col-sm-12 lblist_item_bottom">
								<p class="lb_title">
									<a href="<?php echo U('Home/Index/lbtest',array('id'=>$vo['id']));?>">
									<?php echo ($vo["name_ch"]); ?></a>
								</p>
								<p class="lb_new_intro"><i><?php echo ($vo["new_intro"]); ?></i></p>
							</div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane" id="home9">
				<div class="row">
					<?php if(is_array($lblist9)): $i = 0; $__LIST__ = $lblist9;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-md-3 col-sm-4 lblist_item">
							<div class="col-xs-3 col-sm-12 xsp0">
								<div class="lb_cover" style="background-image: url(<?php echo (UIMG); echo ($vo["img"]); ?>);background-position: center;background-size: cover;"></div>
							</div>
							<div class="col-xs-9 col-sm-12 lblist_item_bottom">
								<p class="lb_title">
									<a href="<?php echo U('Home/Index/lbtest',array('id'=>$vo['id']));?>">
									<?php echo ($vo["name_ch"]); ?></a>
								</p>
								<p class="lb_new_intro"><i><?php echo ($vo["new_intro"]); ?></i></p>
							</div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane" id="home10">
				<div class="row">
					<?php if(is_array($lblist10)): $i = 0; $__LIST__ = $lblist10;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-md-3 col-sm-4 lblist_item">
							<div class="col-xs-3 col-sm-12 xsp0">
								<div class="lb_cover" style="background-image: url(<?php echo (UIMG); echo ($vo["img"]); ?>);background-position: center;background-size: cover;"></div>
							</div>
							<div class="col-xs-9 col-sm-12 lblist_item_bottom">
								<p class="lb_title">
									<a href="<?php echo U('Home/Index/lbtest',array('id'=>$vo['id']));?>">
									<?php echo ($vo["name_ch"]); ?></a>
								</p>
								<p class="lb_new_intro"><i><?php echo ($vo["new_intro"]); ?></i></p>
							</div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane" id="home11">
				<div class="row">
					<?php if(is_array($lblist11)): $i = 0; $__LIST__ = $lblist11;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-md-3 col-sm-4 lblist_item">
							<div class="col-xs-3 col-sm-12 xsp0">
								<div class="lb_cover" style="background-image: url(<?php echo (UIMG); echo ($vo["img"]); ?>);background-position: center;background-size: cover;"></div>
							</div>
							<div class="col-xs-9 col-sm-12 lblist_item_bottom">
								<p class="lb_title">
									<a href="<?php echo U('Home/Index/lbtest',array('id'=>$vo['id']));?>">
									<?php echo ($vo["name_ch"]); ?></a>
								</p>
								<p class="lb_new_intro"><i><?php echo ($vo["new_intro"]); ?></i></p>
							</div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
		</div>
	</div>

	<div class="dropup" style="position: fixed;bottom: 13px;right: 10px">
	  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #8c8c8c;color: #fff">
	    <i class="icon-align-right"></i> 菜单
	    <span class="caret"></span>
	  </button>

	  <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
		  <ul role="tablist" class="lblist-menu" style="list-style-type: none;">
		    <li role="presentation" class="active">
		    	<a href="#home" aria-controls="home" role="tab" data-toggle="tab">个性量表类</a>
		    </li>
		    <li role="presentation">
		    	<a href="#home2" aria-controls="home2" role="tab" data-toggle="tab">自我认知类</a>
		    </li>
		    <li role="presentation">
		    	<a href="#home3" aria-controls="home3" role="tab" data-toggle="tab">职业与兴趣类量表</a>
		    </li>
		    <li role="presentation">
		    	<a href="#home4" aria-controls="home4" role="tab" data-toggle="tab">学习心理类量表</a>
		    </li>

		    <li role="separator" class="divider"></li>

		    <li role="presentation">
		    	<a href="#home5" aria-controls="home5" role="tab" data-toggle="tab">情绪情感类</a>
		    </li>
		    <li role="presentation">
		    	<a href="#home6" aria-controls="home6" role="tab" data-toggle="tab">家庭婚姻类</a>
		    </li>
		    <li role="presentation">
		    	<a href="#home7" aria-controls="home7" role="tab" data-toggle="tab">人际交往类</a>
		    </li>
		    <li role="presentation">
		    	<a href="#home8" aria-controls="home8" role="tab" data-toggle="tab">生活质量类</a>
		    </li>

		    <li role="separator" class="divider"></li>

		    <li role="presentation">
		    	<a href="#home9" aria-controls="home9" role="tab" data-toggle="tab">儿童行为类</a>
		    </li>

		    <li role="separator" class="divider"></li>

		    <li role="presentation">
		    	<a href="#home10" aria-controls="home10" role="tab" data-toggle="tab">智商类</a>
		    </li>

		    <li role="separator" class="divider"></li>

		    <li role="presentation" style="margin-bottom: 5px">
		    	<a href="#home11" aria-controls="home11" role="tab" data-toggle="tab">心理筛查</a>
		    </li>
		  </ul>
	  </ul>
	</div>	
</div>
<!-- preload -->
<link rel="stylesheet" type="text/css" href="<?php echo (HCSS); ?>preload.css">
<script type="text/javascript" src="<?php echo (HJS); ?>preload.js"></script>

</body>
</html>