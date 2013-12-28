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
if (!empty($_POST['sub'])) {
    $title = $_POST['title'];
    $con = $_POST['con'];
    $sql = "insert into `new` (`id`, `title`, `dates`, `content`) values (null, '$title', now(), '$con')";
    mysql_query($sql);
    echo "提交成功";
}
?>
<form action="add.php" method="post">
    <label>标题<input type="text" name="title"></label><br>
    <label>内容<textarea rows="5" cols="50" name="con"></textarea></label><br>
    <input type="submit" name="sub" value="发表">
</form>
</body>
</html>