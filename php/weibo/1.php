<?php
session_start();

include_once( 'config.php' );
include_once( 'saetv2.ex.class.php' );

$c = new SaeTClientV2( WB_AKEY , WB_SKEY , $_SESSION['token']['access_token'] );
$ms  = $c->home_timeline(); // done
$uid_get = $c->get_uid();
$uid = $uid_get['uid'];
$user_message = $c->show_user_by_id( $uid);//根据ID获取用户等基本信息

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>新浪微博V2接口演示程序-Powered by Sina App Engine</title>
</head>

<body>
<?php
if(!empty($_POST['sub'])){
    $c->update($_POST['con']);
}
if(!empty($_POST['sub2'])){
    $c->follow_by_name($_POST['username']);
}
?>
<form action="" method="post">
    <input type="text" name="con">
    <input type="submit" name="sub" value="发表微博">
</form>
<form action="" method="post">
    <input type="text" name="username">
    <input type="submit" name="sub2" value="关注某人">
</form>

</body>
</html>
