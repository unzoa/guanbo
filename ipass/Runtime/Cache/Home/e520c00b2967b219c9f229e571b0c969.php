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
<br/>
<section class="container my_nav_padding">
<div class="col-sm-2">
	<h2>Banner</h2>
	<hr/>
	<?php if(is_array($banner)): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="col-xs-12" style="margin-bottom: 10px">
			<img src="<?php echo (UIMG); echo ($v["img"]); ?>" style="width: 100%">
			<p><?php echo ($v["intro"]); ?></p>
			<a href="<?php echo U('Admin/updbanner',array('id'=>$v['id']));?>">[更新]</a>
		</div><?php endforeach; endif; else: echo "" ;endif; ?></div>
<div class="col-sm-10">
	<h2>Story 公益行走</h2>
	<hr/>
	<button class="btn btn-sm"><a href="<?php echo U('Home/Admin/addstory');?>"><i class="icon-plus"></i> 增加</a></button>
	<hr/>
	<div class="row">
		<?php if(is_array($story1)): $i = 0; $__LIST__ = $story1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="col-sm-2 text-center my_story_con">
				<img src="<?php echo (UIMG); echo ($v["img"]); ?>" alt="<?php echo (UIMG); echo ($v["img"]); ?>" style="width: 100%">
				<br/><br/>
				<p class="media-heading"><?php echo ($v["title"]); ?></p>
				<i class="icon-eye-open"> <?php echo ($v["view"]); ?></i>
				<a href="<?php echo U('Admin/updstory',array('id'=>$v['id']));?>">[更新]</a>
				<a href="<?php echo U('Admin/delstory',array('id'=>$v['id']));?>">[删除]</a>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
</div>
	
</section>
</body>
</html>