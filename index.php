<?
session_start();
#Главная Страница
#CMS ZephCMS maded by ZephyR http://vk.com/el9vanbys
#Если не знаешь - не лезь!
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
</head>
<body>
<?
if(!empty($_SESSION['login'])){
?>
<form method='post' action='posts/auth_post.php'>
Логин : </br><input type='text' name='login'></br>
Пароль : </br><input type='password' name='password'></br>
<input type='submit' name='submit' value='Войти'>
</form>
<?
}else{
  echo "Привет,$_SESSION[login] .";
}
}
?>
</body>
</html>
</html>
