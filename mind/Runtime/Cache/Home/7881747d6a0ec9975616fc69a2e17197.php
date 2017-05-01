<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>nav</title>
	<link rel="stylesheet" type="text/css" href="<?php echo (BS_URL); ?>bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>style.css">
	<script type="text/javascript" src="<?php echo (JS_URL); ?>jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="<?php echo (BJS_URL); ?>bootstrap.min.js"></script>
</head>
<body>
<nav class="animenu nav-default">
  <div class="header"> 
  <button class="animenu__toggle">
    <span class="animenu__toggle__bar"></span>
    <span class="animenu__toggle__bar"></span>
    <span class="animenu__toggle__bar"></span>
  </button>
  <span>logo</span>
  </div>
  <ul class="animenu__nav">
  <li style="color: #fff;padding: 0 30px;border-right: none;">logo</li>
  <?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>
      <a href="<?php echo ($v["url"]); ?>"><?php echo ($v["title"]); ?></a>
      <ul class="animenu__nav__child">
      <?php if(is_array($v['child'])): $i = 0; $__LIST__ = $v['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$f): $mod = ($i % 2 );++$i;?><li><a href=<?php echo ($f["url"]); ?>><?php echo ($f["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </li><?php endforeach; endif; else: echo "" ;endif; ?>                 
  </ul>
</nav>
<script type="text/javascript" src="<?php echo (JS_URL); ?>animenu.js"></script>
</body>
</html>