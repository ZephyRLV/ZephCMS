<?
#Главная Страница
#CMS ZephCMS maded by ZephyR http://vk.com/el9vanbys
#Если не знаешь - не лезь!
session_start();
require_once('def.php');
$resultat = mysql_query("SELECT * FROM `news`");
$news = array();
while($myress = mysql_fetch_array($resultat)){
//$tpl->set('{content}', $myress['content']);
//$tpl->set('{title}', $myress['title']);
$news[ $myress['id'] ] = array( $myress['author'],  $myress['date'] ,  $myress['title'], $myress['content'], );
}
$tpl->set('{news}', $news); 
$tpl->parse();
?>
