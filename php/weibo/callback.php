<?php
session_start();

include_once( 'config.php' );
include_once( 'saetv2.ex.class.php' );

$o = new SaeTOAuthV2( WB_AKEY , WB_SKEY );

if (isset($_REQUEST['code'])) {
	$keys = array();
	$keys['code'] = $_REQUEST['code'];
	$keys['redirect_uri'] = WB_CALLBACK_URL;
	try {
		$token = $o->getAccessToken( 'code', $keys ) ;
	} catch (OAuthException $e) {
	}
}

if ($token) {
	$_SESSION['token'] = $token;
	setcookie( 'weibojs_'.$o->client_id, http_build_query($token) );
?>
授权完成,<a href="weibolist.php">进入你的微博列表页面</a><br />
授权完成,<a href="1.php">进入发微博关注人页面</a><br />
授权完成,<a href="2.php">进入生成图片页面</a><br />
<?php
} else {
?>
授权失败。
<?php
}
?>
