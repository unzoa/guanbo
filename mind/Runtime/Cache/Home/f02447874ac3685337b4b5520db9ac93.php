<?php if (!defined('THINK_PATH')) exit();?>
<?php if(is_array($info)): foreach($info as $key=>$vo): ?><tr>
  	<td><?php echo ($vo["name"]); ?></td>
  	<td><?php echo ($vo["content"]); ?></td>
  	<td><img src="<?php echo (IMG_UPLOAD); echo ($vo["img"]); ?>" onerror="this.src='<?php echo (IMG_UPLOAD); ?>Upload/2016-06-25/576e74665494f.png'" style="max-width: 100px;max-height: 100px; box-shadow: 0 0 5px #999"></td>
  </tr>
  <hr/><?php endforeach; endif; ?>
<a href="<?php echo (FORUM); ?>">论坛</a>