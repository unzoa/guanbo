<?php if (!defined('THINK_PATH')) exit();?><a href="<?php echo U('Admin/Atest/testadd');?>">-add-</a>
<a onclick="if (confirm('确定要退出吗？')) return true; else return false;" href="<?php echo U('Admin/Manage/logout');?>" style="float: right;">-logout-</a>
<span style="float: right; margin-right: 50px"><span style="font-weight: bold;">user : </span><?php echo (session('name')); ?></span>
<hr/>
<form method="get" action="<?php echo U('Admin/Atest/newsearch',array('id'=>$vo['id']));?>">
  <select name="category_id">
    <?php if(is_array($grand)): foreach($grand as $key=>$vo): ?><option value="<?php echo ($vo["cid"]); ?>"><?php echo ($vo["categories_id"]); ?></option><?php endforeach; endif; ?>
  </select>
  <input type="submit" value="search"></input>
</form>

<hr/>

<tr>
  <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><td><?php echo ($vo["id"]); ?></td>
    <td><?php echo ($vo["name"]); ?></td>
    <td><?php echo (html_entity_decode($vo["content"])); ?></td>
    <td>--<?php echo ($vo["categories_id"]); ?>--</td>
    <td><img src="<?php echo (IMG_UPLOAD); echo ($vo["img"]); ?>" onerror="this.src='<?php echo (IMG_UPLOAD); ?>Upload/2016-06-25/576e74665494f.png'" style="max-width: 100px;max-height: 100px; box-shadow: 0 0 5px #999"></td>
    <td><a href="<?php echo U('Admin/Atest/testupd',array('id'=>$vo['id']));?>">-update-</a></td>
    <td><a href="<?php echo U('Admin/Atest/testdel',array('id'=>$vo['id']));?>">-delete-</a></td>
    <hr/><?php endforeach; endif; else: echo "" ;endif; ?>
</tr>
<tr>
  <td >
    <?php echo ($pagelist); ?>
  </td>
</tr>