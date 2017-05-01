<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>瀚威心理</title>
	<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>head.css">
	<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>gbwinner.css">
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
	<div class="container-fluid">
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
						<li class="my_on aa"><a href="#" style="color: #fff;" class="sssss">首页</a>

							<ul class="aa">
						        	<!--<li><a href="#" class="asasas">心理项目介绍</a></li>
						        	<li><a href="#" class="asasas">心理咨询师介绍</a></li>-->
						        </ul>
						    </li>
						    <li class="aa"><a href="<?php echo U("Home/hanwei/xlzx");?>" class="sssss">心理咨询</a>
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
			<div class="col-sm-12 aa">&nbsp;<!--carousel ::-->
				<div id="carousel-example-generic" class="carousel slide carousel-con" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active img-con">
							<img src="<?php echo (IMG_URL); ?>6.png" alt="first">
							<div class="carousel-caption">
							</div>
						</div>
						<div class="item img-con">
							<img src="<?php echo (IMG_URL); ?>6.png" alt="twice">
							<div class="carousel-caption">
							</div>
						</div>
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<!--下面是心理咨询-->
			<div class="col-sm-12 aa">
				<div>
					<div class="zp padd-left-10"><img src="<?php echo (IMG_URL); ?>xinlizixun.png"></div>
					<div class="yp padd-right-10"><a href="<?php echo (HOME_HTML); ?>xlzx.html"><img src="<?php echo (IMG_URL); ?>gengduo.png"></a></div>
				</div>
			</div>
			<div class="col-sm-12 aa bgg">
				<div class="row">
					<div class="col-sm-6 aa mar10">
						<div style="width: 582px; float: right; padding-top: 30px;">
							<div class="media aa">
								<div class="media-left">
									<a href="<?php echo U('Home/hanwei/wz');?>">
										<img class="media-object" src="<?php echo (IMG_URL); ?>8.png" alt="<?php echo (IMG_URL); ?>8.png">
									</a>
								</div>
								<div class="media-body aa">
									<h4 class="media-heading title"><a href="<?php echo U('Home/hanwei/wz');?>">【心理咨询-沙盘】</a></h4>
									<span class="font-size">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;又称箱庭疗法，是在治疗者的陪伴下，来访者从玩具架上自由选取玩具，在盛有细沙的特制箱子里进行自我表现的一种心理疗法。</span>
									<div class="ckxx"><a href="<?php echo U('Home/hanwei/wz');?>"><img src="<?php echo (IMG_URL); ?>9.png"></a></div>
								</div>
							</div>
						</div>
					</div>
					<!--</div>  2-->  
					<div class="col-sm-6 aa mar10">
						<div style="width: 582px; float: left; padding-top: 30px;">
							<div class="media aa">
								<div class="media-left">
									<a href="<?php echo U('Home/hanwei/wz');?>">
										<img class="media-object" src="<?php echo (IMG_URL); ?>10.png" alt="<?php echo (IMG_URL); ?>10.png">
									</a>
								</div>
								<div class="media-body aa">
									<h4 class="media-heading title"><a href="<?php echo U('Home/hanwei/wz');?>">【心理咨询师--孙龙】</a></h4>
									<span class="font-size">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;国家二级心理咨询师 通辽心理协会会员。2008年-2012年就读与内蒙古民族大学心理学专业。2012年4月-2014年8月在通辽方舟心理……</span>
									<div class="ckxx"><a href="<?php echo U('Home/hanwei/wz');?>"><img src="<?php echo (IMG_URL); ?>9.png"></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 aa bgg">
				<div class="row">
					<div class="col-sm-6 aa mar10">
						<div style="width: 582px; float: right; padding-top: 30px; padding-bottom: 30px;">
							<div class="media aa">
								<div class="media-left">
									<a href="<?php echo U('Home/hanwei/wz');?>">
										<img class="media-object" src="<?php echo (IMG_URL); ?>11.png" alt="<?php echo (IMG_URL); ?>11.png">
									</a>
								</div>
								<div class="media-body aa">
									<h4 class="media-heading title"><a href="<?php echo U('Home/hanwei/wz');?>">【心理咨询--意念赛车】</a></h4>
									<span class="font-size">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;意念赛车是一种非常有趣味性的脑力竞赛游戏。比赛时，要求比赛者佩戴专业的脑电设备，并将注意力集中在赛车上用比赛者的意念控制……</span>
									<div class="ckxx"><a href="<?php echo U('Home/hanwei/wz');?>"><img src="<?php echo (IMG_URL); ?>9.png"></a></div>
								</div>
							</div>
						</div>
					</div>
					<!--</div>  2-->  
					<div class="col-sm-6 aa mar10">
						<div style="width: 582px; float: left; padding-top: 30px;">
							<div class="media aa">
								<div class="media-left">
									<a href="<?php echo U('Home/hanwei/wz');?>">
										<img class="media-object" src="<?php echo (IMG_URL); ?>12.png" alt="<?php echo (IMG_URL); ?>12.png">
									</a>
								</div>
								<div class="media-body aa">
									<h4 class="media-heading title"><a href="<?php echo U('Home/hanwei/wz');?>">【心理咨询师--于爽】</a></h4>
									<span class="font-size">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;国家三级心理咨询师，沙盘游戏咨询师，在读二级心理咨询师，参加过精神分析、萨提亚原生家庭理论、沙盘游戏高级培训课程等……</span>
									<div class="ckxx"><a href="<?php echo U('Home/hanwei/wz');?>"><img src="<?php echo (IMG_URL); ?>9.png"></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--上面是心理咨询-->
			<!--下面是心理宣泄-->
			<div class="col-sm-12 aa">
				<div>
					<div class="zp padd-left-10"><img src="<?php echo (IMG_URL); ?>xinlixuanxie.png"></div>
					<div class="yp padd-right-10"><a href="<?php echo U('Home/hanwei/xlxx');?>"><img src="<?php echo (IMG_URL); ?>gengduo.png"></a></div>
				</div>
			</div>
			<div class="col-sm-12 aa bgg">
				<div class="row">
					<div class="col-sm-6 aa mar10">
						<div style="width: 582px; float: right; padding-top: 30px;padding-bottom: 30px;">
							<div class="media aa">
								<div class="media-left">
									<a href="<?php echo U('Home/hanwei/wz');?>">
										<img class="media-object" src="<?php echo (IMG_URL); ?>13.png" alt="<?php echo (IMG_URL); ?>13.png">
									</a>
								</div>
								<div class="media-body aa">
									<h4 class="media-heading title"><a href="<?php echo U('Home/hanwei/wz');?>">【快乐墙】</a></h4>
									<span class="font-size">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;感恩墙要对您的家人、爱人、朋友说点什么吗?请在这里记下您的祝福!愿每一个爱你的人和你爱的人都开开心心,幸福永远! 写感恩纸条……</span>
									<div class="ckxx"><a href="<?php echo U('Home/hanwei/wz');?>"><img src="<?php echo (IMG_URL); ?>9.png"></a></div>
								</div>
							</div>
						</div>
					</div>
					<!--</div>  2-->  
					<div class="col-sm-6 aa mar10">
						<div style="width: 582px; float: left; padding-top: 30px;">
							<div class="media aa">
								<div class="media-left">
									<a href="<?php echo U('Home/hanwei/wz');?>">
										<img class="media-object" src="<?php echo (IMG_URL); ?>14.png" alt="<?php echo (IMG_URL); ?>14.png">
									</a>
								</div>
								<div class="media-body aa">
									<h4 class="media-heading title"><a href="<?php echo U('Home/hanwei/wz');?>">【郁闷墙】</a></h4>
									<span class="font-size">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;你到底有多少心情可以宣泄? 将你自己所有不满想宣泄出来的事情一一写在你的空间,针对你的问题，我们安排国家级心理医师……</span>
									<div class="ckxx"><a href="<?php echo U('Home/hanwei/wz');?>"><img src="<?php echo (IMG_URL); ?>9.png"></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--上面是心理宣泄-->
			<!--下面是心理知识-->
			<div class="col-sm-12 aa">
				<div>
					<div class="zp padd-left-10"><img src="<?php echo (IMG_URL); ?>xinlizhishi.png"></div>
					<div class="yp padd-right-10"><a href="<?php echo U('Home/hanwei/xlzs');?>"><img src="<?php echo (IMG_URL); ?>gengduo.png"></a></div>
				</div>
			</div>
			<div class="col-sm-12 aa bgg">
				<div class="row">
					<div class="col-sm-6 aa mar10">
						<div style="width: 582px; float: right; padding-top: 30px;padding-bottom: 30px;">
							<div class="media aa">
								<div class="media-left">
									<a href="<?php echo U('Home/hanwei/wz');?>">
										<img class="media-object" src="<?php echo (IMG_URL); ?>15.png" alt="<?php echo (IMG_URL); ?>15.png">
									</a>
								</div>
								<div class="media-body aa">
									<h4 class="media-heading title"><a href="<?php echo U('Home/hanwei/wz');?>">【心理疗法】</a></h4>
									<span class="font-size">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;又称箱庭疗法，是在治疗者的陪伴下，来访者从玩具架上自由选取玩具，在盛有细沙的特制箱子里进行自我表现的一种心理疗法……</span>
									<div class="ckxx"><a href="<?php echo U('Home/hanwei/wz');?>"><img src="<?php echo (IMG_URL); ?>9.png"></a></div>
								</div>
							</div>
						</div>
					</div>
					<!--</div>  2-->  
					<div class="col-sm-6 aa mar10">
						<div style="width: 582px; float: left; padding-top: 30px;">
							<div class="media aa">
								<div class="media-left">
									<a href="<?php echo U('Home/hanwei/wz');?>">
										<img class="media-object" src="<?php echo (IMG_URL); ?>16.png" alt="<?php echo (IMG_URL); ?>16.png">
									</a>
								</div>
								<div class="media-body aa">
									<h4 class="media-heading title"><a href="<?php echo U('Home/hanwei/wz');?>">【心理症状名词】</a></h4>
									<span class="font-size">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;关于异常或变态的定义是各个不同文化的产物，这与躯体疾病不同。在纽约被认为有精神病的人，在新几内亚可能被认为属于正常……</span>
									<div class="ckxx"><a href="<?php echo U('Home/hanwei/wz');?>"><img src="<?php echo (IMG_URL); ?>9.png"></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--上面是心理知识-->
			<!--下面是成功案例-->
			<div class="col-sm-12 aa">
				<div>
					<div class="zp padd-left-10"><img src="<?php echo (IMG_URL); ?>chenggonganli.png"></div>
					<div class="yp padd-right-10"><a href="<?php echo U('Home/hanwei/cgal');?>"><img src="<?php echo (IMG_URL); ?>gengduo.png"></a></div>
				</div>
			</div>
			<div class="col-sm-12 aa bgg">
				<div class="row">
					<div class="col-sm-6 aa mar10">
						<div style="width: 582px; float: right; padding-top: 30px;padding-bottom: 30px;">
							<div class="media aa">
								<div class="media-left">
									<a href="<?php echo U('Home/hanwei/wz');?>">
										<img class="media-object" src="<?php echo (IMG_URL); ?>17.png" alt="<?php echo (IMG_URL); ?>17.png">
									</a>
								</div>
								<div class="media-body aa">
									<h4 class="media-heading title"><a href="<?php echo U('Home/hanwei/wz');?>">【八年抑郁经验总结的79句话】</a></h4>
									<span class="font-size">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;写的太好了，对于不懂强迫症的人可以扫盲，有类似症状的朋友，希望对你有所帮助，给你正能量……</span>
									<div class="ckxx"><a href="<?php echo U('Home/hanwei/wz');?>"><img src="<?php echo (IMG_URL); ?>9.png"></a></div>
								</div>
							</div>
						</div>
					</div>
					<!--</div>  2-->  
					<div class="col-sm-6 aa mar10">
						<div style="width: 582px; float: left; padding-top: 30px;">
							<div class="media aa">
								<div class="media-left">
									<a href="<?php echo U('Home/hanwei/wz');?>">
										<img class="media-object" src="<?php echo (IMG_URL); ?>18.png" alt="<?php echo (IMG_URL); ?>18.png">
									</a>
								</div>
								<div class="media-body aa">
									<h4 class="media-heading title"><a href="<?php echo U('Home/hanwei/wz');?>">【从考试看不进书说起】</a></h4>
									<span class="font-size">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;在心理咨询过程中，发现，很多同学一到考试时就看不进去书，于是便去寻求心理咨询的帮助。那么，究竟如何从深层次的心理，去解读这些呢......</span>
									<div class="ckxx"><a href="<?php echo U('Home/hanwei/wz');?>"><img src="<?php echo (IMG_URL); ?>9.png"></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--上面是成功案例-->
			<!--下面是心理文章-->
			<div class="col-sm-12 aa">
				<div>
					<div class="zp padd-left-10"><img src="<?php echo (IMG_URL); ?>xinliwenzhang.png"></div>
					<div class="yp padd-right-10"><a href="<?php echo U('Home/hanwei/xlwz');?>"><img src="<?php echo (IMG_URL); ?>gengduo.png"></a></div>
				</div>
			</div>
			<div class="col-sm-12 aa bgg">
				<div class="row">
					<div class="col-sm-6 aa mar10">
						<div style="width: 582px; float: right; padding-top: 30px;padding-bottom: 30px;">
							<div class="media aa">
								<div class="media-left">
									<a href="<?php echo U('Home/hanwei/wz');?>">
										<img class="media-object" src="<?php echo (IMG_URL); ?>19.png" alt="<?php echo (IMG_URL); ?>19.png">
									</a>
								</div>
								<div class="media-body aa">
									<h4 class="media-heading title"><a href="<?php echo U('Home/hanwei/wz');?>">【10大典型梦境完全解析】</a></h4>
									<span class="font-size">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;梦究竟与现实世界到底有多大联系？美国著名压力控制专家NERYSDEE就调查取样的10，000梦境进行分析，并通过对我们常见……</span>
									<div class="ckxx"><a href="<?php echo U('Home/hanwei/wz');?>"><img src="<?php echo (IMG_URL); ?>9.png"></a></div>
								</div>
							</div>
						</div>
					</div>
					<!--</div>  2-->  
					<div class="col-sm-6 aa mar10">
						<div style="width: 582px; float: left; padding-top: 30px;">
							<div class="media aa">
								<div class="media-left">
									<a href="<?php echo U('Home/hanwei/wz');?>">
										<img class="media-object" src="<?php echo (IMG_URL); ?>20.png" alt="<?php echo (IMG_URL); ?>20.png">
									</a>
								</div>
								<div class="media-body aa">
									<h4 class="media-heading title"><a href="<?php echo U('Home/hanwei/wz');?>">【不要害羞——教你“厚脸皮”】</a></h4>
									<span class="font-size">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;害羞：心理学上的解释是人际环境中使人感到不舒服和压抑的状态，影响了一个人的人际交往和是否……</span>
									<div class="ckxx"><a href="<?php echo U('Home/hanwei/wz');?>"><img src="<?php echo (IMG_URL); ?>9.png"></a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--上面是心理文章-->
			<!--下面是foot-->
			<div>&nbsp;</div>
			<div class="col-sm-12 aa bgg" style="margin-top: 100px;">
				<div class="nav-list2">
					<ul>
						<li><a href="<?php echo U('Home/hanwei/gywm');?>" style="text-decoration: none;">丨关于我们</a></li>
						<li><a href="<?php echo U('Home/hanwei/gywm');?>" style="text-decoration: none;">丨联系方式</a></li>
						<li><a href="#" style="text-decoration: none;">丨客户留言</a></li>
						<li><a href="#" style="text-decoration: none;">丨在线咨询</a></li>
						<li><a href="#" style="text-decoration: none;">丨友情链接丨</a></li>
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