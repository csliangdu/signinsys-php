<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Login</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="柠檬工作室 LimonPlayer Studio">
	<meta name="keywords" content="HTML, CSS, JS, JavaScript, framework, bootstrap, front-end, frontend, web development">
	<meta name="author" content="作者：张超 <limonplayer.cn>">
	<style class="anchorjs"></style>
	<link href="/Public/asset/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/Public/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/Public/css/form-elements.css">
	<link rel="stylesheet" href="/Public/css/style.css">
	<link rel="apple-touch-icon" href="/Public/apple-touch-icon.png">
	<link rel="icon" href="/Public/favicon.ico">
	<!--[if lt IE 9]><script src="../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	<script type="text/javascript" src="/Public/js/tests/vendor/jquery.min.js"></script>
	<script type="text/javascript" src="/Public/asset/js/bootstrap.min.js"></script>
	<script src="/Public/js/ie-emulation-modes-warning.js"></script>
</head>
<body>
	<div class="top-content">
		<div class="inner-bg">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2 text">
						<h1><strong>Administrator</strong> Login </h1>
						<div class="description">
							<p>Welcome to Expert Excel !</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3 form-box">
						<div class="form-top">
							<div class="form-top-left">
								<h3>Login to our site</h3>
								<p>Enter your username and password to log on:</p>
							</div>
							<div class="form-top-right">
								<i class="fa fa-key"></i>
							</div>
						</div>
						<div class="form-bottom">
							<form role="form" action="" method="post" class="login-form">
								<div class="form-group">
									<label class="sr-only" for="username">Username</label>
									<input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username">
								</div>
								<div class="form-group">
									<label class="sr-only" for="password">Password</label>
									<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
								</div>
								<button type="submit" class="btn">Sign in!</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Javascript -->
	<script src="/Public/js/jquery-1.11.1.min.js"></script>
	<script src="/Public/asset/js/bootstrap.min.js"></script>
	<script src="/Public/js/jquery.backstretch.min.js"></script>
	<script src="/Public/js/scripts.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			$.backstretch("/Public/img/backgrounds/1.jpg");
		});
	</script>
	</body>
	</html>