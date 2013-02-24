<?php //не везде short-теги включены, на будущее. Это не есть канонично.
#Главная Страница
#CMS ZephCMS maded by ZephyR http://vk.com/el9vanbys
#Если не знаешь - не лезь! // А если знаешь - еби гусей!
session_start();
require_once('def.php'); 
$result = mysql_query("SELECT * FROM `news`"); //resultat?лолшто?
$news = array();
while($myress = mysql_fetch_array($resultat)){
//$tpl->set('{content}', $myress['content']);
//$tpl->set('{title}', $myress['title']);
$news[ $myress['id'] ] = array( $myress['author'],  $myress['date'] ,  $myress['title'], $myress['content'], );
}
$tpl->set('{news}', $news); 
$tpl->parse();
?>
