<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>留言板</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="This is a Message Board!" />
</head>
	<body background = thebackground.jpg>
		<div>
			<a href="http://blog.neupioneer.com:8111/" target="_blank">
			<img style="float:right" src="NEUP.jpg"
							width="50" height="50"
			 				alt="" title="NEUP博客"/>
			</a>
		</div>
		<fieldset>
		<legend>
		<font size="15" face="Times">
			Message Board
		</font>
		</legend>
		<form action="Logincheck.php" method="post">
			<p>
				<font size="5">&nbsp;&nbsp;Username:</font>
				<input type="text" name="username">
			</p>
			<p>
				<font size="5">&nbsp;&nbsp;&nbsp;Password:</font>
				<input type="password" name="password">
			</p>
			<p>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="submit" name="submit" value="Login">
			</p>
			<a href="register.php">新用户？点击注册_(:3 」∠)_</a>
		</from>
		<?php date_default_timezone_set("Asia/Shanghai");
					echo "TIME: " . date("h:i:sa") . "!!!";
		?>
	</body>
</html>
