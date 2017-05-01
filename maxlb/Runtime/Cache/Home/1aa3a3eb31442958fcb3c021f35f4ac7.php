<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://hxtbaby.com/favicon.ico">
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
<script type="text/javascript">
	$(document).ready(function(){
		$('.prev').html('Previous');
		$('.next').html('Next');

		$('#search_btn').click(function(){
			$('#search_form').submit();
		})
		$('#search_archive_btn').click(function(){
			$('#search_archive').submit();
		})
	});

	var rootIp = '/maxlb';

	function upd_pwd_btn(id){
		$('#my_modal').modal('show');
		$('#myModalLabel').html('更新密码');
		$('.modal-body').html(
			"<form method='post' action='"+rootIp+"/index.php/Home/Admin/upd_pwd/id/"+id+"'><input type='text' name='password' class='form-control' placeholder='新密码'></input><br/><input type='submit' class='btn btn-primary btn-block' value='更新'></input></form>"
		);
	}

	function upd_type_btn(id){
		$('#my_modal').modal('show');
		$('#myModalLabel').html('确定变为付费用户吗？');
		$('.modal-body').html(
			"<a href='"+rootIp+"/index.php/Home/Admin/upd_type/id/"+id+"' class='btn btn-md btn-warning' style='width:48%;'>确定</a><button data-dismiss='modal' class='btn btn-md btn-primary' style='width:48%;margin-left:4%'>取消</button> "
			);
	}

	function upd_timeout_btn(id){
		$('#my_modal').modal('show');
		$('#myModalLabel').html('更新套餐');
		$('.modal-body').html(
			"<form method='post' action='"+rootIp+"/index.php/Home/Admin/upd_timeout/id/"+id+"'><select class='form-control' name='timeout'><option value='1'>一天</option><option value='30'>一月</option><option value='180'>一季</option><option value='365'>一年</option></select><br/><input type='submit' class='btn btn-primary btn-block' value='更新'></input></form>"
		);
	}

	function add_user(){
		$('#my_modal').modal('show');
		$('#myModalLabel').html('确定新增用户吗？');
		$('.modal-body').html(
			"<p><font color='red'>请不要因为卡顿,而重复添加,如果未弹出添加成功,请及时联系管理员.</font></p><a href='<?php echo U('Home/Admin/add_user');?>' class='btn btn-md btn-warning' style='width:48%;'>确定</a><button data-dismiss='modal' class='btn btn-md btn-primary' style='width:48%;margin-left:4%'>取消</button> "
			);
	}

	function check_archive(span,relation,name,sex,minzu,birthday,xuexing,shengao,tizhong,fenwan,manyue,birth_tizhong,duzi,brother,paihang,home,fuyangren,dadnianling,momnianling,rutuo,walknianling,talknianling,tongjuren,homewell,dadmom,jiaoyufangshi,guanjiaoyijian,fuqinxueli,muqinxueli,fuqinzhiye,muqinzhiye,banji,xuexiaolocation,xuexiaoleixing,laoshiguanxi,tongxueguanxi){
		$('#my_modal').modal('show');
		$('#myModalLabel').html('用户档案');
		$('.modal-body').html(
			"<h2 style='color:#333'>"+relation+','+name+"</h2>"+"<div><div class='archive_normal'><div class='left_con2'><label><i class='icon-user icon-large awesome_hand'></i></label><span class='code1'>"+sex+"</span><span class='code1'>"+minzu+"族</span><span class='code1'>"+birthday+"</span><span class='code1'>"+xuexing+"型</span><span class='code1'>"+shengao+"cm</span><span class='code1'>"+tizhong+"kg</span></div><br/><div class='left_con2'><label><i class='icon-building icon-large awesome_hand'></i></label><span class='code3'>"+banji+"</span><i class='icon-map-marker awesome_hand'></i><span class='code3'>"+xuexiaolocation+"</span><span class='code3'>"+xuexiaoleixing+"</span><span>与老师</span><span class='code3'>"+laoshiguanxi+"</span><span>与同学</span><span class='code3'>"+tongxueguanxi+"</span></div></div><div class='left_con2 archive_birth'><label><i class='icon-tasks icon-large awesome_hand'></i></label><span>"+" "+name+"</span><span class='code2'>"+fenwan+"</span><span class='code2'>"+manyue+"</span><span>出生时体重</span><span class='code2'>"+birth_tizhong+"kg</span><span class='code2'>"+fuyangren+"</span><span>是主要抚养人，孩子出生时父亲年龄</span><span class='code2'>"+dadnianling+"岁</span><span>孩子出生时母亲年龄</span><span class='code2'>"+momnianling+"岁</span><span>拥有兄弟姐妹</span><span class='code2'>"+brother+"位</span><span>家中排行第</span><span class='code2'>"+paihang+"</span><span class='code2'>"+duzi+"</span><span class='code2'>"+walknianling+"岁</span><span>学会走路</span><span class='code2'>"+talknianling+"岁</span><span>学会说话</span><span class='code2'>"+rutuo+"岁</span><span>参加托儿所</span><hr><label><i class='icon-home icon-large awesome_hand'></i></label><span>现居住在</span><span class='code2'>"+home+"</span><span>和</span><span class='code2'>"+tongjuren+"</span><span>居住在一起，家庭关系</span><span class='code2'>"+homewell+"</span><span>和父母关系</span><span class='code2'>"+dadmom+"</span><span>教育方式</span><span class='code2'>"+jiaoyufangshi+"</span><span>父母管教意见</span><span class='code2'>"+guanjiaoyijian+"</span><span>父亲学历</span><span class='code2'>"+fuqinxueli+"</span><span>职业</span><span class='code2'>"+fuqinzhiye+"</span><span>母亲学历</span><span class='code2'>"+muqinxueli+"</span><span>职业</span><span class='code2'>"+muqinzhiye+"</span></div></div>"
		);
	}
	
</script>
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
	    filter: alpha(opacity=70);
	    opacity: .8;
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
            <th>查看</th>
          </tr>
        </thead>
        <tbody>
	        <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
	            <th scope="row"><?php echo ($v["id"]); ?></th>
	            <td><?php echo ($v["relation"]); ?></td>
	            <td><?php echo ($v["child_id"]); ?></td>
	            <td><?php echo ($v["name"]); ?></td>
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