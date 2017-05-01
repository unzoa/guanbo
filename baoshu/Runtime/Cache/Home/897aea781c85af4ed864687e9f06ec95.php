<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
	<title>恒力训练报数系统</title>
	<link rel="stylesheet" href="<?php echo (HCSS); ?>style.css">
	<script src="<?php echo (HJS); ?>jquery-2.1.1.min.js"></script>
	<script src="<?php echo (HJS); ?>web.js"></script>
	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?php echo (BCSS); ?>bootstrap.css">
	<script type="text/javascript" src="<?php echo (BJS); ?>bootstrap.min.js"></script>

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo (HJS); ?>ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<script language="javascript">
    function $(id){
    	return document.getElementById(id);
    }
	function ok(){
	     $("logoimg").src = $("filename").value;
	 }
</script>
</head>
  <style type="text/css">
    .inputfile{background-color: #4ed487;border-radius:5px;height:45px;position: relative;margin-bottom: 10px}
    #input1{height:inherit;width: 100%;padding-left:10px;color:red;background-color: transparent; position: absolute;top: 0;border:0;}
    #input1::-webkit-input-placeholder { /* WebKit, Blink, Edge */
        color:   #fff!important;
    }
    #input1:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
       color:    #fff!important;
       opacity:  1;
    }
    #input1::-moz-placeholder { /* Mozilla Firefox 19+ */
       color:    #fff!important;
       opacity:  1;
    }
    #input1:-ms-input-placeholder { /* Internet Explorer 10-11 */
       color:    #fff!important;
    }
    #btn1{width:100%;height:inherit;font-size:16px;color:#999;background-color: transparent;border:0; position: absolute;top: 0}
  </style>
<body>
<div class="container">
		<form action="/baoshu/index.php/Home/Uppic/uploadf?submit=1" method="post" enctype="multipart/form-data" name="form1">
		<h2>请选择上传的图片</h2>
			<div class="inputfile">
	          <input type="text" id="input1" placeholder="上传头像">
	            <input name="button" type="button" id="btn1" onclick="filename.click();" />
	          </input>
	          <input type="file" id="filename" name="filename" onchange="input1.value=this.value" style="display:none">
	        </div>
			<!-- MAX_FILE_SIZE must precede the file input field -->
			<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
			<input type="submit" class="btn btn-lg btn-primary btn-block" name="Submit" value="上传"> 
		</form>
</div>

</body>
</html>