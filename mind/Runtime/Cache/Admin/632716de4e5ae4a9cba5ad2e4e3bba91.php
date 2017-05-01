<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="cleartype" content="on">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HANWEI</title>
	<link rel="stylesheet" type="text/css" href="<?php echo (S_); ?>css/normalize.css" />
	<!-- <link rel="stylesheet" type="text/css" href="css/htmleaf-demo.css"> -->
	<link rel='stylesheet' href='<?php echo (AWE_URL); ?>font-awesome.min.css'>
	<link rel="stylesheet" type="text/css" href="<?php echo (BS_URL); ?>bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo (S_); ?>css/paper-collapse.min.css">
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

        .mt1 {
            margin-top: 1rem;
        }

        .align-right {
            text-align: right;
        }

        .mouse-pointer {
            cursor: pointer;
        }
      </style>
	<!--[if IE]>
		<script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
	<![endif]-->
</head>
<body>
		<div class="header"><span>HANWEI</span></div>
	    <div class="container-fluid">
	    	<div class="row">
	    		<div class="col-xs-8 col-xs-offset-2">
	    			<div class="collapse-card">
			            <div class="collapse-card__heading">
			                <h4 class="collapse-card__title">
			                    <i class="fa fa-bars fa-2x fa-fw"></i>
			                    Well, hello nav
			                </h4>
			            </div>
			            <div class="collapse-card__body">
							<form action="<?php echo U('Admin/Admin/sortcate');?>" method="post" >
							    <TABLE border="1" width="100%">
							    	<tr>
							    		<th>id</th>
							    		<th>title</th>
							    		<th>url</th>
							    		<th>level</th>
							    		<th>sort</th>
							    		<th>do</th>
							    	</tr>
							    	<?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
							    			<td><?php echo ($v["id"]); ?></td>
							    			<td><?php echo ($v["html"]); echo ($v["title"]); ?></td>
							    			<td><?php echo ($v["url"]); ?></td>
							    			<td><?php echo ($v["level"]); ?></td>
							    			<td><input name="<?php echo ($v["id"]); ?>" type="text" value="<?php echo ($v["sort"]); ?>"></input></td>
							    			<td>
							    				[<a href="<?php echo U("Admin/Admin/addcate",array('cid'=>$v['id']));?>">add</a>]
							    				[<a href="">upd</a>]
							    				[<a href="">del</a>]
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
			                    Show less <i class="fa fa-chevron-up"></i>
			                </div>
			            </div>
	        		</div>
	        		<!-- ------------------------- -->
			        <div class="collapse-card">
			            <div class="collapse-card__heading">
			                <h4 class="collapse-card__title">
			                    <i class="fa fa-question-circle fa-2x fa-fw"></i>
			                    Wow, hi content
			                </h4>
			            </div>
			            <div class="collapse-card__body">
			                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
			                labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et
			                ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum
			                dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
			                magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet
			                clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
			                <div class="collapse-card__close_handler mt1 align-right mouse-pointer">
			                    Show less <i class="fa fa-chevron-up"></i>
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