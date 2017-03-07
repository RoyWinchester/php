<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
mysql_connect("localhost","roywinchester","roywinchester");
mysql_select_db("roywinchester");
mysql_query("select Names 'GBK'");

$title= $_POST['title'];
$cont = $_POST['content'];

$sql_1 = "INSERT INTO message(titles,content) VALUES('$title','$cont')";
$res_insert = mysql_query($sql_1);
if($res_insert){

echo "<script>alert('提交成功！');location.href='message.php';</script>";

}
else echo "FUCK OFF";
?>
