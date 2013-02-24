<?
$db_host = 'localhost';
$db_name = 'ZephCMS';
$db_user = 'root';
$db_password = '';
if (!mysql_connect($db_host, $db_user, $db_password)||!mysql_select_db($db_name)) { die("Mysql connection error."); }
/*if(!$db_connect){
echo "Can`t Connect to DB";
die("Can`t Connect to DB");
}*/
?>
