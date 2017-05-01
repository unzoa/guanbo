<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>大手印恒力训练系统-登录</title>
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
  <style>
  ::-webkit-input-placeholder { /* WebKit, Blink, Edge */
      color:   #fff!important;
  }
  :-moz-placeholder { /* Mozilla Firefox 4 to 18 */
     color:    #fff!important;
     opacity:  1;
  }
  ::-moz-placeholder { /* Mozilla Firefox 19+ */
     color:    #fff!important;
     opacity:  1;
  }
  :-ms-input-placeholder { /* Internet Explorer 10-11 */
     color:    #fff!important;
  }
  .row{padding: 0;margin:0 }
  </style>
  <body style="background-image: url(<?php echo (HIMG); ?>gb.jpg);background-size: cover;">

    <!-- <div class="container-fluid aa "> -->
    <div class="row bs_login_con">
      <div class="col-sm-4">
        <form class="form-signin" role="form" action="<?php echo ($think["const"]["/index.php/Home/Manage/login.html"]); ?>" method="post">
          <!-- <h2 class="cfff">登录</h2> -->
          <input type="text" name="name" id="inputName" class="form-control bs_log_input" placeholder="昵称" required>
          <input type="password" name="pwd" id="inputPassword" class="form-control bs_log_input" placeholder="密码" required>
          <button class="btn btn-lg bs_login_btn pull-left" type="submit" style="margin-top: 10px;width: 46%">登录</button>
          <a href="<?php echo U('Home/Manage/register');?>">
            <button class="btn btn-lg bs_login_btn pull-left" type="button" style="margin-top: 10px;margin-left:8%;width: 46%">注册</button>
          </a>
        </form>
      </div>
    <!-- </div> -->
      
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