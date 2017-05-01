<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>hanwei</title>
	<link rel="stylesheet" type="text/css" href="<?php echo (BS_URL); ?>bootstrap.min.css">
	<script type="text/javascript" src="<?php echo (JS_URL); ?>jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="<?php echo (BJS_URL); ?>bootstrap.min.js"></script>
	<link rel='stylesheet' href='<?php echo (AWE_URL); ?>font-awesome.min.css'>
	<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>web.css">
	<!-- nav -->
	<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>style.css">
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<!-- ------------------ -->
		<div class="col-sm-10 col-sm-offset-1 z99">
			<div class="row h_banner">
				<div class="col-sm-4">
					<img src="<?php echo (IMG_URL); ?>3.png">
				</div>
				<div class="col-sm-8">
					<nav class="animenu">
					  <div class="header"> 
						  <button class="animenu__toggle">
						    <span class="animenu__toggle__bar"></span>
						    <span class="animenu__toggle__bar"></span>
						    <span class="animenu__toggle__bar"></span>
						  </button>
						  <h4 class="pull-right">瀚威心理</h4>
					  </div>
					  <ul class="animenu__nav">
					  <?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>
					      <a href="<?php echo ($v["url"]); ?>"><?php echo ($v["title"]); ?></a>
					      <ul class="animenu__nav__child">
					      <?php if(is_array($v['child'])): $i = 0; $__LIST__ = $v['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$f): $mod = ($i % 2 );++$i;?><li><a href=<?php echo ($f["url"]); ?>><?php echo ($f["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
					      </ul>
					    </li><?php endforeach; endif; else: echo "" ;endif; ?>                 
					  </ul>
					</nav>
				</div>
			</div>
		</div>
		<!-- ------------------ -->
		<div class="col-xs-12 z88 aa">carousel</div>
		<!-- ------------------ -->
		<div class="col-xs-12 z88 aa">team&environment</div>
		<!-- ------------------ -->
		<div class="col-xs-12 z88 aa">our service</div>

	</div>
</div>
<script type="text/javascript" src="<?php echo (JS_URL); ?>animenu.js"></script>
</body>
</html>