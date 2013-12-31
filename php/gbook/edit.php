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
}

if (!empty($_POST['sub'])) {
    $title = $_POST['title'];
    $con = $_POST['con'];
    $hid = $_POST['hid'];
    $sql = "UPDATE `new` SET `title`='$title' , `content` = '$con' WHERE `id` = '$hid' LIMIT 1";
    mysql_query($sql);
    echo "<script>alert('修改成功');location.href='ind.php'</script>";
}
?>
<a href="ind.php">查看内容</a><br>

<form action="edit.php" method="post">
    <input type="hidden" name="hid" value="<? echo $rs['id'] ?>">
    <label>标题<input type="text" name="title" value="<? echo $rs['title'] ?>"></label><br>
    <label>内容<textarea rows="5" cols="50" name="con"><? echo $rs['content'] ?></textarea></label><br>
    <input type="submit" name="sub" value="发表">
</form>
</body>
</html>