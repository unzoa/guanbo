<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="<?php echo U('Admin/Admin/runaddcate');?>" enctype="multipart/form-data">
	<table>
		<tr>
			<th colspan="2"> 添加栏目分类</th>
		</tr>
		<tr>
			<td align="right">添加分类名称</td>
			<td><input name="title" type="text"></input></td>
		</tr>
		<tr>
			<td align="right">添加链接</td>
			<td><input type="text" name="url"></input> </td>
		</tr>
		<tr>
			<td align="right">排序</td>
			<td><input name="sort" type="text" value="100"></input></td>
		</tr>
		<tr>
			<td colspan="2" align="right">
			<input name="cid" type="hidden" value="<?php echo ($cid); ?>"></input>
			<input type="submit" value="保存添加" />
			</td>
			<td></td>
		</tr>
	</table>
</form>
</body>
</html>