<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/csj/favicon.ico">
	<title>Article</title>
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
	function updbanner(id){
		$('#modal_updbanner').modal('show');
		$('.modal-body').html(
			"<form action='/csj/index.php/Home/Admin/updbanner/id/"+id+"' method='post' enctype='multipart/form-data' ><input type='file' id='img' name='img'></input><input type='text' name='intro'></input><input type='submit' value='更新'></input></form>"
			);
	}
</script>
<body>
<div class="container-fluid">
	<div class="row">
		<h2 style="margin-left: 15px">logo</h2>
	</div>

	<div class="row">
		<!-- Nav tabs -->
		<div class="col-sm-1 aa" style="padding-left: 0px;padding-right: 0px">
			<ul class="nav" role="tablist">
			  <li role="presentation" class="active"><a href="#lunbo" role="tab" data-toggle="tab">carousel</a></li>
			  <li role="presentation"><a href="#article" role="tab" data-toggle="tab">article</a></li>
			  <li role="presentation"><a href="#messages" role="tab" data-toggle="tab">Messages</a></li>
			  <li role="presentation"><a href="#settings" role="tab" data-toggle="tab">Settings</a></li>
			</ul>
		</div>

		<!-- Tab panes -->
		<div class="col-sm-11 aa">
			<div class="tab-content">
			  <div role="tabpanel" class="tab-pane active" id="lunbo">
					<?php if(is_array($banner)): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="col-sm-2">
        <img src="<?php echo (UIMG); echo ($v["img"]); ?>" style="width: 100%;">
        <button class="btn btn-sm btn-block btn-primary" onclick="updbanner('<?php echo ($v["id"]); ?>')">更新</button>
    </div><?php endforeach; endif; else: echo "" ;endif; ?>
			  </div>
			  <div role="tabpanel" class="tab-pane" id="article">article</div>
			  <div role="tabpanel" class="tab-pane" id="messages">3</div>
			  <div role="tabpanel" class="tab-pane" id="settings">4</div>
			</div>
		</div>	
	</div>
</div>

<!-- 提示框 -->
<div class="modal fade bs-example-modal-sm" id="modal_updbanner" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">更新Banner</h4>
      </div>
      <div class="modal-body">
        
      </div>
    </div>
  </div>
</div>

</body>
</html>