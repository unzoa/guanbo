<?php
namespace Component;
/**
* 
*/
class Category
{
	//递归
	Static Public function unlimitedForLevel($nav, $html = '--',$cid=0,$level=0)
	{
		$arr = array();
		foreach ($nav as $v) {
			if ($v['cid'] == $cid) {
				$v['level'] = $level +1;
				$v['html'] = str_repeat($html, $level);
				$arr[]= $v;
				$arr = array_merge($arr,self::unlimitedForLevel($nav,$html,$v['id'],$level + 1));
			}
		}
		return $arr;
	}
	//多维数组
	Static Public function unlimitedForLayer($nav, $cid = 0)
	{
		$arr = array();
		foreach ($nav as $v) {
			if ($v['cid'] == $cid) {
				$v['child'] = self::unlimitedForLayer($nav, $v['id']);
				$arr[] = $v;
			}
		}
		return $arr;
	}
}
?>