<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>留言板</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="This is a Message Board!" />
</head>
	<body background = thebackground.jpg>
		<?php
		mysql_connect("localhost","roywinchester","roywinchester");
		mysql_select_db("roywinchester");
		mysql_query("select Names 'GBK'");
		$sql = "select * from message";
		$query = mysql_query($sql);
		while($news=mysql_fetch_array($query))
		 {
		?>
			 <div style="width: 800px;margin: 10px;">
			 <h2><?php echo "Title:".$news["titles"];?></h2>
			 <h3><?php echo "Content:".$news["content"];?></h3>
			 </div>
			<?php
			}
			?>
			<?php
?>
    <form action="insertin.php" method="post">
      <p>TITLE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="title"/></p>
      <p>Content:<textarea name="content" rows="8" cols="80"></textarea></p>
      <p><input type="submit" value="Submit" /></p>
    </form>
  </body>
</html>
