<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="cleartype" content="on">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>增加专家信息</title>
	<link rel='stylesheet' href='<?php echo (AWE_URL); ?>font-awesome.min.css'>
	<link rel="stylesheet" type="text/css" href="<?php echo (BS_URL); ?>bootstrap.min.css">
	<style>
        body {background-color: #eee;font-family: "Open Sans", Calibri, Candara, Arial, sans-serif;min-height: 100vh;}
        .aa{border:1px red solid;}
        .header{height: 48px;background-color: #1898cf;line-height: 48px;color: #fff;padding-left: 30px;}
        .mt10{margin-top: 10px}
    </style>
    <script type="text/javascript" src="<?php echo (U_); ?>ueditor.config.js"></script>
	<script type="text/javascript" src="<?php echo (U_); ?>ueditor.all.js"></script>
	
</head>
<body>
<div class="header"><span><a href="<?php echo U('Admin/Admin/index');?>" style="color: #fff;">< 首页</a></span></div>
<div class="container mt10">
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<form action="<?php echo ($think["const"]["/h_wei/hw/Admin/Admin/updjudge/id/1.html"]); ?>" enctype="multipart/form-data" method="post"> 
				<input type="text" name="name" value="<?php echo ($info["name"]); ?>"></input>
				<textarea name="judge" style="width:100%;"><?php echo ($info["judge"]); ?></textarea>
				<INPUT type="submit" value="提交">
			</form>
		</div>
	</div>
</div>
</body>
</html>