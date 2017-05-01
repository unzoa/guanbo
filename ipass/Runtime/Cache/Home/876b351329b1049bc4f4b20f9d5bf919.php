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
<script type="text/javascript">
	function formsubmit1(){
		var title = $('#title').val();
		var img = $('#img').val();
		var intro = $('#intro').val();
		var content = $('#content').val();
		var type = $('#type').val();
		if (title==''||img==''||intro==''||content==''||type=='') {
			$('#myModal').modal('show');
		}else{
			$('#my_form1').submit();
		}
	}
	function formsubmit11(){
		var title = $('#title').val();
		var intro = $('#intro').val();
		var content = $('#content').val();
		var type = $('#type').val();
		if (title==''||intro==''||content==''||type=='') {
			$('#myModal').modal('show');
		}else{
			$('#my_form11').submit();
		}
	}
	function loginsubmit(){
		var name = $('#name').val();
		var pwd = $('#pwd').val();
		if (name==''||pwd=='') {
			$('#myModal').modal('show');
		}else{
			$('#loginorm').submit();
		}
	}
	function formsubmit12(){
		var img = $('#img').val();
		var intro = $('#intro').val();
		if (img==''||intro=='') {
			$('#myModal').modal('show');
		}else{
			$('#my_banner').submit();
		}
	}
</script>
<body>
<br/><br/><br/><br/>
<div class="container">
	<div class="col-sm-4 col-sm-offset-4">
		<h2>Login</h2>
		<form method="post" action="<?php echo U('Admin/login');?>" id="loginorm">
			<input type="text" name="name" id="name" class="form-control" placeholder="number"></input>
			<input type="password" name="pwd" id="pwd" class="form-control" placeholder="password"></input>
			<br/>
			<input type="button" id="" class="btn btn-block btn-primary" value="登录" onclick="loginsubmit()"></input>
		</form>
	</div>
</div>
<!-- 提示框 -->
<div class="modal fade bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">提示</h4>
      </div>
      <div class="modal-body">
        不能漏填哦!
      </div>
    </div>
  </div>
</div>
</body>
</html>