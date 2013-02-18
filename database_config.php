<?
$db_host = 'localhost';
$db_name = 'ZephCMS';
$db_user = 'root';
$db_password = '';
$db_connect = mysql_connect($db_host,$db_user,$db_password);
mysql_select_db($db_name,$db_connect);
if(!$db_connect){
echo "Cant Connect to BD";
exit();
}
?>
