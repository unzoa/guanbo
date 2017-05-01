<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>心理测验</title>
		<link rel="stylesheet" type="text/css" href="<?php echo (BS_URL); ?>bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>xinliceyan.css">
		<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>head.css">
		<script src="<?php echo (BJS_URL); ?>bootstrap.js"></script>
		<style>
			 A:link {
			  color: black; text-decoration: none
			 }
			 A:visited {
			  color: black; text-decoration: none
			 }
			 A:hover {
			  color: green; text-decoration: none
			 }
		</style>
	</head>
	<body>
		<div class="container-fluid aa">
			<div class="row head_bg">
				<div class="col-sm-12">&nbsp;
					<div class="row">
						<div class="col-sm-4 aa">
                        	<img src="<?php echo (IMG_URL); ?>3.png" class="logo">
                        </div>
						<div class="col-sm-4"></div>
                        <div class="col-sm-4 aa">
                        	 <img src="<?php echo (IMG_URL); ?>5.png" class="rexian">
                            <img src="<?php echo (IMG_URL); ?>4.png" class="erweima">
                        </div>
					</div>
				</div>
				<div class="col-sm-12 aa">
					<div class=""  style="background: #fff;width: 100%;height: 37px;margin-bottom: 8px; padding-left: 80px;">
						
						<ul id="my-nav" class="">
						
						<li class="aa"><a href="<?php echo U('Home/hanwei/index');?>" class="sssss">首页</a></li>
					    <li class="aa"><a href="<?php echo U('Home/hanwei/xlzx');?>" class="sssss">心理咨询</a>
					    	<ul>
					    		<li><a href="<?php echo U('Home/hanwei/wz');?>" class="asasas">心理项目介绍</a></li>
					    		<li><a href="<?php echo U('Home/hanwei/wz');?>" class="asasas">心理咨询师介绍</a></li>
					    	</ul>
					    </li>
					    <li class="aa"><a href="<?php echo U('Home/hanwei/xlxx');?>" class="sssss">心理宣泄</a>
					    	<ul>
					    		<li><a href="<?php echo U('Home/hanwei/fx');?>" class="asasas">快乐墙</a></li>
					    		<li><a href="<?php echo U('Home/hanwei/fx');?>" class="asasas">郁闷墙</a></li>

					    	</ul>
					    </li>
					    <li class="aa"><a href="<?php echo U('Home/hanwei/xlzs');?>" class="sssss">心理知识</a>
					    	<ul>
					    		<li><a href="<?php echo U('Home/hanwei/wz');?>" class="asasas">心理疗法</a></li>
					    		<li><a href="<?php echo U('Home/hanwei/wz');?>" class="asasas">心理症状名词</a></li>
					    		<li><a href="<?php echo U('Home/hanwei/wz');?>" class="asasas">心理咨询流派</a></li>
					    	</ul>
					    </li>
					    <li class="aa"><a href="<?php echo U('Home/hanwei/cgal');?>" class="sssss">成功案例</a>
					    	<ul>
					    		<li><a href="<?php echo U('Home/hanwei/wz');?>" class="asasas">绘画案例1</a></li>
					    		<li><a href="<?php echo U('Home/hanwei/wz');?>" class="asasas">心理剧剧本</a></li>
					    		<li><a href="<?php echo U('Home/hanwei/wz');?>" class="asasas">完形治疗案例</a></li>
					    		<li><a href="<?php echo U('Home/hanwei/wz');?>" class="asasas">八年抑郁经验总…</a></li>
					    		<li><a href="<?php echo U('Home/hanwei/wz');?>" class="asasas">从考试看不进书…</a></li>
					    		<li><a href="<?php echo U('Home/hanwei/wz');?>" class="asasas">画出你的伤痛画…</a></li>
					    		<li><a href="<?php echo U('Home/hanwei/wz');?>" class="asasas">探秘遗忘的记忆…</a></li>
					    		<li><a href="<?php echo U('Home/hanwei/wz');?>" class="asasas">团体箱庭疗法在…</a></li>
					    		<li><a href="<?php echo U('Home/hanwei/wz');?>" class="asasas">以森田疗法治愈…</a></li>
					    		<li><a href="<?php echo U('Home/hanwei/wz');?>" class="asasas">因悲伤怒气而致…</a></li>
					    	</ul>
					    </li>
					    <li class="my_on aa"><a href="<?php echo U('Home/hanwei/xlcy');?>"  style="color: #fff;" class="sssss">心理测验</a>
					    	<ul>
					    		<li><a href="<?php echo U('Home/hanwei/wz');?>" class="asasas">性格测试</a></li>
					    		<li><a href="<?php echo U('Home/hanwei/wz');?>" class="asasas">智力测试</a></li>

					    	</ul>
					    </li>
					    <li class="aa"><a href="<?php echo U('Home/hanwei/xlwz');?>" class="sssss">心理文章</a></li>
					    <li class="aa"><a href="<?php echo U('Home/hanwei/gywm');?>" class="sssss">关于我们</a></li>
					</ul>

					</div>
				</div>
				<div class="col-sm-9 aa">&nbsp;
					<div class="col-sm-12 aa">
						<img src="<?php echo (IMG_URL); ?>69.png" alt="" class="aa">
					</div>
					<div class="col-sm-12 aa" style="padding-top: 20px;">
						<div class="row">
							<div class="col-sm-3 aa">
								<a href="index-9.html"><img src="<?php echo (IMG_URL); ?>70.png" alt="" class="aa"></a>
								<a href="index-9.html"><div class="xgcs-wz1">8题揭示你内心不为人知的性格特点</div></a>
								<a href="index-9.html"><div class="xgcs-wz">自我一部分是自己什么看自己，另一部分是别人怎么看自己。两者有时候会重合，有时候……</div></a>
								<a href="index-9.html"><img src="<?php echo (IMG_URL); ?>71.png" alt="" style="position: relative; left: 160px;"></a>
							</div>
							<div class="col-sm-3 aa">
								<a href="index-9.html"><img src="<?php echo (IMG_URL); ?>73.png" alt="" class="aa"></a>
								<a href="index-9.html"><div class="xgcs-wz1">你内心的赌性有多大？</div></a>
								<a href="index-9.html"><div class="xgcs-wz">很多人身上都是带有赌性的，尽管这个人并不一定非得是个好赌之徒。赌性在某种程度……</div></a>
								<a href="index-9.html"><img src="<?php echo (IMG_URL); ?>71.png" alt="" style="position: relative; left: 160px;"></a>
							</div>
							<div class="col-sm-3 aa">
								<a href="index-9.html"><img src="<?php echo (IMG_URL); ?>74.png" alt="" class="aa"></a>
								<a href="index-9.html"><div class="xgcs-wz1">你敢于表现自己吗？</div></a>
								<a href="index-9.html"><div class="xgcs-wz">这是一个步伐越来越快的时代，如果你不及时把自己“推销”出去，纵使有超然的潜能……</div></a>
								<a href="index-9.html"><img src="<?php echo (IMG_URL); ?>71.png" alt="" style="position: relative; left: 160px;"></a>
							</div>
							<div class="col-sm-3 aa">
								<a href="index-9.html"><img src="<?php echo (IMG_URL); ?>75.png" alt="" class="aa"></a>
								<a href="index-9.html"><div class="xgcs-wz1">你会取悦他人吗？</div></a>
								<a href="index-9.html"><div class="xgcs-wz">适度取悦他人，应视为一种礼貌，一种气度，一种聪慧；千万不要与拍马奉承、违心恭维……</div></a>
								<a href="index-9.html"><img src="<?php echo (IMG_URL); ?>71.png" alt="" style="position: relative; left: 160px;"></a>
							</div>
							
						</div>
					</div>
					<div class="col-sm-12 aa" style="padding-top: 50px;">
						<img src="<?php echo (IMG_URL); ?>72.png" alt="" class="aa">
					</div>
					<div class="col-sm-12 aa" style="padding-top: 20px;">
						<div class="row">
							<div class="col-sm-3 aa">
								<a href="index-9.html"><img src="<?php echo (IMG_URL); ?>76.png" alt="" class="aa"></a>
								<a href="index-9.html"><div class="xgcs-wz1">门萨智商测试</div></a>
								<a href="index-9.html"><div class="xgcs-wz">自我一部分是自己什么看自己，另一部分是别人怎么看自己。两者有时候会重合，有时候……</div></a>
								<a href="index-9.html"><img src="<?php echo (IMG_URL); ?>71.png" alt="" style="position: relative; left: 160px;"></a>
							</div>
							<div class="col-sm-3 aa">
								<a href="index-9.html"><img src="<?php echo (IMG_URL); ?>77.png" alt="" class="aa"></a>
								<a href="index-9.html"><div class="xgcs-wz1">丹麦门萨智商测试</div></a>
								<a href="index-9.html"><div class="xgcs-wz">很多人身上都是带有赌性的，尽管这个人并不一定非得是个好赌之徒。赌性在某种程度……</div></a>
								<a href="index-9.html"><img src="<?php echo (IMG_URL); ?>71.png" alt="" style="position: relative; left: 160px;"></a>
							</div>
							<div class="col-sm-3 aa">
								<a href="index-9.html"><img src="<?php echo (IMG_URL); ?>78.png" alt="" class="aa"></a>
								<a href="index-9.html"><div class="xgcs-wz1">法国门萨智商测试</div></a>
								<a href="index-9.html"><div class="xgcs-wz">这是一个步伐越来越快的时代，如果你不及时把自己“推销”出去，纵使有超然的潜能……</div></a>
								<a href="index-9.html"><img src="<?php echo (IMG_URL); ?>71.png" alt="" style="position: relative; left: 160px;"></a>
							</div>
							<div class="col-sm-3 aa">
								<a href="index-9.html"><img src="<?php echo (IMG_URL); ?>79.png" alt="" class="aa"></a>
								<a href="index-9.html"><div class="xgcs-wz1">法国门萨智商测试</div></a>
								<a href="index-9.html"><div class="xgcs-wz">适度取悦他人，应视为一种礼貌，一种气度，一种聪慧；千万不要与拍马
