<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Register</title>
    <script src="<?php echo (HJS); ?>web.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo (BCSS); ?>bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo (HCSS); ?>signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo (HJS); ?>ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

      <form class="form-signin" role="form" action="<?php echo ($think["const"]["/baoshu/index.php/Home/Index/register"]); ?>" method="post">
        <h2 class="form-signin-heading">注册</h2>
        <!-- name -->
        <input type="text" name="name" id="inputName" class="form-control" placeholder="输入用户名" required autofocus>
        <!-- password -->
        <input type="password" name="pwd" id="inputPassword" class="form-control" placeholder="输入密码" required>
        <!-- phone -->
        <input type="tel" name="phone" class="form-control" placeholder="手机号" required>
        <!-- sex -->
        <select name="sex" class="form-control">
          <option>保密</option>
          <option>男</option>
          <option>女</option>
        </select>
        <!-- vertify -->
        <input type="text" name="captcha" id="inputVerify" class="form-control" required>
        <img src="<?php echo U('Home/Manage/VerifyImg');?>"  alt="" /><button id="hyh" class="btn btn-warning">换一换</button>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> 记住我
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" id="" type="submit">登录</button>
      </form>
      <script type="text/javascript">
        var btn = document.getElementById('hyh');
        btn.onclick=function(){
          window.location.reload();
        }
      </script>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo (HJS); ?>ie10-viewport-bug-workaround.js"></script>
  </body>
</html>