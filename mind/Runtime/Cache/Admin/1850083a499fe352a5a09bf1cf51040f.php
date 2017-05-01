<?php if (!defined('THINK_PATH')) exit();?><form method="post" action="<?php echo ($think["const"]["/hanwei/hw/index.php/Admin/Atest/testupd/id/37.html"]); ?>" enctype="multipart/form-data">
<input type="text" name="name" value="<?php echo ($info["name"]); ?>"></input>->name<hr/>
<TEXTAREA name="content" rows="5" cols="45"><?php echo ($info["content"]); ?></TEXTAREA>->content
<hr/>
<input type="file" name="img"></input>->img
<hr/>
<INPUT type="submit" value="更新">
</FORM>
<hr/>
<a href="<?php echo U('Admin/Atest/testread');?>"><button value="查看">查看</button></a>