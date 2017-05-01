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
    window.document.title = '我的测评 - i.P.A.S.S';
</script>
<style type="text/css">
	html,body{height: 100%;margin: 0;padding: 0;}
</style>
<script type="text/javascript">
	var number = <?php echo ($number); ?>;
	url = "http://139.214.116.156:8060/admin/testresult.app.asp?Num="+number+"&i=1";
	function src(){
		document.getElementById('mytest').src = url;
	}
</script>
<body onload="src()">
<style>
	.infooter{width: 100%}
</style>
<div class="infooter">
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
</div>
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
	<br/>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<iframe id="mytest" src="" style="width: 100%;height: 500px;border: 0;"></iframe>
		</div>
	</div>
</div>
</body>
</html>