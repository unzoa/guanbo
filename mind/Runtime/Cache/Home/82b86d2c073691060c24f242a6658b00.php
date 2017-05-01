<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>心理咨询</title>
		<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>xinlizixun.css">
		<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>head.css">
		<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>xinlixuanxie.css">
		<link rel="stylesheet" type="text/css" href="<?php echo (BS_URL); ?>bootstrap.min.css">
		<script src="<?php echo (JS_URL); ?>jquery-1.11.3.min.js"></script>
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
					    <li class="my_on aa"><a href="<?php echo U('Home/hanwei/xlzx');?>" style="color: #fff;"  class="sssss">心理咨询</a>
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
					    <li class="aa"><a href="<?php echo U('Home/hanwei/xlcy');?>" class="sssss">心理测验</a>
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
					<img class="col-sm-12" src="<?php echo (IMG_URL); ?>22.png" alt="<?php echo (IMG_URL); ?>22.png" style="padding-right: 0;">

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
				</div>
				<div class="col-sm-9 aa">
					<img src="<?php echo (IMG_URL); ?>28.png" alt="" style="padding-bottom: 10px; padding-left: 15px;">
				</div>
				<div class="col-sm-3 aa">

				</div>
				<div class="col-sm-9 aa">
					<div class="col-sm-12 aa xlzx-bg" style="margin-left: 10px; margin-right: 30px;">
						<div class="zp xkzx-zbj">
							<div class="zp">
								<a href="index-9.html"><img src="<?php echo (IMG_URL); ?>29.png" alt=""></a>
							</div>
							<div class="zp xlzx-sywz">
								<h4><a href="index-9.html" class="xlsp-wz">【心理咨询-沙盘】</a></h4>
								<span class="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;又称箱庭疗法，是在治疗者的陪伴下，来访者从玩具架上自由选取玩具，在盛有细沙的特制箱子里进行自我表现的一种心理疗法。</span>
								<a href="index-9.html"><img src="<?php echo (IMG_URL); ?>30.png" alt="" class="yp xksp-bt2"></a>
							</div>
						</div>
						<div class="yp xkzx-ybj" style="margin-right: 18px;">
							<div class="zp">
								<a href="index-9.html"><img src="<?php echo (IMG_URL); ?>32.png" alt=""></a>
							</div>
							<div class="zp xlzx-sywz">
								<h4><a href="index-9.html" class="xlsp-wz">【心理咨询-意念赛车】</a></h4>
								<span class="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;意念赛车是一种非常有趣味性的脑力竞赛游戏。比赛时，要求比赛者佩戴专业的脑电设备，并将注意力集中在赛车上用比赛者的意念控制……</span>
								<a href="index-9.html"><img src="<?php echo (IMG_URL); ?>30.png" alt="" class="yp xksp-bt1" style="padding-left: 10px;"></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-3 aa">
					
				</div>
				<div class="col-sm-12 aa">
					<div>&nbsp;</div>
				</div>

				<!--上面是心理文章-->
				<!--下面是foot-->
				<div>&nbsp;</div>
				<div class="col-sm-12 aa bgg" style="margin-top: 100px;">
					<div class="nav-list2">
						<ul>
							<li><a href="index-8.html" style="text-decoration: none;">丨关于我们</a></li>
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