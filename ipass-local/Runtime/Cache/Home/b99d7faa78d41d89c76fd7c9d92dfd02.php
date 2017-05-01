<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  	<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/ipass/favicon.ico">
	<title>i.P.A.S.S</title>
	<link rel="stylesheet" href="<?php echo (HCSS); ?>style.css">
	<script src="<?php echo (HJS); ?>jquery-2.1.1.min.js"></script>
	<script src="<?php echo (HJS); ?>ipass.js"></script>
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
</head>
  	<script type="text/javascript">
	    window.document.title = '注册 - i.P.A.S.S';
	</script>
  	<script type="text/javascript">
		function formsubmit(){
			var NickName = document.getElementById('nickname').value;
			var number = document.getElementById('number').value;
			var password = document.getElementById('password').value;
			var repassword = document.getElementById('repassword').value;
			if (NickName=='') {alert("昵称不能为空！")}
			else if (number.length<6||isNaN(number)) {alert("账号必须大于或等于6位数字!")}
			else if (password==''||password.length<6) {alert("密码不能少于 6 位!")}
			else if (repassword!==password) {alert("两次密码不同!")}
			else{
				document.getElementById('myform').submit();
			}
		}
	</script>
	<script type="text/javascript">
	    var btn = document.getElementById('hyh');
	    btn.onclick=function(){
	      window.location.reload();
	    }
  	</script>
  	<style>
  		html,body{height: 100%;margin: 0;padding: 0}
  		.row{padding: 0;margin:0 }
  		.borderR0{border-radius: 0;}
  		.borderRtrl0{border-bottom-left-radius: 0px;border-bottom-right-radius: 0px}
  		.borderRbrl0{border-top-left-radius: 0px;border-top-right-radius: 0px}
  		.login_con{padding: 140px 4% 0;}
		@media (max-width: 767px){
		   	.login_con{padding: 30px 4% 0}
		}
  	</style>
  <body>
  	<div class="container-fluid" style="height: 100%;padding: 0; background-image: url('<?php echo (HIMG); ?>2.jpeg');background-size: cover;background-position: center;">
	    <div class="row">
	      <div class="col-sm-4 col-sm-offset-8 login_con">
	          <form action="<?php echo U('Home/Index/reg');?>" method="post" id="myform" class="login_form_con">
				<h2 style="color: #9aaabf;">注册 i.P.A.S.S</h2>
				<input type="text" id="nickname" name="nickname" class="form-control borderRtrl0" placeholder="昵称"></input>
				<input type="text" id="number" name="number" class="form-control borderR0" placeholder="账号"></input>
				<input type="password" id="password" name="password" class="form-control borderR0" placeholder="密码"></input>
				<input type="password" id="repassword" name="repassword" class="form-control borderR0" placeholder="再次确认密码"></input>
				<input type="text" name="captcha" id="inputVerify" class="form-control borderRbrl0" placeholder="输入验证码" required><br/>
				<img src="<?php echo U('Home/Index/VerifyImg');?>"  alt="" /><button id="hyh" class="btn btn-warning" style="margin-left: 10px">换一换</button><br/><br/>
				<input type="button" class="btn btn-lg btn-block btn-info" value="注册" onclick="formsubmit()"/>
	          	<a href="<?php echo U('Home/Index/index');?>" class="btn_toreg">返回登录</a>
	        </form>
	      </div>
	    </div>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo (HJS); ?>ie10-viewport-bug-workaround.js"></script>
  </body>
</html>