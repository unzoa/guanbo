<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/maxlb/favicon.ico">
	<title>量表测评系统</title>
	<link rel="stylesheet" href="<?php echo (HCSS); ?>style.css">
	<script src="<?php echo (HJS); ?>jquery-2.1.1.min.js"></script>
	<script src="<?php echo (HJS); ?>index.js"></script>
	
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
	<div id="wx_pic" style="margin:0 auto;display:none;">
		<img src="<?php echo (HIMG); ?>wx_logo.jpg">
	</div>
</head>
<style type="text/css">
	html,body{height: 100%;padding:0; margin: 0;color: #fff}
	body{
		background-image: url('<?php echo (HIMG); ?>admin-bg.jpg');
		background-position: center;
		background-size: cover;
	}
	a {color: #fff!important;}
	.badge{margin-top:-3px!important;margin-left: 7px}
	.nav li {border-bottom:1px solid #d8d8d8;}
	.nav > li > a:hover, .nav > li > a:focus {
	    background-color: #999;
	}
	.nav li button{background-color: transparent;border:0;width: 100%;height: 40px;text-align: left;padding-left: 15px}
	.nav > li > button:hover, .nav > li > button:focus {
	   background-color: #999;
	}
	.pagenav .num{display: none}
	.pagenav .end{display: none}
	.pagenav .first{display: none}
	.pagenav div{text-align: center;}
	.pagenav div .current{line-height: 40px;font-size: 15px}
	.pagenav .prev{float: left}
	.pagenav .next{float: right}
	.pagenav .prev,.pagenav .next{
		display: inline-block;
	    padding: 5px 14px;
	    background-color: transparent;
	    border: 1px solid #fff;
	    border-radius: 5px;
	}

	.modal-backdrop.in {
	    filter: alpha(opacity=50);
	    opacity: .5;
	}
</style>
<body>
<div class="container-fluid">
<!--==================== head ====================-->
	<div class="row">
		<div class="col-lg-10 col-md-9 col-sm-9">
			<h2>量表 MAX</h2>
		</div>
		<div class="col-lg-2 col-md-3 col-sm-3 text-right" style="padding-top: 18px">
			<form method="post" action="<?php echo U('Home/Admin/search');?>" id="search_form">
				<div class="input-group" style="border-radius: 70px;border:1px #333 solid; overflow: hidden;">
			      <input type="text" class="form-control" id="" name="something" placeholder="随便输入点什么···" style="padding-left: 16px;border:0">
			      
			      	<div id="search_btn" class="input-group-addon" style="border:1px #333 solid;background-color: #333;color: #fff">
			      		<span class="glyphicon glyphicon-search"></span>
			      	</div>
			    </div>
			</form>
		</div>
	</div>

	<hr/>
<!-- ===================body======================= -->
	<div class="row">
		<div class="col-sm-2">
			<ul class="nav">
			  <li>
			  	<a href="<?php echo U('Home/Admin/index');?>">
				全部用户<span class="badge"><i class="icon-group"></i> <?php echo ($fullusers); ?></span></br>
				付费用户<span class="badge"><i class="icon-group"></i> <?php echo ($payusers); ?></span>
				</a>
			  </li>
			  
			  <li>
			  	<button onclick="add_user()">新增用户<span class="badge"><i class="icon-user"></i> <i class="icon-plus"></i></span></button>
			  </li>

			  <li>
			  	<a href="<?php echo U('Home/Admin/archive');?>">
				用户档案<span class="badge"><i class="icon-group"></i> <?php echo ($fullarchive); ?></span>
				</a>
			  </li>
			</ul>
		</div>

		<div class="col-sm-10">
			<div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>账号</th>
            <th>密码</th>
            <th>身份证</th>
            <th>昵称</th>
            <th>用户类型</th>
            <th>时效</th>
          </tr>
        </thead>
        <tbody>

	        <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
	            <th scope="row"><?php echo ($v["id"]); ?></th>
	            <td><?php echo ($v["number"]); ?></td>
	            <td>
	            	<?php echo ($v["password"]); ?>
		            <span class="glyphicon glyphicon-pencil" onclick="upd_pwd_btn('<?php echo ($v["id"]); ?>')"></span>
	            </td>
	            <td><?php echo ($v["archive"]); ?></td>
	            <td>
	            	<?php echo ($v["nickname"]); ?>
	            </td>
	            <td>
	            	<?php echo ($v["type"]); ?>
		            <span class="glyphicon glyphicon-pencil" onclick="upd_type_btn('<?php echo ($v["id"]); ?>')"></span>
	            </td>
	            <td>
	            	<?php echo ($v["timeout"]); ?>
		            <span class="glyphicon glyphicon-pencil" onclick="upd_timeout_btn('<?php echo ($v["id"]); ?>')"></span>
	            </td>
	          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
	        <?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
	            <th scope="row"><?php echo ($v["id"]); ?></th>
	            <td><?php echo ($v["number"]); ?></td>
	            <td>
	            	<?php echo ($v["password"]); ?>
		            <span class="glyphicon glyphicon-pencil" onclick="upd_pwd_btn('<?php echo ($v["id"]); ?>')"></span>
	            </td>
	            <td><?php echo ($v["archive"]); ?></td>
	            <td>
	            	<?php echo ($v["nickname"]); ?>
	            </td>
	            <td>
	            	<?php echo ($v["type"]); ?>
		            <span class="glyphicon glyphicon-pencil" onclick="upd_type_btn('<?php echo ($v["id"]); ?>')"></span>
	            </td>
	            <td>
	            	<?php echo ($v["timeout"]); ?>
	            	<span class="glyphicon glyphicon-pencil" onclick="upd_timeout_btn('<?php echo ($v["id"]); ?>')"></span>
	            </td>
	            
	          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
      </table>
      <nav aria-label="Page navigation" class="pagenav">
      	<?php echo ($show); ?>
      </nav>
    </div>
		</div>	
	</div>
</div>

<!-- 提示框 -->
<div class="modal fade bs-example-modal-sm" id="my_modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel" style="color: #333">hahah</h4>
      </div>
      <div class="modal-body">
        
      </div>
    </div>
  </div>
</div>
<!-- preload -->
<link rel="stylesheet" type="text/css" href="<?php echo (HCSS); ?>preload.css">
<script type="text/javascript" src="<?php echo (HJS); ?>preload.js"></script>
</body>
</html>