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

	var rootIp = 'http://hxtbaby.cn';

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
			"<p><font color='red'>请不要因为卡顿,而重复添加,如果未弹出添加成功,请及时联系管理员.</font></p><a href='{:U('Home/Admin/add_user')}' class='btn btn-md btn-warning' style='width:48%;'>确定</a><button data-dismiss='modal' class='btn btn-md btn-primary' style='width:48%;margin-left:4%'>取消</button> "
			);
	}

	function check_archive(span,relation,name,sex,minzu,birthday,xuexing,shengao,tizhong,fenwan,manyue,birth_tizhong,duzi,brother,paihang,home,fuyangren,dadnianling,momnianling,rutuo,walknianling,talknianling,tongjuren,homewell,dadmom,jiaoyufangshi,guanjiaoyijian,fuqinxueli,muqinxueli,fuqinzhiye,muqinzhiye,banji,xuexiaolocation,xuexiaoleixing,laoshiguanxi,tongxueguanxi){
		$('#my_modal').modal('show');
		$('#myModalLabel').html('用户档案');
		$('.modal-body').html(
			"<h2 style='color:#333'>"+relation+','+name+"</h2>"+"<div><div class='archive_normal'><div class='left_con2'><label><i class='icon-user icon-large awesome_hand'></i></label><span class='code1'>"+sex+"</span><span class='code1'>"+minzu+"族</span><span class='code1'>"+birthday+"</span><span class='code1'>"+xuexing+"型</span><span class='code1'>"+shengao+"cm</span><span class='code1'>"+tizhong+"kg</span></div><br/><div class='left_con2'><label><i class='icon-building icon-large awesome_hand'></i></label><span class='code3'>"+banji+"</span><i class='icon-map-marker awesome_hand'></i><span class='code3'>"+xuexiaolocation+"</span><span class='code3'>"+xuexiaoleixing+"</span><span>与老师</span><span class='code3'>"+laoshiguanxi+"</span><span>与同学</span><span class='code3'>"+tongxueguanxi+"</span></div></div><div class='left_con2 archive_birth'><label><i class='icon-tasks icon-large awesome_hand'></i></label><span>"+" "+name+"</span><span class='code2'>"+fenwan+"</span><span class='code2'>"+manyue+"</span><span>出生时体重</span><span class='code2'>"+birth_tizhong+"kg</span><span class='code2'>"+fuyangren+"</span><span>是主要抚养人，孩子出生时父亲年龄</span><span class='code2'>"+dadnianling+"岁</span><span>孩子出生时母亲年龄</span><span class='code2'>"+momnianling+"岁</span><span>拥有兄弟姐妹</span><span class='code2'>"+brother+"位</span><span>家中排行第</span><span class='code2'>"+paihang+"</span><span class='code2'>"+duzi+"</span><span class='code2'>"+walknianling+"岁</span><span>学会走路</span><span class='code2'>"+talknianling+"岁</span><span>学会说话</span><span class='code2'>"+rutuo+"岁</span><span>参加托儿所</span><hr><label><i class='icon-home icon-large awesome_hand'></i></label><span>现居住在</span><span class='code2'>"+home+"</span><span>和</span><span class='code2'>"+tongjuren+"</span><span>居住在一起，家庭关系</span><span class='code2'>"+homewell+"</span><span>和父母关系</span><span class='code2'>"+dadmom+"</span><span>教育方式</span><span class='code2'>"+jiaoyufangshi+"</span><span>父母管教意见</span><span class='code2'>"+guanjiaoyijian+"</span><span>父亲学历</span><span class='code2'>"+fuqinxueli+"</span><span>职业</span><span class='code2'>"+fuqinzhiye+"</span><span>母亲学历</span><span class='code2'>"+muqinxueli+"</span><span>职业</span><span class='code2'>"+muqinzhiye+"</span></div></div>"
		);
	}
	