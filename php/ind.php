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
<hr>
<form action="" method="get">
    <input type="text" name="keys">
    <input type="submit" name="subs" value="搜索">
</form>
<hr>
<?
include "conn.php";

if(!empty($_GET['keys'])){
    $w = "`title` LIKE '%" . $_GET['keys'] . "%'";
} else {
    $w = 1;
}

$sql = "SELECT * FROM  `new` WHERE $w ORDER BY ID DESC LIMIT 10";
$query = mysql_query($sql); //只能执行一次

while ($rs = mysql_fetch_array($query)) {
//print_r($rs);
?>
<h2>标题：<a href="view.php?id=<? echo $rs['id'] ?>"><? echo $rs['title'] ?></a> | <a href="edit.php?id=<? echo $rs['id'] ?>">编辑</a> | <a href="del.php?del=<? echo $rs['id'] ?>">删除</a></h2>
<li><? echo $rs['dates'] ?></li>
<p><? echo iconv_substr($rs['content'], 0, 10, 'utf-8') ?></p>
<hr>
<?
}
?>
</body>
</html>