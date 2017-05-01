<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>大手印恒力训练系统-注册</title>
    <link href="<?php echo (HCSS); ?>style.css" rel="stylesheet">
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
    <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
      <form class="form-signin" role="form" action="<?php echo ($think["const"]["/index.php/Home/Manage/register.html"]); ?>" method="post" enctype="multipart/form-data">
        <h2>注册</h2>
        <!-- name -->
        <input type="text" name="name" id="inputName" class="form-control mb10" placeholder="输入用户名" required>
        <!-- password -->
        <input type="password" name="pwd" id="inputPassword" class="form-control" minlength="6" maxlength="11" minlength="6" placeholder="输入密码" required>
        <!-- sex -->
        <select name="sex" class="form-control" style="margin-bottom:10px">
          <option disabled="disabled">性别</option>
          <option>男</option>
          <option>女</option>
        </select>
        <!-- team -->
        <select name="team_id" class="form-control" style="margin-bottom:10px">
            <option disabled="disabled">团队</option>
            <?php if(is_array($team)): $i = 0; $__LIST__ = $team;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
        </select>
        <!-- phone -->
        <input type="tel" name="phone" class="form-control" minlength="11" maxlength="11" placeholder="手机号" style="margin-bottom:10px" required>
       
        <!-- vertify -->
        <input type="text" name="captcha" id="inputVerify" class="form-control" placeholder="输入验证码" style="margin-bottom: 10px" required>
        <img src="<?php echo U('Home/Manage/VerifyImg');?>"  alt="" /><button id="hyh" class="btn btn-warning" style="margin-left: 10px">换一换</button>
        <button class="btn btn-lg btn-info btn-block" id="" type="submit" style="margin-top: 10px">注册</button>
        <a href="<?php echo U('Home/Manage/login');?>"><button class="btn btn-lg btn-primary btn-block" type="button" style="margin-top: 10px">登录</button></a>
      </form>
      <script type="text/javascript">
        var btn = document.getElementById('hyh');
        btn.onclick=function(){
          window.location.reload();
        }
      </script>
      </div>
    </div> 
    <!-- row -->
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo (HJS); ?>ie10-viewport-bug-workaround.js"></script>
  </body>
</html>