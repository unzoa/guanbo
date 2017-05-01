<?php if (!defined('THINK_PATH')) exit();?><a href="<?php echo U('Admin/Atest/testread');?>">-read-</a>
<hr/>
<form method="post" action="<?php echo ($think["const"]["/h_wei/hw/Admin/Atest/testadd.html"]); ?>" enctype="multipart/form-data">
<input type="text" name="name"></input>->name<hr/>

<script type="text/javascript" src="<?php echo (U_); ?>ueditor.config.js"></script>
<script type="text/javascript" src="<?php echo (U_); ?>ueditor.all.js"></script>
<script type="text/javascript">
	window.onload = function(){
		UE.getEditor('content');
	}
</script>
<textarea name="content" id="content" style="width:100%;"></textarea>
<hr/>
<select name="category_id">
	<?php if(is_array($cid)): foreach($cid as $key=>$vo): ?><option value="<?php echo ($vo["cid"]); ?>"><?php echo ($vo["categories_id"]); ?></option><?php endforeach; endif; ?>
</select>
<hr/>
<input type="file" name="img"></input>->img
<hr/>
<INPUT type="submit" value="提交">
</FORM>