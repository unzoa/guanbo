<?php if (!defined('THINK_PATH')) exit();?><a href="<?php echo U('Admin/Atest/testread');?>">-read-</a>
<hr/>
<form method="post" action="<?php echo ($think["const"]["/hanwei/hw/Admin/Atest/testupd/id/78.html"]); ?>" enctype="multipart/form-data">
<input type="text" name="name" value="<?php echo ($info["name"]); ?>"></input>->name<hr/>
<script type="text/javascript" src="<?php echo (U_); ?>ueditor.config.js"></script>
<script type="text/javascript" src="<?php echo (U_); ?>ueditor.all.js"></script>
<script type="text/javascript">
	window.onload = function(){
		UE.getEditor('content');
	}
</script>
<textarea name="content" id="content" style="width:100%;"><?php echo ($info["content"]); ?></textarea>
<hr/>
<input type="file" name="img"></input>->img
<hr/>
<INPUT type="submit" value="更新">
</FORM>