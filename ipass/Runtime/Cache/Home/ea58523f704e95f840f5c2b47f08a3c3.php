<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>haha</title>
</head>
<body>
<!-- haha-page<?php echo ($userNumber); ?> -->
<form method="post" action="<?php echo U('Home/Index/haha');?>">
<!-- <input type="radio" name="sex" value="man">man</input>
<input type="radio" name="sex" value="woman">woman</input> -->
<input type="checkbox" name="111[]" value="111">11</input>
<input type="checkbox" name="111[]" value="222">22</input>
<input type="checkbox" name="111[]" value="333">33</input>
<input type="submit" value="send"></input>
</form>
</body>
</html>