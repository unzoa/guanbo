<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<script src="<?php echo (HOME); ?>uppic/js/jquery.min.js"></script>
<script src="<?php echo (HOME); ?>uppic/js/jquery.Jcrop.js"></script>
<!-- <link rel="stylesheet" href="<?php echo (HOME); ?>uppic/css/main.css" type="text/css" /> -->
<!-- <link rel="stylesheet" href="<?php echo (HOME); ?>uppic/css/demos.css" type="text/css" /> -->
<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="<?php echo (BCSS); ?>bootstrap.css">
<link rel="stylesheet" href="<?php echo (HOME); ?>uppic/css/jquery.Jcrop.css" type="text/css" />
<script language='javascript'>
	jQuery(function($) {
		var jcrop_api, boundx, boundy,
		$preview = $('#preview-pane'), $pcnt = $('#preview-pane .preview-container'), $pimg = $('#preview-pane .preview-container img'),

		xsize = $pcnt.width(), ysize = $pcnt.height();
		console.log('init', [ xsize, ysize ]);
		$('#target').Jcrop({
			onChange : updatePreview,
			onSelect : updatePreview,
			aspectRatio : xsize / ysize
		}, function() {
			var bounds = this.getBounds();
			boundx = bounds[0];
			boundy = bounds[1];
			jcrop_api = this;

			$preview.appendTo(jcrop_api.ui.holder);
		});

		function updatePreview(c) {
			if (parseInt(c.w) > 0) {
				var rx = xsize / c.w;
				var ry = ysize / c.h;

				$pimg.css({
					width : Math.round(rx * boundx) + 'px',
					height : Math.round(ry * boundy) + 'px',
					marginLeft : '-' + Math.round(rx * c.x) + 'px',
					marginTop : '-' + Math.round(ry * c.y) + 'px'
				});
				
				$('#x').val(c.x);
		        $('#y').val(c.y);
		        $('#w').val(c.w);
		        $('#h').val(c.h);
			}
		}
		;
		function updateCoords(c){
		        
		    };
	});
</script>
<style type="text/css">
.jcrop-holder{
	margin: 15px 15px 20px;
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px;
	-webkit-box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.2);
	-moz-box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.2);
	box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.2);
}
.jcrop-holder #preview-pane {
	display: block;
	position: absolute;
	z-index: 2000;
	top: 10px;
	right: -240px;
	padding: 6px;
	border: 1px rgba(0, 0, 0, .4) solid;
	background-color: white;
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px;
	-webkit-box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.2);
	-moz-box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.2);
	box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.2);
}

#preview-pane .preview-container {
	width: 200px;
	height: 200px;
	overflow: hidden;
}
.bs_uppic{ cursor:pointer;background-color: #4ed487;color: #fff;padding: 10px 60px;font-size:20px;margin: 20px 130px 50px}
#target{max-width: 640px}
</style>

<body>
<div class="container">
	<div class="jc-demo-box">
		<img src="/<?php echo ($filename); ?>" id="target" alt="[Jcrop Example]" />
		<div id="preview-pane">
			<div class="preview-container">
				<img src="/<?php echo ($filename); ?>" class="jcrop-preview"
					alt="Preview" />
			</div>
		</div>
		<div class="clearfix"></div>
	</div>

	<form action="<?php echo ($think["const"]["__SELF"]); ?>uploadf?submit=cut" method="post" onsubmit="return checkCoords();">  
        <input type="hidden" id="x" name="x" />  
        <input type="hidden" id="y" name="y" />  
        <input type="hidden" id="w" name="w" />  
        <input type="hidden" id="h" name="h" />
        <input type="hidden" name="filename" value="<?php echo ($filename); ?>">
        <input type="submit" value="上传" class="btn btn-lg bs_uppic"/>  
    </form>
</div>
	<!-- 	<img src="/<?php echo ($filename); ?>" alt="" /> -->
</body>
</html>