<?php
session_start();

include_once('config.php');
include_once('saetv2.ex.class.php');

$c = new SaeTClientV2(WB_AKEY, WB_SKEY, $_SESSION['token']['access_token']);

//获得用户信息
$userid = $_SESSION['token']['uid'];
$arr = $c->show_user_by_id($userid);
$username = html_entity_decode($arr['screen_name']); //用户名
$usertou = $arr['avatar_hd']; //用户头像地址

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>新浪微博V2接口演示程序-Powered by Sina App Engine</title>
</head>

<body>
<?php
//生成图片
$im = imagecreatefromjpeg("bg.jpg");
$tou = imagecreatefromjpeg($usertou);
$color = imagecolorallocate($im, 72, 44, 32);
imagettftext($im, 18, 0, 226, 150, $color, "FZYTFW.TTF", $username);
imagettftext($im, 16, 0, 226, 190, $color, "FZYTFW.TTF", "No." . time());
imagecopy($im, $tou, 225, 207, 31, 31, 253, 253);
imagejpeg($im, $userid . ".jpg");

if (!empty($_POST['sub'])) {
//$t 文字内容
//$p 我们上传的图片路径
    $t = $_POST['con'];
    $p = $userid . ".jpg";
    $c->upload($t, $p);
}

?>

<img src="<?php echo $userid . ".jpg?time=" . time(); ?>">
<form action="" method="post">
    <input type="text" name="con">
    <input type="submit" name="sub" value="发表微博">
</form>
</body>
</html>
