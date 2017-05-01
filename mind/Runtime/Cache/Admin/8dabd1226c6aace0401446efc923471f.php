<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="<?php echo ($think["const"]["/h_wei/hw/Admin/Admin/updcate/id/22.html"]); ?>" enctype="multipart/form-data">
	<table>
		<tr>
			<th colspan="2"> 添加栏目分类</th>
		</tr>
		<tr>
			<td align="right">添加分类名称</td>
			<td><input name="title" type="text" value="<?php echo ($info["title"]); ?>"></input></td>
		</tr>
		<tr>
			<td align="right">添加链接</td>
			<td><input type="text" name="url" value="<?php echo ($info["url"]); ?>"></input> </td>
		</tr>
		<tr>
			<td align="right">排序</td>
			<td><input name="sort" type="text" value="<?php echo ($info["sort"]); ?>"></input></td>
		</tr>
		<tr>
			<td colspan="2" align="right">
			
			<input type="submit" value="保存添加" />
			</td>
			<td></td>
		</tr>
	</table>
</form>
</body>
</html>