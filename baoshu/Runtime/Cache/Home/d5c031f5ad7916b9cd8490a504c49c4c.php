<?php if (!defined('THINK_PATH')) exit();?><!-- <!DOCTYPE html>
<html>
<head>
	<title>ceshipost</title>
</head>
<body>
<form action="<?php echo ($think["const"]["/baoshu/index.php/Home/Index/ceshipost"]); ?>" method="post">
	<input name="name"></input>
	<input type="submit" value="ok"></input>
</form>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Live Cropping Demo</title>
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
  <link rel="stylesheet" href="<?php echo (HCSS); ?>jquery.Jcrop.css" type="text/css" />
	<script src="<?php echo (HJS); ?>jquery-2.1.1.min.js"></script>
  <script src="<?php echo (HJS); ?>jquery.Jcrop.js"></script>
        <script src="<?php echo (HJS); ?>script.js"></script>
</head>
<body>
		<div class="demo" style=" margin-top:60px;">
            <div class="bheader"><h2>——图像上传表单——</h2></div>
            <div class="bbody">

                <!-- upload form -->
                <form id="upload_form" enctype="multipart/form-data" method="post" action="upload.php" onSubmit="return checkForm()">
                    <!-- hidden crop params -->
                    <input type="hidden" id="x1" name="x1" />
                    <input type="hidden" id="y1" name="y1" />
                    <input type="hidden" id="x2" name="x2" />
                    <input type="hidden" id="y2" name="y2" />
                    <div>
                    <input type="file" name="image_file" id="image_file" onChange="fileSelectHandler()" />
                    </div>

                    <div class="error"></div>

                    <div class="step2">
                        <h2>请选择需要截图的部位,然后按上传</h2>
                        <img id="preview"/>

                        <div class="info">
                            <label>文件大小</label> <input type="text" id="filesize" name="filesize" />
                            <label>类型</label> <input type="text" id="filetype" name="filetype" />
                            <label>图像尺寸</label> <input type="text" id="filedim" name="filedim" />
                            <label>宽度</label> <input type="text" id="w" name="w" />
                            <label>高度</label> <input type="text" id="h" name="h" />
                        </div>

                        <input type="submit" value="上传" />
                    </div>
                </form>
            </div>
        </div>
</body>

</html>