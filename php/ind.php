<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP</title>
</head>
<body>
<a href="add.php">添加内容</a>
<?
include "conn.php";

$sql = "SELECT * FROM  `new` ORDER BY ID DESC LIMIT 10";
$query = mysql_query($sql); //只能执行一次

while ($rs = mysql_fetch_array($query)) {
//print_r($rs);
?>
<h2>标题：<? echo $rs['title'] ?> | <a href="">编辑</a> | <a href="del.php?del=<? echo $rs['id'] ?>">删除</a> </h2>
<li><? echo $rs['dates'] ?></li>
<p><? echo $rs['content'] ?></p>
<hr>
<?
}
?>
</body>
</html>