<?php if (!defined('THINK_PATH')) exit();?><a href="<?php echo U('Admin/Atest/testread');?>">-read-</a>
<hr/>
<?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
  	<td><?php echo ($vo["name"]); ?></td>
  	<td><?php echo ($vo["content"]); ?></td>
  	<td><img src="<?php echo (IMG_UPLOAD); echo ($vo["img"]); ?>" onerror="this.src='<?php echo (IMG_UPLOAD); ?>Upload/2016-06-25/576e74665494f.png'" style="max-width: 100px;max-height: 100px; box-shadow: 0 0 5px #999"></td>
  	<td><a href="<?php echo U('Admin/Atest/testupd',array('id'=>$vo['id']));?>">-update-</a></td>
  	<td><a href="<?php echo U('Admin/Atest/testdel',array('id'=>$vo['id']));?>">-delete-</a></td>
  </tr>
  <hr/><?php endforeach; endif; ?>