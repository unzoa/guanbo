<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/maxlb/favicon.ico">
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
    window.document.title = '五行能量 - i.P.A.S.S';
    $(document).ready(function(){
		var w_width = $(window).width();
		var h_height = $(window).height();
		$('#intro').css({'width':w_width,'height':h_height});
		$('#go-down').click(function(){
			$('html,body').animate({scrollTop:h_height},'slow');
		})
	})
</script>
<link rel="stylesheet" type="text/css" href="<?php echo (HCSS); ?>music.ver2.css">
<body>
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
            <li><a href="<?php echo U('Home/Index/music');?>">五行能量</a></li>
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
                <li><a href="/maxlb/Jcrop/index.html?id=<?php echo (session('stid')); ?>">修改头像</a></li>
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
	<div id="intro">
		<img src="<?php echo (HIMG); ?>fivecol.png"><br/><br/>
		<p>五行之间相生相克。 "生"中有"制"，"克"中有"生"构成了大自然气息变化的内稳状态，化育了自然的万物，使音乐有角、徵、宫、商、羽五声。这五个系统之间相互配合，协调活动，构成了完整的人与天地之气和谐相应的规律。</p>
		<button class="btn go-down icon-angle-down icon-2x" id="go-down"></button>
	</div>
	<div class="row five-music-con" id="five-music-con">
		<div class="col-sm-4 p0">
			<a href="<?php echo U('Home/Index/listen',array('name'=>'收敛密集之气','name2'=>'金'));?>">
				<div class="five-col five-col-one">
					<h2>金</h2>
					<h4>收敛密集之气</h4>
				</div>
			</a>
		</div>
		<div class="col-sm-4 p0">
			<a href="<?php echo U('Home/Index/listen',array('name'=>'展放舒现之气','name2'=>'木'));?>">
				<div class="five-col five-col-two">
					<h2>木</h2>
					<h4>展放舒现之气</h4>
				</div>
			</a>
		</div>
		<div class="col-sm-4 p0">
			<a href="<?php echo U('Home/Index/listen',array('name'=>'沉潜下降之气','name2'=>'水'));?>">
				<div class="five-col five-col-three">
					<h2>水</h2>
					<h4>沉潜下降之气</h4>
				</div>
			</a>
		</div>
	</div>
	<div class="row five-music-con" id="five-music-con">
		<div class="col-sm-4 col-sm-offset-2 p0">
			<a href="<?php echo U('Home/Index/listen',array('name'=>'蒸腾上升之气','name2'=>'火'));?>">
				<div class="five-col five-col-four">
					<h2>火</h2>
					<h4>蒸腾上升之气</h4>
				</div>
			</a>
		</div>
		<div class="col-sm-4 p0">
			<a href="<?php echo U('Home/Index/listen',array('name'=>'平稳运动之气','name2'=>'土'));?>">
				<div class="five-col five-col-five">
					<h2>土</h2>
					<h4>平稳运动之气</h4>
				</div>
			</a>
		</div>
	</div>	
</div>
<div class="row footer">
	<i class="icon-phone-sign">
		<a href="tel:02467755317" class="cfff"> 联系我们:024-67755317</a>
	</i>
	<i class="glyphicon glyphicon-hand-left teleclick"></i>
</div>
<style type="text/css">
	.footer{
		margin:0;
		background-color: #333;
		color: #faf1ce;
		padding: 5px 20px;
		text-align: center;
		position: fixed;
		bottom: 0;
		width: 100%
	}
	@media (max-width: 767px){
		.footer{
			margin:0;
			background-color: #333;
			color: #faf1ce;
			padding: 5px 20px;
			text-align: center;
			position: relative
		}
	}
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
<!-- preload -->
<link rel="stylesheet" type="text/css" href="<?php echo (HCSS); ?>preload.css">
<script type="text/javascript" src="<?php echo (HJS); ?>preload.js"></script>

</body>
</html>