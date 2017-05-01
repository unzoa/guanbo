<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="cleartype" content="on">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>沈阳瀚威心理咨询有限公司</title>
	<link rel="icon" href="<?php echo (IMG_URL); ?>favicon.ico">
	<link rel="stylesheet" type="text/css" href="<?php echo (S_); ?>css/normalize.css" />
	<link rel="stylesheet" href="<?php echo (S_); ?>css/paper-collapse.min.css">
	<link rel='stylesheet' href='<?php echo (AWE_URL); ?>font-awesome.min.css'>
	<link rel="stylesheet" type="text/css" href="<?php echo (BS_URL); ?>bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>web.css">
	<style>
        body {
            background-color: #eee;
            font-family: "Open Sans", Calibri, Candara, Arial, sans-serif;
            min-height: 100vh;
        }

        .aa{border:1px red solid;}

        .header{
        	height: 48px;
        	background-color: #1898cf;
        	line-height: 48px;
        	color: #fff;
        	padding-left: 30px;

        }

        .container {
            max-width: 80rem;
            margin-right: auto;
            margin-left: auto;
            padding: 2rem;
        }

        .align-right {
            text-align: right;
        }

        .mouse-pointer {
            cursor: pointer;
        }
      </style>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
		<div class="header">
		<span>瀚威后台管理</span>
			<a onclick="if (confirm('确定要退出吗？')) return true; else return false;" href="<?php echo U('Admin/Manage/logout');?>" style="float: right;color: #fff;margin-right: 50px">退出</a>
			<span style="float: right; margin-right: 50px"><span style="font-weight: bold;">管理员 : </span><?php echo (session('name')); ?></span>
		</div>
	    <div class="container-fluid" style="margin-top:20px">
	    	<div class="row">
	    		<div class="col-sm-10 col-sm-offset-1">
	    			<!-- ==============客户留言==============-->
			        <div class="collapse-card">
			            <div class="collapse-card__heading">
			                <h4 class="collapse-card__title">
			                    <i class="fa fa-comments fa-2x fa-fw"></i>
			                   	客户留言<span style="color: #1898cf"> #留言框右下角可拖拽变大，查看全部内容，编辑不会保存</span>
			                </h4>
			            </div>
			            <div class="collapse-card__body">
			            	<table class="table table-hover">
			            		<tr>
		            				<td width="20%">时间</td>
		            				<td width="20%">姓名</td>
		            				<td width="20%">邮箱</td>
		            				<td width="20%">手机</td>
		            				<td width="20%">留言</td>
		            			</tr>
		            			<?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
		            				<td><?php echo ($vo["time"]); ?></td>
		            				<td><?php echo ($vo["name"]); ?></td>
		            				<td><?php echo ($vo["email"]); ?></td>
		            				<td><?php echo ($vo["phone"]); ?></td>
		            				<td><textarea value=""><?php echo ($vo["content"]); ?></textarea></td>
		            			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		            			<tr>
		            				<td colspan="5"><?php echo ($show); ?></td>
		            				
		            			</tr>
			            	</table>
			                <div class="collapse-card__close_handler mt1 align-right mouse-pointer">
			                   <i class="fa fa-chevron-up"></i> 收起
			                </div>
			            </div>
			        </div>
	    			<!-- ===================top信息=================== -->
			        <div class="collapse-card mt15">
			            <div class="collapse-card__heading">
			                <h4 class="collapse-card__title">
			                    <i class="fa fa-archive fa-2x fa-fw"></i>
			                   	TOP&FOOTER信息
			                </h4>
			            </div>
			            <div class="collapse-card__body">
			            	<p>TOP</p>
			            	<table class="table table-hover text-center">
			            		<tr>
		            				<td>序号</td>
		            				<td>电话</td>
		            				<td>时间</td>
		            				<td>邮箱</td>
		            				<td>操作</td>
		            			</tr>
		            			<?php if(is_array($top)): $i = 0; $__LIST__ = $top;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
		            				<td><?php echo ($v["id"]); ?></td>
		            				<td><?php echo ($v["phone"]); ?></td>
		            				<td><?php echo ($v["time"]); ?></td>
		            				<td><?php echo ($v["email"]); ?></td>
		            				<td>[<a href="<?php echo U("Admin/Admin/updtop",array('id'=>$v['id']));?>">更新</a>]</td>
		            			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			            	</table>
			            	<p>FOOTER</p>
			            	<table class="table table-hover text-center">
			            		<tr>
		            				<td>序号</td>
		            				<td>版权</td>
		            				<td>备案号</td>
		            				<td>操作</td>
		            			</tr>
		            			<?php if(is_array($footer)): $i = 0; $__LIST__ = $footer;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
		            				<td><?php echo ($v["id"]); ?></td>
		            				<td><?php echo ($v["right"]); ?></td>
		            				<td><?php echo ($v["beian"]); ?></td>
		            				<td>[<a href="<?php echo U("Admin/Admin/updfooter",array('id'=>$v['id']));?>">更新</a>]</td>
		            			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			            	</table>
			            	<p>YOULIAN</p>
			            	[<a href="<?php echo U('Admin/Admin/addyoulian');?>">增加友链</a>]
			            	<table class="table table-hover text-center">
			            		<tr>
		            				<td>序号</td>
		            				<td>网站名称</td>
		            				<td>网站地址</td>
		            				<td>操作</td>
		            			</tr>
		            			<?php if(is_array($youlian)): $i = 0; $__LIST__ = $youlian;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
		            				<td><?php echo ($v["id"]); ?></td>
		            				<td><?php echo ($v["name"]); ?></td>
		            				<td><?php echo ($v["url"]); ?></td>
		            				<td>
		            					[<a href="<?php echo U("Admin/Admin/updyoulian",array('id'=>$v['id']));?>">更新</a>]
		            					[<a href="<?php echo U("Admin/Admin/delyoulian",array('id'=>$v['id']));?>">删除</a>]
		            				</td>
		            			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			            	</table>
			                <div class="collapse-card__close_handler mt1 align-right mouse-pointer">
			                   <i class="fa fa-chevron-up"></i> 收起
			                </div>
			            </div>
			        </div>
	    			<!-- ==============导航栏================== -->
	    			<div class="collapse-card">
			            <div class="collapse-card__heading">
			                <h4 class="collapse-card__title">
			                    <i class="fa fa-bars fa-2x fa-fw"></i>
			                    导航栏
			                </h4>
			            </div>
			            <div class="collapse-card__body">
							<form action="<?php echo U('Admin/Admin/sortcate');?>" method="post" >
							    <TABLE class="table table-hover text-center">
							    	<tr>
							    		<th>序号</th>
							    		<th>标题</th>
							    		<th>地址</th>
							    		<th>级别</th>
							    		<th>分类</th>
							    		<th>操作</th>
							    	</tr>
							    	<?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
							    			<td><?php echo ($v["id"]); ?></td>
							    			<td><?php echo ($v["html"]); echo ($v["title"]); ?></td>
							    			<td><?php echo ($v["url"]); ?></td>
							    			<td><?php echo ($v["level"]); ?></td>
							    			<td><input name="<?php echo ($v["id"]); ?>" type="text" value="<?php echo ($v["sort"]); ?>"></input></td>
							    			<td>
							    				[<a href="<?php echo U("Admin/Admin/addcate",array('cid'=>$v['id']));?>">增加</a>]
							    				[<a href="<?php echo U("Admin/Admin/updcate",array('id'=>$v['id']));?>">更新</a>]
							    				[<a href="<?php echo U("Admin/Admin/delcate",array('id'=>$v['id']));?>">删除</a>]
							    			</td>
							    		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
							    	<tr>
							    		<td colspan="6" align="center">
							    			<input type="submit" value="sort"></input>
							    		</td>
							    	</tr>
							    </TABLE>
							</form>
							<div class="collapse-card__close_handler mt1 align-right mouse-pointer">
			                    <i class="fa fa-chevron-up"></i> 收起
			                </div>
			            </div>
	        		</div>
	        		<!-- ===================nav介绍=================== -->
			        <div class="collapse-card">
			            <div class="collapse-card__heading">
			                <h4 class="collapse-card__title">
			                    <i class="fa fa-desktop fa-2x fa-fw"></i>
			                   	Banner信息
			                </h4>
			            </div>
			            <div class="collapse-card__body">
			            	[<a href="<?php echo U('Admin/Admin/addbanner');?>">增加Banner</a>]<hr/>
			            	<table class="table table-hover text-center">
			            		<tr>
		            				<td>序号</td>
		            				<td>Banner</td>
		            				<td>alt</td>
		            				<td>操作</td>
		            			</tr>
		            			<?php if(is_array($banner)): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
		            				<td><?php echo ($v["id"]); ?></td>
		            				<td><img src="<?php echo (IMG_UPLOAD); echo ($v["img"]); ?>" style="width: 100px"></td>
		            				<td><?php echo ($v["alt"]); ?></td>
		            				<td>
		            					[<a href="<?php echo U("Admin/Admin/updbanner",array('id'=>$v['id']));?>">更新</a>]
		            					[<a href="<?php echo U("Admin/Admin/delbanner",array('id'=>$v['id']));?>">删除</a>]
		            				</td>
		            			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			            	</table>
			            	<hr/>
			            	[<a href="<?php echo U('Admin/Admin/addbnews');?>">增加信息</a>]<hr/>
		            		<table class="table table-hover text-center">
		            			<tr>
		            				<td width="5%">序号</td>
		            				<td width="25%">标题</td>
		            				<td width="40%">内容</td>
		            				<td width="15%">链接</td>
		            				<td width="15%">操作</td>
		            			</tr>
		               			<?php if(is_array($bnews)): $i = 0; $__LIST__ = $bnews;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
						    			<td><?php echo ($v["id"]); ?></td>
						    			<td><?php echo ($v["title"]); ?></td>
						    			<td><?php echo ($v["content"]); ?></td>
						    			<td><?php echo ($v["url"]); ?></td>
						    			<td>
						    				[<a href="<?php echo U("Admin/Admin/updbnews",array('id'=>$v['id']));?>">更新</a>]
						    				[<a href="<?php echo U("Admin/Admin/delbnews",array('id'=>$v['id']));?>">删除</a>]
						    			</td>
						    		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						    </table>
			                <div class="collapse-card__close_handler mt1 align-right mouse-pointer">
			                   <i class="fa fa-chevron-up"></i> 收起
			                </div>
			            </div>
			        </div>
			        <!-- ==============专家介绍==============-->
			        <div class="collapse-card">
			            <div class="collapse-card__heading">
			                <h4 class="collapse-card__title">
			                    <i class="fa fa-graduation-cap fa-2x fa-fw"></i>
			                   	专家信息
			                </h4>
			            </div>
			            <div class="collapse-card__body">
			            	[<a href="<?php echo U('Admin/Admin/addexpert');?>">增加</a>]<hr/>
			            		<table class="table table-hover text-center">
			            			<tr>
			            				<td width="5%">排序</td>
			            				<td width="10%">名字</td>
			            				<td width="45%">简介</td>
			            				<td width="20%">头像</td>
			            				<td width="20%">操作</td>
			            			</tr>
			               			<?php if(is_array($expert)): $i = 0; $__LIST__ = $expert;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
							    			<td><?php echo ($v["id"]); ?></td>
							    			<td><?php echo ($v["name"]); ?></td>
							    			<td><?php echo ($v["intro"]); ?></td>
							    			<td>
							    				<img src="<?php echo (IMG_UPLOAD); echo ($v["img"]); ?>" style="width: 100px">
							    			</td>
							    			<td>
							    				[<a href="<?php echo U("Admin/Admin/updexpert",array('id'=>$v['id']));?>">更新</a>]
							    				[<a href="<?php echo U("Admin/Admin/delexpert",array('id'=>$v['id']));?>">删除</a>]
							    			</td>
							    		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
							    </table>
			                <div class="collapse-card__close_handler mt1 align-right mouse-pointer">
			                   <i class="fa fa-chevron-up"></i> 收起
			                </div>
			            </div>
			        </div>
			        <!-- ==============关于我们轮播图==============-->
			        <div class="collapse-card">
			            <div class="collapse-card__heading">
			                <h4 class="collapse-card__title">
			                    <i class="fa fa-file-image-o fa-2x fa-fw"></i>
			                   	关于我们轮播图
			                </h4>
			            </div>
			            <div class="collapse-card__body">
			            	[<a href="<?php echo U('Admin/Admin/addus');?>">增加</a>]<hr/>
			            		<table class="table table-center text-center">
			            			<tr>
			            				<td>排序</td>
			            				<td>头像</td>
			            				<td>备注</td>
			            				<td>操作</td>
			            			</tr>
			               			<?php if(is_array($aboutus)): $i = 0; $__LIST__ = $aboutus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
							    			<td><?php echo ($v["id"]); ?></td>
							    			<td><img src="<?php echo (IMG_UPLOAD); echo ($v["img"]); ?>" style="width: 100px"></td>
							    			<td><?php echo ($v["alt"]); ?></td>
							    			<td>
							    				[<a href="<?php echo U("Admin/Admin/updus",array('id'=>$v['id']));?>">更新</a>]
							    				[<a href="<?php echo U("Admin/Admin/delus",array('id'=>$v['id']));?>">删除</a>]
							    			</td>
							    		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
							    </table>
			                <div class="collapse-card__close_handler mt1 align-right mouse-pointer">
			                   <i class="fa fa-chevron-up"></i> 收起
			                </div>
			            </div>
			        </div>
			        <!-- ==============服务项目==============-->
			        <div class="collapse-card">
			            <div class="collapse-card__heading">
			                <h4 class="collapse-card__title">
			                    <i class="fa fa-briefcase fa-2x fa-fw"></i>
			                   	服务项目
			                </h4>
			            </div>
			            <div class="collapse-card__body">
			            	[<a href="<?php echo U('Admin/Admin/addservice');?>">增加</a>]<hr/>
			            		<table class="table table-hover text-center">
			            			<tr>
			            				<td>排序</td>
			            				<td>英文名字</td>
			            				<td>中文名字</td>
			            				<td>封面</td>
			            				<td>链接</td>
			            				<td>操作</td>
			            			</tr>
			               			<?php if(is_array($service)): $i = 0; $__LIST__ = $service;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
							    			<td><?php echo ($v["id"]); ?></td>
							    			<td><?php echo ($v["engalt"]); ?></td>
							    			<td><?php echo ($v["chalt"]); ?></td>
							    			<td><img src="<?php echo (IMG_UPLOAD); echo ($v["img"]); ?>" style="width: 100px"></td>
							    			<td><?php echo ($v["url"]); ?></td>
							    			<td>
							    				[<a href="<?php echo U("Admin/Admin/updservice",array('id'=>$v['id']));?>">更新</a>]
							    				[<a href="<?php echo U("Admin/Admin/delservice",array('id'=>$v['id']));?>">删除</a>]
							    			</td>
							    		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
							    </table>
			                <div class="collapse-card__close_handler mt1 align-right mouse-pointer">
			                   <i class="fa fa-chevron-up"></i> 收起
			                </div>
			            </div>
			        </div>
			        <!-- ==============客户反馈==============-->
			        <div class="collapse-card">
			            <div class="collapse-card__heading">
			                <h4 class="collapse-card__title">
			                    <i class="fa fa-group fa-2x fa-fw"></i>
			                   	客户反馈
			                </h4>
			            </div>
			            <div class="collapse-card__body">
			            	<table class="table table-hover text-center">
			            		<tr>
		            				<td>序号</td>
		            				<td>Banner</td>
		            				<td>alt</td>
		            				<td>操作</td>
		            			</tr>
		            			<?php if(is_array($judgebg)): $i = 0; $__LIST__ = $judgebg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
		            				<td><?php echo ($v["id"]); ?></td>
		            				<td><img src="<?php echo (IMG_UPLOAD); echo ($v["img"]); ?>" style="width: 100px"></td>
		            				<td><?php echo ($v["alt"]); ?></td>
		            				<td>[<a href="<?php echo U("Admin/Admin/updjudgebg",array('id'=>$v['id']));?>">更新</a>]</td>
		            			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			            	</table>
			            	<hr/>
			            	[<a href="<?php echo U('Admin/Admin/addjudge');?>">增加反馈</a>]<hr/>
			            		<table class="table table-hover text-center">
			            			<tr>
			            				<td width="5%">排序</td>
			            				<td width="65%">评价</td>
			            				<td width="15%">名字</td>
			            				<td width="15%">操作</td>
			            			</tr>
			               			<?php if(is_array($judge)): $i = 0; $__LIST__ = $judge;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
							    			<td><?php echo ($v["id"]); ?></td>
							    			<td><?php echo ($v["judge"]); ?></td>
							    			<td><?php echo ($v["name"]); ?></td>
							    			<td>
							    				[<a href="<?php echo U("Admin/Admin/updjudge",array('id'=>$v['id']));?>">更新</a>]
							    				[<a href="<?php echo U("Admin/Admin/deljudge",array('id'=>$v['id']));?>">删除</a>]
							    			</td>
							    		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
							    </table>
			                <div class="collapse-card__close_handler mt1 align-right mouse-pointer">
			                   <i class="fa fa-chevron-up"></i> 收起
			                </div>
			            </div>
			        </div>
			        <!-- ===================模块话题=================== -->
			        <div class="collapse-card">
			            <div class="collapse-card__heading">
			                <h4 class="collapse-card__title">
			                    <i class="fa fa-bookmark fa-2x fa-fw"></i>
			                   	模块话题
			                </h4>
			            </div>
			            <div class="collapse-card__body">
		            		<table class="table table-hover text-center">
		            			<tr>
		            				<td width="5%">序号</td>
		            				<td width="15%">英文标题</td>
		            				<td width="15%">中文标题</td>
		            				<td width="55%">内容</td>
		            				<td width="10%">操作</td>
		            			</tr>
		               			<?php if(is_array($topic)): $i = 0; $__LIST__ = $topic;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
						    			<td><?php echo ($v["id"]); ?></td>
						    			<td><?php echo ($v["engtitle"]); ?></td>
						    			<td><?php echo ($v["chtitle"]); ?></td>
						    			<td><textarea><?php echo ($v["content"]); ?></textarea></td>
						    			<td>
						    				[<a href="<?php echo U("Admin/Admin/updtopic",array('id'=>$v['id']));?>">更新</a>]
						    			</td>
						    		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						    </table>
			                <div class="collapse-card__close_handler mt1 align-right mouse-pointer">
			                   <i class="fa fa-chevron-up"></i> 收起
			                </div>
			            </div>
			        </div>
			        <!-- ===================心理咨询=================== -->
			        <div class="collapse-card mt15">
			            <div class="collapse-card__heading">
			                <h4 class="collapse-card__title">
			                    <i class="fa fa-heart fa-2x fa-fw"></i>
			                   	心理咨询
			                </h4>
			            </div>
			            <div class="collapse-card__body">
			            	[<a href="<?php echo U("Admin/Admin/addpsy",array('id'=>$v['id']));?>">增加</a>]
			            	<hr/>
		            		<table class="table table-hover text-center">
		            			<tr>
		            				<td width="5%">序号</td>
		            				<td width="15%">英文标题</td>
		            				<td width="15%">中文标题</td>
		            				<td width="25%">简介</td>
		            				<td width="20%">封面</td>
		            				<td width="20%">操作</td>
		            			</tr>
		               			<?php if(is_array($psy)): $i = 0; $__LIST__ = $psy;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
						    			<td><?php echo ($v["id"]); ?></td>
						    			<td><?php echo ($v["engtitle"]); ?></td>
						    			<td><?php echo ($v["chtitle"]); ?></td>
						    			<td><textarea><?php echo ($v["intro"]); ?></textarea></td>
						    			<td><img src="<?php echo (IMG_UPLOAD); echo ($v["img"]); ?>" width="100px"></td>
						    			<td>
						    				[<a href="<?php echo U("Admin/Admin/updpsy",array('id'=>$v['id']));?>">更新</a>]
						    				[<a href="<?php echo U("Admin/Admin/delpsy",array('id'=>$v['id']));?>">删除</a>]
						    			</td>
						    		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						    </table>
			                <div class="collapse-card__close_handler mt1 align-right mouse-pointer">
			                   <i class="fa fa-chevron-up"></i> 收起
			                </div>
			            </div>
			        </div>
			        <!-- ===================MP3教学=================== -->
			        <div class="collapse-card">
			            <div class="collapse-card__heading">
			                <h4 class="collapse-card__title">
			                    <i class="fa fa-music fa-2x fa-fw"></i>
			                   	MP3教学
			                </h4>
			            </div>
			            <div class="collapse-card__body">
			            	[<a href="<?php echo U("Admin/Admin/addmpthree",array('id'=>$v['id']));?>">增加</a>]
			            	<hr/>
		            		<table class="table table-hover text-center">
		            			<tr>
		            				<td width="5%">序号</td>
		            				<td width="15%">英文标题</td>
		            				<td width="15%">中文标题</td>
		            				<td width="25%">简介</td>
		            				<td width="20%">封面</td>
		            				<td width="20%">操作</td>
		            			</tr>
		               			<?php if(is_array($mpthree)): $i = 0; $__LIST__ = $mpthree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
						    			<td><?php echo ($v["id"]); ?></td>
						    			<td><?php echo ($v["engtitle"]); ?></td>
						    			<td><?php echo ($v["chtitle"]); ?></td>
						    			<td><textarea><?php echo ($v["intro"]); ?></textarea></td>
						    			<td><img src="<?php echo (IMG_UPLOAD); echo ($v["img"]); ?>" width="100px"></td>
						    			<td>
						    				[<a href="<?php echo U("Admin/Admin/updmpthree",array('id'=>$v['id']));?>">更新</a>]
						    				[<a href="<?php echo U("Admin/Admin/delmpthree",array('id'=>$v['id']));?>">删除</a>]
						    			</td>
						    		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						    </table>
			                <div class="collapse-card__close_handler mt1 align-right mouse-pointer">
			                   <i class="fa fa-chevron-up"></i> 收起
			                </div>
			            </div>
			        </div>
			        <!-- ===================ipass=================== -->
			        <div class="collapse-card">
			            <div class="collapse-card__heading">
			                <h4 class="collapse-card__title">
			                    <i class="fa fa-certificate fa-2x fa-fw"></i>
			                   	i.P.A.S.S
			                </h4>
			            </div>
			            <div class="collapse-card__body">
			            	[<a href="<?php echo U("Admin/Admin/addipass",array('id'=>$v['id']));?>">增加</a>]
			            	<hr/>
		            		<table class="table table-hover text-center">
		            			<tr>
		            				<td width="5%">序号</td>
		            				<td width="15%">英文标题</td>
		            				<td width="15%">中文标题</td>
		            				<td width="25%">简介</td>
		            				<td width="20%">封面</td>
		            				<td width="20%">操作</td>
		            			</tr>
		               			<?php if(is_array($ipass)): $i = 0; $__LIST__ = $ipass;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
						    			<td><?php echo ($v["id"]); ?></td>
						    			<td><?php echo ($v["engtitle"]); ?></td>
						    			<td><?php echo ($v["chtitle"]); ?></td>
						    			<td><textarea><?php echo ($v["intro"]); ?></textarea></td>
						    			<td><img src="<?php echo (IMG_UPLOAD); echo ($v["img"]); ?>" width="100px"></td>
						    			<td>
						    				[<a href="<?php echo U("Admin/Admin/updipass",array('id'=>$v['id']));?>">更新</a>]
						    				[<a href="<?php echo U("Admin/Admin/delipass",array('id'=>$v['id']));?>">删除</a>]
						    			</td>
						    		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						    </table>
			                <div class="collapse-card__close_handler mt1 align-right mouse-pointer">
			                   <i class="fa fa-chevron-up"></i> 收起
			                </div>
			            </div>
			        </div>
			        <!-- ===================智能设备=================== -->
			        <div class="collapse-card">
			            <div class="collapse-card__heading">
			                <h4 class="collapse-card__title">
			                    <i class="fa fa-cubes fa-2x fa-fw"></i>
			                   	智能设备
			                </h4>
			            </div>
			            <div class="collapse-card__body">
			            	[<a href="<?php echo U("Admin/Admin/addmachine");?>">增加</a>]
			            	<hr/>
		            		<table class="table table-hover text-center">
		            			<tr>
		            				<td width="5%">序号</td>
		            				<td width="15%">英文标题</td>
		            				<td width="15%">中文标题</td>
		            				<td width="25%">简介</td>
		            				<td width="20%">封面</td>
		            				<td width="20%">操作</td>
		            			</tr>
		               			<?php if(is_array($machine)): $i = 0; $__LIST__ = $machine;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
						    			<td><?php echo ($v["id"]); ?></td>
						    			<td><?php echo ($v["engtitle"]); ?></td>
						    			<td><?php echo ($v["chtitle"]); ?></td>
						    			<td><textarea><?php echo ($v["intro"]); ?></textarea></td>
						    			<td><img src="<?php echo (IMG_UPLOAD); echo ($v["img"]); ?>" width="100px"></td>
						    			<td>
						    				[<a href="<?php echo U("Admin/Admin/updmachine",array('id'=>$v['id']));?>">更新</a>]
						    				[<a href="<?php echo U("Admin/Admin/delmachine",array('id'=>$v['id']));?>">删除</a>]
						    			</td>
						    		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						    </table>
			                <div class="collapse-card__close_handler mt1 align-right mouse-pointer">
			                   <i class="fa fa-chevron-up"></i> 收起
			                </div>
			            </div>
			        </div>
			        <!-- ===================联系我们=================== -->
			        <div class="collapse-card mb30">
			            <div class="collapse-card__heading">
			                <h4 class="collapse-card__title">
			                    <i class="fa fa-institution (alias) fa-2x fa-fw"></i>
			                   	联系我们
			                </h4>
			            </div>
			            <div class="collapse-card__body">
			            	[<a href="<?php echo U("Admin/Admin/addcontactus",array('id'=>$v['id']));?>">增加</a>]
			            	<hr/>
		            		<table class="table table-hover text-center">
		            			<tr>
		            				<td width="5%">序号</td>
		            				<td width="15%">英文标题</td>
		            				<td width="15%">中文标题</td>
		            				<td width="25%">简介</td>
		            				<td width="20%">封面</td>
		            				<td width="20%">操作</td>
		            			</tr>
		               			<?php if(is_array($contactus)): $i = 0; $__LIST__ = $contactus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
						    			<td><?php echo ($v["id"]); ?></td>
						    			<td><?php echo ($v["engtitle"]); ?></td>
						    			<td><?php echo ($v["chtitle"]); ?></td>
						    			<td><textarea><?php echo ($v["intro"]); ?></textarea></td>
						    			<td><img src="<?php echo (IMG_UPLOAD); echo ($v["img"]); ?>" width="100px"></td>
						    			<td>
						    				[<a href="<?php echo U("Admin/Admin/updcontactus",array('id'=>$v['id']));?>">更新</a>]
						    				[<a href="<?php echo U("Admin/Admin/delcontactus",array('id'=>$v['id']));?>">删除</a>]
						    			</td>
						    		</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						    </table>
			                <div class="collapse-card__close_handler mt1 align-right mouse-pointer">
			                   <i class="fa fa-chevron-up"></i> 收起
			                </div>
			            </div>
			        </div>
	    		</div>
	    	</div>
	    </div>
	<script src="<?php echo (S_); ?>js/jquery-2.1.1.min.js" type="text/javascript"></script>
	<script src="<?php echo (BJS_URL); ?>bootstrap.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php echo (S_); ?>js/jquery-2.1.1.min.js"><\/script>')</script>
	<script src="<?php echo (S_); ?>js/paper-collapse.min.js"></script>
	<script>
	    $('.collapse-card').paperCollapse();
	</script>
</body>
</html>