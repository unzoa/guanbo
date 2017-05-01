<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>hanwei</title>
	<link rel="stylesheet" type="text/css" href="<?php echo (BS_URL); ?>bootstrap.min.css">
	<script type="text/javascript" src="<?php echo (JS_URL); ?>jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="<?php echo (BJS_URL); ?>bootstrap.min.js"></script>
	<link rel='stylesheet' href='<?php echo (AWE_URL); ?>font-awesome.min.css'>
	<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>web.css">
	<!-- nav -->
	<link rel="stylesheet" type="text/css" href="<?php echo (CSS_URL); ?>style.css">

	<link href="<?php echo (HOME); ?>hw/css/linearicons.css" rel="stylesheet">
    <!--=== plugins ===-->
    <link href="<?php echo (HOME); ?>hw/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo (HOME); ?>hw/css/owl.theme.css" rel="stylesheet">
    <!--=== end plugins ===-->
	<link href="<?php echo (HOME); ?>hw/css/style.css" rel="stylesheet">
	<link href="<?php echo (HOME); ?>hw/css/responsive.css" rel="stylesheet">
	<style type="text/css">
        .dn{display: none}
        </style>
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
                                  <?php if(is_array($v['child'])): $i = 0; $__LIST__ = $v['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$f): $mod = ($i % 2 );++$i;?><li><a href=<?php echo ($f["url"]); ?>><?php echo ($f["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
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
        <!--======== end header =========-->
        
        <!--======== intro =========-->
        <section class="intro">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <!-- <li data-target="#carousel-example-generic" data-slide-to="2"></li> -->
                        </ol>

                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="intro-content text-center">
                                    <h1>瀚威心理欢迎你</h1>
                                    <p class="h_intro-content">瀚威心理是集心理咨询与治疗，心理健康教育，教学，科研，网络及智能化心理设备研发，咨询室建设与加盟与一体的产业化专业心理机构。</p>
                                    <a class="btn btn-default" href="#" role="button"> 了解 更多 <i class="lnr lnr-chevron-right"></i></a><br class="h_br" />
                                    <a class="btn btn-primary scroll" href="#what-we-do" href="#" role="button"> 开始 浏览 <i class="lnr lnr-chevron-down"></i></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="intro-content text-center">
                                    <h1>我们为您提供</h1>
                                    <p class="h_intro-content">心理咨询、心理培训、专业心理评估、表达性艺术治疗、音乐治疗、父母读书会、舞动治疗、特殊群体关怀、智能设备服务开发、心理服务。</p>
                                    <a class="btn btn-default" href="#" role="button"> 了解 更多 <i class="lnr lnr-chevron-right"></i></a><br class="h_br" />
                                    <a class="btn btn-primary scroll" href="#what-we-do" role="button"> 开始 浏览 <i class="lnr lnr-chevron-down"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--======== end intro =========-->

        <!--======== what we do =========-->
        <section id="what-we-do" class="what-we-do">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">                
                        <p class="small-tag">Our Team</p>
                        <h2 class="section-title">我们的团队</h2>
                        <div class="border"><span class="border-l-r"><i class="lnr lnr-diamond"></i></span></div>
                        <p class="section-para">资深国家二、三级心理咨询师，拥有丰富的心理知识，帮助了许许多多的有心理困难的朋友。面对许多家庭、择业、求学、社会适应等问题，帮助他们做出理想的选择，顺利地度过人生的各个阶段，求得自身能力的最大发挥和寻求生活的良好质量。</p>
                    </div>
                </div>   
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="do-box text-center">
                                    <!-- <i class="lnr lnr-inbox"></i> -->
                                    <img class="img-circle" src="<?php echo (HOME); ?>/hw/img/expert-4.jpg" alt="">
                                    <h3>豆立宁</h3>
                                    <p>国家注册二级心理咨询师，国家注册沙盘游戏师，沈阳瀚威心理咨询有限公司总经理，瀚威心理咨询师建设项目负责人。</p>
                                </div>
                          </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="do-box bg-color text-center">
                                    <!-- <i class="lnr lnr-cog"></i> -->
                                    <img class="img-circle" src="<?php echo (HOME); ?>/hw/img/expert-4.jpg" alt="">
                                    <h3>豆立宁</h3>
                                    <p>国家注册二级心理咨询师，国家注册沙盘游戏师，沈阳瀚威心理咨询有限公司总经理，瀚威心理咨询师建设项目负责人。</p>
                                </div>
                          </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="do-box text-center">
                                    <!-- <i class="lnr lnr-leaf"></i> -->
                                    <img class="img-circle" src="<?php echo (HOME); ?>/hw/img/expert-4.jpg" alt="">
                                    <h3>豆立宁</h3>
                                    <p>国家注册二级心理咨询师，国家注册沙盘游戏师，沈阳瀚威心理咨询有限公司总经理，瀚威心理咨询师建设项目负责人。</p>
                                </div>
                            </div>
                            <div class="col-xs-12 text-center">
                                <button class="h_more"><i class="lnr lnr-magic-wand " aria-hidden="true"> 更 多</i></button>
                            </div>
                        </div>   
                    </div>   
                </div>   
            </div>
        </section>
        <!--======== end what we do =========-->
        
        <!--======== about us  enviroment=========-->
        <section id="about-us" class="about-us">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-xs-12 p-l-r-0">
                        <div id="about" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="<?php echo (HOME); ?>/hw/img/about-us-2.jpg" width="100%" alt="" />
                                </div>
                                <div class="item">
                                    <img src="<?php echo (HOME); ?>/hw/img/about-us-1.jpg" width="100%" alt="" />
                                </div>
                                <div class="item">
                                    <img src="<?php echo (HOME); ?>/hw/img/about-us.jpg" width="100%" alt="" />
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="about-content">
                            <h2 class="section-title">关于我们</h2>
                            <p>沈阳瀚威心理健康咨询有限公司</p>
                            <p>沈阳瀚威心理健康咨询有限公司注重心理产业的调整与创新，坚持以创新带动发展，以科技引领未来，公司拥有国内先进的脑波数据采集仪器，拥有多名经验丰富的国家级心理咨询师及沙盘游戏治疗师。沈阳瀚威致力于帮助每一个咨询者回归心灵圣地，努力打造一个心理健康咨询的产业王国。</p>
                            <p>主要针对强迫症、焦虑症、抑郁症、失眠症、恋爱情感、职场压力、家庭关系、亲子关系、儿童青少年心理等问题的进行研究与治疗。有助于职场白领、企业领导、青少年等人群减轻压力、提高专注度及自我调控能力。</p>
                        </div> 
                    </div>
                </div>
            </div>
        </section>
        <!--======== end about us =========-->
        
        <!--======== our service =========-->
        <section id="service" class="our-service">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">                
                        <p class="small-tag">Our Service</p>
                        <h2 class="section-title">我们的服务</h2>
                        <div class="border"><span class="border-l-r"><i class="lnr lnr-diamond"></i></span></div>
                        <p class="section-para2">健康不止源于身体，更源于心理<br/>心的开始，心的希望，健心从这一秒起航</p>
                    </div>
                </div>   
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="h_service" style="background-image: url('<?php echo (HOME); ?>/hw/img/s-1.jpg');">
                                    <span>Psychiatric Consulting<br/>心理咨询<br/><br/>
                                    <button class="h_mores"><i class="lnr lnr-magic-wand " aria-hidden="true"> 更 多</i></button>
                                    </span>
                                </div>                               
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="h_service" style="background-image: url('<?php echo (HOME); ?>/hw/img/s-2.jpg');">
                                    <span>Psychology Teaching & Grow<br/>心理教学与成长<br/><br/>
                                    <button class="h_mores"><i class="lnr lnr-magic-wand " aria-hidden="true"> 更 多</i></button>
                                    </span>
                                </div>   
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12" >
                                <div class="h_service" style="background-image: url('<?php echo (HOME); ?>/hw/img/s-3.jpg');">
                                    <span>Intelligent Machine<br/>智能设备<br/><br/>
                                    <button class="h_mores"><i class="lnr lnr-magic-wand " aria-hidden="true"> 更 多</i></button>
                                    </span>
                                </div>  
                            </div>
                        </div>   
                        <div class="row mt15">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="h_service" style="background-image: url('<?php echo (HOME); ?>/hw/img/s-4.jpg');">
                                    <span>Psychological Build<br/>咨询师建设<br/><br/>
                                    <button class="h_mores"><i class="lnr lnr-magic-wand " aria-hidden="true"> 更 多</i></button>
                                    </span>
                                </div>                               
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="h_service" style="background-image: url('<?php echo (HOME); ?>/hw/img/s-5.jpg');">
                                    <span>Join Us<br/>翰威加盟<br/><br/>
                                    <button class="h_mores"><i class="lnr lnr-magic-wand " aria-hidden="true"> 更 多</i></button>
                                    </span>
                                </div>   
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12" >
                                <div class="h_service" style="background-image: url('<?php echo (HOME); ?>/hw/img/s-6.jpg');">
                                    <span>Public Service<br/>翰威公益<br/><br/>
                                    <button class="h_mores"><i class="lnr lnr-magic-wand " aria-hidden="true"> 更 多</i></button>
                                    </span>
                                </div>  
                            </div>
                        </div>   
                    </div>   
                </div>   
            </div>
        </section>
        <!--======== end our service =========-->
             
       
        
        <!--======== talk about us =========-->
        <section class="talk-about-us h_clients">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-xs-12 text-center"> 
                        <p class="small-tag2">Our Clients</p>
                        <h2 class="section-title2">我们的客户</h2>
                        <div class="border2"><span class="border-l-r"><i class="fa fa-quote-right"></i></span></div>
                        
                        <div id="talk-about-us" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#talk-about-us" data-slide-to="0" class="active"></li>
                                <li data-target="#talk-about-us" data-slide-to="1"></li>
                                <li data-target="#talk-about-us" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner c-fff" role="listbox">
                                <div class="item active">
                                    <p>咨询师真诚，理论基础扎实，有做到共情（同理心），专业。咨询时不会单独只使用一种疗法，而是多种疗法、方法的混合使用，以求达到最好的效果。每个人情况不同，采取的方法也会不一样。水平自然可见高低。</p>
                                    <strong>Jessy Roy, CEO </strong>
                                </div>
                                <div class="item">
                                    <p>咨询师真诚，理论基础扎实，有做到共情（同理心），专业。咨询时不会单独只使用一种疗法，而是多种疗法、方法的混合使用，以求达到最好的效果。每个人情况不同，采取的方法也会不一样。水平自然可见高低。</p>
                                    <strong>Jessy Roy, CEO </strong>
                                </div>
                                <div class="item">
                                   <p>咨询师真诚，理论基础扎实，有做到共情（同理心），专业。咨询时不会单独只使用一种疗法，而是多种疗法、方法的混合使用，以求达到最好的效果。每个人情况不同，采取的方法也会不一样。水平自然可见高低。</p>
                                    <strong>Jessy Roy, CEO </strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </section>
        <!--======== end talk about us =========-->
        
        <!--======== contact =========-->
        <section id="contact" class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
                        
                        <p class="small-tag">Ask Qestions</p>
                        <h2 class="section-title">发信息给我们</h2>
                        <div class="border"><span class="border-l-r"><i class="fa fa-envelope-o"></i></span></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputEmail3">您的名字</label>
                                    <input type="text" class="form-control" id="exampleInputEmail3" placeholder="您的名字">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputEmail3">您的邮箱</label>
                                    <input type="Email" class="form-control" id="exampleInputEmail3" placeholder="您的邮箱">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputEmail3">您的电话</label>
                                    <input type="tel" class="form-control" id="exampleInputEmail3" placeholder="您的电话">
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputEmail3">输入信息</label>
                                    <textarea class="form-control textarea" rows="5" placeholder="输入信息"></textarea>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default btn-block">发送</button>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>    
        </section>
        <!--======== end contact =========-->
        
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
        <!--======== end footer =========-->
        
        <!--======== All Javascript =========-->
        
        <script src="<?php echo (HOME); ?>hw/js/owl.carousel.min.js"></script>
        <script src="<?php echo (HOME); ?>hw/js/custom.js"></script>
<script type="text/javascript" src="<?php echo (JS_URL); ?>animenu.js"></script>
</body>
</html>