<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://psy-ipass.com/favicon.ico">
	<title>i.P.A.S.S</title>
	<link rel="stylesheet" href="<?php echo (HCSS); ?>style.css">
	<script src="<?php echo (HJS); ?>jquery-2.1.1.min.js"></script>
	<script src="<?php echo (HJS); ?>ipass.ver03.js"></script>
	<script src="<?php echo (HJS); ?>index.js"></script>
	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?php echo (BCSS); ?>bootstrap.css">
	<script type="text/javascript" src="<?php echo (BJS); ?>bootstrap.min.js"></script>
    <!-- awesome -->
	<!--link rel='stylesheet' href="//cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css"-->
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
		background-size: cover;
		background-position: center;
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
<script type="text/javascript">
	$(document).ready(function(){
		if ('<?php echo ($fullarchive); ?>'/12 > Math.round('<?php echo ($fullarchive); ?>'/12)) {
			var end = Math.round('<?php echo ($fullarchive); ?>'/12)+1;
		}else{
			var end = Math.round('<?php echo ($fullarchive); ?>'/12);
		}
		var current = $('.current').html();
		$('.current').html('第'+current+'页'+'/'+'共'+end+'页');
	})
</script>
<body>
<div class="container-fluid">
<!--==================== head ====================-->
	<div class="row">
		<div class="col-lg-10 col-md-9 col-sm-9">
			<h2>量表 MAX</h2>
		</div>
		<div class="col-lg-2 col-md-3 col-sm-3 text-right" style="padding-top: 18px">
			<form method="post" action="<?php echo U('Home/Admin/search_archive');?>" id="search_archive">
				<div class="input-group" style="border-radius: 70px;border:1px #333 solid; overflow: hidden;">
			    	<input type="text" class="form-control" id="" name="something" placeholder="输入身份证或名字" style="padding-left: 16px;border:0">
			      
			      	<div id="search_archive_btn" class="input-group-addon" style="border:1px #333 solid;background-color: #333;color: #fff">
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
            <th>关系</th>
            <th>身份证</th>
            <th>名字</th>
            <th>学校</th>
            <th>查看</th>
          </tr>
        </thead>
        <tbody>
	        <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
	            <th scope="row"><?php echo ($v["id"]); ?></th>
	            <td><?php echo ($v["relation"]); ?></td>
	            <td><?php echo ($v["child_id"]); ?></td>
	            <td><?php echo ($v["name"]); ?></td>
              <td><?php echo ($v["banji"]); ?></td>
	            <td><span class="icon-eye-open" onclick="check_archive(this,'<?php echo ($v["relation"]); ?>','<?php echo ($v["name"]); ?>','<?php echo ($v["sex"]); ?>','<?php echo ($v["minzu"]); ?>','<?php echo ($v["birthday"]); ?>','<?php echo ($v["xuexing"]); ?>','<?php echo ($v["shengao"]); ?>','<?php echo ($v["tizhong"]); ?>','<?php echo ($v["fenwan"]); ?>','<?php echo ($v["manyue"]); ?>','<?php echo ($v["birth_tizhong"]); ?>','<?php echo ($v["duzi"]); ?>','<?php echo ($v["brother"]); ?>','<?php echo ($v["paihang"]); ?>','<?php echo ($v["home"]); ?>','<?php echo ($v["fuyangren"]); ?>','<?php echo ($v["dadnianling"]); ?>','<?php echo ($v["momnianling"]); ?>','<?php echo ($v["rutuo"]); ?>','<?php echo ($v["walknianling"]); ?>','<?php echo ($v["talknianling"]); ?>','<?php echo ($v["tongjuren"]); ?>','<?php echo ($v["homewell"]); ?>','<?php echo ($v["dadmom"]); ?>','<?php echo ($v["jiaoyufangshi"]); ?>','<?php echo ($v["guanjiaoyijian"]); ?>','<?php echo ($v["fuqinxueli"]); ?>','<?php echo ($v["muqinxueli"]); ?>','<?php echo ($v["fuqinzhiye"]); ?>','<?php echo ($v["muqinzhiye"]); ?>','<?php echo ($v["banji"]); ?>','<?php echo ($v["xuexiaolocation"]); ?>','<?php echo ($v["xuexiaoleixing"]); ?>','<?php echo ($v["laoshiguanxi"]); ?>','<?php echo ($v["tongxueguanxi"]); ?>' )"></span></td>
	          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
          <?php if(is_array($user)): $i = 0; $__LIST__ = $user;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
              <th scope="row"><?php echo ($v["id"]); ?></th>
              <td><?php echo ($v["relation"]); ?></td>
              <td><?php echo ($v["child_id"]); ?></td>
              <td><?php echo ($v["name"]); ?></td>
              <td><span class="icon-eye-open" onclick="check_archive(this,'<?php echo ($v["relation"]); ?>','<?php echo ($v["name"]); ?>','<?php echo ($v["sex"]); ?>','<?php echo ($v["minzu"]); ?>','<?php echo ($v["birthday"]); ?>','<?php echo ($v["xuexing"]); ?>','<?php echo ($v["shengao"]); ?>','<?php echo ($v["tizhong"]); ?>','<?php echo ($v["fenwan"]); ?>','<?php echo ($v["manyue"]); ?>','<?php echo ($v["birth_tizhong"]); ?>','<?php echo ($v["duzi"]); ?>','<?php echo ($v["brother"]); ?>','<?php echo ($v["paihang"]); ?>','<?php echo ($v["home"]); ?>','<?php echo ($v["fuyangren"]); ?>','<?php echo ($v["dadnianling"]); ?>','<?php echo ($v["momnianling"]); ?>','<?php echo ($v["rutuo"]); ?>','<?php echo ($v["walknianling"]); ?>','<?php echo ($v["talknianling"]); ?>','<?php echo ($v["tongjuren"]); ?>','<?php echo ($v["homewell"]); ?>','<?php echo ($v["dadmom"]); ?>','<?php echo ($v["jiaoyufangshi"]); ?>','<?php echo ($v["guanjiaoyijian"]); ?>','<?php echo ($v["fuqinxueli"]); ?>','<?php echo ($v["muqinxueli"]); ?>','<?php echo ($v["fuqinzhiye"]); ?>','<?php echo ($v["muqinzhiye"]); ?>','<?php echo ($v["banji"]); ?>','<?php echo ($v["xuexiaolocation"]); ?>','<?php echo ($v["xuexiaoleixing"]); ?>','<?php echo ($v["laoshiguanxi"]); ?>','<?php echo ($v["tongxueguanxi"]); ?>' )"></span></td>
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
<div class="modal fade bs-example-modal-md" id="my_modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
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