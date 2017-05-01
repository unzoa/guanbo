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
html,body{
	height: 100%;
	margin: 0;
	padding: 0
}
.my_nav_padding{
	padding-left: 6%!important;
	padding-right: 6%!important
}
.story_con img{
	width: 100%!important;
}
@media (max-width: 767px){
	.my_nav_padding{
		padding-left: 15px!important;
		padding-right: 15px!important
	}
}
</style>
<script type="text/javascript">
	window.document.title = '<?php echo ($story[0][title]); ?>';
	function aa(){
		var type = '<?php echo ($story[0][type]); ?>';
		if (type==1) {
			$('.storytype').html('公益行走');
		}else if (type==2) {
			$('.storytype').html('亲子桥梁');
		}else if (type==3) {
			$('.storytype').html('教育热点');
		}
		
	}
</script>
<body onload="aa()">
<img src="<?php echo (UIMG); echo ($story[0][img]); ?>" alt="<?php echo (UIMG); echo ($story[0][img]); ?>" style="width: 100%">
<section class="container my_nav_padding">
	<div class="row">
		<br/>
		<div class="col-xs-12">
			<i class="icon-quote-left icon-large"></i> <span class="storytype"></span>
		</div>
		<div class="col-xs-12">
			<p class="" style='font-size:24px;margin-top:7px'><?php echo ($story[0][title]); ?></p>	
		</div>
		<div class="col-xs-12" style="padding:7px 0 17px;">
			<div class="col-xs-6">
				<i class="icon-bookmark"></i> <span><a href="<?php echo U('Story/index');?>" style='color:#3399f3'>心•故事</a></span>
			</div>
			<div class="col-xs-6 text-right">
				<?php echo ($story[0][time]); ?> <i class="icon-eye-open"></i> <?php echo ($story[0][view]); ?>
			</div>
		</div>
				
		<p class="text-center" style="color: #a6a6a6;font-size: 17px; line-height:23px; padding-left: 20%;padding-right: 20%"><?php echo ($story[0][intro]); ?></p>
		<div class="col-xs-4 col-xs-offset-4">
			<hr style="border-color: #d8d8d8"/>
		</div>
		<div class="col-xs-12 story_con">
			<?php echo (html_entity_decode($story[0][content])); ?>
		</div>
	</div>
</section>
<!-- preload -->
<link rel="stylesheet" href="<?php echo (HCSS); ?>preload.css">
<script src="<?php echo (HJS); ?>preload.js"></script>
</body>
</html>