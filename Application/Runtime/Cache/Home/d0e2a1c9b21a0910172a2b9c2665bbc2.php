<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="/microweb/Public/Controller/nav/Css/magic.css">
	<script type="text/javascript" src='/microweb/Public/Static/jquery-2.0.3.min.js'></script>
	<script type="text/javascript">
		var APP = '/microweb';
	</script>
	<script type="text/javascript" src="/microweb/Public/Home/js/panel/magic.js"></script>
</head>

<body>
	<div id="box">
		<div class="pattern" va="type_a">
			<div class="hr"><img src="/microweb/Public/Controller/nav/Images/nav-1.png" /></div>
		</div>
		<div class="pattern" va="type_b">
			<div class=""><img src="/microweb/Public/Controller/nav/Images/nav-2.png" /></div>
		</div>
		<div class="pattern" va="type_c">
			<div class=""><img src="/microweb/Public/Controller/nav/Images/nav-3.jpg" /></div>
		</div>
		<div class="pattern" va="type_d">
			<div class=""><img src="/microweb/Public/Controller/nav/Images/nav-4.jpg" /></div>
		</div>
		<div class="pattern" va="type_e">
			<div class=""><img src="/microweb/Public/Controller/nav/Images/nav-5.jpg" /></div>
		</div>
		<div class="pattern" va="type_f">
			<div class=""><img src="/microweb/Public/Controller/nav/Images/nav-6.jpg" /></div>
		</div>
	</div>
	<input type="hidden" id="url" value="<?php echo U('column_title');?>">
	<input type="hidden" id="web_info" value="<?php echo session('site_id');?>">
	<input type="hidden" id="controller-id" value="<?php echo ($controllerId); ?>" />
	<input type="hidden" id="status" value="<?php echo ($status); ?>">
</body>
</html>