<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP</title>
</head>
<body>
<?
include "conn.php";

if (!empty($_GET['id'])) {
    $sql = "SELECT * FROM `new` WHERE `id` = '" . $_GET['id'] . "'";
    $query = mysql_query($sql);
    $rs = mysql_fetch_array($query);

    $sqlup = "UPDATE `new` SET `hits` = `hits` + 1 WHERE `id` = '" . $_GET['id'] . "'";
    mysql_query($sqlup);
}

?>
<a href="ind.php">查看内容</a><br>

<h1><? echo $rs['title'] ?></h1>

<h2><? echo $rs['dates'] ?></h2>

<h3>点击量：<? echo $rs['hits'] ?></h3>
<hr>
<? echo $rs['content'] ?>
</body>
</html>