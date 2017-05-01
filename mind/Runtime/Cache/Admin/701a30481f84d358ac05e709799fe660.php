<?php if (!defined('THINK_PATH')) exit();?><form method="post" action="<?php echo ($think["const"]["/hanwei/hw/index.php/Admin/Atest/testadd.html"]); ?>" enctype="multipart/form-data">
<input type="text" name="name"></input>->name<hr/>
<TEXTAREA name="content" rows="5" cols="45"></TEXTAREA>->content
<hr/>
<input type="file" name="img"></input>->img
<hr/>
<INPUT type="submit" value="提交">
</FORM>