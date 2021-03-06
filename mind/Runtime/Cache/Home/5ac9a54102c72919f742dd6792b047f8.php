<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="hanwei，瀚威，hanweixinli，瀚威心理，xinli，心理，xinliyisheng，心理医生">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>沈阳瀚威心理咨询有限公司-心理咨询</title>
    <link rel="shortcut icon" href="http://hanwei-mind.com/favicon.ico">
  <link rel="stylesheet" type="text/css" href="<?php echo (BS_URL); ?>bootstrap.min.css">
  <script type="text/javascript" src="<?php echo (JS_URL); ?>jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="<?php echo (BJS_URL); ?>bootstrap.min.js"></script>
  <!-- web -->
  <link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>web.css">
  <link href="<?php echo (CSS_URL); ?>web_style.css" rel="stylesheet">
  <!-- nav -->
  <link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>style.css">
  <!-- icon -->
  <link rel='stylesheet' href='<?php echo (AWE_URL); ?>font-awesome.min.css'>
  <link href="<?php echo (CSS_URL); ?>linearicons.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style type="text/css">
    body{background-color: #fff}
  </style>
</head>
<body>
        <!--======== header =========-->
        <div style="margin-top:-20px">
         <header id="home" class="container-fluid">
    <div class="row h_header">
        <div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12">
            <div class="row">
            <?php if(is_array($top)): $i = 0; $__LIST__ = $top;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="col-sm-6">
                    <span class="h_pull-right"><i class="fa fa-phone"></i><span class=""><a href='tel:<?php echo ($v["phone"]); ?>'><?php echo ($v["phone"]); ?></a> </span></span>
                    <span class="h_pull-right"><i class="fa fa-clock-o"></i><span class="">工作时间 : <?php echo ($v["time"]); ?></span></span>
                </div> 
                <div class="col-sm-6">
                    <span class="pull-right">
                        <div class="dropdown">
                          <button id="dLabel" class="h_social" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-weibo"></i>
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dLabel">
                            <Li class="text-center" >瀚威心理</Li>
                          </ul>
                        </div>
                    </span>
                    <span class="pull-right">
                        <div class="dropdown">
                          <button id="dLabel" class="h_social" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-weixin"></i>
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dLabel">
                            <Li class="text-center" >瀚威心理</Li>
                          </ul>
                        </div>
                    </span>
                    <span class="pull-right"><i class="fa fa-paper-plane"></i><span><?php echo ($v["email"]); ?></span></span>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
    </div>
    <div class="row h_banner m0">
        <div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12 z99">
            <div class="row">
                <div class="col-md-2 col-sm-2 col-xs-2 h_logo">
                    <img src="<?php echo (IMG_URL); ?>logo.png">
                </div>
                <div class="col-md-10 col-sm-10 col-xs-10">
                    <nav class="animenu pull-right">
                      <div class="header"> 
                          <button class="animenu__toggle">
                            <span class="animenu__toggle__bar"></span>
                            <span class="animenu__toggle__bar"></span>
                            <span class="animenu__toggle__bar"></span>
                          </button>
                      </div>
                      <ul class="animenu__nav">
                      <?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>
                          <a href="<?php echo ($v["url"]); ?>"><?php echo ($v["title"]); ?></a>
                          <ul class="animenu__nav__child">
                          <?php if(is_array($v['child'])): $i = 0; $__LIST__ = $v['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$f): $mod = ($i % 2 );++$i;?><li><a href="<?php echo ($f["url"]); ?>"><?php echo ($f["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                          </ul>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>                 
                      </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>            
</header>
<!-- =========qq============== -->
	<style type="text/css">
	.qqcontact{position: fixed;top:150px;right: 5px;z-index: 9999;}
	.qqcontact img{width: 100px}
	@media (max-width: 767px){
		.qqcontact{width: 50px}
		.qqcontact img{width: 50px;margin: 0 auto}
	}
	</style>
	<div class="qqcontact">
		<img border="0" src="<?php echo (IMG_URL); ?>intro-9.png" alt="" title="" />
		<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=3477703063&site=qq&menu=yes">
			<p style="color: #fff;background: orange;text-align: center;">QQ 在线咨询1号</p>
		</a>
		<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1153598689&site=qq&menu=yes">
			<p style="color: #fff;background: orange;text-align: center;">QQ 在线咨询2号</p>
		</a>
		<a href='tel:02467755317'><p style="color: #fff;background: orange;text-align: center;padding:0 10px">电话咨询</p></a>
	</div>
<!-- end --></div>
        <!--======== end =========-->
        <!-- ============banner========== -->
        <?php if(is_array($news_one)): $i = 0; $__LIST__ = $news_one;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="h_e_banner" style="background-image: url('<?php echo (IMG_UPLOAD); echo ($v["img"]); ?>'); background-size: cover; background-position: center;">
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
        <!-- ===========end============ -->

        <!-- ============正文=========== -->
        <div class="container h_content">
          <div class="row h_news_detail">
          	<div class="col-xs-12" style="border-bottom:solid 1px #d8d8d8;padding-bottom: 30px;margin-bottom:30px">
				<div class="col-sm-9"><h2><?php echo ($info["title"]); ?></h2></div>
				<div class="col-sm-3"><a href="<?php echo U('Home/Web/newst');?>" class="h_sd_back">< 返回</a></div>
           	</div>
            <div class="col-xs-12 h_news_mainbody">
            	<p><?php echo (html_entity_decode($info["content"])); ?></p>
            </div>
          </div>
        </div>
        <!-- ================end================ -->
         <!--======== footer =========-->
        <footer class="footer">
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-md-12 text-center">
        	<p>友情链接:
			<?php if(is_array($youlian)): $i = 0; $__LIST__ = $youlian;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><a href="<?php echo ($v["url"]); ?>" class="c-fff"><?php echo ($v["name"]); ?></a>&nbsp<?php endforeach; endif; else: echo "" ;endif; ?>
        	</p>
            <?php if(is_array($footer)): $i = 0; $__LIST__ = $footer;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><p>Copyright © <?php echo ($v["right"]); ?></p> 
            <p><?php echo ($v["beian"]); ?></p><?php endforeach; endif; else: echo "" ;endif; ?>
            <span><a href="#home" class="scroll"><i class="lnr lnr lnr-exit-up"></i></a></span>
        </div>
    
    </div>
</div>    
</footer>
        <!-- ========end================== -->
        <script src="<?php echo (JS_URL); ?>owl.carousel.min.js"></script>
        <script src="<?php echo (JS_URL); ?>custom.js"></script>
        <script type="text/javascript" src="<?php echo (JS_URL); ?>animenu.js"></script>
</body>
</html>