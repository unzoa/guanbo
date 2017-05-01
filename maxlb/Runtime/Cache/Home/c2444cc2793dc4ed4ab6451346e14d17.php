<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
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
  <style>
    html,body{height: 100%;margin:0; padding: 0;}
    .row{padding: 0;margin:0 }
    .login_con{padding: 20px 4% 0;}
    .login_con2{padding: 250px 4% 0}
    @media (max-width: 767px){
      .login_con{padding: 0px 10% 0}
    }
  </style>
  <script type="text/javascript">
      window.document.title = '登录 - i.P.A.S.S';
  </script>
  <body>

    <div class="container-fluid" style="height: 100%;padding: 0; background-image: url('<?php echo (HIMG); ?>2.jpeg');background-size: cover;background-position: center;">
      
      <!-- head -->
      <div class="row login_head">
        <div class="col-sm-3 login_logo_con">
          <img src="<?php echo (HIMG); ?>logo.png" class="login_logo">
        </div>
        <div class="col-sm-3 col-sm-offset-6 hidden-xs">
          <!-- <h2 style="color: #ff9279">小改变创造大不同</h2> -->
        </div>
      </div>

      <!-- body -->
      <div class="row">
        <div class="col-sm-8 hidden-xs ">
          <div class="col-sm-8 col-sm-offset-2 login_con2">
              <!-- <h1 style="color: #ff9279">小改变创造大不同</h1> -->
          </div>
        </div>
        <div class="col-sm-4 login_con">
          <h2 class="login_slogan">小改变创造大不同</h2>
          <form class="form-signin login_form_con" role="form" action="<?php echo U('Home/Index/login');?>" method="post">
            <h2 style="color: #9aaabf;">登录 i.P.A.S.S</h2>
            <input type="text" name="number" id="inputName" class="form-control" placeholder="账号" style="border-bottom-right-radius: 0;border-bottom-left-radius: 0" required>
            <input type="password" name="pwd" id="inputPassword" class="form-control" placeholder="密码" style="border-top-right-radius: 0;border-top-left-radius: 0" required>
            <br/>
            <button class="btn btn-lg btn-block btn-primary " type="submit">登录</button>
            <br/>
            <p><span style="color: red">忘记密码？</span>拨打电话：<a href="tel:024-67755317">024-67755317</a></p>
          </form>
        </div>
      </div>
    </div> <!-- /container -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo (HJS); ?>ie10-viewport-bug-workaround.js"></script>
  </body>
</html>