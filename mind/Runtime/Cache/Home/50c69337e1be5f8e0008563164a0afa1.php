<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="hanwei，瀚威，hanweixinli，瀚威心理，xinli，心理，xinliyisheng，心理医生">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>hanwei</title>
	<link rel="stylesheet" type="text/css" href="<?php echo (BS_URL); ?>bootstrap.min.css">
	<script type="text/javascript" src="<?php echo (JS_URL); ?>jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="<?php echo (BJS_URL); ?>bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>web.css">
	<!-- nav -->
	<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>style.css">
    <!-- icon -->
    <link rel='stylesheet' href='<?php echo (AWE_URL); ?>font-awesome.min.css'>
	<link href="<?php echo (HOME); ?>hw/css/linearicons.css" rel="stylesheet">
    <!--=== plugins ===-->
    <link href="<?php echo (HOME); ?>hw/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo (HOME); ?>hw/css/owl.theme.css" rel="stylesheet">
    <!--=== end plugins ===-->
	<link href="<?php echo (HOME); ?>hw/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
        <!--======== header =========-->
        <header id="home" class="container-fluid">
            <div class="row h_header">
                <div class="col-md-10 col-md-offset-1 col-xs-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <span class="h_pull-right"><i class="fa fa-phone"></i><span class="">(024) 28902957</span></span>
                            <span class="h_pull-right"><i class="fa fa-clock-o"></i><span class="">工作时间 : 9.00 - 17.00</span></span>
                        </div> 
                        <div class="col-sm-6">
                            <span class="pull-right">
                                <div class="dropdown">
                                  <button id="dLabel" class="h_social" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-weibo"></i>
                                    <span class="caret"></span>
                                  </button>
                                  <ul class="dropdown-menu" aria-labelledby="dLabel">
                                    <Li class="text-center" >@沈阳瀚威心理</Li>
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
                                    <Li class="text-center" >@瀚威心理</Li>
                                  </ul>
                                </div>
                            </span>
                            <span class="pull-right"><i class="fa fa-paper-plane"></i><span>hanwei@Puyan-Group.com </span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row h_banner">
                <div class="col-md-10 col-md-offset-1 col-xs-12 z99">
                    <!-- ---------- -->
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
                    <!-- ----------- -->
                </div>
            </div>            
        </header>
        <!--======== end =========-->
        
        <!--======== intro =========-->
        <?php if(is_array($banner)): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><section class="intro" style="background-image: url(<?php echo (IMG_UPLOAD); echo ($v["img"]); ?>); background-size: cover; ">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <?php if(is_array($bnews)): $i = 0; $__LIST__ = $bnews;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li data-target="#carousel-example-generic" data-slide-to="<?php echo ($i-1); ?>" class="<?php if($i == 1 ): ?>active<?php endif; ?>"></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ol>

                        <div class="carousel-inner" role="listbox">
                            <?php if(is_array($bnews)): $i = 0; $__LIST__ = $bnews;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class='item <?php if($i == 1): ?>active<?php endif; ?>'>
                                    <div class="intro-content text-center">
                                        <h1><?php echo ($v["title"]); ?></h1>
                                        <p class="h_intro-content"><?php echo ($v["content"]); ?></p>
                                        <a class="btn btn-default" href="#" role="button"> 了解 更多 <i class="lnr lnr-chevron-right"></i></a><br class="h_br" />
                                        <a class="btn btn-primary scroll" href="#what-we-do" role="button"> 开始 浏览 <i class="lnr lnr-chevron-down"></i></a>
                                    </div>
                                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section><?php endforeach; endif; else: echo "" ;endif; ?>
        <!--======== end =========-->

        <!--======== what we do =========-->
        <section id="what-we-do" class="what-we-do">
            <div class="container">
                <div class="row">
                    <?php if(is_array($topic1)): $i = 0; $__LIST__ = $topic1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="col-md-6 col-md-offset-3 text-center">                
                        <p class="small-tag"><?php echo ($v["engtitle"]); ?></p>
                        <h2 class="section-title"><?php echo ($v["chtitle"]); ?></h2>
                        <div class="border"><span class="border-l-r"><i class="lnr lnr-diamond"></i></span></div>
                        <p class="section-para"><?php echo ($v["content"]); ?></p>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>   
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row">

                            <?php if(is_array($dln)): $i = 0; $__LIST__ = $dln;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="do-box text-center">
                                        <img class="img-circle" src="<?php echo (IMG_UPLOAD); echo ($v["img"]); ?>" alt="心理咨询师">
                                        <h3><?php echo ($v["name"]); ?></h3>
                                        <p><?php echo ($v["intro"]); ?></p>
                                    </div>
                                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            <?php if(is_array($ys)): $i = 0; $__LIST__ = $ys;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="do-box bg-color text-center">
                                        <img class="img-circle" src="<?php echo (IMG_UPLOAD); echo ($v["img"]); ?>" alt="心理咨询师">
                                        <h3><?php echo ($v["name"]); ?></h3>
                                        <p><?php echo ($v["intro"]); ?></p>
                                    </div>
                                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            <?php if(is_array($wh)): $i = 0; $__LIST__ = $wh;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; endforeach; endif; else: echo "" ;endif; ?>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="do-box text-center">
                                    <img class="img-circle" src="<?php echo (IMG_UPLOAD); echo ($v["img"]); ?>" alt="心理咨询师">
                                    <h3><?php echo ($v["name"]); ?></h3>
                                    <p><?php echo ($v["intro"]); ?></p>
                                </div>
                            </div>
                            <div class="col-xs-12 text-center">
                                <a href="<?php echo U('Home/Web/expert');?>"><button class="h_more"><i class="lnr lnr-magic-wand " aria-hidden="true"> 更 多</i></button></a>
                            </div>
                        </div>   
                    </div>   
                </div>   
            </div>
        </section>
        <!--======== end =========-->
        
        <!--======== about us enviroment=========-->
        <section id="about-us" class="about-us">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-xs-12 p-l-r-0">
                        <div id="about" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <?php if(is_array($aboutus)): $i = 0; $__LIST__ = $aboutus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class='item <?php if($i == 1): ?>active<?php endif; ?>'>
                                        <img src="<?php echo (IMG_UPLOAD); echo ($v["img"]); ?>" width="100%" alt="<?php echo ($v["alt"]); ?>" />
                                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                    <?php if(is_array($topic2)): $i = 0; $__LIST__ = $topic2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="about-content">
                            <h2 class="section-title"><?php echo ($v["chtitle"]); ?></h2>
                            <p><?php echo (html_entity_decode($v["content"])); ?></p>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?> 
                    </div>
                </div>
            </div>
        </section>
        <!--======== end =========-->
        
        <!--======== our service =========-->
        <section id="service" class="our-service">
            <div class="container">
                <div class="row">
                <?php if(is_array($topic3)): $i = 0; $__LIST__ = $topic3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="col-md-6 col-md-offset-3 text-center">                
                        <p class="small-tag"><?php echo ($v["engtitle"]); ?></p>
                        <h2 class="section-title"><?php echo ($v["chtitle"]); ?></h2>
                        <div class="border"><span class="border-l-r"><i class="lnr lnr-diamond"></i></span></div>
                        <p class="section-para2"><?php echo (html_entity_decode($v["content"])); ?></p>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>   
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row">
                            <?php if(is_array($service)): $i = 0; $__LIST__ = array_slice($service,1,null,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="col-md-4 col-sm-6 col-xs-12 mt15">
                                    <div class="h_service" style="background-image: url('<?php echo (IMG_UPLOAD); echo ($v["img"]); ?>');">
                                        <span><?php echo ($v["engalt"]); ?><br/><?php echo ($v["chalt"]); ?><br/><br/>
                                        <a href="<?php echo ($v["url"]); ?>" class="c-fff"> <button class="h_mores"><i class="lnr lnr-magic-wand " aria-hidden="true"> 更 多</i></button></a>
                                        </span>
                                    </div>                               
                                </div><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>      
                    </div>   
                </div>   
            </div>
        </section>
        <!--======== end =========-->
            
        <!--======== talk about us =========-->
        <?php if(is_array($judgebg)): $i = 0; $__LIST__ = $judgebg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><section class="talk-about-us" style="background-image: url(<?php echo (IMG_UPLOAD); echo ($v["img"]); ?>); background-size: cover; ">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-xs-12 text-center">
                    <?php if(is_array($topic5)): $i = 0; $__LIST__ = $topic5;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><p class="small-tag2"><?php echo ($v["engtitle"]); ?></p>
                        <h2 class="section-title2"><?php echo ($v["chtitle"]); ?></h2><?php endforeach; endif; else: echo "" ;endif; ?>
                        <div class="border2"><span class="border-l-r"><i class="fa fa-quote-right"></i></span></div>
                        
                        <div id="talk-about-us" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <?php if(is_array($judge)): $i = 0; $__LIST__ = $judge;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li data-target="#talk-about-us" data-slide-to="<?php echo ($i-1); ?>" class="<?php if($i == 1 ): ?>active<?php endif; ?>"></li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ol>
                            <div class="carousel-inner c-fff" role="listbox">
                                <?php if(is_array($judge)): $i = 0; $__LIST__ = $judge;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class='item <?php if($i == 1): ?>active<?php endif; ?>'>
                                        <p><?php echo ($v["judge"]); ?></p>
                                        <strong><?php echo ($v["name"]); ?></strong>
                                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </section><?php endforeach; endif; else: echo "" ;endif; ?>
        <!--======== end talk about us =========-->
        
        <!--======== sendmess =========-->
        <section id="contact" class="contact">
            <div class="container">
                <div class="row">
                <?php if(is_array($topic4)): $i = 0; $__LIST__ = $topic4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
                        <p class="small-tag"><?php echo ($v["engtitle"]); ?></p>
                        <h2 class="section-title"><?php echo ($v["chtitle"]); ?></h2>
                        <div class="border"><span class="border-l-r"><i class="fa fa-envelope-o"></i></span></div>
                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <form action="<?php echo U('Home/Web/sendmess');?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputEmail3">您的名字</label>
                                        <input type="text" class="form-control" id="exampleInputEmail3" name="name" placeholder="您的名字">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputEmail3">您的邮箱</label>
                                        <input type="Email" class="form-control" id="exampleInputEmail3" name="email" placeholder="您的邮箱">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputEmail3">您的电话</label>
                                        <input type="tel" class="form-control" id="exampleInputEmail3" name="phone" placeholder="您的电话">
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="sr-only"  for="exampleInputEmail3">输入信息</label>
                                        <textarea class="form-control textarea" rows="5" name="content" placeholder="输入信息"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="inputVerify" class="sr-only">Verify</label>
                                    <input type="text" name="captcha" id="inputVerify" class="form-control" placeholder="输入验证码" required>
                                    <img src="<?php echo U('Admin/Manage/VerifyImg');?>"  alt="" />
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-default btn-block">发送</button>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>
                </form>
            </div>    
        </section>
        <!--======== end =========-->
        
        <!--======== footer =========-->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-md-12 text-center">
                        <a href="#" target="_blank" title="瀚威心理">瀚威心理</a> 
                        <p>Copyright 2016. All Rights Reserved.</p>
                        <span><a href="#home" class="scroll"><i class="lnr lnr lnr-exit-up"></i></a></span>
                    </div>
                </div>
            </div>    
        </footer>
        <!--======== end =========-->

        <!--======== All Javascript =========-->
        
        <script src="<?php echo (HOME); ?>hw/js/owl.carousel.min.js"></script>
        <script src="<?php echo (HOME); ?>hw/js/custom.js"></script>
        <script type="text/javascript" src="<?php echo (JS_URL); ?>animenu.js"></script>
</body>
</html>