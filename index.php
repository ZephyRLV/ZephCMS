<?
#Страница Регистрации
#CMS ZephCMS maded by ZephyR http://vk.com/el9vanbys
#Если не знаешь - не лезь!
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
</head>
<body>
<form method='post' action='posts/auth_post.php'>
Ваш логин : </br><input type='text' name='login'></br>
Ваш пароль : </br><input type='password' name='password'></br>
Ваш пароль ещё раз : </br><input type='password' name='password1'></br>
Ваш E-Mail : </br><input type='text' name='email'></br>
<input type='submit' name='submit' value='Регистрация'>
</form>
</body>
</html>
