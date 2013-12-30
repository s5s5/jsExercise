<?
@mysql_connect("localhost", "root", "root")or die("mysql 连接失败");
@mysql_select_db("php100")or die("db连接失败");
//mysql_set_charset("utf8");
mysql_query("SET NAMES 'UTF8'");
?>