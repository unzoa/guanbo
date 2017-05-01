<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/ipass/favicon.ico">
	<title>i.P.A.S.S</title>
	<link rel="stylesheet" href="<?php echo (HCSS); ?>style.css">
	<script src="<?php echo (HJS); ?>jquery-2.1.1.min.js"></script>
	<script src="<?php echo (HJS); ?>ipass.js"></script>
	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?php echo (BCSS); ?>bootstrap.css">
	<script type="text/javascript" src="<?php echo (BJS); ?>bootstrap.min.js"></script>
    <!-- awesome -->
    <link rel='stylesheet' href='<?php echo (HCSS); ?>font-awesome.min.css'>
    <link rel='stylesheet' href='<?php echo (HCSS); ?>font-awesome-ie7.min.css'>

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="<?php echo (HJS); ?>ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo (HJS); ?>ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style type="text/css">
	body{background: #f7f8fa}
	/*清除ios默认按钮样式*/
	input[type="button"], input[type="submit"], input[type="reset"],input[type="date"] ,select{
        -webkit-appearance: none;
    }
    .edit_my_archive{display: block;text-align: center; padding: 7px 15px;border:1px solid #0f88eb;border-radius: 4px;color: #0f88eb}
    @media (max-width: 767px){
    	.new_p0{padding: 0}
    	.edit_my_archive{margin-top: 7px}
    }
</style>
<script type="text/javascript">
    window.document.title = '我的档案 - i.P.A.S.S';
</script>
<body>
<div class="container-fluid">
	<div class="row navconbg">
  <div class="col-sm-8 col-sm-offset-2">
    <nav class="navbar navbar-default bs_nav" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="padding-top: 0;padding-bottom:0 ">
            <span class="sr-only">Toggle navigation</span>
            <span class="username" style="margin-top: 2px">
          		<img src="<?php echo (SITE_URL); ?>Jcrop/<?php echo ($userpic); ?>" style="width: 30px;height: 30px;border-radius: 30px;border:3px #ffe84d solid;margin-right: 3px;margin-left: -2px;">
          		<span style="color: #ffe84d"><?php echo ($username); ?></span>
          	</span>
          </button>
          <a class="navbar-brand" href="<?php echo U('Home/index/index');?>">
          	<!-- Brand -->
          	<img src="<?php echo (HIMG); ?>logo.png" class="logopic">
          </a>
        </div>
        <style type="text/css">
          .logopic{width: 70px;margin-top: -3px}
          .username{display: none;}
          @media (max-width: 767px){
          	.username{display: block;}
          	.logo{display: none;}
          	.logopic{margin-top: -7px;margin-left:-5px;width: 60px}
          }
        </style>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse bs_collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo U('Home/Index/lb');?>">测评系统</a></li>
            <li><a href="<?php echo U('Home/Index/mytest');?>">我的测评</a></li>
            <li><a href="<?php echo U('Home/index/archive');?>">我的档案</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
    	          	<span class="logo">
    	          		<img src="<?php echo (SITE_URL); ?>Jcrop/<?php echo ($userpic); ?>" style="width: 30px;height: 30px;border-radius: 30px;border:3px #fff solid;margin-right: 3px;margin-left: -2px">
    			        <?php echo ($username); ?>
    			        <span class="caret"></span>
    	          	</span>
    	          <span class="username">设置<span class="caret"></span></span> 
              </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="/ipass/Jcrop/index.html?id=<?php echo (session('stid')); ?>">修改头像</a></li>
                <!-- <li><a href="<?php echo U('Home/index/usersetting');?>">账户设置</a></li> -->
                <li class="divider"></li>
                <li><a onclick="if (confirm('确定要退出吗？')) return true; else return false;" href="<?php echo U('Home/Index/logout');?>">退出</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
  </div>
</div>
	<div class="row body_top">
		<div class="col-sm-8 col-sm-offset-2 new_p0">
			<div class="left_con2">
				<div class="row">
					<div class="col-sm-2 child_head">
						<img src="/ipass/Jcropchild/<?php echo ($userpic2); ?>" class="img-rounded" style="width: 100px;height: 100px">
					</div>
					<div class="col-sm-10">
						<h2 class="archive_childname" style="color: #9aaabf;">孩子<?php echo ($archive[0][name]); ?>的档案</h2>
						<div class="col-sm-9 archive_slogan">
							<i style="color: #9aaabf">i.P.A.S.S关注心理，关注儿童。
								<i class="icon-magic"></i>
							</i>
						</div>
						<div class="col-sm-3">
							<a href="<?php echo U('Home/Index/edit_archive');?>" class="edit_my_archive">
							<i class="icon-edit"></i> 编辑档案</a>
						</div>
					</div>
					
				</div>
			</div>
			<br/>
			<div>
				<div class="archive_normal">
					<div class="left_con2">
						<label><i class="icon-user icon-large awesome_hand"></i></label>
						<span class="code1"><?php echo ($archive[0][sex]); ?></span>
						<span class="code1"><?php echo ($archive[0][minzu]); ?>族</span>
						<span class="code1"><?php echo ($archive[0][birthday]); ?></span>
						<span class="code1"><?php echo ($archive[0][xuexing]); ?>型</span>
						<span class="code1"><?php echo ($archive[0][shengao]); ?>cm</span>
						<span class="code1"><?php echo ($archive[0][tizhong]); ?>kg</span>
					</div>
					<br/>
					<div class="left_con2">
						<label><i class="icon-building icon-large awesome_hand"></i></label>
						<span class="code3"><?php echo ($archive[0][banji]); ?></span>
						<i class="icon-map-marker awesome_hand"></i>
						<span class="code3"><?php echo ($archive[0][xuexiaolocation]); ?></span>
						<span class="code3"><?php echo ($archive[0][xuexiaoleixing]); ?></span>
						<span>与老师</span>
						<span class="code3"><?php echo ($archive[0][laoshiguanxi]); ?></span>
						<span>与同学</span>
						<span class="code3"><?php echo ($archive[0][tongxueguanxi]); ?></span>
					</div>
				</div>
				<div class="left_con2 archive_birth">
					<label><i class="icon-tasks icon-large awesome_hand"></i></label>
					<span><?php echo ($archive[0][name]); ?></span>
					<span class="code2"><?php echo ($archive[0][fenwan]); ?></span>
					<span class="code2"><?php echo ($archive[0][manyue]); ?></span>
					<span>出生时体重</span>
					<span class="code2"><?php echo ($archive[0][birth_tizhong]); ?>kg</span>
					<span class="code2"><?php echo ($archive[0][fuyangren]); ?></span>
					<span>是主要抚养人，孩子出生时父亲年龄</span>
					<span class="code2"><?php echo ($archive[0][dadnianling]); ?>岁</span>
					<span>孩子出生时母亲年龄</span>
					<span class="code2"><?php echo ($archive[0][momnianling]); ?>岁</span>
					<span>拥有兄弟姐妹</span>
					<span class="code2"><?php echo ($archive[0][brother]); ?>位</span>
					<span>家中排行第</span>
					<span class="code2"><?php echo ($archive[0][paihang]); ?></span>
					<span class="code2"><?php echo ($archive[0][duzi]); ?></span>
					<span class="code2"><?php echo ($archive[0][walknianling]); ?>岁</span>
					<span>学会走路</span>
					<span class="code2"><?php echo ($archive[0][talknianling]); ?>岁</span>
					<span>学会说话</span>
					<span class="code2"><?php echo ($archive[0][rutuo]); ?>岁</span>
					<span>参加托儿所</span>
					<hr>
					<label><i class="icon-home icon-large awesome_hand"></i></label>
					<span>现居住在</span>
					<span class="code2"><?php echo ($archive[0][home]); ?></span>
					<span>和</span>
					<span class="code2"><?php echo ($archive[0][tongjuren]); ?></span>
					<span>居住在一起，家庭关系</span>
					<span class="code2"><?php echo ($archive[0][homewell]); ?></span>
					<span>和父母关系</span>
					<span class="code2"><?php echo ($archive[0][dadmom]); ?></span>
					<span>教育方式</span>
					<span class="code2"><?php echo ($archive[0][jiaoyufangshi]); ?></span>
					<span>父母管教意见</span>
					<span class="code2"><?php echo ($archive[0][guanjiaoyijian]); ?></span>
					<span>父亲学历</span>
					<span class="code2"><?php echo ($archive[0][fuqinxueli]); ?></span>
					<span>职业</span>
					<span class="code2"><?php echo ($archive[0][fuqinzhiye]); ?></span>
					<span>母亲学历</span>
					<span class="code2"><?php echo ($archive[0][muqinxueli]); ?></span>
					<span>职业</span>
					<span class="code2"><?php echo ($archive[0][muqinzhiye]); ?></span>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row" style="margin:0;background-color: #333;color: #faf1ce;padding: 20px;text-align: center;">
<i class="icon-phone-sign">
	<a href="tel:02467755317" class="cfff"> 联系我们:024-67755317</a>
</i>
</div>
</body>
</html>