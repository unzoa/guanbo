<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>nav</title>
	<style type="text/css">
	ul li {float: left; margin-right: 20px}
	</style>
</head>
<body>
<?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><ul>
	<li><?php echo ($v["title"]); ?>
		<ul>
			<li><?php echo ($v["child"]); ?></li>
		</ul>
	</li>
</ul><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>