<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/ipass/favicon.ico">
	<title>i.P.A.S.S</title>
	<link rel="stylesheet" href="<?php echo (HCSS); ?>style.css">
	<script src="<?php echo (HJS); ?>jquery-2.1.1.min.js"></script>
	<script src="<?php echo (HJS); ?>ipass.js"></script>
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
</head>
<script type="text/javascript">
	function aaa(qq){
		// radio赋值
		var mySex = '<?php echo ($archive[0][sex]); ?>';
		$("input[name='sex'][value="+mySex+"]").attr("checked",true);

		var myMinzu = '<?php echo ($archive[0][minzu]); ?>';
		$("input[name='minzu'][value="+myMinzu+"]").attr("checked",true);

		// select赋值
		var myfen_wan = '<?php echo ($archive[0][fenwan]); ?>';
		document.getElementById('fen_wan').value = myfen_wan;

		var myfull_month = '<?php echo ($archive[0][manyue]); ?>';
		$("input[name='full_month'][value="+myfull_month+"]").attr("checked",true);

		var myOnly_child = '<?php echo ($archive[0][duzi]); ?>';
		$("input[name='only_child'][value="+myOnly_child+"]").attr("checked",true);

		var myNow_live = '<?php echo ($archive[0][home]); ?>';
		$("input[name='now_live'][value="+myNow_live+"]").attr("checked",true);

		var myChild_mother = '<?php echo ($archive[0][fuyangren]); ?>';
		document.getElementById('child_mother').value = myChild_mother;


		// family
		// checkbox的赋值
		var myLive_with = '<?php echo ($archive[0][tongjuren]); ?>';
		var lala = myLive_with.split(',');
		for(i=0; i<lala.length; i++){
			$("input[name='live_with[]'][value="+lala[i]+"]").attr("checked",true);
		}
		
		var myfamily_relation = '<?php echo ($archive[0][homewell]); ?>';
		$("input[name='family_relation'][value="+myfamily_relation+"]").attr("checked",true);

		var mydadmom_relation = '<?php echo ($archive[0][dadmom]); ?>';
		$("input[name='dadmom_relation'][value="+mydadmom_relation+"]").attr("checked",true);

		var myTeach_way = '<?php echo ($archive[0][jiaoyufangshi]); ?>';
		$("input[name='teach_way'][value="+myTeach_way+"]").attr("checked",true);

		var myGuanjiao = '<?php echo ($archive[0][guanjiaoyijian]); ?>';
		$("input[name='guanjiao'][value="+myGuanjiao+"]").attr("checked",true);

		var mydad_record = '<?php echo ($archive[0][fuqinxueli]); ?>';
		$("input[name='dad_record'][value="+mydad_record+"]").attr("checked",true);

		var myMom_record = '<?php echo ($archive[0][muqinxueli]); ?>';
		$("input[name='mom_record'][value="+myMom_record+"]").attr("checked",true);

		var mydad_job = '<?php echo ($archive[0][fuqinzhiye]); ?>';
		$("input[name='dad_job'][value="+mydad_job+"]").attr("checked",true);

		var myMom_job = '<?php echo ($archive[0][muqinzhiye]); ?>';
		$("input[name='mom_job'][value="+myMom_job+"]").attr("checked",true);

		// school
		// 地名赋值
		var myschool = '<?php echo ($archive[0][xuexiaolocation]); ?>';
		document.getElementById('showMySchool').value = myschool;
		if (myschool=='') {
			$('.showMySchool_con').hide();
			$('.edit_school_addr_btn').hide();
		}else{
			$('.left_select_con2').hide();
		}

		var mySchool_style = '<?php echo ($archive[0][xuexiaoleixing]); ?>';
		$("input[name='school_style'][value="+mySchool_style+"]").attr("checked",true);

		var myTeacher_relation = '<?php echo ($archive[0][laoshiguanxi]); ?>';
		$("input[name='teacher_relation'][value="+myTeacher_relation+"]").attr("checked",true);

		var myMates_relation = '<?php echo ($archive[0][tongxueguanxi]); ?>';
		$("input[name='mates_relation'][value="+myMates_relation+"]").attr("checked",true);
		
	}
	
</script>
<script type="text/javascript">
    window.document.title = '编辑档案 - i.P.A.S.S';
