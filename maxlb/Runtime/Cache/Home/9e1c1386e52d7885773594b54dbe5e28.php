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
<style type="text/css">
	.edit_user_con{padding: 150px 7% 0;text-align: center;}
	.borderR0{border-radius: 0;}
	.borderRtrl0{border-bottom-left-radius: 0px;border-bottom-right-radius: 0px}
	.borderRbrl0{border-top-left-radius: 0px;border-top-right-radius: 0px}
	@media (max-width: 767px){
		.edit_user_con{padding: 50px 7% 0;}
	}
</style>
<script type="text/javascript">
	// 更改用户信息
	function edit_user_sunmit(){
		var nickname = document.getElementById('nickname').value;
		var new_pwd = document.getElementById('new_pwd').value;
		var re_pwd = document.getElementById('re_pwd').value;
		if (nickname==''||new_pwd==''||re_pwd=='') {
			$('#edit_user_Modal').modal('show');
			$('#error_info').html('不能漏填哦!');
		}else if (new_pwd.length<6) {
			$('#edit_user_Modal').modal('show');
			$('#error_info').html('密码不能小于6位');
		}else if(new_pwd!==re_pwd){
			$('#edit_user_Modal').modal('show');
			$('#error_info').html('两次密码不同，请确认后再更新吧！');
		}else{
			$('#edit_user_form').submit();
		}
	}
</script>
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
		<div class="col-sm-4 col-sm-offset-4 edit_user_con">
			<h2 style="text-align: left">账户修改</h2>
			<form method="post" action="<?php echo U('Home/Index/edit_user');?>" id="edit_user_form">
				<input type="text" name="nickname" id="nickname" value="<?php echo ($student[0][nickname]); ?>" class="form-control borderRtrl0" placeholder="昵称"></input>
				
				<input type="password" name="new_pwd" id="new_pwd" class="form-control borderR0" placeholder="新密码"></input>
				<input type="password" name="re_pwd" id="re_pwd" class="form-control borderRbrl0" placeholder="确认新密码"></input><br/>
				<button type="button" id="" class="btn btn-primary btn-lg btn-block" onclick="edit_user_sunmit()">更新</button>
			</form>
		</div>
	</div>
</div>
<div style="position: fixed;bottom: 0px;width: 100%">
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
<!-- 提示框 -->
<div class="modal fade bs-example-modal-sm" id="edit_user_Modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">提示</h4>
      </div>
      <div class="modal-body">
    	<span id="error_info">不能漏填哦!</span>
      </div>
    </div>
  </div>
</div>
</body>
</html>