<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/baoshu/favicon.ico">
	<title>大手印恒力训练系统</title>
	<link rel="stylesheet" href="<?php echo (HCSS); ?>style.css">
	<script src="<?php echo (HJS); ?>jquery-2.1.1.min.js"></script>
	<script src="<?php echo (HJS); ?>web.js"></script>
	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?php echo (BCSS); ?>bootstrap.css">
	<script type="text/javascript" src="<?php echo (BJS); ?>bootstrap.min.js"></script>

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo (HJS); ?>ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style type="text/css">
	html,body{width: 100%; height: 100%}
</style>
<body>
	<div class="container-fluid">

	<!-- ================导航栏================= -->
	<div class="row">
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
      	<img src="<?php echo (HIMG); ?>logo.png" class="logopic" style="width: 30px">
      </a>
    </div>
    <style type="text/css">
    .logopic{margin-top: 5px}
    .username{display: none;}
    @media (max-width: 767px){
    	.username{display: block;}
    	.logo{display: none;}
    	.logopic{margin-top: 0px}
    }
    </style>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse bs_collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo U('Home/index/dongtai');?>">动态</a></li>
        <li><a href="<?php echo U('Home/index/huoban');?>">伙伴</a></li>
        <li><a href="<?php echo U('Home/index/count');?>">报数</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          	<!-- <img src="<?php echo (SITE_URL); echo ($userpic); ?>" style="width: 30px;height: 30px;border-radius: 30px;border:3px #fff solid;margin-right: 3px;margin-left: -2px"> -->
	          	<span class="logo">
	          		<img src="<?php echo (SITE_URL); ?>Jcrop/<?php echo ($userpic); ?>" style="width: 30px;height: 30px;border-radius: 30px;border:3px #fff solid;margin-right: 3px;margin-left: -2px">
			        <?php echo ($username); ?>
			        <span class="caret"></span>
	          	</span>

	          <span class="username">设置<span class="caret"></span></span> 
	          
          </a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="/guanbo/baoshu/Jcrop/index.html?id=<?php echo (session('id')); ?>">修改头像</a></li>
            <!-- <?php echo U('Home/Uppic/index');?> -->
            <li><a href="<?php echo U('Home/index/usersetting');?>">账户设置</a></li>
            <li><a href="<?php echo U('Home/index/admin');?>"><?php echo ($admin); ?></a></li>
            <li class="divider"></li>
            <li><a onclick="if (confirm('确定要退出吗？')) return true; else return false;" href="<?php echo U('Home/Manage/logout');?>">退出</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
</nav>
<marquee class="" scrolldelay="300" style="background-color: #ffe84d;line-height: 45px; color: #000079;height: 45px;margin-top: -10px;"><?php echo ($gg); ?></marquee>
	</div>
	<!-- ================jing=================== -->
	<div class="row">
		<!-- <div id="carousel-example-generic" class="carousel slide" data-ride="flase" data-wrap="false">
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		    <div class="row" style="margin: 0">
		    	<?php if(is_array($teamjing)): $i = 0; $__LIST__ = $teamjing;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="" style="position: relative; float: left; width: 33.33%;">
		    			<img src="<?php echo (UIMG); echo ($v["big_img"]); ?>" class="bs_jing_bigimg">
		    			<span class="badge bs_badge"><?php echo ($v["jingcount"]); ?></span>
		    		</div><?php endforeach; endif; else: echo "" ;endif; ?>
		    </div>
		        <h3 class="bs_captain">共修</h3>
		    </div>
		    <div class="item">
		      	<?php if(is_array($myjing)): $i = 0; $__LIST__ = $myjing;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><span style="position: relative;">
		    			<img src="<?php echo (UIMG); echo ($v["big_img"]); ?>" class="bs_jing_bigimg">
		    			<span class="badge bs_badge"><?php echo ($v["jingcount"]); ?></span>
		    		</span><?php endforeach; endif; else: echo "" ;endif; ?>
		        <h3 class="bs_captain"><?php echo ($username); ?></h3>
		    </div>
		  </div>

		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		  </ol>

		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div> -->
		<div class="col-xs-12">
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		  <div class="panel panel-default">
		    <div class="panel-heading" role="tab" id="headingOne">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		          <?php echo ($myteamname); ?>共修
		        </a>
		      </h4>
		    </div>
		    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
		      <div class="panel-body">
		        <?php if(is_array($teamjing)): $i = 0; $__LIST__ = $teamjing;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="bs_jing_icon_con">
		    			<img src="<?php echo (UIMG); echo ($v["big_img"]); ?>" class="bs_jing_bigimg">
		    			<span class="badge bs_badge"><?php echo ($v["jingcount"]); ?></span>
		    		</div><?php endforeach; endif; else: echo "" ;endif; ?>
		      </div>
		    </div>
		  </div>
		  <div class="panel panel-default">
		    <div class="panel-heading" role="tab" id="headingTwo">
		      <h4 class="panel-title">
		        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		          <?php echo ($username); ?>
		        </a>
		      </h4>
		    </div>
		    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
		      <div class="panel-body">
		        <?php if(is_array($myjing)): $i = 0; $__LIST__ = $myjing;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="bs_jing_icon_con">
		    			<img src="<?php echo (UIMG); echo ($v["big_img"]); ?>" class="bs_jing_bigimg">
		    			<span class="badge bs_badge"><?php echo ($v["jingcount"]); ?></span>
		    		</div><?php endforeach; endif; else: echo "" ;endif; ?>
		      </div>
		    </div>
		  </div>
		</div>
		</div>
	</div>
