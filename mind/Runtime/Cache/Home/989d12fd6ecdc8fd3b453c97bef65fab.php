<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="hanwei，瀚威，hanweixinli，瀚威心理，xinli，心理，xinliyisheng，心理医生">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>沈阳瀚威心理咨询有限公司-心理咨询</title>
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
    body{background-color: #eee}
  </style>
</head>
<body>
        <!--======== header =========-->
         <header id="home" class="container-fluid">
    <div class="row h_header">
        <div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12">
            <div class="row">
            <?php if(is_array($top)): $i = 0; $__LIST__ = $top;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="col-sm-6">
                    <span class="h_pull-right"><i class="fa fa-phone"></i><span class=""><?php echo ($v["phone"]); ?> </span></span>
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
    <div class="row h_banner">
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
        <!--======== end =========-->
        <!-- ============banner========== -->
        <?php if(is_array($psytop)): $i = 0; $__LIST__ = $psytop;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="h_e_banner" style="background-image: url('<?php echo (IMG_UPLOAD); echo ($v["img"]); ?>'); background-size: cover; background-position: center;">
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
        <!-- ===========end============ -->

        <!-- ============正文=========== -->
        <div class="container h_content">
          <div class="row h_detail">
          	<div class="col-xs-12">
            <div class="col-sm-10"><h1><?php echo ($info["chtitle"]); ?></h1><p><?php echo ($info["engtitle"]); ?></p></div>
            <div class="col-sm-2"><a href="<?php echo U('Home/Web/psy');?>" class="h_sd_back">< 返回</a></div>
           	</div>
            <hr style="border:solid 1px #d8d8d8" />
            <div class="col-xs-12">
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