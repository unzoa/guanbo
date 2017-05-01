<?php if (!defined('THINK_PATH')) exit();?> <header id="home" class="container-fluid">
            <div class="row h_header">
                <div class="col-md-10 col-md-offset-1 col-xs-12">
                    <div class="row">
                    <?php if(is_array($top)): $i = 0; $__LIST__ = $top;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="col-sm-6">
                            <span class="h_pull-right"><i class="fa fa-phone"></i><span class=""><?php echo ($v["phone"]); ?></span></span>
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
                            <span class="pull-right"><i class="fa fa-paper-plane"></i><span><?php echo ($v["email"]); ?></span></span>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
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