<!-- 
	<script>
	$(document).ready(function(){
	    //手势右滑 回到上一个画面
	    $('#carousel-example-generic').bind('swiperight swiperightup swiperightdown',function(){
	        $("#carousel-example-generic").carousel('prev');
	    })
	    //手势左滑 进入下一个画面
	    $('#carousel-example-generic').bind('swipeleft swipeleftup swipeleftdown',function(){
	        $("#carousel-example-generic").carousel('next');
	    })
	})
	</script>
	 -->
	<!-- ================body==================== -->
	<div class="row">
		<div class="col-xs-12">
			<!-- <button class="bs_count_full btn-info mb10">
				<span>团队：<?php echo ($teamname); ?></span><span class="badge"><?php echo ($sumCount); ?></span>
			</button>
			<button class="bs_count_full btn-primary mb10">
				<span>我：<?php echo ($username); ?></span><span class="badge"><?php echo ($sumCount2); ?></span>
			</button>
			<button class="bs_count_full btn-success mb10">
				<span>今日报数：<?php echo ($username); ?></span><span class="badge"><?php echo ($sumCount3); ?></span>
			</button> -->
			<!-- <button class="bs_count_full btn-warning mb10">
				<span>间断天数：</span><span class="badge"><?php echo ($jianduan); ?></span>
			</button> -->
		</div>
		<div class="col-xs-12">
			<div class="col-sm-3">
				<h2>报数</h2>
				<button class="bs_count_full btn-warning btn-block mb10">
					<span>间断</span>
					<span class="badge"><?php echo ($jianduan); ?></span><span> &nbsp天</span> 
				</button>
				<form action="<?php echo ($think["const"]["/guanbo/baoshu/index.php/Home/index/count.html"]); ?>" role="form" class="form-signin" enctype="multipart/form-data" method="post"> 
					<div class="input-group mb10">
					  	<span class="input-group-addon">密咒</span>
						<select class="form-control" name="jid" id="tech" onchange="showValue(this)">
							<?php if(is_array($jing)): $i = 0; $__LIST__ = $jing;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["name"]); ?>" data-image="<?php echo (UIMG); echo ($v["big_img"]); ?>"><?php echo ($v["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
						</select>
					</div>
					<!-- ===============密咒================== -->
					<script>
					$(document).ready(function(e) {     
					    //convert
					    $("select").msDropdown({roundedBorder:false});
					    createByJson();
					    $("#tech").data("dd");
					});
					function showValue(h) {
					    console.log(h.name, h.value);
					}
					$("#tech").change(function() {
					    console.log("by jquery: ", this.value);
					})
					</script>
					<div class="input-group mb10">
					  <span class="input-group-addon">报数</span>
					  <input type="tel" name="count" class="form-control" placeholder="输入数字" required></input>
					</div> 
					<button class="btn btn-lg btn-block btn-primary bs_count_full" type="submit">确定</button>
				</form>
			</div>
			<div class="col-sm-9 bs_count_table">
				<h2>今日报数</h2>
				<table class="table table-condensed">
				  <thead>
				  	<tr>
				  		<th>我</th>
				  		<th>密咒</th>
				  		<th>报数</th>
				  		<th>操作</th>
				  	</tr>
				  </thead>
				  <tbody>
				  	<?php if(is_array($myDay)): $i = 0; $__LIST__ = $myDay;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
					  	<td><?php echo ($v["uid"]); ?></td>
					  	<td><?php echo ($v["jid"]); ?></td>
					  	<td><?php echo ($v["count"]); ?></td>
					  	<td><a href="<?php echo U("Home/index/delbaoshu",array('did'=>$v['did']));?>">删除</a></td>
				  	</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				  </tbody>
				</table>
			</div>
		</div>
	</div>
	</div>
</body>
</html>