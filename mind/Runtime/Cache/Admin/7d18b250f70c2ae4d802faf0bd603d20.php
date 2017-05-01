<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="cleartype" content="on">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>瀚威动态</title>
	<link rel="icon" href="<?php echo (IMG_URL); ?>favicon.ico">
	<link rel="stylesheet" type="text/css" href="<?php echo (S_); ?>css/normalize.css" />
	<link rel="stylesheet" href="<?php echo (S_); ?>css/paper-collapse.min.css">
	<link rel='stylesheet' href='//cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css'>
	<link rel="stylesheet" type="text/css" href="<?php echo (BS_URL); ?>bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>web.css">
	<style>
        body {
            background-color: #fff;
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
		i{color: #c3c4d5; margin: 10px 10px 10px 0;}
        .collapse-card__title{line-height: 40px;}
      </style>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<div class="header" style="margin-top:-20px">
		<span><a href="<?php echo U('Admin/Admin/index');?>" style="color: #fff;">< 首页</a></span>
	</div>
    <div class="container-fluid" style="margin-top:20px">
    	<div class="row">
    		<div class="col-sm-10 col-sm-offset-1">
				<!-- ==================新闻动态2================= -->
                <table class="table table-hover text-center">
                    <tr>
                        <td width="5%">序号</td>
                        <td width="25%">标题</td>
                        <td width="15%">封面</td>
                        <td width="15%">操作</td>
                    </tr>
                    <?php if(is_array($newsbg2)): $i = 0; $__LIST__ = $newsbg2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                            <td><?php echo ($v["id"]); ?></td>
                            <td><?php echo ($v["title"]); ?></td>
                            <td><img src="<?php echo (IMG_UPLOAD); echo ($v["img"]); ?>" style="width: 100px"></td>
                            <td>
                                [<a href="<?php echo U("Admin/Admin/updnewsbg",array('id'=>$v['id']));?>">更新</a>]
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </table>
                [<a href="<?php echo U('Admin/Admin/addhnewst');?>">+ 增加行业要闻</a>]
                <table class="table table-hover text-center">
                    <tr>
                        <td width="5%">序号</td>
                        <td width="25%">标题</td>
                        <td width="15%">封面</td>
                        <td width="15%">操作</td>
                    </tr>
                    <?php if(is_array($news_infot)): $i = 0; $__LIST__ = $news_infot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
                            <td><?php echo ($v["id"]); ?></td>
                            <td><?php echo ($v["title"]); ?></td>
                            <td><img src="<?php echo (IMG_UPLOAD); echo ($v["cover"]); ?>" style="width: 100px"></td>
                            <td>
                                [<a href="<?php echo U("Admin/Admin/updhnewst",array('id'=>$v['id']));?>">更新</a>]
                                [<a href="<?php echo U("Admin/Admin/delhnewst",array('id'=>$v['id']));?>">删除</a>]
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    <tr>
                        <td colspan="5">
						<div class="h_page"><?php echo ($news_showt); ?></div></td>
                    </tr>
                </table>
    		</div>
    	</div>
    </div>
	<script src="<?php echo (S_); ?>js/jquery-2.1.1.min.js" type="text/javascript"></script>
	<script src="<?php echo (BJS_URL); ?>bootstrap.min.js"></script>
	<script>window.jQuery || document.write('<script src="<?php echo (S_); ?>js/jquery-2.1.1.min.js"><

\/script>')</script>
	<script src="<?php echo (S_); ?>js/paper-collapse.min.js"></script>
	<script>
	    $('.collapse-card').paperCollapse();
	</script>
</body>
</html>