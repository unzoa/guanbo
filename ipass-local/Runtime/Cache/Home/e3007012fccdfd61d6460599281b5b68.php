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
@media (max-width: 767px){
	.my_nav_padding{
		padding-left: 15px!important;
		padding-right: 15px!important
	}
}
.my_icon_con{
	text-align: center;
	padding-top: 20px;
	padding-bottom: 20px;
	border-bottom: 1px solid #d8d8d8;
}
.my_icon_href{
	color: #333;
}
.my_media{
	padding-bottom: 10px;
	border-bottom: 1px solid #eee;
}
.my_media img{
	width: 100px;
}
.my_footer{
	position: fixed;
	bottom: 0;
	width: 100%
}
</style>
<script type="text/javascript">
    window.document.title = '教育热点 - 心•故事';
</script>
<body>
<style>
.carousel-caption {
    bottom: 0px;
    padding-top: 5px;
    padding-bottom: 5px;
	right: 0!important;
	left: 0!important;
    color: #fff;
	background-color:rgba(0,0,0,0.4);
    text-align: center;
    text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
}
.my_carousel_img{
	height: 600px;
	padding: 0;
}
.dn{display: none;}
@media (max-width: 767px){
	.my_carousel_img{
		height: 200px;
	}
	.carousel-caption{
		right: 0!important;
		left: 0!important;
	}
}
</style>
<section class="">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators dn">
	    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <div class="item active my_carousel_img" style="background-image: url(<?php echo (UIMG); echo ($banner[0][img]); ?>);background-size: cover;background-position: center;">
	      <div class="carousel-caption">
	        <?php echo ($banner[0][intro]); ?>
	      </div>
	    </div>
	    <div class="item my_carousel_img" style="background-image: url(<?php echo (UIMG); echo ($banner[1][img]); ?>);background-size: cover;background-position: center;">
	      <div class="carousel-caption">
	        <?php echo ($banner[1][intro]); ?>
	      </div>
	    </div>
	    <div class="item my_carousel_img" style="background-image: url(<?php echo (UIMG); echo ($banner[2][img]); ?>);background-size: cover;background-position: center;">
	      <div class="carousel-caption">
	        <?php echo ($banner[2][intro]); ?>
	      </div>
	    </div>
	  </div>

	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
</section>
<section class="container my_nav_padding">
	<div class="row text-center my_icon_con">
		<div class="col-xs-4">
			<a href="<?php echo U('Story/index');?>" class="my_icon_href">公益行走</a>
		</div>
		<div class="col-xs-4">
			<a href="<?php echo U('Story/qzql');?>" class="my_icon_href">亲子桥梁</a>
		</div>
		<div class="col-xs-4">
			<a href="<?php echo U('Story/jyrd');?>" class="my_icon_href" style="color: #4ed487">教育热点</a>
		</div>
	</div>
	<div class="row" style="padding:15px 15px 61px"/>
	<!-- ============media============ -->
	<?php if(is_array($story)): $i = 0; $__LIST__ = $story;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="media my_media">
		  <a class="media-left media-middle" href="<?php echo U('Story/readstory',array('id'=>$v['id']));?>">
			<div style="height: 60px;width: 80px; background-image:url(<?php echo (UIMG); echo ($v["img"]); ?>);background-size:cover; background-position:center;"></div>
		    <!--img src="<?php echo (UIMG); echo ($v["img"]); ?>" alt="<?php echo (UIMG); echo ($v["img"]); ?>"-->
		  </a>
		  <div class="media-body">
			<a href="<?php echo U('Story/readstory',array('id'=>$v['id']));?>" style="color:#777">
				<h5 class="media-heading"><?php echo ($v["title"]); ?></h5>
			</a>
		    <!--p style="width: 10em;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;color: #999">
		    	<?php echo ($v["intro"]); ?>
		    </p-->
		    <div style="color: #999;font-size:12px">
		    	<?php echo ($v["time"]); ?> <i class="icon-eye-open"></i> <?php echo ($v["view"]); ?>
		    </div>
		  </div>
		</div><?php endforeach; endif; else: echo "" ;endif; ?>
	</div>
</section>
<section class="my_footer">
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
</section>
<!-- preload -->
<link rel="stylesheet" href="<?php echo (HCSS); ?>preload.css">
<script src="<?php echo (HJS); ?>preload.js"></script>
</body>
</html>