</script>
<script>
  $(function () {
    $('#myTab a:first').tab('show')
  })
</script>
<style type="text/css">
	body{background: #f7f8fa}
	.daohang{display: none;}
	.nav-tabs{border-bottom: none;background-color: #78a1ce;padding-bottom: 1px;width: 100%}
	.nav-tabs li{width: 25%;}
	.nav-tabs li a{text-align: center; padding-right: 5px;padding-left: 5px;color: #fff;border: 1px #f7f8fa solid ;border-top-left-radius: 0px;border-top-right-radius: 0px;margin-right: 0px}
	.nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
	    color: #333;
	    cursor: default;
	    background-color: #fff;
	    border: none;
	    /*border-bottom-color: transparent;*/
	    border-left: 1px #f7f8fa solid ;
	    border: 1px #fff solid ;
	    border-radius: 0px;
	    padding-left:5px;
	    padding-right: 5px;
	}
	@media (max-width: 767px){
		.edit_archive_p0{padding:0;}
		.daohang{display: block;}
	}
	/*清除ios默认按钮样式*/
	input[type="button"], input[type="submit"], input[type="reset"],input[type="date"] ,select{
        -webkit-appearance: none;
    }
</style>
<body onload="aaa('aa')">
<div class="container-fluid">
	<div class="row navconbg">
  <div class="col-sm-8 col-sm-offset-2">
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
          	<img src="<?php echo (HIMG); ?>logo.png" class="logopic">
          </a>
        </div>
        <style type="text/css">
          .logopic{width: 70px;margin-top: -3px}
          .username{display: none;}
          @media (max-width: 767px){
          	.username{display: block;}
          	.logo{display: none;}
          	.logopic{margin-top: -7px;margin-left:-5px;width: 60px}
          }
        </style>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse bs_collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo U('Home/Index/lb');?>">测评系统</a></li>
            <li><a href="<?php echo U('Home/Index/mytest');?>">我的测评</a></li>
            <li><a href="<?php echo U('Home/index/archive');?>">我的档案</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
    	          	<span class="logo">
    	          		<img src="<?php echo (SITE_URL); ?>Jcrop/<?php echo ($userpic); ?>" style="width: 30px;height: 30px;border-radius: 30px;border:3px #fff solid;margin-right: 3px;margin-left: -2px">
    			        <?php echo ($username); ?>
    			        <span class="caret"></span>
    	          	</span>
    	          <span class="username">设置<span class="caret"></span></span> 
              </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="/ipass/Jcrop/index.html?id=<?php echo (session('stid')); ?>">修改头像</a></li>
                <!-- <li><a href="<?php echo U('Home/index/usersetting');?>">账户设置</a></li> -->
                <li class="divider"></li>
                <li><a onclick="if (confirm('确定要退出吗？')) return true; else return false;" href="<?php echo U('Home/Index/logout');?>">退出</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
  </div>
</div>
	<div class="row daohang">
		<ul class="nav nav-tabs" role="tablist" id="myTab">
			<li role="presentation"><a href="/ipass/Jcropchild/index.html?id=<?php echo ($archive[0][id]); ?>">修改头像</a></li>
		  	<li role="presentation" class="active"><a href="#basic" role="tab" data-toggle="tab">基本信息</a></li>
		  	<li role="presentation"><a href="#family" role="tab" data-toggle="tab">家庭信息</a></li>
		  	<li role="presentation"><a href="#school" role="tab" data-toggle="tab">学校信息</a></li>
		</ul>
	</div>
	
	<div class="row body_top">
		<div class="col-sm-8 col-sm-offset-2 edit_archive_p0">
			<div class="col-sm-9 edit_archive_p0">
				<div class="tab-content">
				  	<div role="tabpanel" class="tab-pane active" id="basic">
				  		<div class="left_con">
	<h2 style="color:#404040">基本信息</h2>
	<i style="color: #9aaabf">i.P.A.S.S 小改变创造大不同</i>
	<br/><br/>
	<form action="<?php echo U('Home/Index/archive_basic');?>" method="post" id="myform">
		<!-- 名字 -->
		<div class="row">
			<div class="col-xs-3 edit_archive_p0">
				<label class="pull-right left_label">名字</label>
			</div>
			<div class="col-xs-9 col-sm-5">
				<input type="text" name="name" id="name" placeholder="名字" value="<?php echo ($archive[0][name]); ?>" class="form-control" />
			</div>
		</div>
		<!-- 性别 -->
		<div class="row">
			<div class="col-xs-3 edit_archive_p0">
				<label class="pull-right left_label_radio">性别</label>
			</div>
			<div class="col-xs-5">
				<div class="radio">
				  <label><input type="radio" name="sex" id="male" value="男">男</label>
				  <label><input type="radio" name="sex" id="female" value="女">女</label>
				</div>
			</div>
		</div>
		<!-- 民族 -->
		<div class="row">
			<div class="col-xs-3 edit_archive_p0">
				<label class="pull-right left_label_radio">民族</label>
			</div>
			<div class="col-xs-5">
				<div class="radio">
				  <label><input type="radio" name="minzu" id="han" value="汉">汉</label>
				  <label><input type="radio" name="minzu" id="un_han" value="非汉">非汉</label>
				</div>
			</div>
		</div>
		<!-- 出生日期 -->
		<div class="row">
			<div class="col-xs-3 edit_archive_p0">
				<label class="pull-right left_label">出生日期</label>
			</div>
			<div class="col-xs-9 col-sm-5">
				<input type="date" name="birthday" id="birthday" value="<?php echo ($archive[0][birthday]); ?>" class="form-control" />
			</div>
		</div>
		<!-- 血型 -->
		<div class="row">
			<div class="col-xs-3 edit_archive_p0">
				<label class="pull-right left_label">血型</label>
			</div>
			<div class="col-xs-9 col-sm-5">
				<input type="text" name="xue_xing" id="xue_xing" value="<?php echo ($archive[0][xuexing]); ?>" placeholder="血型" class="form-control" />
			</div>
		</div>
		<!-- 身高 -->
		<div class="row">
			<div class="col-xs-3 edit_archive_p0">
				<label class="pull-right left_label">身高/cm</label>
			</div>
			<div class="col-xs-9 col-sm-5">
				<input type="text" name="shen_gao" id="shen_gao" placeholder="身高" value="<?php echo ($archive[0][shengao]); ?>" class="form-control" />
			</div>
		</div>
		<!-- 体重 -->
		<div class="row">
			<div class="col-xs-3 edit_archive_p0">
				<label class="pull-right left_label">体重/kg</label>
			</div>
			<div class="col-xs-9 col-sm-5">
				<input type="text" name="weight" id="weight" placeholder="体重" value="<?php echo ($archive[0][tizhong]); ?>" class="form-control" />
			</div>
		</div>
		<!-- 分娩方式 -->
		<div class="row">
			<div class="col-xs-3 edit_archive_p0">
				<label class="pull-right left_label">分娩方式</label>
			</div>
			<div class="col-xs-9 col-sm-5">
				<select name="fen_wan" id="fen_wan" class="form-control">
					<option>顺产</option>
					<option>刨宫产</option>
					<option>产钳</option>
					<option>胎吸</option>
				</select>
			</div>
		</div>
		<!-- 满月 -->
		<div class="row">
			<div class="col-xs-3 edit_archive_p0">
				<label class="pull-right left_label_radio">是否足月</label>
			</div>
			<div class="col-xs-5">
				<div class="radio">
				  <label><input type="radio" name="full_month" id="yes" value="已满月">是</label>
				  <label><input type="radio" name="full_month" id="no" value="未满月">否</label>
				</div>
			</div>
		</div>
		<!-- 出生体重 -->
		<div class="row">
			<div class="col-sm-3 edit_archive_p0">
				<label class="left_pull_right left_label">出生体重/kg</label>
			</div>
			<div class="col-xs-12 col-sm-5">
				<input type="text" name="birth_weight" id="birth_weight" placeholder="出生体重" value="<?php echo ($archive[0][birth_tizhong]); ?>" class="form-control" />
			</div>
		</div>
		<!-- 独生子女 -->
		<div class="row">
			<div class="col-xs-3 edit_archive_p0">
				<label class="pull-right left_label_radio">独生子女</label>
			</div>
			<div class="col-xs-5">
				<div class="radio">
				  <label><input type="radio" name="only_child" id="yes" value="独子">是</label>
				  <label><input type="radio" name="only_child" id="no" value="非独子">否</label>
				</div>
			</div>
		</div>
		<!-- 兄弟姐妹 -->
		<div class="row">
			<div class="col-xs-3 edit_archive_p0">
				<label class="pull-right left_label">兄弟姐妹/位</label>
			</div>
			<div class="col-xs-9 col-sm-5">
				<input type="text" name="brother_sister" id="brother_sister" placeholder="/位" value="<?php echo ($archive[0][brother]); ?>" class="form-control" />
			</div>
		</div>
		<!-- 家中排行 -->
		<div class="row">
			<div class="col-xs-3 edit_archive_p0">
				<label class="pull-right left_label">家中排行</label>
			</div>
			<div class="col-xs-9 col-sm-5">
				<input type="text" name="home_place" id="home_place" placeholder="家中排行" value="<?php echo ($archive[0][paihang]); ?>" class="form-control" />
			</div>
		</div>
		<!-- 现居住地 -->
		<div class="row">
			<div class="col-xs-3 edit_archive_p0">
				<label class="pull-right left_label_radio">现居住地</label>
			</div>
			<div class="col-xs-9 col-sm-5">
				<div class="radio">
				  <label><input type="radio" name="now_live" id="now_city" value="城市">城市</label>
				  <label><input type="radio" name="now_live" id="now_town" value="城郊">城郊</label>
				  <label><input type="radio" name="now_live" id="now_country" value="农村">农村</label>
				</div>
			</div>
		</div>
		<!-- 主要抚养人 -->
		<div class="row">
			<div class="col-xs-3 edit_archive_p0">
				<label class="pull-right left_label">主要抚养人</label>
			</div>
			<div class="col-xs-9 col-sm-5">
				<select name="child_mother" id="child_mother" class="form-control">
					<option>父亲</option>
					<option>母亲</option>
					<option>(外)祖父母</option>
					<option>其他</option>
				</select>
			</div>
		</div>
		<!-- 孩子出生时父亲年龄 -->
		<div class="row">
			<div class="col-sm-3 edit_archive_p0">
				<label class="left_pull_right left_label">出生时父亲年龄</label>
			</div>
			<div class="col-xs-12 col-sm-5">
				<input type="text" name="father_age" id="father_age" placeholder="/岁" value="<?php echo ($archive[0][dadnianling]); ?>" class="form-control" />
			</div>
		</div>
		<!-- 孩子出生时母亲年龄 -->
		<div class="row">
			<div class="col-sm-3 edit_archive_p0">
				<label class="left_pull_right left_label">出生时母亲年龄</label>
			</div>
			<div class="col-xs-12 col-sm-5">
				<input type="text" name="mother_age" id="mother_age" placeholder="/岁" value="<?php echo ($archive[0][momnianling]); ?>" class="form-control" />
			</div>
		</div>
		<!-- 入托年龄 -->
		<div class="row">
			<div class="col-xs-3 edit_archive_p0">
				<label class="pull-right left_label">入托年龄</label>
			</div>
			<div class="col-xs-9 col-sm-5">
				<input type="text" name="baby_farm_age" id="baby_farm_age" placeholder="入托年龄/岁" value="<?php echo ($archive[0][rutuo]); ?>" class="form-control" />
			</div>
		</div>
		<!-- 学会走路的年龄 -->
		<div class="row">
			<div class="col-sm-3 edit_archive_p0">
				<label class="left_pull_right left_label">学会走路的年龄</label>
			</div>
			<div class="col-xs-12 col-sm-5">
				<input type="text" name="walk_age" id="walk_age" placeholder="/岁" value="<?php echo ($archive[0][walknianling]); ?>" class="form-control" />
			</div>
		</div>
		<!-- 学会说话的年龄 -->
		<div class="row">
			<div class="col-sm-3 edit_archive_p0">
				<label class="left_pull_right left_label">学会说话的年龄</label>
			</div>
			<div class="col-xs-12 col-sm-5">
				<input type="text" name="talk_age" id="talk_age" placeholder="/岁" value="<?php echo ($archive[0][talknianling]); ?>" class="form-control" />
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4">
				<button type="button" onclick="formsubmit()" class="btn btn-lg btn-block btn-primary">
			        保存
			    </button>
			</div>
			<div class="col-sm-4">
				
			</div>
		</div>
	</form>
</div>
				  	</div>
				  	<div role="tabpanel" class="tab-pane" id="family">
				  		<div class="left_con">
<h2 style="color:#404040">家庭信息</h2>
<i style="color: #9aaabf">i.P.A.S.S 小改变创造大不同</i>
<br/><br/>
<form method="post" action="<?php echo U('Home/Index/archive_family');?>" id="myform2">
	<!-- 居住在一起 -->
	<div class="row">
		<div class="col-xs-3 edit_archive_p0">
			<label class="pull-right">居住在一起</label>
		</div>
		<div class="col-xs-9 col-sm-5">
			<input type="checkbox" name="live_with[]" id="" class="" value="母亲"></input>
			<label>母亲</label>
			<input type="checkbox" name="live_with[]" id="" class="" value="父亲"></input>
			<label>父亲</label>
			<input type="checkbox" name="live_with[]" id="" class="" value="祖父"></input>
			<label>祖父</label>
			<input type="checkbox" name="live_with[]" id="" class="" value="祖母"></input>
			<label>祖母</label>
			<input type="checkbox" name="live_with[]" id="" class="" value="外祖父"></input>
			<label>外祖父</label>
			<input type="checkbox" name="live_with[]" id="" class="" value="外祖母"></input>
			<label>外祖母</label>
		</div>
	</div>
	<!-- 家庭关系 -->
	<div class="row">
		<div class="col-xs-3 edit_archive_p0">
			<label class="pull-right">家庭关系</label>
		</div>
		<div class="col-xs-9 col-sm-5">
				<input type="radio" name="family_relation" id="hemu" value="和睦"></input>
			  	<label>和睦</label>
			  	<input type="radio" name="family_relation" id="normal" value="一般"/>
			  	<label>一般</label>
			  	<input type="radio" name="family_relation" id="chaojia" value="经常吵架"/>
			  	<label>经常吵架</label>
			  	<input type="radio" name="family_relation" id="liyi" value="离异"/>
			  	<label>离异</label>
		</div>
	</div>
	<!-- 与父母关系 -->
	<div class="row">
		<div class="col-xs-3 edit_archive_p0">
			<label class="pull-right">与父母关系</label>
		</div>
		<div class="col-xs-9 col-sm-5">
				<input type="radio" name="dadmom_relation" id="all_well" value="都好"></input>
			  	<label>都好</label>
			  	<input type="radio" name="dadmom_relation" id="dad_well" value="与父亲好"/>
			  	<label>与父亲好</label>
			  	<input type="radio" name="dadmom_relation" id="mom_well" value="与母亲好"/>
			  	<label>与母亲好</label>
			  	<input type="radio" name="dadmom_relation" id="neither_well" value="都不好"/>
			  	<label>都不好</label>
		</div>
	</div>
	<!-- 教育方式 -->
	<div class="row">
		<div class="col-xs-3 edit_archive_p0">
			<label class="pull-right">教育方式</label>
		</div>
		<div class="col-xs-9 col-sm-5">
				<input type="radio" name="teach_way" id="teach_shuofu" value="说服教育"></input>
			  	<label>说服教育</label>
			  	<input type="radio" name="teach_way" id="teach_hurt" value="责骂或打"/>
			  	<label>责骂或打</label>
			  	<input type="radio" name="teach_way" id="teach_chengfa" value="其他惩罚"/>
			  	<label>其他惩罚</label>
			  	<input type="radio" name="teach_way" id="teach_encourage" value="鼓励多"/>
			  	<label>鼓励多</label>
			  	<input type="radio" name="teach_way" id="teach_order" value="命令指责多"/>
			  	<label>命令指责多</label>
			  	<input type="radio" name="teach_way" id="teach_softTalk" value="与孩子商量"/>
			  	<label>与孩子商量</label>
		</div>
	</div>
	<!-- 父母管教 -->
	<div class="row">
		<div class="col-xs-3 edit_archive_p0">
			<label class="pull-right">父母管教</label>
		</div>
		<div class="col-xs-9 col-sm-5">
				<input type="radio" name="guanjiao" id="teach_same" value="一致"></input>
			  	<label>一致</label>
			  	<input type="radio" name="guanjiao" id="teach_notSame" value="不一致"/>
			  	<label>不一致</label>
			  	<input type="radio" name="guanjiao" id="teach_fightSame" value="有分歧"/>
			  	<label>有分歧</label>
		</div>
	</div>
	<!-- 父亲学历 -->
	<div class="row">
		<div class="col-xs-3 edit_archive_p0">
			<label class="pull-right">父亲学历</label>
		</div>
		<div class="col-xs-9 col-sm-5">
			<input type="radio" name="dad_record" id="dad_record_middle" value="初中及以下"></input>
		  	<label>初中及以下</label>
		  	<input type="radio" name="dad_record" id="dad_record_high" value="高中"/>
		  	<label>高中</label>
		  	<input type="radio" name="dad_record" id="dad_record_college" value="大专及以上"/>
		  	<label>大专及以上</label>
		</div>
	</div>
	<!-- 母亲学历 -->
	<div class="row">
		<div class="col-xs-3 edit_archive_p0">
			<label class="pull-right">母亲学历</label>
		</div>
		<div class="col-xs-9 col-sm-5">
			<input type="radio" name="mom_record" id="mom_record_middle" value="初中及以下"></input>
		  	<label>初中及以下</label>
		  	<input type="radio" name="mom_record" id="mom_record_high" value="高中"/>
		  	<label>高中</label>
		  	<input type="radio" name="mom_record" id="mom_record_college" value="大专及以上"/>
		  	<label>大专及以上</label>
		</div>
	</div>
	<!-- 父亲职业 -->
	<div class="row">
		<div class="col-xs-3 edit_archive_p0">
			<label class="pull-right">父亲职业</label>
		</div>
		<div class="col-xs-9 col-sm-5">
			<input type="radio" name="dad_job" id="dad_job_zhigong" value="职工"></input>
		  	<label>职工</label>
		  	<input type="radio" name="dad_job" id="dad_job_gongwuyuan" value="公务员"/>
		  	<label>公务员</label>
		  	<input type="radio" name="dad_job" id="dad_job_government" value="企业"/>
		  	<label>企业</label>

		  	<input type="radio" name="dad_job" id="dad_job_shiyedanwei" value="事业单位"/>
		  	<label>事业单位</label>
		  	<input type="radio" name="dad_job" id="dad_job_getihu" value="个体户"/>
		  	<label>个体户</label>
		  	<input type="radio" name="dad_job" id="dad_job_other" value="其他"/>
		  	<label>其他</label>
		</div>
	</div>
	<!-- 母亲职业 -->
	<div class="row">
		<div class="col-xs-3 edit_archive_p0">
			<label class="pull-right">母亲职业</label>
		</div>
		<div class="col-xs-9 col-sm-5">
			<input type="radio" name="mom_job" id="mom_job_zhigong" value="职工"></input>
		  	<label>职工</label>
		  	<input type="radio" name="mom_job" id="mom_job_gongwuyuan" value="公务员"/>
		  	<label>公务员</label>
		  	<input type="radio" name="mom_job" id="mom_job_government" value="企业"/>
		  	<label>企业</label>

		  	<input type="radio" name="mom_job" id="mom_job_shiyedanwei" value="事业单位"/>
		  	<label>事业单位</label>
		  	<input type="radio" name="mom_job" id="mom_job_getihu" value="个体户"/>
		  	<label>个体户</label>
		  	<input type="radio" name="mom_job" id="mom_job_other" value="其他"/>
		  	<label>其他</label>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<button type="button" onclick="formsubmit2()" class="btn btn-lg btn-block btn-primary">
		        保存
		    </button>
		</div>
	</div>
</form>
</div>
				  	</div>
				  	<div role="tabpanel" class="tab-pane" id="school">
				  		<div class="left_con">
	<h2 style="color:#404040">学校信息</h2>
	<i style="color: #9aaabf">i.P.A.S.S 小改变创造大不同</i>
	<br/><br/>
	<form method="post" action="<?php echo U('Home/Index/archive_school');?>" id="myform3">
		<!-- 学校 -->
		<div class="row">
			<div class="col-xs-3 edit_archive_p0">
				<label class="pull-right left_label">学校</label>
			</div>
			<div class="col-xs-9 col-sm-5">
				<input type="text" name="myschool" id="myschool" placeholder="学校" value="<?php echo ($archive[0][banji]); ?>" class="form-control" />
			</div>
		</div>
		<!-- 学校地址 -->
		<div class="row">
			<div class="col-xs-3 edit_archive_p0">
				<label class="pull-right left_select_label">学校地址</label>
			</div>
			<div class="col-xs-6 col-sm-5">
				<div class="showMySchool_con">
					<input type="text" class="form-control" placeholder="学校地址" id="showMySchool"></input>
				</div>
				<div class="left_select_con2">
					<select id="c_province" class="left_select" name="c_province"></select>  
				    <select id="c_city" class="left_select" name="c_city" ></select>  
				    <select id="c_county" class="left_select" name="c_county"></select>
				    <input type="button" class="btn btn-info" onclick="cancel_edit_school_addr()" value="取消"></input>
				    <script class="resources library" src="<?php echo (HJS); ?>area2.js" type="text/javascript"></script>
				    <script type="text/javascript">
				    	_init_area2();
				    </script>
				</div>
			</div>
			<div class="col-sm-3 col-xs-3 edit_archive_p0" >
				<input type="button" class="form-control btn-info edit_school_addr_btn" onclick="edit_school_addr()" value="修改"></input>
			</div>
		</div>
		<!-- 学校属于 -->
		<div class="row">
			<div class="col-xs-3 edit_archive_p0">
				<label class="pull-right">学校属于</label>
			</div>
			<div class="col-xs-9 col-sm-5">
				<input type="radio" name="school_style" id="school_province" value="省重点"></input>
			  	<label>省重点</label>
			  	<input type="radio" name="school_style" id="school_city" value="市重点"/>
			  	<label>市重点</label>
			  	<input type="radio" name="school_style" id="school_qu" value="区重点"/>
			  	<label>区重点</label>
			  	<input type="radio" name="school_style" id="school_xian" value="县"/>
			  	<label>县</label>
			  	<input type="radio" name="school_style" id="school_normal" value="一般学校"/>
			  	<label>一般学校</label>
			</div>
		</div>
		<!-- 与老师关系 -->
		<div class="row">
			<div class="col-xs-3 edit_archive_p0">
				<label class="pull-right">与老师关系</label>
			</div>
			<div class="col-xs-9 col-sm-5">
				<input type="radio" name="teacher_relation" id="teacher_well" value="良好"></input>
			  	<label>良好</label>
			  	<input type="radio" name="teacher_relation" id="teacher_normal" value="一般"/>
			  	<label>一般</label>
			  	<input type="radio" name="teacher_relation" id="teacher_bad" value="不好"/>
			  	<label>不好</label>
			</div>
		</div>
		<!-- 与同学关系 -->
		<div class="row">
			<div class="col-xs-3 edit_archive_p0">
				<label class="pull-right">与同学关系</label>
			</div>
			<div class="col-xs-9 col-sm-5">
				<input type="radio" name="mates_relation" id="mates_well" value="良好"></input>
			  	<label>良好</label>
			  	<input type="radio" name="mates_relation" id="mates_normal" value="一般"/>
			  	<label>一般</label>
			  	<input type="radio" name="mates_relation" id="mates_bad" value="不好"/>
			  	<label>不好</label>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4">
				<button type="button" onclick="formsubmit3()" class="btn btn-lg btn-block btn-primary">
			        保存
			    </button>
			</div>
		</div>
	</form>
</div>
				  	</div>
				</div>
			</div>
			<div class="col-sm-3 hidden-xs">
				<div class="right_heading">
					档案管理
				</div>
				<div class="right_body">
					<ul class="" role="tablist" id="myTab">
						<li role="presentation"><a href="/ipass/Jcropchild/index.html?id=<?php echo ($archive[0][id]); ?>">修改头像</a></li>
					  	<li role="presentation" class="active"><a href="#basic" role="tab" data-toggle="tab">基本信息</a></li>
					  	<li role="presentation"><a href="#family" role="tab" data-toggle="tab">家庭信息</a></li>
					  	<li role="presentation"><a href="#school" role="tab" data-toggle="tab">学校信息</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

</div>
<div class="row" style="margin:0;background-color: #333;color: #faf1ce;padding: 20px;text-align: center;">
<i class="icon-phone-sign">
	<a href="tel:02467755317" class="cfff"> 联系我们:024-67755317</a>
</i>
</div>
<!-- 提示框 -->
<div class="modal fade bs-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">提示</h4>
      </div>
      <div class="modal-body">
        不能漏填哦!
      </div>
    </div>
  </div>
</div>
</body>
</html>