奉承、违心恭维……</div></a>
								<a href="index-9.html"><img src="<?php echo (IMG_URL); ?>71.png" alt="" style="position: relative; left: 160px;"></a>
							</div>
							
						</div>
					</div>
				</div>
				<div class="col-sm-3 aa">
					<div class="col-sm-12 box-right" style="padding-left: 0px;">
						<div class="bg-image" style="height: 415px;">
							<img class="yuezhuanjia" src="<?php echo (IMG_URL); ?>24.png" alt="<?php echo (IMG_URL); ?>24.png">
							<div class="sunlong">
								<a href="index-11.html"><img src="<?php echo (IMG_URL); ?>25.png" alt="" class="sunlong-wz"></a>
								<a href="index-11.html" class="sunlong-mz">孙龙</a>
								<div>
									<div class="sunlong-mz" style="color: #000000; font-size: 12px;">国家二级心理咨询师 </div>
									<div class="sunlong-mz" style="color: #000000; font-size: 12px;">通辽心理协会会员</div>
								</div>
							</div>
							<div class="sunlong">
								<a href="index-11.html"><img src="<?php echo (IMG_URL); ?>26.png" alt="" class="sunlong-wz"></a>
								<a href="index-11.html" class="sunlong-mz">于爽</a>
								<div>
									<div class="sunlong-mz" style="color: #000000; font-size: 12px;">国家三级心理咨询师 </div>
									<div class="sunlong-mz" style="color: #000000; font-size: 12px;">沙盘游戏咨询师</div>
								</div>
							</div>
							<div class="sunlong">
								<a href="index-11.html"><img src="<?php echo (IMG_URL); ?>27.png" alt="" class="sunlong-wz"></a>
								<a href="index-11.html" class="sunlong-mz">齐振东</a>
								<div class="sunlong-mz" style="color: #000000; font-size: 12px;">国家三级心理咨询师 </div>
								<div class="sunlong-mz" style="color: #000000; font-size: 12px;">沈阳市心理咨询师协会成员</div>
							</div>

						</div>
					</div>
					<div class="col-sm-12 aa">
						
					</div>
				</div>
				<!--下面是foot-->
				<div>&nbsp;</div>
				<div class="col-sm-12 aa bgg" style="margin-top: 100px;">
					<div class="nav-list2">
						<ul>
							<li><a href="index-8.html"style="text-decoration: none;">丨关于我们</a></li>
							<li><a href="index-8.html"style="text-decoration: none;">丨联系方式</a></li>
							<li><a href="#"style="text-decoration: none;">丨客户留言</a></li>
							<li><a href="#"style="text-decoration: none;">丨在线咨询</a></li>
							<li><a href="#"style="text-decoration: none;">丨友情链接丨</a></li>
						</ul>
					</div>
				</div>

				<div class="col-sm-12 copyright aa">
					<span class="juzhong">辽ICP备15017351号-1</span>
					<span class="juzhong">电话：024-28902957</span>
					<span class="juzhong">地址：沈阳市大东区白塔路156号 6楼（中街新世纪百货北走200米）</span>
				</div>

				<!--上面是foot-->
			</div>
		</div>
	</body>
</html>