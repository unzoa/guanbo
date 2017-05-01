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
	html,body{height: 100%}
	.login_con{padding: 140px 4% 0;}
	.borderR0{border-radius: 0;}
	.borderRtrl0{border-bottom-left-radius: 0px;border-bottom-right-radius: 0px}
	.borderRbrl0{border-top-left-radius: 0px;border-top-right-radius: 0px}
	@media (max-width: 767px){
		.login_con{padding: 30px 4% 0}
	}
</style>
<body>
<div class="container-fluid" style="height: 100%;padding: 0; background-image: url('<?php echo (HIMG); ?>2.jpeg');background-size: cover;background-position: center;">
	<div class="row" style="margin: 0">
		<div class="col-sm-4 col-sm-offset-8 login_con">
			<form method="post" action="<?php echo U('Home/Index/forgetpassword');?>" id="forgetpassword" class="login_form_con">
				<h2 style="color: #9aaabf;">修改密码</h2>
				<input type="text" name="number" id="number" value="" class="form-control borderRtrl0" placeholder="账号"></input>
				<input type="text" name="archive" id="archive" value="" class="form-control borderR0" placeholder="孩子身份证"></input>
				
				<input type="password" name="new_pwd" id="new_pwd" class="form-control borderR0" placeholder="新密码"></input>
				<input type="password" name="re_pwd" id="re_pwd" class="form-control borderRbrl0" placeholder="确认新密码"></input><br/>
				<button type="button" id="" class="btn btn-primary btn-lg btn-block" onclick="forgetpassword()">更新</button>
				<a href="<?php echo U('Home/Index/index');?>" class="btn_toreg">返回登录</a>
			</form>
		</div>
	</div>
</div>
<div style="position: fixed;bottom: 0px;width: 100%">
	<div class="row" style="margin:0;background-color: #333;color: #faf1ce;padding: 20px;text-align: center;">
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