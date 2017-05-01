<?php if (!defined('THINK_PATH')) exit();?><table cellpadding=3 cellspacing=5>
<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
<td ><!-- [ <?php echo (date('Y-m-d H:i:s',$vo["create_time"])); ?> ] --> <?php echo ($vo["title"]); ?> </td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
<tr>        
</tr>
</table>
<div class="result page"><?php echo ($page); ?></div>